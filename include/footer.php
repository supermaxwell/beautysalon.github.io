<!-- Site footer -->
    <footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget contact-widget">
								<h3 class="widget-title">Контакты</h3>
								<div class="contact-info">
									<address>
										<img src="images/icon-map-small.png" class="icon">
										<p>Салон красоты<strong> <br> "Laser Studio Esthetic"</strong><br> г. Кривой Рог
ул. Костенко, 10</p>
									</address>
									<a href="mailto:laserstudio.esthetic@gmail.com" class="mail"><img src="images/icon-envelope-small.png" class="icon">laserstudio.esthetic@gmail.com</a>
									<a href="tel:096 041 22 50" class="phone"><img src="images/icon-phone-small.png" class="icon">096 041 22 50</a>
                                    <a href="tel:097-444-62-33" class="phone"><img src="images/icon-phone-small.png" class="icon">097-444-62-33</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Мы в соцсетях</h3>

								<div class="social-links">
									<a href="https://www.facebook.com/groups/284527012010425"><i class="fa fa-facebook"></i></a>
									<a href="https://vk.com/club60594951"><i class="fa fa-vk"></i></a>

								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Наши партнеры</h3>
								<img src="images/partners.jpg">



							</div>
						</div>
					</div>

					<div class="colophon">
						<p>Copyright <?php echo date(Y);?> </p>
					</div>
				</div>
			</footer>

<a href="#0" class="cd-top">Top</a>



		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

<script>
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
</script>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'oWt1v68u2I';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>