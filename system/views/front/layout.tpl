<!DOCTYPE html>
<html lang="{$base->language}">
	<head>
		<base href="/">
		<meta charset="{$base->ENCODING}">
		<meta name="author" content="{$base->NAME}">
		<meta name="theme-color" content="{$base->COLOR}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="{truncate(clear($base->meta['keys']))}">
		<meta name="description" content="{truncate(clear($base->meta['desc']))}">
		<link rel="icon" type="image/x-icon" href="/{PATH_IMAGES}/template/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>{$base->NAME}{if strlen($base->meta['title'])} - {$base->meta['title']}{/if}</title>
		
		<meta property="og:url" content="{truncate(clear($base->share['url']))}">
		<meta property="og:type" content="{truncate(clear($base->share['type']))}">
		<meta property="og:title" content="{truncate(clear($base->share['title']))}">
		<meta property="og:image" content="{truncate(clear($base->share['image']), 256)}">
		<meta property="og:description" content="{truncate(clear($base->share['desc']))}">
		
		<link href="/{PATH_PUBLIC}/vendor/aos/aos.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/selectric/selectric.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/fancybox/fancybox.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/lightslider/lightslider.min.css" rel="stylesheet">
		<link href="/{PATH_STYLES}/css/front.min.css?v={$base->VERSION}" rel="stylesheet">
		{block "header"}{/block}
		
		<!-- Messenger Wtyczka czatu Code -->
		<div id="fb-root"></div>

		<!-- Your Wtyczka czatu code -->
		<div id="fb-customer-chat" class="fb-customerchat"></div>

		{literal}
			<script>
				var chatbox = document.getElementById('fb-customer-chat');
				chatbox.setAttribute("page_id", "110706908038420");
				chatbox.setAttribute("attribution", "biz_inbox");
				window.fbAsyncInit = function() { FB.init({
				xfbml: true, version : 'v12.0' }); };

				(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return; js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
				fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));
			</script>
			
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-9WH1XR2N5X"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-9WH1XR2N5X');
				gtag('config', 'AW-10780719998');
			</script>
		{/literal}
	</head>
	<body>
		{if !$blank}
			<div id="loader">
				<img src="{PATH_IMAGES}/template/logo-vertical.svg" alt="{$config->NAME}" width="219">
			</div>
		{/if}
		<div class="wrapper">
			{if !$blank}
				{assign "URL" explode('/', trim($base->PATH, '/'))}
				<header class="header">
					<div class="header-holder">
						<div class="container">
							<div class="row justify-content-between align-items-center flex-nowrap">
								<div class="col-auto">
									<div class="header-logo">
										<a href="{$base->language}" class="header-logo-link">
											<img src="{PATH_IMAGES}/template/logo.svg" alt="{$base->NAME}" title="{$base->NAME}" width="347.7">
										</a>
									</div>
								</div>
								<div class="col-auto col-xl d-flex justify-content-center">
									<nav class="header-menu">
										<div class="header-menu-element">
											<a href="{$base->language}" class="header-menu-element-link {if !$URL[1]}active{/if}">
												<span>{$t['HOME']}</span>
											</a>
										</div>
										<div class="header-menu-element">
											<a href="{$base->language}/event" class="header-menu-element-link {if $URL[1] == 'event'}active{/if}">
												<span>{$t['EVENTS']}</span>
											</a>
										</div>
										{foreach from = array_values($pages['header']) item = page}
											<div class="header-menu-element">
												<a href="{$base->language}/page/{$page['alias']}" class="header-menu-element-link 
												{if $URL[1] == 'page' && $URL[2] == $page['alias']}active{/if}">
													<span>{clear($page['title'])}</span>
												</a>
											</div>
										{/foreach}
										<!--div class="header-menu-element">
											<a href="{$base->language}/event" class="header-menu-element-link {if $URL[1] == 'blog'}active{/if}">
												<span>{$t['BLOG']}</span>
												<sup>BETA</sup>
											</a>
										</div-->
									</nav>
									<div class="header-burger d-block d-md-none">
										<span></span>
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<nav class="header-widget">
										<div class="header-widget-element">
											<a href="https://www.facebook.com/Hello-Stranger-110706908038420" target="_blank" rel="noopener nofollow" class="header-widget-element-link">
												<i data-icon="facebook">
													<img src="{PATH_IMAGES}/template/icons/facebook.svg" alt="facebook" width="16">
												</i>
											</a>
										</div>
										<div class="header-widget-element">
											<a href="https://www.instagram.com/hellostranger.io/" target="_blank" rel="noopener nofollow" class="header-widget-element-link">
												<i data-icon="instagram">
													<img src="{PATH_IMAGES}/template/icons/instagram.svg" alt="instagram" width="16">
												</i>
											</a>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</header>
				<main>
					{block "content"}{/block}
				</main>
				<footer class="footer">
					<div class="footer-holder">
						<div class="container">
							<div class="row justify-content-center align-items-end align-items-md-center">
								<div class="col-12 col-md-2 mb-3 mb-md-0" style="z-index: 1;" data-aos="fade-right" data-aos-delay="100">
									<div class="form">
										<div class="form-select">
											<select name="subject" class="form-input selectric dark" onchange="window.location.href=$(this).val()" required>
												{foreach from = array_values($base->languages) item = language}
													<option value="{$language}/{implode('/', array_slice($URL, 1))}" {if $base->language == $language}selected{/if}>
														{if $language == 'pl'}{if $base->language == 'pl'}Polski{else}Polish{/if}{/if}
														{if $language == 'en'}{if $base->language == 'pl'}Angielski{else}English{/if}{/if}
													</option>
												{/foreach}
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-5" data-aos="fade-right" data-aos-delay="200">
									<nav class="footer-menu">
										{foreach from = array_values($pages['footer']) item = page}
											<div class="footer-menu-element">
												<a href="{$base->language}/page/{$page['alias']}" class="footer-menu-element-link
												{if $URL[1] == 'page' && $URL[2] == $page['alias']}active{/if}">
													<span>{clear($page['title'])}</span>
												</a>
											</div>
										{/foreach}
										<div class="footer-menu-element">
											<a href="{$base->language}/contact" class="footer-menu-element-link {if $URL[1] == 'contact'}active{/if}">
												<span>{$t['CONTACT']}</span>
											</a>
										</div>
										<div class="footer-menu-element">
											<a href="{$base->language}/faq" class="footer-menu-element-link {if $URL[1] == 'faq'}active{/if}">
												<span>{$t['FAQ']}</span>
											</a>
										</div>
									</nav>
								</div>
								<div class="col-6 col-md-auto ml-auto" data-aos="fade-right" data-aos-delay="300">
									<div class="tinymce">
										<span>© {date('Y')} <b>{$base->NAME}.</b> {$t['COPYRIGHT']}</span><br>
										<a href="https://kodigo.pl" class="footer-kodigo-link" title="Crafted by KODIGO" target="_blank">
											<img src="https://kodigo.pl/images/footers/kodigo-black-full.png" alt="Crafted by KODIGO" width="106">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			{else}
				<main>
					{block "content"}{/block}
				</main>
			{/if}
		</div>
		{block "modal"}{/block}
		<script>paceOptions = { ajax: false, document: false, 
		restartOnRequestAfter: false, restartOnPushState: false }
		var CookiesInfo = { background: "{$base->COLOR}" };</script>
		<script src="/{PATH_PUBLIC}/vendor/aos/aos.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/pace/pace.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/jquery/jquery.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/mask/jquery.mask.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/fancybox/fancybox.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/selectric/selectric.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/lightslider/lightslider.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/jquery.validate.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/additional-methods.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/localization/messages_{$base->language}.min.js"></script>
		<script src="/{PATH_SCRIPTS}/front.js?v={$base->VERSION}"></script>
		{block "footer"}{/block}
	</body>	
</html>