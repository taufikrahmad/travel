<?PHP
	$this->load->view('front_header_v');
?>
<main style="margin-top:7%;">
<div class="inner-top">
    <div class="container">
        <h1 class="inner-main-heading">Checkout</h1>
 
        <nav class="breadcrumbs">
            <ul>
                
            </ul>
        </nav>
    </div>
</div>
<div class="inner-main common-spacing container">
    <form class="booking-form" action="<?php echo base_url()?>index.php/Checkout/Confirm" method="post">
        <div class="row same-height">
            <div class="col-md-6">
                <div class="top-box">
                    <a href="#" class="holder height">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="top-box">
                        <a href="#" class="holder height">
                        
                        </a>
                    </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-6">
                        <div class="form-holder">
                            <h2 class="small-size">Billing Information</h2>
                            <div class="wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hold">
                                            <label for="name">First Name</label>
                                            <input type="text" name="first_name" id="name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hold">
                                            <label for="lname">Last Name</label>
                                            <input type="text" name="last_name" id="lname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="hold">
                                    <label for="cname">Company Name</label>
                                    <input type="text" id="cname" name="company_name" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                </div>
                                <div class="hold">
                                    <label for="city">City / Town</label>
                                    <input name="city" type="text" id="city" class="form-control" />
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hold">
                                            <label for="em">Email address</label>
                                            <input type="email" name="email" id="em" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="hold">
                                            <label for="phn">Phone</label>
                                            <input type="text" id="phn" name="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<!--
                                <ul class="option">
                                    <li>
                                        <header class="title">
                                            <label class="custom-radio">
                                                <input type="radio" name="pay">
                                                    <span class="check-input"></span>
                                                    <span class="check-label">Check Payment</span>
                                            </label>
                                        </header>
                                        <div class="info-hold">
                                            <p>Please send your cheque to Our Company Address. Address, Thank You!</p>
                                        </div>
                                    </li>
                                    <li>
                                        <header class="title">
                                            <label class="custom-radio">
                                                <input type="radio" name="pay">
                                                <span class="check-input"></span>
                                                <span class="check-label">Paypal Payment</span>
                                            </label>
                                        </header>
                                        <div class="info-hold">
                                            <p>If you dont have paypal account - you can still pay using credit cards!</p>
                                        </div>
                                    </li>
                                </ul>
								-->
                                <ul class="payment-option">
                                    <li>
                                        <img alt="visa" src="<?php echo base_url()?>assets/img/footer/visa.png">
                                    </li>
                                    <li>
                                        <img width="33" height="20" alt="master card" src="<?php echo base_url()?>assets/img/footer/mastercard.png">
                                    </li>
                                    <li>
                                        <img width="72" height="20" alt="paypal" src="<?php echo base_url()?>assets/img/footer/paypal.png">
                                    </li>
                                    <li>
                                        <img width="33" height="20" alt="maestro" src="<?php echo base_url()?>assets/img/footer/maestro.png">
                                    </li>
                                    <li>
                                        <img width="55" height="20" alt="bank transfer" src="<?php echo base_url()?>assets/img/footer/bank-transfer.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-holder">
                            <h2 class="small-size">Additional Notes</h2>
                            <div class="wrap">
                                <div class="hold">
                                    <label for="txt">Coupon Code</label>
                                    <input name="coupon" type="text" id="coupon" placeholder="Enter Your Coupon Code" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="txt">Your Comment</label>
                                    <textarea id="txt" name="comment" class="form-control" placeholder="Please enter any additional information here, eg. food/drug requirements etc."></textarea>
                                </div>
                            </div>
                            <div class="order-block">
                                <h2 class="small-size">Preview Order</h2>
                                <div class="wrap">
                                    <table class="product-table">
                                        <thead>
                                            <tr>
                                                <th>Selected Tours</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
											$i=1;$total = 0;
											foreach ($this->cart->contents() as $items){ ?>
                                            <tr>
												<td>
													<span class="title"><?php echo $items['name']; ?> &emsp;<span class="amount">x&emsp; <?php echo $items['qty']; ?></span></span>
													<time datetime="2016-09-29">
													Booking Date:&emsp; <?php
														$mydate=getdate(date("U"));
														echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
													?>
													</time>
												</td>
												<td>
													<?php 
													$curr = "";
														
													foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value)
													{

														if($option_name=="currency"){
															$curr = $option_value;
														}elseif($option_name=="coupon"){
															$coupon = $option_value;
														}
													}										
													?>
													<span class="amount"><?=$curr?>&nbsp;<?=number_format($items['qty'])*intval(str_replace(',','',$items['price']))?></span>	
												</td>
											</tr>
											<?php
												$total += number_format($items['qty'])*intval(str_replace(',','',$items['price']));
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Total Price</td>
                                                <td><?=$curr.' '.$total;?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button type="submit" class="btn btn-default">Confirm booking</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</div>
</main>
<?PHP
	$this->load->view('front_footer_v');
?>