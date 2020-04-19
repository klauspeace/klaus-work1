this.hideSummary = function(){
	$("div.resource-item-summary").parent().append("<a href=\"#\" class=\"resource-hide\">[hide]</a>");
	$("a.resource-hide").hide();
	$("div.resource-item-summary").parent().append("<a href=\"#\" class=\"resource-view\">[show]</a>");
	$("div.resource-item-summary").hide();
	
};

this.resourcesummarytooltip = function(){	
/*
 * Tooltip script
 * originally written by Alen Grakalic (http://cssglobe.com)
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 */	
	xOffset = 10;
	yOffset = 20;		
	$("a.resource-hide").click(function(){
		$("div.resource-item-summary").hide();
		$(this).hide();
		$(this).parent().parent().find("a.resource-view").show();
		return false;
	});
	$("a.resource-view").click(function(){
		 $("#tooltip").remove();
		 $(this).parent().find(".resource-item-summary").show();
		 $(this).parent().parent().find(".resource-hide").show();
		 $(this).hide();
		 return false;
	});
	$("a.resource-view").hover(function(e){																	  
		$("body").append("<div id='tooltip'>"+ $(this).parent().find(".resource-item-summary").html() +"</div>");
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.fadeIn("fast");		
    },
	function(){		
		$("#tooltip").remove();
    });	
	$("a.resource-view").mousemove(function(e){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});			
};
this.showPrimaryAuthor = function(){
	$("#sortTable").find("a.showPrimaryAuthor").remove();
	$("#sortTable")
		.prepend("<p class=\"sortInfo\">Click column heading to sort</p>");
	$("ul.resourceAuthorList")
		.find("li:gt(0)")
			.hide()
			.parent()
			.find("li:eq(0)")
			.append("<span class=\"moreauthors\"><br/><a href=\"#\">[more]</a></span>")
			.click(moreAuthors());
};
this.moreAuthors = function(){
	$("span.moreauthors").click( function(){
		$(this).parent().parent()
			.find("li:hidden")
				.show()
			.end()
			.find("li:last")
				.append("<span class=\"lessauthors\"><br/><a href=\"#\">[less]</a></span>")
				.click(lessAuthors());
		$(this).remove();
		return false;
	});
}
this.lessAuthors = function(){
	$("span.lessauthors").click( function(){
		$(this).parent().parent()
			.find("li:gt(0)")
				.hide()
			.end()
			.find("li:eq(0)")
				.append("<span class=\"moreauthors\"><br/><a href=\"#\">[more]</a></span>")
				.click(moreAuthors());
		$(this).remove();
		return false;
	});
}
$(document).ready(function() 
{
	
    // parsing date in january 2008 format so that we can sort it properly
    $.tablesorter.addParser({ 
        id: 'vtResourceDateParser', 
        is: function(s) { 
            return false; 
        }, 
        format: function(s) { 
			// replace short month name with full name
			s = s.replace("Jan", "January").replace("Feb", "February").replace("Mar", "March").replace("Apr", "April");
			s = s.replace("May", "May").replace("Jun", "June").replace("Jul", "July").replace("Aug", "August");
			s = s.replace("Sep", "September").replace("Oct", "October").replace("Nov", "November").replace("Dec", "December");
            // since day doesn't matter, supply 1st day of month to parse it easily
			s=s.replace(/([A-Za-z]{3,10}) ([0-9]{4})/, "$1 1, $2");
            return $.tablesorter.formatFloat(new Date(s).getTime());
        }, 
        type: 'numeric' 
    });

	// parse authors so that we sort by last name
    $.tablesorter.addParser({ 
        id: 'vtResourceAuthorParser', 
        is: function(s) { 
            return false; 
        }, 
        format: function(s) { 
			// separate out list of authors with ###, then remove all html tags, strip newlines and tabs
			s = s.replace(/<\/a>/g, '###').replace(/<.*?>/g,"").replace(/\n|\r|\t/g,"");
			authors = s.split("###");
			//store just last names
			var lastnamelist = "";
			for(var auth in authors){
				//trim then split to get the last name of the author
				namestr = $.trim(authors[auth]);
				namearr = namestr.split(" ");
				if(namearr.length>0){
					lastnamelist = lastnamelist + " " + namearr[namearr.length-1].toLowerCase() + " " + namearr[0].toLowerCase();
				}
			}
			s = lastnamelist;
            return s;
        }, 
        type: 'text' 
    });
	
	// parse title to get the text so that we can sort by it
    $.tablesorter.addParser({ 
        id: 'vtTextParser', 
        is: function(s) { 
            return false; 
        }, 
        format: function(s) { 
        	s = s.toLowerCase().replace(/<.*?>/g,"").replace(/\n|\r|\t/g,"");
            return s;
        }, 
        type: 'text' 
    });
    
	hideSummary();
	resourcesummarytooltip();
	
	showPrimaryAuthor();
}
);