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


//baloes mapa
$(function(){
//adiciona a classe js no documento
	var root = document.documentElement;
	root.className += ' js';

	//Essa função é responsável por calcular a distância entre cada elemento que adicionarmos a classe anime e o topo da página
	function boxTop(idBox) {
		var boxOffset = $(idBox).offset().top;
		return boxOffset;
	}

	//inicia funcao
	$(document).ready(function() {
		//baloes do mapa
		var $target = $('.balao'),
			animationClass = 'bounceInDown',
			//animationClass2 = 'animated',
			windowHeight = $(window).height(),
			offset = windowHeight - (windowHeight / 4);

		function animeScroll() {
			var documentTop = $(document).scrollTop();
			$target.each(function() {
				if (documentTop > boxTop(this) - offset) {
					$(this).addClass(animationClass);
				} else {
					$(this).removeClass(animationClass);
				}
			});
		}

		animeScroll();

		$(document).scroll(function() {
			setTimeout(function() {animeScroll()}, 150);
		});
	});
});


//Sidebar fixa
$(function(){
	var form = $('aside#form');
	var secao = $('#localizacao').offset().top;
	var alturaSecao = $('#localizacao').height();
	var secaoFim = (secao + alturaSecao)
	$(window).scroll(function () { 
		
		function entraform () {
			if ($(this).width() > 990) {
				form.fadeIn('fast');	
			}
		}
		if ($(this).scrollTop() > 500 && $(this).scrollTop() < secao) { 
			entraform();
		} else if ($(this).scrollTop() > secaoFim) { 
			entraform();
		} else {
			form.fadeOut('fast');
		}

	});
});