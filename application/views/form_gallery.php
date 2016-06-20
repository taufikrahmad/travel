<br/><br/><br/>
<form class="col s12" action="<?=base_url()?>index.php/paket/do_insert_gallery" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_paket" value="<?=$id?>">
  <div class="file-field input-field">
    <div class="btn">
      <span>Select Your Picture</span>
      <input type="file" name="pict" required>
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>
  <br/><br/><br/>
  <div class="row center">
    <button class="waves-effect waves-light btn" type="submit">OK</button> 
 </div>
</form>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>index.php/paket/edit/<?=$id?>">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>

<br/><br/><br/><br/><br/><br/>