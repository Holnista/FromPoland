<?php
/* Smarty version 3.1.40, created on 2022-01-02 09:33:18
  from 'D:\wamp\www\Sztorm\system\views\back\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61d1715eb95aa1_95703344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aafbbdfe1fca39d0a9fb764f8e1c77d6b4db6a41' => 
    array (
      0 => 'D:\\wamp\\www\\Sztorm\\system\\views\\back\\home\\index.tpl',
      1 => 1640770791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d1715eb95aa1_95703344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206138997561d1715eadb1e0_03621534', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210942384861d1715eb921d7_23260939', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_206138997561d1715eadb1e0_03621534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_206138997561d1715eadb1e0_03621534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row h-100 no-gutters">
		<?php if ($_smarty_tpl->tpl_vars['count']->value) {?>
			<div class="col-12 col-xl-4 d-flex flex-column">
				<div class="row flex-grow-1 no-gutters">
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-user-circle-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['admins'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['ADMINS'];?>
</h6>
								<a href="admins" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-users"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['clients'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['CLIENTS'];?>
</h6>
								<a href="clients" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-calendar-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['events'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['EVENTS'];?>
</h6>
								<a href="events" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-ticket"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['coupons'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['COUPONS'];?>
</h6>
								<a href="coupons" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-envelope-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['emails'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['EMAILS'];?>
</h6>
								<a href="emails" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-rocket"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['logs'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['ENTRIES'];?>
</h6>
								<a href="logs" class="btn rounded btn-sm btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		<div class="col-12 col-md p-2">
			<div class="card shadow-sm">
				<div class="card-body bg-light">
					<span class="lead position-absolute"><?php echo $_smarty_tpl->tpl_vars['t']->value['ACTIVITY'];?>
</span>
					<canvas id="logs" height="154"></canvas>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['events']->value) {?>
				<table class="table table-bordered table-hover table-sm mt-3 mb-0">
					<thead>
						<tr>
							<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</th>
							<th class="text-left d-none d-xl-table-cell"><?php echo $_smarty_tpl->tpl_vars['t']->value['DATE'];?>
</th>
						</tr>
					</thead>
					<tbody class="small">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['events']->value), 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
							<tr>
								<td class="text-left" data-order="<?php echo clear($_smarty_tpl->tpl_vars['event']->value['title']);?>
">
									<div class="row flex-column flex-xl-row align-items-center no-gutters flex-nowrap">
										<div class="col-auto mr-2 d-none d-xl-block">
											<?php if (!$_smarty_tpl->tpl_vars['event']->value['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['image'];?>
" data-fancybox="events" data-caption="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
">
													<img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
" class="img-thumbnail p-0" width="48">
												</a>
											<?php }?>
										</div>
										<div class="col">
											<b><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</b><?php if ($_smarty_tpl->tpl_vars['event']->value['subtitle']) {?><br>
											<small class="text-muted"><?php echo truncate(clear($_smarty_tpl->tpl_vars['event']->value['subtitle']),80);?>
</small><?php }?>
										</div>
										<div class="col-auto ml-auto text-right">
											<?php if ($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']) {?>
												<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['promotion']);?>
</b><br>
												<small class="text-muted"><s><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</s></small>
											<?php } elseif ($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']) {?>
												<b class="text-success"><?php echo price($_smarty_tpl->tpl_vars['event']->value['others']['price']['basic']);?>
</b>
											<?php } else { ?>
												<span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['t']->value['PREORDER'];?>
</span>
											<?php }?>
										</div>
									</div>
								</td>
								<td class="text-right d-none d-xl-table-cell" data-order="<?php echo $_smarty_tpl->tpl_vars['event']->value['date']['day'];?>
">
									<b><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['event']->value['date']['day']));?>
</b><br>
									<small class="text-muted"><?php echo sprintf('%s - %s',$_smarty_tpl->tpl_vars['event']->value['date']['start'],$_smarty_tpl->tpl_vars['event']->value['date']['end']);?>
</small>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			<?php }?>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_210942384861d1715eb921d7_23260939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_210942384861d1715eb921d7_23260939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		new Chart(document.getElementById("logs").getContext("2d"),
		{
			type: "line",
			data: {
				labels: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['count']->value['chart'], 'value', false, 'date');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>"<?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['date']->value));?>
",<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
				datasets: [{ data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['count']->value['chart'], 'value', false, 'date');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['date']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>"<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
",<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>],
				backgroundColor: "rgba(199, 24, 31, 0.5)", borderColor: "<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
", borderWidth: 3, fill: true,
				cubicInterpolationMode: "monotone" }]
			},
			options:
			{
				responsive: true,
				maintainAspectRatio: false,
				plugins:
				{
					legend:
					{
						display: false
					}
				},
				layout:
				{
					padding:
					{
						top: 32
					}
				},
				scales:
				{
					x:
					{
						display: false,
						ticks:
						{
							display: false
						}
					},
					y:
					{
						display: false,
						ticks:
						{
							display: false,				
						}
					}
				}
			}
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "footer"} */
}
