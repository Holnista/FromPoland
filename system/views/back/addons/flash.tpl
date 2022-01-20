<div class="{$grow} justify-content-center align-items-center bg-light px-3 py-5 rounded text-center h-100">
	{if $flash['title']}
		<h4 class="my-2">{$flash['title']}</h4>
	{/if}
	{if $flash['lead']}
		<p class="lead my-2">
			{if $flash['lead']['icon']}
				<i class="fa fa-{$flash['lead']['icon']}"></i>
			{/if} {$flash['lead']['content']}
		</p>
	{/if}
	{if $flash['text']}
		<p class="text-muted my-2">{$flash['text']}</p>
	{/if}
	{if $flash['button']}
		<a href="{$flash['button']['link']}" class="btn rounded px-3 btn-primary my-2">
			<span>{$flash['button']['content']}</span>
		</a>
	{/if}
</div>