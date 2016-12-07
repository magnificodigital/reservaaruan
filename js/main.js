//Paralaxx
$(function(){
   $('.bgParallax').each(function(){

    	var $obj = $(this);
    	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 
 
		var bgpos = '50% '+ yPos + 'px';
 
		$obj.css('background-position', bgpos );
 
	}); 
   });	
});

//scroll
$(function(){
	$('header#site a, .ver-plantas').click(function(e){
		$.scrollTo((this.hash) || 0, 500);
		$('nav.menu-mobile ul').slideUp("fast");
		e.preventDefault();
	});
});

//Menu
$(function(){
	//if ($(window).width() <= 480) {
		$('.menu-mobile').on('click', function(){
		    $('.menu ul').slideToggle("fast",function(){
				$('main#content-site, .menu ul li a').on('click', function(){
					$('.menu ul').slideUp("fast");
				});
		    });
		});
	//}
});

//Troca telefone
$(function(){
	$('.form-box .btn-tel').on("click",function(){
		$(this).text("0000-0000");
	});
});

