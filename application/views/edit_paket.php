 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#general">GENERAL</a></li>
        <li class="tab col s3"><a href="#itinerary">ITINERARY</a></li>
        <li class="tab col s3"><a href="#gallery">GALLERY</a></li>
        <li class="tab col s3"><a href="#item">ITEM</a></li>
      </ul>
    </div>
    <div id="general" class="col s12">
        <?php $this->load->view('edit_paket_general');?>  
    </div>
    <div id="itinerary" class="col s12">
        <?php $this->load->view('view_paket_itinerary');?>
    </div>
    <div id="gallery" class="col s12">
        <?php $this->load->view('view_paket_gallery');?>
    </div>
    <div id="item" class="col s12">
        <?php $this->load->view('view_paket_item');?>
    </div>
</div>


<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large waves-effect waves-light orange" href="<?=base_url()?>index.php/paket">
    <i class="large material-icons">navigate_before</i>
  </a>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'general');
  });  
</script>