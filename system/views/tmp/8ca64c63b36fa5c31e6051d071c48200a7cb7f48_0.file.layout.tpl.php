<?php
/* Smarty version 3.1.39, created on 2021-10-08 12:33:04
  from '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61601e601843e7_75571712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca64c63b36fa5c31e6051d071c48200a7cb7f48' => 
    array (
      0 => '/home/klient.dhosting.pl/kodigo/hellostranger.kodigo.pl/public_html/system/views/mail/layout.tpl',
      1 => 1633382313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61601e601843e7_75571712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE>
<html style="margin: 0; padding: 0;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<style>
			a, #content a {
				font-weight: bold;
				color: <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
 !important;
				text-decoration: none !important;
			}
		</style>
	</head>
	<body id="body" style="box-sizing: border-box; margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #F5F5F5;">
		<div id="wrapper" style="box-sizing: border-box; font-family: 'Open Sans', Helvetica, Arial; font-weight: 400; font-size: 0.875rem; color: #000000; line-height: 1.5; width: 100%; padding: 4rem 1rem;">
			<div id="content" style="box-sizing: border-box; margin: 0 auto; background: #FFFFFF; max-width: 960px; border: 1px solid #DDDDDD;">
				<table width="100%" style="background-color: #FFFFFF; color: <?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
; border-bottom: 1px solid #DDDDDD;">
					<tr>
						<td align="left" style="padding: 1rem 2rem;">
							<div style="font-weight: bold; font-size: 1rem;"><?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
 - <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74223538661601e6017eb75_70754952', "title");
?>
</div>
							<div style="font-size: 0.75rem;"><?php echo $_smarty_tpl->tpl_vars['t']->value['RECIPIENT'];?>
: <span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88174198061601e6017f995_37776448', "recipient");
?>
</span></div>
						</td>
						<td align="right" style="padding: 1rem 2rem; background: white;">
							<a href="<?php echo PATH_BASE;?>
" target="_blank" rel="noopener">
								<img src="<?php echo PATH_BASE;?>
/<?php echo PATH_IMAGES;?>
/template/sygnet.png" width="64" alt="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
" title="<?php echo $_smarty_tpl->tpl_vars['base']->value->NAME;?>
">
							</a>
						</td>
					</tr>
				</table>
				<div style="padding: 2rem; background: #FFFFFF;">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179438260861601e601812d7_88669682', "content");
?>

				</div>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15224133161601e60181b59_99566349', "bottom");
?>

			</div>
			<center id="footer" style="box-sizing: border-box; margin: 0 auto; padding: 1rem 0; color: grey; font-size: 0.75rem; text-align: center;">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28309935461601e60182898_17774329', "footer");
?>

			</center>
		</div>
	</body>
</html><?php }
/* {block "title"} */
class Block_74223538661601e6017eb75_70754952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_74223538661601e6017eb75_70754952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No subject<?php
}
}
/* {/block "title"} */
/* {block "recipient"} */
class Block_88174198061601e6017f995_37776448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'recipient' => 
  array (
    0 => 'Block_88174198061601e6017f995_37776448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No recipient<?php
}
}
/* {/block "recipient"} */
/* {block "content"} */
class Block_179438260861601e601812d7_88669682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_179438260861601e601812d7_88669682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content<?php
}
}
/* {/block "content"} */
/* {block "bottom"} */
class Block_15224133161601e60181b59_99566349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_15224133161601e60181b59_99566349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div style="padding: 1rem 2rem; border-top: 1px solid #D7D7D7; font-size: 0.75rem; color: grey;">
						<?php echo $_smarty_tpl->tpl_vars['t']->value['MAIL_REGARDS'];?>

					</div>
				<?php
}
}
/* {/block "bottom"} */
/* {block "footer"} */
class Block_28309935461601e60182898_17774329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_28309935461601e60182898_17774329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo sprintf($_smarty_tpl->tpl_vars['t']->value['MAIL_FOOTER'],PATH_BASE,$_smarty_tpl->tpl_vars['base']->value->NAME);
}
}
/* {/block "footer"} */
}
