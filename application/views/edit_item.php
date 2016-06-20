<form class="col s12" action="<?=base_url()?>index.php/paket/do_edit_item" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Item Name" id="item_name" type="text" class="validate" name="item_name" value="<?=$item_name?>" required>
      <input type="hidden" name="id_paket" value="<?=$id_paket?>">
      <input type="hidden" name="id" value="<?=$id?>">
      <label for="title">Title</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <select name="status" required>
        <option value="" disabled selected>Choose your option</option>
        <option value="INCLUDE" <?=$status == 'INCLUDE' ? 'selected' : ''?>>INCLUDE</option>
        <option value="EXCLUDE" <?=$status == 'EXCLUDE' ? 'selected' : ''?>>EXCLUDE</option>
      </select>
      <label>Status</label>
    </div>
  </div>
  <div class="row center">
    <button class="waves-effect waves-light btn" type="submit">OK</button> 
 </div>
</form>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>index.php/paket/edit/<?=$id_paket?>">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>