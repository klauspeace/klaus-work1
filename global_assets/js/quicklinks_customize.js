/* Quicklinks Script for Virginia Tech 
 *   requires several predefined functions in quicklinks.js
 *   For customizing quicklinks
 *   Requires two option lists:
      - qlavailable: Available quicklinks 
      - qlselected: User selected quicklinks
*/
var HAS_QL_COOKIE = false;
if (!HAS_QL_COOKIE){
	var scriptAllQL = document.createElement( 'script' );
	scriptAllQL.type = 'text/javascript';
	scriptAllQL.src = QL_ALL_FILE;
	document.getElementsByTagName("head")[0].appendChild( scriptAllQL );
	HAS_QL_COOKIE = true;
}

$(document).ready(function(){
 try{
	 QL_ALL = window[QL_ALL_NAME];
	 showAllQL();						   
 }catch (qlall_err){
	 alert("There was a problem attempting to display all the quicklinks. Please contact the webmaster.")
 }
});

function confirmDefaults(){
	var x=window.confirm("Are you sure you want your customized quicklinks to be deleted and replaced with the defaults?")
	if (x){
		loadDefaultQL();
		showCurrentQL();
	}else{
		return true;
	}
}
function saveQL(form){
  var qlselected = form.qlselected;
  if(qlselected.options.length <= MAX_QL_ITEMS){
	  var qlItemsArray = new Array(qlselected.options.length);
	  for (i = 0; i < qlselected.options.length; i++){
	  	qlItemsArray[i] = qlselected.options[i].value;
	  }
	  var chosenItems = createStrFromItemArray(qlItemsArray);
	  var defaultItems = createStrFromItemArray(QL_DEFAULT);
	  if(chosenItems === defaultItems){
		  // clear if the saved quicklinks are the default ones. Note that
		  // the order of the links matter.
		removeQLCookie();
		alert('The default Quicklinks have been set.');
	  }else{
		  setQLCookie(qlItemsArray);
		  // if QL exists, then update it
		  if(document.getElementById(QL_ID)){loadQLCookie();}
		  alert('Your Quicklinks have been saved.');
	  }
  }else{
	  alert("You are only allowed to have " + MAX_QL_ITEMS + " items in your Quicklinks. Please remove "+ (qlselected.options.length - MAX_QL_ITEMS) + " items before attempting to save your Quicklinks again.");
  }
  
  return false;
}

/* shows all quicklinks that are available to be added */
function showAllQL(){
	createQLOptions(QL_ALL, 'qlavailable');
	showCurrentQL();		
}

function loadDefaultQL(){
	// erase the cookie
	removeQLCookie();
	createQLOptions(QL_DEFAULT, 'qlselected');
	// if QL exists, then update it
	if(document.getElementById(QL_ID)){createQLList(QL_DEFAULT, QL_ID);}
}

function createQLOptions(itemArray, elementId){
	var qlList = document.getElementById(elementId);
	qlList.innerHTML = '';
	var newNode;
	for (i = 0; i <itemArray.length; i++){
			newNode = document.createElement("option"); 
			newNode.innerHTML = window[itemArray[i]][0];
			newNode.value= itemArray[i];
			qlList.appendChild(newNode);
	}
}

function showCurrentQL(){
	var quicklinks=$.readCookie(QL_COOKIE_NAME);
	if (quicklinks!=null && quicklinks!="")
	{
		var qlItems = createItemArrayFromStr(quicklinks, "cookie");
		createQLOptions(qlItems, 'qlselected');
	}
	else 
	{
		loadDefaultQL();
	}
}

// Pre-existing functions, used to move items 
// Both horizontally and from one option list to the other

function addSymbols(form) {
  var qlselected = form.qlselected;
  var newIndex=qlselected.options.length;
  var qlavailable = form.qlavailable;
  var qlink_alreadyexists = false;

	// clear out previously selected items
	//  we will only select items that are added
  for (j = 0; j < qlselected.length; j++) {
  	qlselected.options[j].selected = false;
  }
  
  for (i = 0; i < qlavailable.length; i++) {
    if (qlavailable.options[i].selected == true) {

      // check if quicklink is already on right side
      var qlink_alreadyexists = false;
			if (qlselected.length > 0) {
        for (j = 0; j < qlselected.length; j++) {
          if (qlselected.options[j].value == qlavailable[i].value) {
            qlink_alreadyexists = true;
            qlselected.options[j].selected = true;
            break;
          }
        }
      }
      if (!qlink_alreadyexists) {
        qlselected[newIndex]=new Option();
        qlselected.options[newIndex].text=qlavailable.options[i].text;
        qlselected.options[newIndex].value=qlavailable.options[i].value;
        qlselected.options[newIndex].selected = true;
				newIndex++;
      }
    }
  }
}

function removeQuicklink(form) {
  var qlselected = form.qlselected;
  var selectedIndex = qlselected.selectedIndex;
  var last = -1;
  
  if (selectedIndex < 0) {
    alert("Please select a Quicklink");
  }
  
  for (i=0; i<qlselected.length;) {
    if (qlselected.options[i].selected == true) {
      // remove from right side
     	qlselected.options[i] = null;
      last = i;
    } 
    else {
      i++;
    }
  }
  
  if ((last > -1) ) {
    if (last < qlselected.length)
      qlselected.selectedIndex = last;
    else
      qlselected.selectedIndex = qlselected.length-1;
  }
}

function multimoveup(form) {
  var box = form.qlselected;
  var selected = new Array();
  var j = 0;
  
  for (i=0; i<box.length; i++) {
    if (box.options[i].selected == true) {
      if (i==0)
      break;
      if (i > 0) {
        selected[j] = i;
        j++;
      }
    }
  }

  for (j=0 ; j<selected.length ; j++) {
    moveup(form,selected[j])
  }
}

function moveup(form, index) {
  var box = form.qlselected;
  // var index = box.selectedIndex;
  var max = box.length;

  if (max <= 1)
    return;
  if (index <= 0)
    return; 
  if (index >= max)
    return;
  
  var tmp=box.options[index-1].text;
  var val=box.options[index-1].value;
  
  box.options[index-1].text=box.options[index].text;
  box.options[index-1].value=box.options[index].value;
  box.options[index].text=tmp;
  box.options[index].value=val;
  box.options[index].selected=false;
  box.options[index-1].selected=true;
}

function multimovedown(form) {
  var box = form.qlselected;
  var max = box.length;
  var selected = new Array();
  var j = 0;
  
  for (i=0; i<max; i++) {
    if (box.options[i].selected == true) {
      selected[j] = i;
      j++;
    }
  }
  if (selected[j-1] < max-1) {
    for (j=selected.length-1; j>=0 ; j--) {
      movedown(form,selected[j])
    }
  }
}


function movedown(form,index) {
  var box = form.qlselected;
  var max = box.length;

  if (max <= 1)
    return;
  if (index < 0)
    return;
  if (index >= (max-1))
    return;
  
  var tmp=box.options[index+1].text;
  var val=box.options[index+1].value;
  
  box.options[index+1].text=box.options[index].text;
  box.options[index+1].value=box.options[index].value;
  box.options[index].text=tmp;
  box.options[index].value=val;
  box.options[index].selected=false;
  box.options[index+1].selected=true;
}
