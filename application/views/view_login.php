<?php $this->load->view('plugins');?>
<div class="row container"><br/><br/>
	<div class="card col s8">
    <div class="card-image waves-effect waves-block waves-light">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">
      	Login<i class="material-icons right">more_vert</i>
      </span><br/><br/><br/>
      <form action="<?=base_url()?>/index.php/home/login" method="post">
      		<div class="row">
		        <div class="input-field col s8">
		          <input placeholder="Username" id="username" type="text" name="username" class="validate">
		          <label for="username">Username</label>
		        </div>
		        <div class="input-field col s8">
		          <input placeholder="Password" id="password" type="password" name="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		        <div class="input-field col s8 right">
		          <button class="waves-effect waves-light btn" type="submit">OK</button>
		        </div>
		    </div>
      </form>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>
