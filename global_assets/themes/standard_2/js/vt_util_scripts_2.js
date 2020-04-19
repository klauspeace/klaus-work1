/*jslint browser: true, eqeq: true, plusplus: true, sloppy: true, vars: true, white: true */
/*global $, jQuery */
/**
 * Util scripts to support standard 2 theme from Ensemble: http://www.ensemble.cms.vt.edu 
 * 2013 WSD - ensemble@vt.edu
 */
//equal heights, default to 3 columns
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
$(document).ready(function() {
	/* move page title and/or gateway */
	if($('#vt_side_nav').length>0){
		if($('#vt_gateway').length>0){	$('#vt_gateway').insertBefore($('#vt_side_nav'));}
		if($('#vt_pageTitle').length>0) {$('#vt_pageTitle').insertBefore($('#vt_side_nav'));}
		if($('#vt_gateway').length>0){	$('#vt_gateway').insertBefore($('#vt_pageTitle'));}

	}
});
/* mobile options for theme standard 2 */
$(document).ready(function() {
	$('body').removeClass('noJS').addClass('withJS');
	var styleinfo, menuID, mobileContent;

	styleinfo = '<div id="vt-style" style="display:none"><br class="mobile" /><br class="tablet"/><br class="desktop"/><br class="large-desktop"/></div>';
	$('body').prepend(styleinfo);

	$('#vt_nav_utilities').addClass("vt-hidden-x-sm collapse");
	menuID = ($(window).width() > 479)?"#vt_nav_utilities":"#vt-mobile-choices";
	/* DOM Elements */
	mobileContent = "";
	mobileContent += '<button id="vt-nav-button" class="visible-xs" type="button" data-target="'+ menuID +'" data-toggle="collapse"><span class="icon-bar bar1"></span> <span class="icon-bar bar2"></span> <span class="icon-bar bar3"></span><p>Utilities</p></button>';
	mobileContent += '<div id="vt-mobile-choices" class="mobile-menu buttonArray collapse"><ul><li><a class="mmButton mmSearch" href="#" data-target=".vt-search-block" data-toggle="collapse"><i class="fa fa-search fa-2x"></i></a><br> Search</li><li><a class="mmButton mmMain" href="#" data-target="#vt_main_nav" data-toggle="collapse"><i class="fa fa-align-justify fa-2x"></i></a><br>Main</li><li><a class="mmButton mmQl" href="#" data-target="#vt_quicklinks_li" data-toggle="collapse"><i class="fa fa-wrench fa-2x"></i></a><br>Quicklinks</li><li><a class="mmButton mmMyVt" href="//my.vt.edu/"><i class="fa fa-user fa-2x"></i></a><br>MyVT</li></ul></div>';
	$('#vt_nav_utilities').before(mobileContent);

	/* Needs bootstrap collapse */
	$('#vt_quicklinks_li').addClass("collapse");
	$('#vt_main_nav').addClass("collapse vt-no-collapse-tablet vt-no-collapse-desktop vt-no-collapse-large-desktop");
	$('#vt_header_search_form').parent().addClass("collapse vt-no-collapse-tablet vt-no-collapse-desktop vt-no-collapse-large-desktop");

	/* close all collapsable elements */
	$("#vt-nav-button").click(function() {
		if(!$(this).hasClass("collasped")) {
			$(".in").collapse('hide');
		}
	});

	$("#vt-mobile-choices").on('hidden.bs.collapse', function(){
		// hide all when mobile-menu is closed
		$("#vt_header_wrapper .in").collapse('hide');
	});
	
	// show quicklinks
	$("#vt_quicklinks_li").on('show.bs.collapse', function(){
		$("#vt_main_nav").addClass("quicklinks-only").collapse('show');
	});
	$("#vt_quicklinks_li").on('hidden.bs.collapse', function(){
		$("#vt_main_nav").removeClass("quicklinks-only").collapse("hide");
		$(".mmMain").attr("data-target",'#vt_main_nav');
	});
	// help to toggle between quicklinks and the main_nav
	$(".mmMain").click(function() {
		if($("#vt_main_nav").hasClass("quicklinks-only")) {
			$("#vt_main_nav").removeClass("in");
			// have to fake collapse to prevent infinite loop
			$("#vt_quicklinks_li").removeClass("in").addClass("collapse");
		}
		$("#vt_main_nav").removeClass("quicklinks-only");
	});

	//toggle vt_nav_utilities
	
	$("#vt_nav_utilities").on('hide.bs.collapse', function(){
		$("#vt_header_wrapper").removeClass("vt-push-down");
	});
	$("#vt_nav_utilities").on('shown.bs.collapse', function(){
		$("#vt_header_wrapper").addClass("vt-push-down");
	});

	$(window).resize(function(){
		/* close all collapsable elements */
		if($(window).width() > 479) {
			$("#vt-nav-button").attr("data-target", "#vt_nav_utilities");
			// collapse all elements when the site is above tablet
			$("#vt_header_wrapper .in").collapse('hide');
		}
		else {
			$("#vt-nav-button").attr("data-target", "#vt-mobile-choices");
		}
	});
	

});

