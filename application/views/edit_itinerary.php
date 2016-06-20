<form class="col s12" action="<?=base_url()?>index.php/paket/do_edit_itinerary" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Title" id="title" type="text" class="validate" name="title" value="<?=$title_itinerary?>" required>
      <input type="hidden" name="id_paket" value="<?=$id_paket?>">
      <input type="hidden" name="id" value="<?=$id?>">
      <label for="title">Title</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input placeholder="Sequence" id="sequence" type="number" class="validate" name="sequence" value="<?=$sequence?>" required>
      <label for="sequence">Sequence</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <h5>Detail</h5><br/>
      <textarea id="detail" name="detail" class="materialize-textarea ckeditor"><?=$detail?></textarea>
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