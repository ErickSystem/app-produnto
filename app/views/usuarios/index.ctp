<div class="usuarios index">
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idUsuario');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('cpf');?></th>
			<th><?php echo $this->Paginator->sort('senha');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('endereco');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th><?php echo $this->Paginator->sort('permissao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['Usuario']['idUsuario']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['nome']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['cpf']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['senha']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['email']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['endereco']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['telefone']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['permissao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usuario['Usuario']['idUsuario'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usuario['Usuario']['idUsuario'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usuario['Usuario']['idUsuario']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['idUsuario'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?></li>
	</ul>
</div>