$(document).ready(function(){

// mobile menu
$(document).ready(function(){$('#slide, #slide1').click(function(){var hidden=$('.sidewarper');if(hidden.hasClass('visible')){hidden.animate({"left":"-1200px"},"slow").removeClass('visible');}else{hidden.animate({"left":"0px"},"slow").addClass('visible');}});});
// mobile acordian
$(document).ready(function($){$('.accordion').find('.accordion-toggle').click(function(){$(this).next().slideToggle('fast');$(".accordion-content").not($(this).next()).slideUp('fast');});});
});
