<?PHP
	$this->load->view('front_header_v');
?>
<main id="main" style="margin-top:7%">
    <div class="inner-top">
        <div class="container">
            <h1 class="inner-main-heading">YOUR CART</h1>
            <!--
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><span>Cart</span></li>
                </ul>
            </nav>
            -->
        </div>
    </div>
    <div class="inner-main common-spacing container">
		<?php echo form_open('Cart/UpdateCart'); ?>
        <div class="cart-holder table-container">
            <div class="table-responsive">
                <table class="table table-hover table-align-right">
                    <thead>
                        <tr>
                            <th>
                            &nbsp;
                            </th>
                            <th>
                                <strong class="date-text">Selected Package</strong>
                            </th>
                            <th>
                                <strong class="date-text">Price (PP)</strong>
                                <span class="sub-text">Updated Today</span>
                            </th>
							<th>
								<strong class="date-text">No. of People</strong>
								<span class="sub-text">Including Children</span>
							</th>
                            <th>
                                <strong class="date-text">Total Price</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
						<?php $i=1;?>
						<?php foreach ($this->cart->contents() as $items){ ?>
						<?php echo form_hidden($i.'[rowid]',$items['rowid']);?>
                        <tr>
                            <td>
                                <div class="cell">
                                    <div class="middle">
										<?php echo anchor('Cart/Delete/'. $items["rowid"],'<span class="icon-trash"></span>',array('class'=>'delete'));?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <div class="info">
                                            <div class="img-wrap">
                                                <!-- <img src="<?php echo base_url(); ?>/assets/img/listing/img-40.jpg" height="240" width="350" alt="image description"> -->
                                            </div>
                                            <div class="text-wrap">
												<?php 
													$curr = "";
													$price = 0;
													$min = 0;
													$max = 0;
													$payment = "";
												foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
												{
													if($option_name=="currency"){
														$curr = $option_value;
													}elseif($option_name=="coupon"){
														$coupon = $option_value;
													}elseif($option_name=="min"){
														$min = $option_value;
													}elseif($option_name=="max"){
														$max = $option_value;
													}elseif($option_name=="payment"){
														$payment = ucfirst($option_value);
													} 
												}										
												?>
                                                <strong class="product-title"><?php echo $items['name']; ?></strong>
                                                <time class="time" datetime="2016-11-05">
													<?php
														$mydate=getdate(date("U"));
														echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
													?>
													<br />
													<?=$payment?>
												</time>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="middle">
										<?php
											$price = $items['price'];
											if($payment!="full"){
												$price = $items['price'] / 2;
											}
										?>
                                        <span class="price"><?=$curr.' '.$price;?> </span>
                                    </div>
                                </div>
                            </td>
							<td>
								<div class="cell">
									<div class="middle">
										<div class="num-hold">
										<input type="number" min="<?=$min?>" max="<?=$max?>" name="<?="qty".$i;?>" value="<?=$items['qty'];?>" class="qty-number form-control">
										</div>
									</div>
								</div>
                            <td>
                                <div class="cell">
                                    <div class="middle">
                                        <span class="price"><?=$curr.' '.$items['qty']*$price;?></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
						<?php
							$i++;
						}
						?>
                    </tbody>
                </table>
            </div>
            <div class="cart-option">
                <div class="coupon-hold">
                    <div class="submit-wrap">
                        <div class="submit-wrap">
							<input type="submit" name="coupon" class="btn btn-default" value="APPLY COUPON">
						</div>
						<div class="input-hold">
							<input type="text" name="coupon_code" class="form-control">
						</div>
                    </div>
                </div>
                <div class="button-hold">
					<?php echo anchor(base_url(),'Continue Shopping',array('class'=>'btn btn-sm btn-primary'));?>
					<?php
						if(number_format($CartItems)>0){
					?>
					<?php echo anchor('Checkout','CHECKOUT',array('class'=>'btn btn-default'));?>
					<input type="submit" class="btn btn-default" value="UPDATE CART">
					<?php
					}
					?>
                    
                </div>
            </div>
        </div>
		<?php form_close();?>
    </div>
</main>
<?PHP
	$this->load->view('front_footer_v');
?>