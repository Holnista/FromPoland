{extends "../blocks/block.tpl"}

{block "content"}
	<div class="title badge badge-info rounded p-2">Rozwijany tekst</div>
	<fieldset>
		{foreach from = $base->languages item = language}
			<div data-language="{$language}">
				<input type="text" name="{$field}[value][0][{$language}]" value="{$block['value'][0][$language]}" 
				class="form-control form-control-lg" placeholder="{$t['TITLE']}" data-target="#{$id}_settings" data-toggle="collapse">
				<div id="{$id}_settings" class="accordion-collapse collapse">
					<div class="accordion-body mt-1">
						<textarea name="{$field}[value][1][{$language}]" class="form-control">
						{$block['value'][1][$language]}</textarea>
					</div>
				</div>
			</div>
		{/foreach}
	</fieldset>
{/block}