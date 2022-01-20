{extends "../layout.tpl"}

{block "content"}
	<section class="padding">
		<div class="container">
			<div class="section-header">
				<div class="section-header-title my-4">
					{if !$title}{assign "title" $base->get('ERROR.code')}{/if}
					<span>{assign "title" explode(' ', clear($title))}
					{assign "last" array_pop($title)}{implode(' ', $title)}
					<b>{$last}</b></span>
				</div>
				<div class="section-header-subtitle my-4">
					<i>{($text) ? $text : $base->get('ERROR.status')}</i>
				</div>
			</div>
		</div>
	</section>
{/block}