			<footer id="footer">
                <div class="container">
                    <form action="http://www.waituk.net/themes/html/entrada/php/subscribe.html" id="signup" method="post" class="newsletter-form">
                        <fieldset>
                            <div class="input-holder">
                                <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email" id="subscriber_email">
                                <input type="submit" value="GO">
                            </div>
                            <span class="info" id="subscribe_message">To receive news, updates and tour packages via email.</span>
                        </fieldset>
                    </form>
                    <div class="row footer-holder">
                        <nav class="col-sm-4 col-lg-2 footer-nav active">
                            <h3>About Entrada</h3>
                            <ul class="slide">
                                <li><a href="#">The Company</a></li>
                                <li><a href="#">Our Values</a></li>
                                <li><a href="#">Responsiblity</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Opportunity</a></li>
                                <li><a href="#">Safety Concerns</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </footer>
    </div>
	
	<!-- modal area -->
	
	<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Transaction Success</h4>
				</div>
				<div class="modal-body">
					<p>Thank you for booking your holidays with Citra Nashwa Tour</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<!---           -->
	
    <div class="scroll-holder text-center">
    <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
    </div>

    <script src="<?php echo base_url();?>assets/vendors/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/match-height/jquery.matchHeight.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/stellar/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/validate/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/waypoint/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/fancybox/jquery.fancybox.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jcf/js/jcf.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jcf/js/jcf.select.js"></script>
    <script src="<?php echo base_url();?>assets/js/mailchimp.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/retina/retina.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
 
    <script src="<?php echo base_url();?>assets/js/jquery.main.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
 
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
 
    <script src="<?php echo base_url();?>assets/js/revolution.js"></script>
    <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */
    </script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#MyModal").modal(
			<?php
				if(get_cookie('TraScs') != null && get_cookie('TraScs') != ""){
					echo "'show'";
					delete_cookie('PrevPage');
				}else{
					echo "'hide'";
				}
			?>
			);
		});
	</script>
</body>

</html>
