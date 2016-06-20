<form class="col s12" action="<?=base_url()?>index.php/paket/do_edit/<?=$id?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Nama Paket" id="nama_paket" type="text" class="validate" name="nama_paket" value="<?=$nama_paket?>">
          <label for="nama_paket">Nama Paket</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="menu_group" id="menu_group" onchange="setFirstSub()" required>
            <option value="" disabled selected>Choose your option</option>
            <?php foreach($option_group as $group){?>
              <option value="<?=$group->code?>" <?=$menu_group == $group->code ? 'selected' : ''?>><?=$group->name?></option>
            <?php } ?>
          </select>
          <select name="first_sub" id="first_sub" required>
            <?php foreach($option_country_province as $cp){?>
              <option value="<?=$cp->id?>" <?=$country_province == $cp->id ? 'selected' : ''?>><?=$cp->nama?></option>
            <?php } ?>   
          </select>
          <label>Kategori</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="currency" required>
            <option value="" disabled selected>Choose your option</option>
            <option value="IDR" <?=$currency == 'IDR' ? 'selected' : '' ?>>IDR</option>
            <option value="USD" <?=$currency == 'USD' ? 'selected' : '' ?>>USD</option>
            <option value="EUR" <?=$currency == 'EUR' ? 'selected' : '' ?>>EUR</option>
          </select>
          <label>Currency</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Price" id="price" type="number" class="validate" name="price" value="<?=$price?>">
          <label for="price">Price</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Minimum Person" id="person" type="number" class="validate" name="person" value="<?=$person?>">
          <label for="person">Minimum Person</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <h5>Description</h5><br/>
          <textarea id="description" name="description" class="materialize-textarea ckeditor"><?=$description?></textarea>
        </div>
      </div><br/><br/>
      <div class="row">
        <div class="input-field col s12">
          <h5>Package Description</h5><br/>
          <textarea id="package" name="package" class="materialize-textarea ckeditor"><?=$package?></textarea>
        </div>
      </div><br/><br/>
      <!-- <div class="file-field input-field">
          <div class="btn">
            <span>UPLOAD GAMBAR</span>
            <input type="file" name="img" multiple >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
          </div>
      </div>
     --> 
     <div class="row">
        <p>
          <input type="checkbox" id="is_active" name="is_active" <?=$is_active == 1 ? 'checked' : ''?> />
          <label for="is_active" ><strong>Active</strong></label>
        </p>
     </div><br/>
     <div class="row">
        <h5>Pricing Rules</h5>
        <table>
          <thead>
            <tr>
              <th width="5%">No</th>
              <th width="15%">Hotel Name</th>
              <th width="15%">Minimum Pax</th>
              <th width="15%">Maximum Pax</th>
              <th width="15%">Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($harga_paket as $key => $val) {
              $no = $key+1?>
            <tr>
              <td><?=$no?><input type="hidden" name="pricing[<?=$key?>][id_harga]" value="<?=$val->id_harga?>"></td>
              <td><input type="text" name="pricing[<?=$key?>][hotel]" placeholder="Hotel Name" value="<?=$val->hotel?>"></td>
              <td><input type="number" name="pricing[<?=$key?>][pax_min]" placeholder="Minimum Pax" value="<?=$val->pax_min?>"></td>
              <td><input type="number" name="pricing[<?=$key?>][pax_max]" placeholder="Maximum Pax" value="<?=$val->pax_max?>"></td>
              <td><input type="text" name="pricing[<?=$key?>][price_pax]" placeholder="Price" value="<?=$val->price?>"></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
     </div>
     <div class="row center">
        <button class="waves-effect waves-light btn" type="submit">OK</button> 
     </div>
</form>

<script type="text/javascript">
  function setFirstSub(){
    var menu_group = $('#menu_group').val();
    $('#first_sub').material_select();
    $("#first_sub").empty().html(' ');
    $("#first_sub").attr('disabled', false);
    $.get("<?=base_url()?>paket/get_first_sub/"+menu_group, function(data) {
        var json = $.parseJSON(data);
        $(json).each(function(index, item) {
            $("#first_sub").append(
              $("<option></option>").attr("value",item.id).text(item.nama)
            );  
        });

        $('#first_sub').material_select('update');
        $("#first_sub").closest('.input-field').children('span.caret').remove();
    });
  }
</script>