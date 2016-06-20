<br/>
<a href="<?=base_url()?>index.php/paket/insert_item/<?=$id?>" class="waves-effect waves-light btn blue">Add</a>
<table>
	<thead>
		<th >No</th>
		<th width="30%">Item Name</th>
		<th width="20%">Status</th>
		<th width="40%">Action</th>
	</thead>
	<tbody>
		<?php foreach($item as $key =>$itm){ 
			$no = $key + 1;
		?>
			<tr>
				<td><?=$no?></td>
				<td><?=$itm->item_name?></td>
				<td><?=$itm->status?></td>
				<td>
					<a class="waves-effect waves-light btn orange" href="<?=base_url()?>paket/edit_item/<?=$id?>/<?=$itm->id?>">Edit</a>
					<a class="waves-effect waves-light btn red" href="<?=base_url()?>paket/delete_item/<?=$id?>/<?=$itm->id?>">Delete</a>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>