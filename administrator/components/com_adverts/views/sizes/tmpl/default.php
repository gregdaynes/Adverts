<?php ?>

<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<?= @helper('behavior.tooltip'); ?>

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
    <table class="adminlist">
		<thead>
			<tr>
				<th width="5%"></th>
				<th>
				    <?= @helper('grid.sort', array('column' => 'name', 'title' => 'Size')); ?>
				</th>
			</tr>
			<tr>
			    <td align="center">
			        <?= @helper( 'grid.checkall'); ?>
			    </td>
			    <td></td>
			    <td align="center"> 
			        <?= @helper('listbox.published', array('name' => 'enabled')); ?>
			    </td>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="2">
				    <?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach ($sizes as $size) : ?>
				<tr>
					<td align="center">
						<?= @helper('grid.checkbox', array('row' => $size)); ?>
					</td>
					<td>
						<?= @escape($size->name); ?>
					</td>
					<td>
						<?= @escape($size->enabled); ?>
					</td>
				</tr>
			<? endforeach; ?>
			
			<? if (!count($sizes)) : ?>
				<tr>
				    <td colspan="2" align="center">
				    	<?= @text('No Sizes Found'); ?>
				    </td>
				</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>