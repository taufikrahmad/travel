<br/>
<a href="<?=base_url()?>index.php/paket/insert_itinerary/<?=$id?>" class="waves-effect waves-light btn blue">Add</a>
<table>
	<thead>
		<th >Sequence</th>
		<th width="40%">Title</th>
		<th width="40%">Action</th>
	</thead>
	<tbody>
		<?php foreach($itinerary as $key =>$itr){ ?>
			<tr>
				<td><?=$itr->sequence?></td>
				<td><?=$itr->title?></td>
				<td>
					<a class="waves-effect waves-light btn orange" href="<?=base_url()?>paket/edit_itinerary/<?=$id?>/<?=$itr->id?>">Edit</a>
					<a class="waves-effect waves-light btn red" href="<?=base_url()?>paket/delete_itinerary/<?=$id?>/<?=$itr->id?>">Delete</a>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>