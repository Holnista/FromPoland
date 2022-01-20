<!DOCTYPE html>
<html lang="{$base->language}">
	<head>
		<base href="/admin/">
		<meta charset="{$base->ENCODING}">
		<meta name="author" content="{$base->NAME}">
		<meta name="theme-color" content="{$base->COLOR}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" type="image/x-icon" href="/{PATH_IMAGES}/template/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CMS - {$base->NAME}{if strlen($base->meta['title'])} - {$base->meta['title']}{/if}</title>
		
		<link href="/{PATH_PUBLIC}/vendor/toastr/toastr.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/fancybox/fancybox.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/typeahead/typeahead.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/fontawesome/fontawesome.min.css" rel="stylesheet">
		<link href="/{PATH_PUBLIC}/vendor/aos/aos.min.css" rel="stylesheet">
		<link href="/{PATH_STYLES}/css/back.min.css" rel="stylesheet">
		{block "header"}{/block}
	</head>
	<body>
		<div id="loader">
			<div class="spinner-border text-white">
				<span class="sr-only">{$t['LOADING']}...</span>
			</div>
		</div>
		{assign "grow" "d-flex flex-column flex-grow-1"}
		<div class="wrapper {if !$blank}py-3 py-md-5{/if}">
			{if !$blank}
				{assign "url" explode('/', trim($base->PATH, '/'))}
				{assign "first" array_shift($url)}
				<header class="mb-3" {if !$url}data-aos="fade-down"{/if}>
					<div class="container-fluid px-xl-5">
						<nav class="navbar navbar-dark p-0 d-block d-md-flex">
							<div class="d-flex justify-content-between align-items-center">
								<a href="" class="navbar-brand d-flex align-items-center">
									<span class="badge badge-danger p-2 mr-3">CMS</span>
									{$base->NAME}
								</a>
								<button class="navbar-toggler rounded d-block d-md-none" 
								type="button" data-toggle="collapse" data-target="#sidebar">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
							<div class="ml-md-auto mt-3 mt-md-0 d-flex justify-content-end align-items-center">
								<div class="navbar-text mx-3 p-0 text-right" style="line-height: 1;">
									<strong class="text-light">{$me['personal']['name']} {$me['personal']['surname']}</strong><br>
									<small>{$me['email']}</small>
								</div>
								<a href="logout" class="btn rounded btn-outline-light mr-2">
									<span>{$t['SIGNOUT']}</span>
								</a>
								<a href="/" target="_blank" class="btn rounded btn-danger">
									<i class="fa fa-desktop"></i>
								</a>
							</div>
						</nav>
					</div>
				</header>
				<main>
					<div class="container-fluid px-xl-5">
						<div class="row no-gutters flex-md-nowrap">
							<div class="col-xs-12 col-md-4 col-lg-3 pr-0 pr-md-2 mb-3 mb-md-0 collapse d-md-block" id="sidebar">
								<div class="card overflow-hidden" {if !$url}data-aos="fade-right" data-aos-delay="250"{/if}>	
									<div class="list-group-flush sidebar">	
										<a href="" class="list-group-item list-group-item-action {if !$url}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-tachometer"></i>
											</div>
											<span>{$t['DASHBOARD']}</span>
										</a>
										<a href="admins" class="list-group-item list-group-item-action {if !in_array('admins', $me['permissions'])}disabled{/if} {if in_array(current($url), ['admins'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-user-circle-o"></i>
											</div>
											<span>{$t['ADMINS']}</span>
										</a>
										<a href="employees" class="list-group-item list-group-item-action {if !in_array('employees', $me['permissions'])}disabled{/if} {if in_array(current($url), ['employees'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-users"></i>
											</div>
											<span>{$t['EMPLOYEES']}</span>
										</a>
										<a href="slides" class="list-group-item list-group-item-action {if !in_array('slides', $me['permissions'])}disabled{/if} {if in_array(current($url), ['slides'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-picture-o"></i>
											</div>
											<span>{$t['SLIDES']}</span>
										</a>
										<a href="galleries" class="list-group-item list-group-item-action {if !in_array('galleries', $me['permissions'])}disabled{/if} {if in_array(current($url), ['galleries'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-camera"></i>
											</div>
											<span>{$t['GALLERIES']}</span>
										</a>
										<a href="pages" class="list-group-item list-group-item-action {if !in_array('pages', $me['permissions'])}disabled{/if} {if in_array(current($url), ['pages'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-file-o"></i>
											</div>
											<span>{$t['PAGES']}</span>
										</a>
										<a href="categories" class="list-group-item list-group-item-action {if !in_array('categories', $me['permissions'])}disabled{/if} {if in_array(current($url), ['categories'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-list"></i>
											</div>
											<span>{$t['CATEGORIES']}</span>
										</a>
										<a href="emails" class="list-group-item list-group-item-action {if !in_array('emails', $me['permissions'])}disabled{/if} {if in_array(current($url), ['emails'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-envelope-o"></i>
											</div>
											<span>{$t['EMAILS']}</span>
										</a>
										<a href="logs" class="list-group-item list-group-item-action {if !in_array('logs', $me['permissions'])}disabled{/if} {if in_array(current($url), ['logs'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-history"></i>
											</div>
											<span>{$t['LOGS']}</span>
										</a>
										<a href="translates" class="list-group-item list-group-item-action {if !in_array('translates', $me['permissions'])}disabled{/if} {if in_array(current($url), ['translates'])}active{/if}">
											<div class="list-group-item-icon mr-3">
												<i class="fa fa-language"></i>
											</div>
											<span>{$t['TRANSLATES']}</span>
										</a>
									</div>
								</div>
							</div>
							<div class="{$grow} col-12 col-md pl-0 pl-md-2">
								<div class="{$grow} card" data-aos="fade" {if !$url}data-aos-delay="500"{/if}>
									<div class="{$grow} bg-white p-3">
										{block "content"}{/block}
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
				<footer class="mt-3">
					<div class="container-fluid px-xl-5">
						<div class="row justify-content-between align-items-center no-gutters">
							<div class="col-auto offset-0 offset-md-4 offset-lg-3 pl-2">
								<small class="text-right text-uppercase text-muted">
									<small>Powered by KODIGO</small>
								</small>
							</div>
							<div class="col-auto">
								<small class="text-right text-uppercase text-muted">
									<small>v. {$base->VERSION}</small>
								</small>
							</div>
						</div>
					</div>
				</footer>
			{else}
				<main class="{$grow}">
					{block "content"}{/block}
				</main>
			{/if}
		</div>
		{block "modal"}{/block}
		<script src="/{PATH_PUBLIC}/vendor/aos/aos.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/jquery/jquery.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/toastr/toastr.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/mask/jquery.mask.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/fancybox/fancybox.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/typeahead/typeahead.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/jquery.validate.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/additional-methods.min.js"></script>
		<script src="/{PATH_PUBLIC}/vendor/validate/localization/messages_{$base->language}.min.js"></script>
		<script src="/{PATH_SCRIPTS}/back.js?v={$base->VERSION}"></script>
		{if $notifies}
			{foreach from = array_values($notifies) item = notify}
				<script>$(document).ready(function() {
				{if count($notify) < 3}toastr.{$notify[0]}("{$notify[1]}");
				{else}toastr.{$notify[0]}("{$notify[2]}", "{$notify[1]}");{/if} });
				</script>
			{/foreach}
		{/if}
		{block "footer"}{/block}
	</body>
</html>