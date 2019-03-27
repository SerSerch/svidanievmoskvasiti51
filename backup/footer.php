<div id="form">
	<div class="formblock">
		<a href="javascript:void(0);" class="closeform cwhite"><span></span><span></span></a>
		<div class="formhere">
			<p class="formtitle bold">Оставьте заявку <br>и мы свяжемся с вами <br class="hidden-sm hidden-md hidden-lg">удобным <br class="hidden-xs">для вас способом</p>
			<?php echo do_shortcode( '[contact-form-7 id="7" title="Контактная форма 1"]' ); ?>
		</div>
		<div class="thankshere">
			<p class="thanksp">Спасибо! Ваша заявка принята, <br>и наш менеджер перезвонит <br>вам в ближайшее время</p>
		</div>
	</div>
</div>
<footer>
	<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-7"></div>
				<div class="col-sm-8 col-md-5">
					<div class="footblock">
						<h2 class="bold">Остались вопросы?</h2>
						<p class="asktitle bold">Не нашли предложение, которое <br class="hidden-sm">подходит вам по цене? <br><span>Хотите расширить <br class="hidden-sm hidden-md hidden-lg">стандартный пакет?</span></p>
						<p class="asktext">Оставьте вашу заявку, чтобы мы <br class="hidden-sm hidden-md hidden-lg">могли развеять ваши <br class="hidden-xs">сомнения и <br class="hidden-sm hidden-md hidden-lg">подготовить подходящий именно <br class="hidden-sm hidden-md hidden-lg">вам вариант</p>
						<a href="tel:89969526507"><button formtheme="Позвонить" class="btn2 bold">Позвонить</button></a>
					</div>
				</div>
			</div>
			<div class="footmenu">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<a href="mailto:praimlimited@yandex.ru" class="bold cwhite"><br class="hidden-sm hidden-md hidden-lg">praimlimited@yandex.ru</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						<a href="call:89969526507" class="bold cwhite"><br class="hidden-sm hidden-md hidden-lg">8 (996) 952-65-07</a>
					</div>
					<div class="col-xs-12 col-sm-3">
						<p class="footlogo bold cwhite">Свидания <br class="hidden-xs">в Москва-Сити</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<p class="footadres bold cwhite">г. Москва, Пресненская набережная, 8, стр. 1</p>
					</div>
				</div>
			</div>
			<div class="socials">
				<a href="https://vk.com/svidaniesity"><img src="<?php echo bloginfo('template_directory') ?>/img/icons/vk.svg" alt="vkontakte"></a>
				<a href="https://www.instagram.com/moscow.city.romantik/"><img src="<?php echo bloginfo('template_directory') ?>/img/icons/ig.svg" alt="instagram"></a>
			</div>
		</div>
		<script type="text/javascript">
			$('#form a.closeform').click(function(){
				$('#form').hide();
				$('#form .formblock').removeClass('nowthanks');
				$('#form .thankshere').hide();
				$('#form .formhere').show();
			});
			$(function(){$("a[href^='#']").click(function(){
					var _href = $(this).attr("href");
					$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
					return false;
			}); });
			$('button.openform').click(function(){
				$('#form').show();
				console.log($(this).attr('formtheme'));
			});
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				$('#form .formhere').hide();
				$('#form .thankshere').show();
				$('#form .formblock').addClass('nowthanks');
			}, false );
		</script>
	</footer>

<div class="video-box">
    <div class="video-btn"></div>
    <video class="videos" controls="controls" src="http://svidanievmoskvasiti51.ru/wp-content/themes/msksvidanka/City51.mp4"></video>
</div>

	<!— Yandex.Metrika counter —>
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(52834120, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/52834120" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!— /Yandex.Metrika counter —>

	<script src="<?php echo bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
	<script>
		const openVideo = function() {
        document.querySelector('.video-box').classList.add('_play');
        document.querySelector('.videos').play();
    };

    const closeVideo = function() {
        document.querySelector('.video-box').classList.remove('_play');
        document.querySelector('.videos').pause();
    };
    
    document.querySelector('#playvideo').addEventListener('click', openVideo);
    document.querySelector('.video-btn').addEventListener('click', closeVideo);
	</script>
</body>
</html>