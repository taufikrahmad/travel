<br/>
<a href="<?=base_url()?>index.php/paket/insert_gallery/<?=$id?>" class="waves-effect waves-light btn blue">Add</a>
<table>
	<thead>
		<th >No</th>
		<th width="40%">Picture</th>
		<th width="40%">Action</th>
	</thead>
	<tbody>
		<?php foreach($gallery as $key =>$gal){ 
			$no = $key + 1;
		?>
			<tr>
				<td><?=$no?></td>
				<td>
					<img src="<?=base_url()?>assets/img/<?=$gal->pict?>?>" width="200px" />
				</td>
				<td>
					<a class="waves-effect waves-light btn orange" href="<?=base_url()?>paket/edit_gallery/<?=$id?>/<?=$gal->id?>">Edit</a>
					<a class="waves-effect waves-light btn red" href="<?=base_url()?>paket/delete_gallery/<?=$id?>/<?=$gal->id?>">Delete</a>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>