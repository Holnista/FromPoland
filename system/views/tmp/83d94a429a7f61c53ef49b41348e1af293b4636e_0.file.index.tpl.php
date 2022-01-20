<?php
/* Smarty version 3.1.39, created on 2021-08-27 09:22:45
  from 'D:\wamp\www\HelloStranger\system\views\back\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128aee5e7c7e2_85579739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d94a429a7f61c53ef49b41348e1af293b4636e' => 
    array (
      0 => 'D:\\wamp\\www\\HelloStranger\\system\\views\\back\\home\\index.tpl',
      1 => 1629879354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128aee5e7c7e2_85579739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4265047176128aee5d9df86_82224703', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20734622126128aee5e607b7_26791031', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layout.tpl");
}
/* {block "content"} */
class Block_4265047176128aee5d9df86_82224703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4265047176128aee5d9df86_82224703',
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
								<a href="admins" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
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
								<a href="clients" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-comments-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['tickets'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['TICKETS'];?>
</h6>
								<a href="tickets" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-file-text-o"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['documents'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['DOCUMENTS'];?>
</h6>
								<a href="files" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-6 p-2">
						<div class="card shadow-sm text-center h-100">
							<div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
								<h1 class="card-title text-primary mb-3"><i class="fa fa-money"></i></h1>
								<h6 class="card-subtitle mb-3 text-muted"><?php echo $_smarty_tpl->tpl_vars['count']->value['payments'];?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value['PAYMENTS'];?>
</h6>
								<a href="payments" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
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
								<a href="logs" class="btn btn-sm rounded btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['t']->value['SHOW'];?>
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
			<?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
				<table class="table table-bordered table-hover table-sm mt-3 mb-0">
					<thead>
						<tr>
							<th class="text-left d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['t']->value['TITLE'];?>
</th>
							<th class="text-right"><?php echo $_smarty_tpl->tpl_vars['t']->value['AMOUNT'];?>
</th>
							<th class="text-left"><?php echo $_smarty_tpl->tpl_vars['t']->value['CLIENT'];?>
</th>
							<th class="text-right d-none d-md-table-cell" width="150"><?php echo $_smarty_tpl->tpl_vars['t']->value['ISSUED'];?>
</th>
						</tr>
					</thead>
					<tbody class="small">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_values($_smarty_tpl->tpl_vars['payments']->value), 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
							<tr>
								<td class="text-left d-none d-md-table-cell">
									<div class="row align-items-center no-gutters flex-nowrap">
										<div class="col-auto mr-2">
											<img src="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['file']['icon'];?>
" width="32">
										</div>
										<div class="col">
											<?php if ($_smarty_tpl->tpl_vars['payment']->value['file'] && is_file($_smarty_tpl->tpl_vars['payment']->value['data']['file']['source'])) {?>
												<a class="text-body" href="<?php echo $_smarty_tpl->tpl_vars['base']->value->PATH;?>
/download/<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['key'];?>
"><b>
												<?php echo $_smarty_tpl->tpl_vars['payment']->value['title'] ? truncate($_smarty_tpl->tpl_vars['payment']->value['title'],60) : NO_DATA;?>
</b></a><br>
												<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['payment']->value['file'] ? $_smarty_tpl->tpl_vars['payment']->value['file'] : NO_DATA;?>
</small>
											<?php } else { ?>
												<span class="text-body" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['ERROR_FILE_NOT_EXISTS'];?>
">
												<b><?php echo $_smarty_tpl->tpl_vars['payment']->value['title'] ? truncate($_smarty_tpl->tpl_vars['payment']->value['title'],60) : NO_DATA;?>
</b></span><br>
												<span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['payment']->value['file'] ? $_smarty_tpl->tpl_vars['payment']->value['file'] : NO_DATA;?>
</span>
											<?php }?>
										</div>
										<div class="col-auto ml-auto">
											<?php if ($_smarty_tpl->tpl_vars['payment']->value['readed']) {?>
												<span class="badge badge-success badge-sm badge-dot" data-toggle="tooltip" title="<?php echo sprintf('%s:<br> %s',$_smarty_tpl->tpl_vars['t']->value['DOWNLOADED'],date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['payment']->value['readed'])));?>
">
													<i class="fa fa-download text-light"></i>
												</span>
											<?php } else { ?>
												<span class="badge badge-light badge-sm badge-dot" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['t']->value['NOT_DOWNLOADED'];?>
">
													<i class="fa fa-eye-slash text-dark"></i>
												</span>
											<?php }?>
										</div>
									</div>
								</td>
								<td class="text-right">
									<span class="text-nowrap <?php echo $_smarty_tpl->tpl_vars['payment']->value['paid'] ? 'text-success' : 'text-danger';?>
">
										<b><?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['display'];?>
</b>
									</span>
								</td>
								<td class="text-left" width="200">
									<div class="row align-items-center no-gutters flex-nowrap">
										<div class="col-auto mr-2">
											<?php if (!$_smarty_tpl->tpl_vars['payment']->value['data']['client']['file']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['data']['thumb'];?>
" class="img-thumbnail" width="48"><?php } else { ?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['data']['image'];?>
" data-fancybox="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-caption="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['title'];?>
">
													<img src="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['data']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['title'];?>
" class="img-thumbnail" width="48">
												</a>
											<?php }?>
										</div>
										<div class="col">
											<b><?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['title'];?>
</b><br>
											<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['payment']->value['data']['client']['subtitle'];?>
</small>
										</div>
									</div>
								</td>
								<td class="text-right d-none d-md-table-cell">
									<b><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['payment']->value['issued']));?>
</b><br>
									<small class="text-muted"><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['payment']->value['deadline']));?>
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
class Block_20734622126128aee5e607b7_26791031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20734622126128aee5e607b7_26791031',
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
				backgroundColor: "rgba(144, 51, 193, 0.5)", borderColor: "<?php echo $_smarty_tpl->tpl_vars['base']->value->COLOR;?>
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
