$( document ).ready(function() {
 
    $('.save').on('click',function(){
        if
            ($(this).attr('data-click-state') == 1) {
            $(this).attr('data-click-state', 0);
            $(this).css("display","block");
		    $('.input').css("display","block");
		    $('.edit').css("display","none");
        } 
        else {
            $(this).attr('data-click-state', 1)
            $(this).css("display","none");
			$('.input').css("display","none");
			$('.edit').css("display","block");
        };
    });
 
});