		<table class="responsive-table bordered" id="table-paket">
			<thead>
				<tr>
					<th width="5%">No</th>
					<th width="20%">Nama Paket</th>
					<th width="20%">Kategori</th>
					<th width="20%">Harga</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach ($paket as $key => $row) {
					$no = $key + 1;
			?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row->nama_paket?></td>
					<td><?=$row->group_name?></td>
					<td><?=$row->currency?> <?=number_format($row->price,2)?></td>
					<td>
						<a class="waves-effect waves-light btn orange" href="<?=base_url()?>index.php/paket/edit/<?=$row->id?>" type="submit">Edit</a>
						<a class="waves-effect waves-light btn red" href="<?=base_url()?>index.php/paket/delete/<?=$row->id?>" type="submit">Delete</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</tbody>
		</table>
		<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url()?>index.php/paket/insert">
		      <i class="large material-icons">add</i>
		    </a>
	    </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table-paket').dataTable();
	});
</script>