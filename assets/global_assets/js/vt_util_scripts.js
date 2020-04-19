/*jslint browser: true, eqeq: true, plusplus: true, sloppy: true, vars: true, white: true */
//Starts with function
if (typeof String.prototype.startsWith != 'function') {
	  String.prototype.startsWith = function (str){
	    return this.slice(0, str.length) == str;
	  };
}
// ends with function
if (typeof String.prototype.endsWith != 'function') {
	  String.prototype.endsWith = function (str){
	    return this.slice(-str.length) == str;
	  };
}

var M_COOKIE_NAME = "vt_mobile_choice";
//COOKIE_TIME: Time in days the cookie should last (5 years)
var M_COOKIE_TIME = 1825;
//COOKIE_DOMAIN: Host/ Domain for which the cookie applies
var M_COOKIE_DOMAIN = "vt.edu";
var MOBILE_URL = "";
var M_COOKIE = $.readCookie(M_COOKIE_NAME);

//Checking for mobile browser
// to figure out whether to display a choice to 
// display mobile options.
$.getScript("/global_assets/js/vt_mobile_check.js", function(){
		//
});
function getMobileURL(pageURL, pageHostname){
	/* for selected homepages, use their preferred address */
	var hpRedirect = {
			'vt.edu' :'http://mobile.vt.edu/',
			'lib.vt.edu' : 'http://m.lib.vt.edu/'
	};
	var hpURL = "";
	$.each(hpRedirect, function(key, value){
		if(isHomepage(pageURL, key)){
			hpURL= value;
			return false;
		}
	});
	if(hpURL != ""){
		return hpURL;
	}
	var domain ='';
	if(pageHostname.startsWith('www.')){
		domain = pageHostname.substring(4, pageHostname.length);
	}else{
		domain = pageHostname;
	}
	// list of domains that don't conform to m.[sitename].vt.edu
	var m_Except_List = new Array("lib.vt.edu", "visit.vt.edu");
	var m_prefix = 'm.';
	if($.inArray(domain, m_Except_List) >= 0){
		m_prefix = 'mobile.';
	}
	var newloc = '';
	// we don't currently support ssl in the mobile site, so the
	// last two cases (which deal with https) just make the mobile
	// link be non ssl
	if(pageURL.startsWith("http://www.")){
		newloc = 'http://'+m_prefix+pageURL.substring(11, pageURL.length);
	}else if(pageURL.startsWith("http://")){
		newloc = 'http://'+m_prefix+pageURL.substring(7, pageURL.length);
	}else if(pageURL.startsWith("https://www.")){
		newloc = 'http://'+m_prefix+pageURL.substring(12, pageURL.length);
	}else{
		newloc = 'http://'+m_prefix+pageURL.substring(8, pageURL.length);
	}
	return newloc;
}
function isHomepage(pageURL, pageDomain){
	var regPat= new RegExp("^http(s)?:\/\/(www.)?"+pageDomain+"(\/)?(index.(htm|html|php))?$","g");
	var checkURL = pageURL.match(regPat);
	if(checkURL != null){
		return true;
	}
	return false;
}
/*functions for search box*/
function submitForm(formId) {
	document.getElementById(formId).submit();
}
function clearquery(id,text) {
	if(typeof(id)=="string"){
		if(!document.getElementById(id)) return false;
		if (document.getElementById(id).value == text) {
			document.getElementById(id).value = "";
		}
	}else{
		if($(id).val() == text){
			$(id).val("");
		}
	}
}

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}
//slide down for quicklinks
$(document).ready(function() {
	// show quicklinks
	$('#vt_ql_link').css('display', 'block');
	// left tab grup this when clicked
	$('#vt_ql_link').click(function(){
		$('#vt_ql_list').slideToggle('fast'); 
	});	

/* stripe table rows */
	$("table tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});
	$("table tr:even").addClass("alt");
	$("div.vt_table_no_stripe table tr:even").removeClass("alt");

/* no table styles */
	$("div.vt_table_no_styles table tr").mouseover(function() {$(this).removeClass("over");}).mouseout(function() {$(this).removeClass("over");});
	$("div.vt_table_no_styles table tr:even").removeClass("alt");
	
//for columns
	runEqualHeights(".vtColumns");
		
});

//javascript form validation
$(document).ready(function(){
	// only load necessary files if we have a special class to trigger it												 
	if($(".vt_js_form").size()>0){
		// loading necessary javascript files for validation, wysiwyg editor, datepicker
		$.getScript("/global_assets/js/forms/jquery.ui.core.pack.js", function(){
			$.getScript("/global_assets/js/forms/jquery.wysiwyg.pack.js", function(){
				$(".vt_js_form .wysiwyg").wysiwyg({
					controls : {
						separator01 : { visible: true},
						indent : { visible: true },
						outdent: { visible: true },
						separator04 : { visible : true },
						insertOrderedList : { visible : true },
						insertUnorderedList : { visible : true },
						insertImage : { visible : false },
						increaseFontSize : {visible: false },
						decreaseFontSize : {visible: false },
						separator09 : { visible: false}
					}
				});				
				$.getScript("/global_assets/js/forms/jquery.validate.js", function(){
					$.getScript("/global_assets/js/forms/additional-methods.js", function(){	
						$.getScript("/global_assets/js/forms/ui.datepicker.js", function (){
							$(".vt_js_form .date").datepicker();
							$(".vt_js_form").validate();
						});
					});
				});																	 
			});	
		});
		$('head').prepend('<link rel="stylesheet" href="/global_assets/js/forms/jquery.wysiwyg.css" type="text/css" media="screen" />');
	}
});


var o_vt_dataTable = null;
//Trigger dataTable on a table with class .vt_dataTable (table must have thead and tbody defined)
$(document).ready(function(){
	if($("table.vt_dataTable").size()>0){
		
		// loading necessary javascript files for validation, wysiwyg editor, datepicker
		if(!(jQuery.isFunction(jQuery.fn.dataTable))){
			$('head').prepend('<script type="text/javascript" src="/global_assets/js/datatables/jquery.dataTables.min.js"></script>');
		}
		o_vt_dataTable = $('table.vt_dataTable').dataTable( {
			"bJQueryUI": true,
			"aLengthMenu":[[25, 50, 100, -1],[25, 50, 100, "All"]],
			"sPaginationType": "full_numbers",
			"aaSorting":[[0,'asc']],
			"iDisplayLength": 25,
			"oSearch": {"sSearch": "", "bRegex":false, "bSmart": false},
			"fnDrawCallback" : function() {runEqualHeights();}
		});
	}
});

// Include necessary code for table sorting
$(document).ready(function(){
	if($("table.tablesorter").size()>0){
		if(!(jQuery.isFunction(jQuery.fn.tablesorter))){
			$('head').prepend('<script type="text/javascript" src="/global_assets/js/tablesort/jquery.tablesorter.js"></script>');
			$('head').prepend('<link rel="stylesheet" type="text/css" href="/global_assets/js/tablesort/vt_tablesorter.css"/>');
		}
	}
});

// adding first published on in vtSpotlight content type
$(document).ready(function(){
 var pathname = window.location.pathname;
 var ctype = $('meta[name=cms-ct]').attr('content');
 if(ctype === "vtSpotlightArticle" ){
   var meta_date = new Date($('meta[name=date]').attr('content'));
   var unparsed_date = $('meta[name=date]').attr('content');
   var split_d = unparsed_date.split(' ');
   var info = "<p>First published on: " + split_d[0] + " " +split_d[1] + " " + split_d[2] + "</p>";
   $('#vt_body_col').append(info);
 }
});

//Rerun equal heights, default to 3 columns
function runEqualHeights(columns){
	columns = (typeof columns == 'undefined') ?
			"#vt_right_col, #vt_body_col, #vt_nav_col" : columns;
	if(jQuery.isFunction(jQuery.fn.equalHeights)){
		$(columns).css("height","auto").equalHeights();
	}else{
		$.getScript("/global_assets/js/plugins/jquery.equalheights.js", function (){
			$(columns).css("height","auto").equalHeights();
		});
	}
}

// Recaptcha settings and fixing recaptcha image
var RecaptchaOptions = {
  theme : 'clean'
};
$(document).ready(function(){
  $(".recaptchatable img").css({"border":"none", "padding":0, "margin": 0});
});
/* 
 * for auto complete on forms
 * iterate through all the forms,
 * if cx value is found or if form name is vtsearchform, then trigger autocomplete
 * on the input element with the name of 'q' (standard query input element)
 */
$(document).ready(function() { 
	$('form').each(function(i){
	var cxFound = '';
	var qElement = null;
	var formName = this.name;
	$(this).find('input').each(function(i){
		if(this.name == 'cx'){
			cxFound = $(this).attr('value');
		}else if(this.name == 'q'){
			qElement = this;
		}
	});
	if((cxFound != '' || formName == 'vtsearchform') && (qElement !=null)){
	  // default to vt cse (as long as the form name is vtsearchform
	  if(cxFound == ''){
		cxFound = '012042020361247179657:wmrvw9b99ug';
	  }
	  var searchform = formName;
	  var searchBoxElement = qElement;
	  var searchCSE = cxFound;
	  
	  var goog = document.createElement('script'); goog.type = 'text/javascript'; 
	  goog.src = '//www.google.com/jsapi'; 
	  goog.onload = function() { 
	    google.setOnLoadCallback(function() { 
	    if(google.search){
	      google.search.CustomSearchControl.attachAutoCompletion( 
	        searchCSE, 
	        searchBoxElement, 
	        searchform); 
	        }
	    });
	  }; 
	  
	  var cse = document.createElement('script'); 
	  cse.type = 'text/javascript'; 
	  cse.src = '//www.google.com/cse/brand?form='+searchform+'&lang=en'; 
	  var s = document.getElementsByTagName('script')[0]; 
	  s.parentNode.insertBefore(cse, s); 
	  s.parentNode.insertBefore(goog, s); 
	}
	});
});

function checkLinkBack(aUrl){
	var regExpMatch = new RegExp("https:\/\/[a-z]*\.cms\.vt\.edu.*|https:\/\/ensemble\.vt\.edu.*");
	var regRes = regExpMatch.exec(aUrl);
	if(regRes && regRes[0].length>0){
		return true;
	}
	return false;
}
/*
// shows preview bar and gives end users ability to change context to show
// what should be published by the cms
$(document).ready(function(){
	if(checkLinkBack(window.location.href)){
		var pscript = document.createElement('script');
		pscript.type = 'text/javascript';
		pscript.src = '/global_assets/js/vt_cms_preview_utils.js';
		$('head').append(pscript);
		showPreviewBar("false");
	}
});
 */
// For asset developers
$(document).ready(function(){
	if(hasLocalAssetsCookie()){
		var pscript = document.createElement('script');
		pscript.type = 'text/javascript';
		pscript.src = '/global_assets/web_designer/vt_cms_web_designer_utils.js';
		$('head').append(pscript);
	}
});

function setLocalAssetsCookie(){
	$.setCookie("LA_ENABLE", "Default", 
			{
				duration: 1825,
				path: '/',
				domain: 'vt.edu',
				secure: false
			}
	);
	window.location.reload();
}

function hasLocalAssetsCookie(){
	var la_cookie=$.readCookie("LA_ENABLE");
	if(la_cookie!=null && la_cookie!= ""){
		return true;
	}
	return false;
}

/**
 * function getPrintURL
 *
 * returns a URL that will use the printme.php page to print a PDF version
 * of the page.
 * @param url THe url of the page will default to current URL
 * @param ct The content type to pass to the printme.php script.
 */
function getPrintURL(url, ct) {
	if(!window.btoa) {
		$.getScript("/global_assets/js/base64.js"); 
		window.btoa = base64.encode;
	}
	url = typeof url !== 'undefined' ? url : window.location.href;
	ct = typeof ct !== 'undefined' ? ct : 'vtGeneric';
	var b64 = window.btoa(unescape(encodeURIComponent(url)));
	var printURL = "//"
	+ window.location.host 
	+ "/global_assets/php/widgets/print-to-pdf/printme.php?url="
	+ b64 
	+ "&ct="
	+ ct 
	+ "&type=print";
	return printURL;
}

// Link to specific tab and accordion pleats.
$(document).ready(function() {
	$.fx.off = true;
	// Setup for tabs and accordion
	// prevent scrolling if already clicked on
	var accordionOrTabClicked = false;
	if(jQuery.isFunction(jQuery.fn.accordion)){
		$(".vtAccordion").accordion({heightStyle: "content", collapsible: true, activate: function(evt, ui) {
				// enable default browser behavior
				runEqualHeights();
				if(!accordionOrTabClicked) {
					$.fx.off = true;
					if(ui.newHeader.get(0)) {
						ui.newHeader.get(0).scrollIntoView(true);
					}
					$.fx.off = false;
				}
		}});
		$('.vtAccordion.vtAccordion_closed').accordion({active: false});
	}
	if(jQuery.isFunction(jQuery.fn.tabs)){
		$(".vtTab").tabs({activate: function(evt, ui) {
				// enable default browser behavior
				if(!accordionOrTabClicked) {
					if(ui.newTab.get(0)) {
						ui.newTab.get(0).scrollIntoView(true);
					}
				}
		}});
	}
	// add links to anchors similar to tabs
	$(".vtAccordion h6 > a[href='#']").each(function(i, elem) {
		$(elem).attr("href", "#pleat-" + (i + 1));
		$(elem).click(function() {
			accordionOrTabClicked = true;
		});
	});
	$(".vtTab ul.tab-list li").each(function(i, elem) {
		$(elem).mousedown(function(evt) {
			accordionOrTabClicked = true;
		});
	});
	// end setup

	$(window).bind('hashchange', function(){
		var hash = window.location.hash;
		if(!accordionOrTabClicked) {
			$(".vtTab a[href^='"+hash+"']").click();
			$(".vtAccordion h6[aria-selected='false'] > a[href='"+hash+"']").click();

			// enable select=
			// note: "#select=" is 8 characters
			if ("select=" === hash.slice(1,8)) {
				var itemToSelect = parseInt(hash.substring(8), 10);
				if(itemToSelect > 0 ) {
					$(".vtTab ul.tab-list > li > a, .vtAccordion h6 > a").each(function(i, elem) {
						if(i === (itemToSelect - 1)) {
							elem.scrollIntoView(true);
							// check for open accordion pleat
							if($(elem).parent().attr("aria-selected") !== 'true') {
								$(elem).click();
							}
						}
					});
				}
			}
		}
		accordionOrTabClicked = false;
	});
	// run once for page load
	$(window).trigger( 'hashchange' );
	$.fx.off = false;
});
