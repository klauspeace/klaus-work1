// allows for date sorting within html
jQuery.fn.dataTableExt.oSort['html-date-asc'] = function(a,b) {
var x = Date.parse($(a).text());
var y = Date.parse($(b).text());
return ((x<y)? -1: ((x>y)? 1: 0));
};
jQuery.fn.dataTableExt.oSort['html-date-desc'] = function(a,b) {
var x = Date.parse($(a).text());
var y = Date.parse($(b).text());
return ((x<y)? 1: ((x>y)? -1: 0));
};