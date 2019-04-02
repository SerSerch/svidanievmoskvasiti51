<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Свидания в Москве</title>
	<link rel="icon" type="image/png" href="/wp-content/themes/msksvidanka/favicon.png">
	<link href="/wp-content/themes/msksvidanka/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/wp-content/themes/msksvidanka/main.css?v=2" rel="stylesheet" type="text/css"/>
	<script src="/wp-content/themes/msksvidanka/js/jquery-3.3.1.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>
	<!— Facebook Pixel Code —> 
<script> 
!function(f,b,e,v,n,t,s) 
{if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; 
n.queue=[];t=b.createElement(e);t.async=!0; 
t.src=v;s=b.getElementsByTagName(e)[0]; 
s.parentNode.insertBefore(t,s)}(window, document,'script', 
'https://connect.facebook.net/en_US/fbevents.js'); 
fbq('init', '1222043264614651'); 
fbq('track', 'PageView'); 
</script> 
<noscript><img height="1" width="1" style="display:none" 
src="https://www.facebook.com/tr?id=1222043264614651&ev=PageVi" 
/></noscript> 
<!— End Facebook Pixel Code —>
	<div id="pagetop"></div>
	<header>
    <div class="container">
        <div class="col-xs-4 col-sm-12 col-lg-2 logonamecont">
            <div class="hidden-sn hidden-md hidden-lg mobmenubtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="hidden-xs col-sm-6 col-lg-12 nopadmd nopadsm nopadlg">
                <p class="bold mb0 cwhite logoname">Свидания <br class="hidden-sm">в Москва-Сити</p>
            </div>
            <div class="col-sm-6 hidden-xs hidden-lg nopadsm">
                <a href="tel:89969526507" class="cwhite bold headtel">8(996)952-65-07</a>
            </div>
        </div>
        <div class="hidden-xs col-sm-12 col-lg-8 navcont">
            <nav><ul>
                <li><a class="cwhite bold" href="#aparts">Апартаменты</a></li>
                <li><a class="cwhite bold" href="#skylevel">Интерьер и декор</a></li>
                <li><a class="cwhite bold" href="#steps">Описание услуги</a></li>
                <li><a class="cwhite bold" href="#emotions">Выбор даты</a></li>
                <li><a class="cwhite bold" href="#sertif"><span class="hidden-md hidden-sm">Подарочный</span> <span class="hidden-md hidden-sm">c</span><span class="hidden-lg">C</span>ертификат</a></li>
            </ul></nav>
        </div>
        <div class="hidden-sm hidden-md col-xs-8 col-lg-2 xstar">
            <a href="tel:89969526507" class="cwhite bold headtel">8(996)952-65-07</a>
        </div>
    </div>
</header>
	<div id="mobmenu">
		<div class="links">
			<a href="#aparts" class="cwhite bold bg">Апартаменты</a>
			<a href="#skylevel" class="cwhite bold">Интерьер и декор</a>
			<a href="#steps" class="cwhite bold bg">Описание услуги</a>
			<a href="#emotions" class="cwhite bold">Выбор даты</a>
			<a href="#sertif" class="cwhite bold bg">Подарочный сертификат</a>
		</div>
		<a href="#" class="mobmenuhide">
			<span></span><span></span>
		</a>
	</div>
	<a href="#pagetop" id="vverh"><img src="<?php echo bloginfo('template_directory') ?>/img/icons/up.png" alt="↑"></a>
	<script>
			$(window).scroll(function(){
				if($(window).scrollTop() > $(window).height()) { $('#vverh').show(); }
				else { $('#vverh').hide(); }
			});
			$('.mobmenubtn').click(function(){$('#mobmenu').toggle()});
		$('#mobmenu a').click(function(){$('#mobmenu').hide()});
	</script>