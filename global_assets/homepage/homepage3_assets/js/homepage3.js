/* js specific to homepage 3 */
/* show hide alerts */
$(document).ready(function() {
	if($('#vt_alert_wrapper').length>0){
		$('.vt_alert_message p:last-child').after('<button id="vt_alert_hide_show" type="button"><span class="fa fa-remove fa-large"></span>Close</button>');
		$('#vt_alert').before('<span class="fa fa-warning fa-5x"></i>');
		$('#vt_alert_hide_show').click(function(){
			$('#vt_alert_wrapper').toggleClass("vt-close-alert");
			$(this).html(function(i, v){
				return v === '<span class="fa fa-remove fa-large"></span>Close' ? 'Open' : '<span class="fa-remove fa-large"></span>Close'
			})
		});
	}
	// start the carousel
	$("#vt_featured_items").carousel({interval:10000});
	carouselFix();
});
/* adjusting height of containers */
$(window).load(function(){
	if($(window).width() > 800) {
		adjustColHeights();
	}else{
		removeColHeights();
	}
	$(window).resize(function(){
		carouselFix();
		if($(window).width() > 800) {
			adjustColHeights();
		}else{
			removeColHeights();
		}
	});
});
//Set margin-left attribute for carousel
//to prevent bounceback
function carouselFix() {
	var viewportSize = $(window).width();
	if(viewportSize > 800) {
		$(".item.vtImageLinked").each(function(idx){
			$(this).css("margin-left", function(index) {
				var imgSize, newLeft;
				imgSize = $(this).width();
				newLeft = (viewportSize > imgSize)?(((viewportSize / 2) - (imgSize / 2))):"";
				return newLeft;
			});
		});
	}
	else {
		$(".item.vtImageLinked").css("margin-left","");
	}
}
// removing defined col heights
function removeColHeights(){
	$('.vtRowContainer').children().each(function(index){
		mostTall = 'auto';
		smallest_img = 'auto';
		$(this).find('.vtColumns.columns_2>div>div').each(function(index2){
			$(this).height(mostTall);
		});

		$(this).find('.vtColumns.columns_2>div>div>div').each(function(index2){
			$(this).height(mostTall);
		});
		$(this).find('.vtColumns.columns_4').children().each(function(index2){
			$(this).height(mostTall);

			$(this).find('.content-area-body > .vt_brief').each(function(brief_index){
				$(this).height(mostTall);
			});
			$(this).find('.vt_medium_img').each(function(img_index){
				$(this).height(smallest_img);
				$(this).css({'overflow':'hidden'});
			});
		});
	});
}
function adjustColHeights(){
	$('.vtRowContainer').children().each(function(index){
		//  adjust2 column
		var mostTall = 0;
		var smallest_img = 1000;
		$(this).find('.vtColumns.columns_2').children().each(function(index2){
			if($(this).height() > mostTall){
				mostTall = $(this).height();
			}
		});
		// now set the heights for columns, briefs and images
		$(this).find('.vtColumns.columns_2>div>div').each(function(index2){
			$(this).height(mostTall);
		});

		$(this).find('.vtColumns.columns_2>div>div>div').each(function(index2){
			$(this).height(mostTall);
		});
		// Adjust 4 cols
		mostTall = 0;
		smallest_img = 1000;
		$(this).find('.vtColumns.columns_4').children().each(function(index2){
			if($(this).height() > mostTall){
				mostTall = $(this).height();
			}
			$(this).find('.vt_medium_img').each(function(img_index){
				if($(this).height() < smallest_img){
					smallest_img = $(this).height();
				} 
			});
		});
		// now set the heights for columns, briefs and images
		$(this).find('.vtColumns.columns_4').children().each(function(index2){
			$(this).height(mostTall);

			$(this).find('.content-area-body > .vt_brief').each(function(brief_index){
				$(this).height(mostTall);
			});
			$(this).find('.vt_medium_img').each(function(img_index){
				$(this).height(smallest_img);
				$(this).css({'overflow':'hidden'});
			});
		});
	});
}
