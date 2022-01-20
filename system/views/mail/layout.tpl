<!DOCTYPE>
<html style="margin: 0; padding: 0;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<style>
			a, #content a {
				font-weight: bold;
				color: {$base->COLOR} !important;
				text-decoration: none !important;
			}
		</style>
	</head>
	<body id="body" style="box-sizing: border-box; margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #F5F5F5;">
		<div id="wrapper" style="box-sizing: border-box; font-family: 'Open Sans', Helvetica, Arial; font-weight: 400; font-size: 0.875rem; color: #000000; line-height: 1.5; width: 100%; padding: 4rem 1rem;">
			<div id="content" style="box-sizing: border-box; margin: 0 auto; background: #FFFFFF; max-width: 960px; border: 1px solid #DDDDDD;">
				<table width="100%" style="background-color: #FFFFFF; color: {$base->COLOR}; border-bottom: 1px solid #DDDDDD;">
					<tr>
						<td align="left" style="padding: 1rem 2rem;">
							<div style="font-weight: bold; font-size: 1rem;">{$base->NAME} - {block "title"}No subject{/block}</div>
							<div style="font-size: 0.75rem;">{$t['RECIPIENT']}: <span>{block "recipient"}No recipient{/block}</span></div>
						</td>
						<td align="right" style="padding: 1rem 2rem; background: white;">
							<a href="{PATH_BASE}" target="_blank" rel="noopener">
								<img src="{PATH_BASE}/{PATH_IMAGES}/template/sygnet.png" width="64" alt="{$base->NAME}" title="{$base->NAME}">
							</a>
						</td>
					</tr>
				</table>
				<div style="padding: 2rem; background: #FFFFFF;">
					{block "content"}No content{/block}
				</div>
				{block "bottom"}
					<div style="padding: 1rem 2rem; border-top: 1px solid #D7D7D7; font-size: 0.75rem; color: grey;">
						{$t['MAIL_REGARDS']}
					</div>
				{/block}
			</div>
			<center id="footer" style="box-sizing: border-box; margin: 0 auto; padding: 1rem 0; color: grey; font-size: 0.75rem; text-align: center;">
				{block "footer"}{sprintf($t['MAIL_FOOTER'], PATH_BASE, $base->NAME)}{/block}
			</center>
		</div>
	</body>
</html>