/* Quicklinks Script for Virginia Tech */

/* ----- GLOBAL VARIABLES ------ */
// MAX_QL_ITEMS: maximum number of items that can be stored in quicklinks
//   Note: the maximum size a cookie is 4KB 
var MAX_QL_ITEMS = '100';

// COOKIE_TIME: Time in days the cookie should last (5 years)
var COOKIE_TIME = '1825';
// COOKIE_DOMAIN: Host/ Domain for which the cookie applies
var COOKIE_DOMAIN = "vt.edu";

// QL_COOKIE_NAME: Name of the cookie that will be stored
var QL_COOKIE_NAME = "vt_quick_links";

//QL_ID: ID of the list (UL) that will contain the quicklinks
var QL_ID = "vt_ql_list";

// QL_ALL_NAME: name of array containing all quicklinks
var QL_ALL_NAME = "index";
// QL_ALL_FILE: Location that contains the js of all available links
var QL_ALL_FILE = "http://www.vt.edu/az_index/JSindex.js";
// QL_ALL: Array of all quicklinks
var QL_ALL;

// CUSTOMIZE_NAME: name of the Customize Quicklinks label
var CUSTOMIZE_NAME = "Customize Quicklinks";
// CUSTOMIZE_URL: URL to the Quicklinks customize page
// Set to '' if you don't want to automatically add it to QL_ID
var CUSTOMIZE_URL = "http://www.vt.edu/customize_quicklinks.php";

// default quicklinks. the ids have to match the full quicklinks in QL_ALL_FILE
var QL_DEFAULT = new Array(); 
QL_DEFAULT[0]="id2157";id2157 = new Array(2);id2157[0]="4Help (Computing Assistance)";id2157[1]="http:\/\/www.computing.vt.edu\/";
QL_DEFAULT[1]="id567";id567 = new Array(2);id567[0]="Calendars, Academic";id567[1]="http:\/\/www.registrar.vt.edu\/dates_deadlines\/academic_calendar\/index.html";
QL_DEFAULT[2]="id508";id508 = new Array(2);id508[0]="Blacksburg Transit";id508[1]="http:\/\/www.blacksburg.gov\/Index.aspx?page=791";
QL_DEFAULT[3]="id2363";id2363 = new Array(2);id2363[0]="Campus Map";id2363[1]="http:\/\/www.maps.vt.edu\/";
QL_DEFAULT[4]="id716";id716 = new Array(2);id716[0]="Corps of Cadets";id716[1]="http:\/\/www.vtcc.vt.edu\/";
QL_DEFAULT[5]="id894";id894 = new Array(2);id894[0]="Giving to Virginia Tech";id894[1]="http:\/\/www.givingto.vt.edu\/";
QL_DEFAULT[6]="id916";id916 = new Array(2);id916[0]="Hokie SPA";id916[1]="http:\/\/www.hokiespa.vt.edu\/";
QL_DEFAULT[7]="id500";id500 = new Array(2);id500[0]="Scholar";id500[1]="https:\/\/scholar.vt.edu\/";
QL_DEFAULT[8]="id337022";id337022 = new Array(2);id337022[0]="Canvas";id337022[1]="https:\/\/vt.instructure.com\/";
QL_DEFAULT[9]="id795";id795 = new Array(2);id795[0]="VT Google Apps E-Mail";id795[1]="http:\/\/mail.google.vt.edu\/";
QL_DEFAULT[10]="id796";id796 = new Array(2);id796[0]="Exchange E-mail (WebOutlook)";id796[1]="https:\/\/weboutlook.vt.edu\/";

// ----- END GLOBAL VARIABLE DEFINITIONS -----
//Get all the quicklinks if there is a cookie (using this method caches the file)
var QL_COOKIE=$.readCookie(QL_COOKIE_NAME);
var HAS_QL_COOKIE = false;
if (QL_COOKIE!=null && QL_COOKIE!=""){
	var scriptAllQL = document.createElement( 'script' );
	scriptAllQL.type = 'text/javascript';
	scriptAllQL.src = QL_ALL_FILE;
	document.getElementsByTagName("head")[0].appendChild( scriptAllQL );
	HAS_QL_COOKIE = true;
}

