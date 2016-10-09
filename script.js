$(document).ready(function(){
	$('.time_on').each(function(){
		if($(this).text() > 0){
			$(this).parent().css('font-style','italic');
		}
	});
	$('.type').each(function(){
		if($(this).text() > 0){
			$(this).parent().css('font-weight','bold');
		}
	});
    $("input[id^='buttonSC']").click(function(){
        var r=Math.floor(Math.random() * (256));
        var g=Math.floor(Math.random() * (256));
        var b=Math.floor(Math.random() * (256));
        var c='#' + r.toString(16) + g.toString(16) + b.toString(16);
        $(this).parent().parent().css('color', c);
    });
});