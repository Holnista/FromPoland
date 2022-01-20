<div class="d-flex align-self-center ml-auto languages">
	{foreach from = array_values($base->languages) item = language}
		<li class="nav-item">
			<a class="nav-link {if $base->language == $language}active{/if}" data-toggle-language="{$language}">
				<img src="/{PATH_IMAGES}/template/icons/flags/{$language}.png">
			</a>
		</li>
	{/foreach}
</div>