$(document).ready(function(){
	try{
		if(HAS_QL_COOKIE){ QL_ALL = window[QL_ALL_NAME]; }
	 	checkQLCookie();						   
	}catch(qlerror){
		// quicklinks failed to load, prevent it from stopping other scripts
		// from running
	}
});
// will check to see if a quicklink cookie exists, if not will load defaults
function checkQLCookie(){
	if (QL_COOKIE!=null && QL_COOKIE!=""){
		loadQLCookie();
	}
	else 
		{ if(document.getElementById(QL_ID)){createQLList(QL_DEFAULT, QL_ID);}}
}

// Given a string and preset format (currently only cookie)
//   will break that string appropriately and return an array
function createItemArrayFromStr(docStr, format){
	if (format == "cookie"){
	  // unescape cookie before splitting it
		var splitStr = (unescape(docStr)).split("_");
		var numItems = (splitStr.length);
		var qlItems = new Array(numItems);
		for (i = 0; i<numItems; i++){
			qlItems[i] = splitStr[i];
		}
		return qlItems;
	}else{
		alert("unrecognized format");
	}
}
// Creates a string from an array of items (that will be stored in the cookie)
function createStrFromItemArray(itemArray){
	var retStr = '';
	for (i = 0; i <itemArray.length; i++)
	{
		//escape before placing it into the cookie (addresses safari error)
		retStr += escape(itemArray[i]);
		// don't show last _
		if(i < itemArray.length - 1){
			retStr += '_';
		}
	}
	return retStr;
}
function loadQLCookie(){
	var QL_COOKIE = $.readCookie(QL_COOKIE_NAME);
	if(QL_COOKIE != null || QL_COOKIE != ''){
		var qlItems = createItemArrayFromStr(QL_COOKIE, "cookie");
		createQLList(qlItems, QL_ID);
	}
}

function setQLCookie(qlItemArray)
{	
	var cookieStr = createStrFromItemArray(qlItemArray);
	$.setCookie(QL_COOKIE_NAME, cookieStr, 
		{
			duration: COOKIE_TIME,
			path: '/',
			domain: COOKIE_DOMAIN,
			secure: false
		}
	);
}

function removeQLCookie(){
	$.setCookie(QL_COOKIE_NAME, '', 
		{
			duration: -1,
			path: '/',
			domain: COOKIE_DOMAIN,
			secure: false
		}
	);
}

// Given an array of items and a ul id, will add lis of the item to the ul 
// qlItemArray is a 3d array of a contentid, title, and URL
function createQLList(qlItemArray, elementId){
// element must exist before we do anything to it
  if (document.getElementById(elementId)){
		var qlList = document.getElementById(elementId);
		// clear out anything that may already be there.
		qlList.innerHTML = '';
		var newNode, newItem;
		for (i = 0; i < qlItemArray.length; i++){
					newNode = document.createElement("li"); 
					newItem = '<a href="'
					+ window[qlItemArray[i]][1]
					+ '">'
					+ window[qlItemArray[i]][0]
					+ '</a>';
					newNode.innerHTML = newItem;
					qlList.appendChild(newNode);
		}
		// append the customize name & link to the end of QL_ID
		if (elementId == QL_ID && CUSTOMIZE_URL != '' && CUSTOMIZE_NAME != ''){
					newNode = document.createElement("li"); 
					newItem = '<a href="'
					+ CUSTOMIZE_URL
					+ '">'
					+ CUSTOMIZE_NAME
					+ '</a>';
					newNode.innerHTML = newItem;
					qlList.appendChild(newNode);
		}
	}
}
