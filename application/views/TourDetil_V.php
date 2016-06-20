<?PHP
	$this->load->view('front_header_v');
?>
<main id="main">
	<section class="container-fluid trip-info" style="margin-top: 7%;">
    <div class="same-height two-columns row">
        <div class="height col-md-6">
            <div id="tour-slide">
                <div class="slide">
                    <div class="bg-stretch">
                        <img src="<?php echo base_url();?>assets/img/generic/img-17.jpg" alt="image descriprion" height="1104" width="966">
                    </div>
                </div>
                <div class="slide">
                    <div class="bg-stretch">
                        <img src="<?php echo base_url();?>assets/img/generic/img-07.jpg" alt="image descriprion" height="1104" width="966">
                    </div>
                </div>
            </div>
        </div>
        <div class="height col-md-6 text-col">
            <form class="holder" action="<?=base_url().'/index.php/Cart/buy'?>" method="post" id="CartForm">
                <h1 class="small-size"><?=$nama_paket?></h1>
                <div class="price">
                    <strong><?=$currency." "?></strong><strong id="PriceContainer"><?=$price?></strong>
                </div>
                <div class="description">
                    <p></p>
                </div>
                <div class="holder">
					<label for="destination1" style="color:red">Trip Quota * </label>
					<div class="select-holder">
						<select id="accomodation" name="accomodation" class="trip dark" id="destination1">
							<option value=""> -- Choose Accomodation Type </option>
							<?php
								foreach ($Matrix_prices as $key => $row) {
							?>
								<option value="<?=$row->pax_min.'-'.$row->pax_max.'-'.$row->price?>"><?=$row->pax_min.' - '.$row->pax_max.' - '.$currency." ".$row->price?></option>
							<?php
								}
							?>
						</select>
					</div>
				</div>
				<div class="holder">
					<label for="numb" style="color:red">Number of People</label>
					<input type="number" id="numb" class="form-control" name="qty" style="border-color:saddlebrown"/>
					<input type="hidden" readonly="readonly" id="name" class="form-control" name="package" style="border-color:saddlebrown" value="<?=$id_paket?>"/>
					<span id="alertMax" style="color:red;display:none">Your number of people is not covered by this quota</span>
				</div>
				<ul style="list-style-type:none;text-align:left">
					<li>
						<header class="title">
							<label class="custom-radio">
								<input type="radio" name="pay" value="full" checked>
									<span class="check-input"></span>
									<span class="check-label">Full Payment</span>
							</label>
						</header>
						<div class="info-hold">
						</div>
					</li>
					<li>
						<header class="title">
							<label class="custom-radio">
								<input type="radio" name="pay" value="installmet">
								<span class="check-input"></span>
								<span class="check-label">Installment Payment</span>
							</label>
						</header>
						<div class="info-hold">
						</div>
					</li>
				</ul>
                <div class="btn-holder" style="margin-top:5%;">
					<input type="button" id="SaveCart" value="BOOK NOW" class="btn btn-lg btn-info" />
                </div>
            </div>
        </div>
    </div>
</section>
<div class="tab-container">
    <nav class="nav-wrap" id="sticky-tab">
        <div class="container">
            <ul class="nav nav-tabs text-center" role="tablist">
                <li role="presentation" class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Overview</a></li>
                <li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Itinerary</a></li>
                <li role="presentation"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Gallery</a></li>
                <li role="presentation"><a href="#tab06" aria-controls="tab06" role="tab" data-toggle="tab">Dates &amp; Price</a></li>
            </ul>
        </div>
    </nav>
    <div class="container tab-content trip-detail">
        <div role="tabpanel" class="tab-pane active" id="tab01">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <strong class="header-box"><?=$nama_paket?></strong>
                    <div class="detail">
                        <?=$desc?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <strong class="header-box">Include Items</strong>
                    <div class="text-box">
                        <div class="holder">
                            <ul class="content-list tick-list">
								<?php
									foreach ($items as $key => $row) {
										if($row->status=="INCLUDE"){
								?>
                                <li><?=$row->item_name?></li>
								<?php
										}
									}
								?>
                            </ul>
                        </div>
                    </div>
                    <div class="text-box not-included">
                        <div class="holder">
                            <strong class="title">Daftar Exclude</strong>
                            <ul class="content-list cross-list">
                                <?php
									foreach ($items as $key => $row) {
										if($row->status=="EXCLUDE"){
								?>
                                <li><?=$row->item_name?></li>
								<?php
										}
									}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab02">
            <div class="row">
                <div class="col-md-6">
                    <ol class="detail-accordion">
                        <li>
                            <a href="#">
                                <strong class="title">Day 1</strong>
                                <span>Depart London</span>
                            </a>
                            <div class="slide">
                                <div class="slide-holder">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ctetur, adipisci velit, sed quia non numquam eius modi.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <strong class="title">Day 2</strong>
                                <span>Arrive in Kathmandu</span>
                            </a>
                            <div class="slide">
                                <div class="slide-holder">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ctetur, adipisci velit, sed quia non numquam eius modi.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <strong class="title">Day 3</strong>
                                <span>Leave for Pokhara</span>
                            </a>
                            <div class="slide">
                                <div class="slide-holder">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ctetur, adipisci velit, sed quia non numquam eius modi.</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab05">
            <ul class="row gallery-list has-center">
                <li class="col-sm-6">
                    <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg" title="Caption Goes Here">
                        <span class="img-holder">
                            <img src="<?php echo base_url();?>assets/img/gallery/img-10.jpg" height="750" width="450" alt="image description">
                        </span>
                        <span class="caption">
                            <span class="centered">
                                <strong class="title">ANNAPURNA VIEW</strong>
                            <span class="sub-text">The Classic Trek</span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab06">
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-striped">
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<?PHP
	$this->load->view('front_footer_v');
?>
<script type="text/javascript">
	$("#accomodation").change(function(){
		if($("#accomodation").val() != "" && $("#accomodation").val() != null){
			var price = $("#accomodation").val().split('-');
			console.log(price[2]);
			$("#PriceContainer").text(price[2]);
		}
	});
	$("#SaveCart").click(function(){
		var flag = true;
		
		if($("#accomodation").val() == "" || $("#accomodation").val() == null){
			$("#accomodation").css("border-color","red");
			alert("Please choose quota of this trip");
			flag=false;
		}
		
		if($("#numb").val() == "" || $("#numb").val() == null){
			$("#numb").css("border-color","red");
			flag=false;
		}else{
			var ex = eval($("#numb").val());
			var acc = $("#accomodation").val().split('-');
			var bb = eval(acc[0]);
			var ba = 999999;
			if(acc[1]!=""){
				ba = eval(acc[1]);
			}
			if(ex < bb || ex > ba){
				flag = false;
				$("#alertMax").css("display","");
			}else{
				$("#alertMax").css("display","none");
			}
		}

		
		if(flag==true){
			$("#CartForm").submit();
		}
	});
</script>