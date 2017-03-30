</div>

<footer id="site">
	<div class="container">
		<ul>
			<li class="contact-us"><p><strong>Fale conosco</strong></p></li>
			<li><a href="http://www.ekoconstrutora.com.br/fale-conosco/" class="ico-mail" target="_blank"><p>Atendimento <span>por e-mail</span></p></a></li>
			<li><a href="http://www.ekoconstrutora.com.br/ligamos-para-voce/" class="ico-tel" target="_blank"><p>Ligamos <span>para você</span></p></a></li>
			<li><a href="http://www.ekoconstrutora.com.br/agende-uma-visita/" class="ico-agenda" target="_blank"><p>Agende <span>uma visita</span></p></a></li>
			<li><a href="#" class="ico-whatsapp" target="_blank"><p>Atendimento <span>via whatsapp</span></p></a></li>
		</ul>
	</div>
</footer>

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script type="text/javascript">
	$('[data-fancybox]').fancybox({

		youtube : {
			controls : 1,
			showinfo : 0
		}
	});
</script>
<script>
	document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);
</script> 

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-88685938-1', 'auto');
	ga('send', 'pageview');
</script>

<script type="text/javascript">
	var slider = new Swiper('.galeria .swiper-container', {
	    spaceBetween: 10,
	    loop:false,
	    slidesPerView: 2,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        breakpoints: {
        	480: {
		    	slidesPerView: 1,
		    	spaceBetween: 0
		    }
        }
	});

	var slider = new Swiper('.slide-home', {
	    spaceBetween: 0,
	    loop:true,
	    //autoplay: true,
	    slidesPerView: 1,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        speed: 750
	});

	var slider = new Swiper('.galery-plantas', {
	    //loop:true,
	    //autoplay: true,
	    slidesPerView: 1,
        pagination: '.swiper-pagination',
        paginationClickable: true,
	});
</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  

<script type="text/javascript">

    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'tel': 'telefone'
     };

    options = { fieldMapping: meus_campos };

    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Reserva Aruan - Form Contato 1', options);  

</script>

<?php wp_footer() ?>

</body>

</html>

