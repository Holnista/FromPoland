{extends "../layout.tpl"}

{block "content"}
	<section class="slider" data-type="main" id="top">
		<ul class="lightslider" data-index="{microtime(1)}">
			{foreach from = array_values($slides) item = slide key = index}
				{assign "extension" strtolower(end(explode('.', $slide['file'])))}	
				<li class="slider-slide" style="background-image: url('{$slide['data']['image']}');">
					{if !in_array($extension, ['mp4', 'mov', 'webm'])}<img src="{$slide['data']['image']}" class="d-none" alt="{$slide['file']}" title="{$slide['file']}">
					{else}<video autoplay muted loop><source src="{$slide['data']['image']}" type="video/{$extension}"></video>{/if}
					<div class="slider-slide-cover">
						<div class="container">
							<div class="row justify-content-center align-items-center">
								<div class="col-12 col-md-8">
									{if $slide['text']}
										<div class="tinymce" data-aos="fade-up">
											{$slide['text']}
										</div>
									{else}
										{assign "page" $pages['header'][4]}
										<div class="row justify-content-center align-items-center">
											<div class="col-12 col-md-6 my-2" data-aos="fade-up" data-aos-delay="250">
												<a href="{$base->language}/event" class="slider-slide-cover-button">
													<span>{$t['EVENTS']}</span>
												</a>
											</div>
											{if $page}
												<div class="col-12 col-md-6 my-2" data-aos="fade-up" data-aos-delay="500">
													<a href="{$base->language}/page/{$page['alias']}" class="slider-slide-cover-button">
														<span>{$page['title']}</span>
													</a>
												</div>
											{/if}
										</div>
									{/if}
								</div>
							</div>
						</div>
					</div>
				</li>
			{/foreach}
		</ul>
		{if count($slides) > 1}
			<div class="slider-controls">
				<div class="slider-controls-arrows">
					<div class="slider-controls-arrows-arrow left">
						<i data-icon="expand">
							<img src="public/images/template/icons/expand.svg" width="16">
						</i>
					</div>
					<div class="slider-controls-arrows-arrow right">
						<i data-icon="expand">
							<img src="public/images/template/icons/expand.svg" width="16">
						</i>
					</div>
				</div>
				<div class="slider-controls-pager">
					<ul>
						{foreach from = array_values($slides) item = slide key = index}
							<li {if !$index}class="active"{/if}><a>{$index+1}</a></li>
						{/foreach}
					</ul>
				</div>
			</div>
		{/if}
	</section>
	{if $pages['home']}
		{assign "page" array_shift($pages['home'])}
		{foreach from = array_values($page['text']) item = section key = index}
			{if $section['file'] || $section['title'] || $section['content']}
				<section class="{($section['background']) ? $section['background'] : 'light'} padding">
					<div class="container">
						<div class="row justify-content-center align-items-center">
							<div class="col-12 col-sm {$section['width']}">
								{if $section['title']}
									<div class="section-header {if $section['content']}mb-5{/if}">
										<h1 class="section-header-title" data-aos="fade-up">
											<span>{$section['title']}</span>
										</h1>
									</div>
								{/if}
								{if $section['content']}
									<div class="tinymce" data-aos="fade-up">
										{$section['content']}
									</div>
								{/if}
							</div>
						</div>
					</div>
				</section>
			{/if}
		{/foreach}
	{/if}
	{if $pages['home']}
		{assign "page" array_shift($pages['home'])}
		<section class="light padding">
			<div class="container">
				<section class="tiles margin">
					<div class="row justify-content-center align-items-center">
						{foreach from = array_values($page['text']) item = section key = index}
							<div class="col-12 {$section['width']}" data-aos="fade-up" data-aos-delay="{($index%3)*250}">
								<div class="tiles-tile {$section['background']}">
									<div class="tiles-tile-picture">
										<img src="{PATH_IMAGES}/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer d-none d-md-block">
										<img src="{PATH_IMAGES}/template/7x5.png" alt="sizer" class="tiles-tile-picture-sizer d-block d-md-none">
										<div class="tiles-tile-picture-cover">
											{if $section['file']}
												<img src="{$section['file']}" alt="{$section['file']}" width="82" class="d-none d-md-none d-lg-block">
												<img src="{$section['file']}" alt="{$section['file']}" width="41" class="d-block d-md-block d-lg-none">
											{/if}
											{if $section['title'] || $section['content']}
												<div class="tinymce px-3 px-md-0 {if $section['file']}my-2 my-lg-3{/if}">
													{if $section['title']}
														<h6>
															<b>{$section['title']}</b>
														</h6>
													{/if}
													{if $section['content']}
														<p>&nbsp;</p>
														{$section['content']}
													{/if}
												</div>
											{/if}
										</div>
									</div>
								</div>
							</div>
						{/foreach}
					</div>
				</section>
			</div>
		</section>
	{/if}
	<section class="light padding" style="background: transparent;">
		<div class="container">
			<section class="tiles shadow">
				<div class="tiles-tile">
					<div class="tiles-tile-picture" data-parallax="scroll" data-position-x="right" data-image-src="{PATH_IMAGES}/template/parallax.jpg">
						<div class="tiles-tile-picture-cover py-3 py-md-5 my-md-4" style="position: initial;">
							<div class="container">
								<div class="row">
									<div class="col-12 col-md-7 col-lg-4 ml-auto">
										<div class="tinymce" style="text-align: left; line-height: 1.25;" data-aos="fade-left">
											<center class="d-block d-md-none"><h4>{$t['HOME_SLOGAN']}</h4></center>
											<h2 class="d-none d-md-block">{$t['HOME_SLOGAN']}</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
	{if $pages['home']}
		{assign "page" array_shift($pages['home'])}
		<section class="light padding">
			<div class="container">
				<div class="section-header margin">
					<div class="section-header-title" data-aos="fade-up">
						<span>{assign "title" explode(' ', clear($page['title']))}
						{assign "last" array_pop($title)}{implode(' ', $title)}
						<b>{$last}</b></span>
					</div>
				</div>
				<section class="tiles">
					<div class="row justify-content-center align-items-start">
						{foreach from = array_values($page['text']) item = section key = index}
							<div class="col-12 {$section['width']} {if $index}mt-5 mt-md-0{/if}" data-aos="fade-up" data-aos-delay="{($index%3)*250}">
								{if $section['file']}
									<div class="row justify-content-center">
										<div class="col-8 col-md-12">
											<div data-mouse-parallax>
												<div class="tiles-tile heart {if $section['background']}p-3 p-md-5 {$section['background']}{/if}" data-depth="0.2">
													<div class="tiles-tile-picture">
														<img src="{PATH_IMAGES}/template/1x1.png" alt="sizer" class="tiles-tile-picture-sizer">
														<div class="tiles-tile-picture-image" style="background-image: url('{$section['file']}');"></div>
													</div>
												</div>
												<div class="tiles-tile-picture-cover" data-depth="0.4">
													<i data-icon="sygnet" style="animation-duration: {rand(3, 7)}s">
														<img src="{PATH_IMAGES}/template/sygnet.svg" alt="sygnet">
													</i>
												</div>
											</div>
										</div>
									</div>
								{/if}
								{if $section['title'] || $section['content']}
									<center class="tinymce {if $section['file']}mt-3{/if}">
										{if $section['title']}
											<h6 class="dark">
												<b>{$section['title']}</b>
											</h6>
										{/if}
										{if $section['content']}
											<p>&nbsp;</p>
											{$section['content']}
										{/if}
									</center>
								{/if}
							</div>
						{/foreach}
					</div>
				</section>
			</div>
		</section>
	{/if}
	{if $events}
		<section class="light padding pb-5">
			<div class="container">
				<div class="section-header margin">
					<div class="section-header-title" data-aos="fade-up">
						<span>{assign "title" explode(' ', clear($t['UPCOMING_EVENTS']))}
						{assign "last" array_pop($title)}{implode(' ', $title)}
						<b>{$last}</b></span>
					</div>
				</div>
				<section class="tiles">
					<section class="slider" data-type="events">
						<ul class="lightslider" data-index="{microtime(1)}">
							{foreach from = array_values($events) item = event key = index}
								<li class="slider-slide">
									{include "../addons/event.tpl"}
								</li>
							{/foreach}
						</ul>
						{if count($events) > 3}
							<div class="slider-controls">
								<div class="slider-controls-pager mt-5">
									<ul class="d-none d-md-none d-lg-flex">
										{foreach from = array_values($events) item = event key = index}
											{if $index%3 == 0}<li {if !$index}class="active"{/if}><a>{$index/3}</a></li>{/if}
										{/foreach}
									</ul>
									<ul class="d-none d-md-flex d-lg-none">
										{foreach from = array_values($events) item = event key = index}
											{if $index%2 == 0}<li {if !$index}class="active"{/if}><a>{$index/2}</a></li>{/if}
										{/foreach}
									</ul>
									<ul class="d-flex d-md-none d-lg-none">
										{foreach from = array_values($events) item = event key = index}
											{if $index%1 == 0}<li {if !$index}class="active"{/if}><a>{$index/1}</a></li>{/if}
										{/foreach}
									</ul>
								</div>
							</div>
						{/if}
					</section>
				</section>
				<div class="row justify-content-center mt-5">
					<div class="col-12 col-md-4" data-aos="fade-up">
						<a href="{$base->language}/event" class="btn accent ghost">
							<span>{$t['SEE_MORE']}</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	{/if}
	<section class="shade py-5">
		<div class="container">
			<div class="section-header mb-4">
				<div class="section-header-title" data-aos="fade-up" data-aos-delay="100">
					<span>{$t['NEWSLETTER']}</span>
				</div>
				<div class="section-header-subtitle" data-aos="fade-up" data-aos-delay="200">
					<span>{$t['NEWSLETTER_TEXT']}</span>
				</div>
			</div>
			<form method="POST" action="{$base->language}/newsletter" class="form" id="newsletterForm">
				<div class="row justify-content-center align-items-center no-gutters">
					<div class="col-8 col-sm-5 pr-3" data-aos="fade-up" data-aos-delay="300">
						<div class="form-field animated">
							<input autocomplete="false" name="hidden" type="text" style="display: none;">
							<input type="email" name="email" minlength="6" maxlength="64" class="form-input dark" placeholder="{$t['NEWSLETTER_EMAIL']}" required>
							<label class="form-label">{$t['NEWSLETTER_EMAIL']}</label>
						</div>
					</div>
					<div class="col-4 col-sm-3 pl-0 pl-md-3" data-aos="fade-up" data-aos-delay="400">
						<button type="submit" class="btn accent ghost">
							<span>{$t['NEWSLETTER_JOIN']}</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>
{/block}

{block "footer"}
	<script src="/{PATH_PUBLIC}/vendor/validate/jquery.validate.min.js"></script>
	<script src="/{PATH_PUBLIC}/vendor/validate/additional-methods.min.js"></script>
	<script src="/{PATH_PUBLIC}/vendor/validate/localization/messages_{$base->language}.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script>
		//----- Parallax
		var sceneElements = document.querySelectorAll("[data-mouse-parallax]"), parallaxScenes = [];
		for(var i = 0; i < sceneElements.length; i++) { parallaxScenes.push(new Parallax(sceneElements[i])) }
		
		//----- Validate form
		$("#newsletterForm").validate(
		{
			errorPlacement: function(error, element)
			{
				error.insertBefore(element);
			}
		});
	</script>
{/block}