function accessNav(){
	if($(window).width() > 479) {
		$('#vt_main_nav .vt_subnav1_block').css('display','');
		$('#vt_nav_home .vt_subnav1_block').css('display','none');
		$('#vt_main_nav >.container').accessibleMegaMenu({
		    uuidPrefix: "accessible-megamenu",
	        menuClass: "nav-menu",
	        topNavItemClass: "nav-item",
	        panelClass: "vt_subnav1_block",
	        panelGroupClass: "vt_subnav1_block_group",
	        hoverClass: "hover",
	        focusClass: "focus",
	        openClass: "open" 
		});

	}else{
		/* mobile, hide subnav megamenu if it exists */
		$('#vt_main_nav .vt_subnav1_block').css('display','none');
		$('#vt_nav_home .vt_subnav1_block').css('display','block');
	}

	// remove automatic classes from inline links or items without subnav
	$('.nav-item > span.vt_subnav1_block').removeClass('vt_subnav1_block');
	$('.nav-item > a.vt_subnav1_block').removeClass('vt_subnav1_block');
    // hack so that the megamenu doesn't show flash of css animation after the page loads.
    setTimeout(function () {
        $('body').removeClass('init');
    }, 500);
}
$(document).ready(function(){
	accessNav();
});
$(window).resize(function(){
	accessNav();
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
			"fnDrawCallback" : function() {}
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

$(document).ready(function(){
/* stripe table rows */
$("table tr").mouseover(function() {$(this).addClass("over");}).mouseout(function() {$(this).removeClass("over");});
$("table tr:even").addClass("alt");
$("div.vt_table_no_stripe table tr:even").removeClass("alt");

/* no table styles */
$("div.vt_table_no_styles table tr").mouseover(function() {$(this).removeClass("over");}).mouseout(function() {$(this).removeClass("over");});
$("div.vt_table_no_styles table tr:even").removeClass("alt");
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

//Recaptcha settings and fixing recaptcha image
var RecaptchaOptions = {
  theme : 'clean'
};
$(document).ready(function(){
  $(".recaptchatable img").css({"border":"none", "padding":0, "margin": 0});
});

$(document).ready(function(){
	$('.dropdown-toggle').dropdown();
});

/**
* People search response on search and search box behavior
**/

var query_input = '#vt_search_box';
var result_display = '#vt_ppl_results';
var result_display_n = result_display.substring(1, result_display.length);

var results_display_google = "#vt_ppl_after_google";
var results_display_google_n = results_display_google.substring(1, results_display_google.length);

var search_form = '#cse-search-box';

$(document).ready(function() {
	if($(query_input).val()== ""){
		$(result_display).hide();
	}
	$(query_input).click(function(){
		if(($(results_display_google).html()!="") && ($(result_display).html() != "")){
			$('.gssb_c').slideDown(700);
		}else if($(result_display).html() != ""){
			$(result_display).slideDown(700);
		}
	});
	$(query_input).blur(function(){
		if($(query_input).val() == ""){
			$(result_display).hide();
		}
		if(!$('.gssb_c').is(":focus")){
			$('.gssb_c').slideUp(700);
		}
		if(!$(result_display).is(":focus")){
			$(result_display).slideUp(700);
		}
	});
});

var size = 5;
var val = '';
var cache = null;
var timer;
var inProgress;
$(document).ready(function(){
   // on first load
   val = $.trim($(query_input).val());
   getResults(val);
   $(query_input).parent().append('<div id="'+result_display_n+'" class="vt_ppl_display" style="display: none"></div>');
   $(result_display).width($('.gssb_c').width());

  $(query_input).keyup(function() {
	val = $.trim($(query_input).val());
	if(!($(results_display_google).length>0) &&  $(".gsc-completion-container").length >0 ){
		$(".gsc-completion-container").parent().append('<div id="'+results_display_google_n+'" class="vt_ppl_display"></div>');
		//$(".gssb_c").children().append('<tr><td colspan="2"><div id="'+results_display_google_n+'" class="vt_ppl_display"></div></td></tr>');
	}
	if(timer) {
		clearTimeout(timer);
	}
	timer = setTimeout(function(){ getResults(val);}, 500);
  });
});

function getResults(val){
	if (val != '' && val.length > 2) {
		inProgress = true;
		var info_search = '<p class="vt_searching">Searching People for <strong><em>'+val+'</em></strong></p>';
		// check if google has someting, if not, display ppl search results by itself
		if($(results_display_google).parent().is(":hidden")){
			$(result_display).html(info_search);
			$(result_display).slideDown(700);
		}else{
			$(result_display).hide();
			$(results_display_google).html(info_search);
			$(results_display_google).slideDown(700);
		}

		$.getJSON('//webapps.middleware.vt.edu/peoplesearch/JsonSearch?query='+encodeURIComponent(val), function(data) {
			if ($(query_input).val() == val) {
				cache = data;
				from = 1;
				to = size;
				showResults(from, to, val);
				inProgress = false;
			}else if ($(query_input).val() != ''){
				// the query input has changed since the last time results were fetched, get new
				inProgress=false;
				getResults($(query_input).val());
			}
		});
	} else {
		$(result_display).hide();
		$(results_display_google).hide();
		$(result_display).html("");
		$(results_display_google).html("");
		//$(query_input).focus();
	}
}

function showResults(from, to, val) {
	if (cache != null && cache.length > 0) {
		var x = from - 1;
		var y = to < cache.length ? to : cache.length;
		var html = "";
		$.each(cache, function(index, value) {
			if (index >= x && index < y) {
				var uid = !value.uid ? "" : value.uid[0];
				var name = !value.displayName ? "" : value.displayName[0];
				var title = !value.title ? "" : value.title[0];
				var department = !value.department ? "" : value.department[0];
				var mailStop = !value.mailStop ? "" : value.mailStop[0];
				var major = !value.major ? "" : value.major[0];
				var mail = !value.mail ? "" : value.mail[0];
				var phone = !value.telephoneNumber ? "" : value.telephoneNumber[0].replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
			var localPhone = !value.localPhone ? "" : value.localPhone[0].replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');

		var personlink = '';
		if(uid != ''){
			personlink = '<a href="//search.vt.edu/search/person.html?person='+uid+'">'+name+'</a>';
		}

		html += "<tr>";
		html += '<td class="person">';
		html += personlink;
		if(title != '' ){ html += '<br/><em>'+title+'</em>';}
		if(department != ''){
			html += '<br/>'+department;
			if(mailStop != ''){html +=' ('+mailStop+')';}
		}
		if(major != ''){html += '<br/>'+major;}
		html += '</td>';
		html += '<td class="contact_info">';
		html += '<a href="mailto:'+mail+'">'+mail+'</a>';
		if( phone!='' ){html += '<br/>Work: <span class="vt_phone_num">' + phone + '</span>'; }
		if(localPhone != '') { html += '<br/>Local: <span class="vt_phone_num">' + localPhone + '</span>';}
		html += '</td>';
		html += "</tr>";
			}
		});
		var out = '<div class="results_info">';
		out += '<span>People Results: <strong>'+(x+1)+' - '+y+'</strong> of <strong>'+cache.length+'</strong> for <strong><em>'+ val +'</em></strong></span>';
		if(y < cache.length){
			out += '  <span class="more_results">| <a href="//search.vt.edu/search/people.html?q='+val+'">More &raquo;</a></span>';
		}
		out += "</div><table><tbody>"+html+"</tbody></table>";

		// check if google has someting, if not, display ppl search results by itself
		if($(results_display_google).parent().is(":hidden")){
			$(result_display).html(out);
			$(result_display).slideDown(700);
		}else{
			$(result_display).hide();
			$(results_display_google).html(out);
			$(results_display_google).slideDown(700);
		}
	} else {
		$(result_display).html('<p>No results found for <strong><em>'+val+'</em></strong></p>');
	}
}

// now tack on google auto suggest to the results
/*
 * for auto complete on forms
 * iterate through all the forms,
 * if cx value is found or if form name is vtsearchform, then trigger autocomplete
 * on the input element with the name of 'q' (standard query input element)
 */
$(document).ready(function() {

	$('#vt_header_search_form').each(function (i){
		$(this).find('input').each(function(i){
			if(this.name == 'q'){
				qElement = this;
			}
		});
		var searchform = this.name;
		var searchBoxElement = qElement;
		var searchCSE = '012042020361247179657:wmrvw9b99ug';

		var goog = document.createElement('script'); goog.type = 'text/javascript';
		goog.src = '//www.google.com/jsapi';

		goog.onload = function() {
			google.load('search', '1', {"callback": function() {}});
			google.setOnLoadCallback(function() {
				if(google.search){
					var autoCompletionOptions = {
						'maxCompletions' : 5,
						 'maxPromotions' : 0,
						  'styleOptions' : {
							 'widthOffset' : 6,
							     'xOffset' : 6,
							     'yOffset' : 2
						}
					};
					google.search.CustomSearchControl.attachAutoCompletionWithOptions(
						searchCSE, searchBoxElement, searchform, autoCompletionOptions);
				}
			});
		};

		var cse = document.createElement('script');
		cse.type = 'text/javascript';
		cse.src = '//www.google.com/cse/brand?form='+searchform+'&lang=en';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(cse, s);
		s.parentNode.insertBefore(goog, s);

	});
});

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

/**
* For asset developers to display a debug bar
**/
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
// ------ End code for assets developers

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

//hashchange event recommended here: http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
window.addEventListener("hashchange", function(event) {
var element = document.getElementById(location.hash.substring(1));
if (element) {
if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
element.tabIndex = -1;
}
element.focus();
}
}, false);

//remove open class for nav items on focus out
$(document).ready(function(){
	$(".nav-item").focusout(function(){
		//alert("couces out");
	});
});