<?PHP
	$this->load->view('header_v');
?>
<main id="main" style="margin-top:7%">
    <div class="bg-gray content-with-sidebar grid-view-sidebar">
        <div class="container">
            <div id="two-columns" class="row">
                <aside id="sidebar" class="col-sm-12 col-md-4 col-lg-3 sidebar sidebar-list">
                    <div class="sidebar-holder">
                        <header class="heading">
                            <h3>Catalog</h3>
                        </header>
                        <div class="accordion">
                            <div class="accordion-group">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">List of Packages</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="side-list region-list hovered-list">
                                            <li>
                                                <a href="#">
                                                    <span class="text">Nama Kota</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div id="content" class="col-sm-12 col-md-8 col-lg-9">
                    <div class="content-holder content-sub-holder">
                        <div class="row db-3-col">
                            <article class="col-sm-6 col-md-4 article has-hover-s3">
                                    <div class="img-wrap">
                                        <a href="#">
                                            <img src="<?php echo base_url();?>assets/img/listing/img-01.jpg" height="215" width="370" alt="image description">
                                        </a>
                                        <div class="img-caption text-uppercase">Discover Timeless</div>
                                        <div class="hover-article">
                                            <div class="star-rating">
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                            </div>
                                            <div class="icons">
                                                <a href="#"><span class="icon-heart"></span></a>
                                                <a href="#"><span class="icon-reply"></span></a>
                                            </div>
                                            <div class="info-footer">
                                                <span class="price">from <span>Rp. 10. 000. 000 .000</span></span>
                                                <a href="#" class="link-more">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="#">Jungle safari for families</a></h3>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
                                </article>
                                <article class="col-sm-6 col-md-4 article has-hover-s3">
                                    <div class="img-wrap">
                                        <a href="#">
                                            <img src="<?php echo base_url();?>assets/img/listing/img-01.jpg" height="215" width="370" alt="image description">
                                        </a>
                                        <div class="img-caption text-uppercase">Discover Timeless</div>
                                        <div class="hover-article">
                                            <div class="star-rating">
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                            </div>
                                            <div class="icons">
                                                <a href="#"><span class="icon-heart"></span></a>
                                                <a href="#"><span class="icon-reply"></span></a>
                                            </div>
                                            <div class="info-footer">
                                                <span class="price">from <span>Rp. 10. 000. 000 .000</span></span>
                                                <a href="#" class="link-more">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="#">Jungle safari for families</a></h3>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
                                </article>
                                <article class="col-sm-6 col-md-4 article has-hover-s3">
                                    <div class="img-wrap">
                                        <a href="#">
                                            <img src="<?php echo base_url();?>assets/img/listing/img-01.jpg" height="215" width="370" alt="image description">
                                        </a>
                                        <div class="img-caption text-uppercase">Discover Timeless</div>
                                        <div class="hover-article">
                                            <div class="star-rating">
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                                <span><span class="icon-star"></span></span>
                                            </div>
                                            <div class="icons">
                                                <a href="#"><span class="icon-heart"></span></a>
                                                <a href="#"><span class="icon-reply"></span></a>
                                            </div>
                                            <div class="info-footer">
                                                <span class="price">from <span>Rp. 10. 000. 000 .000</span></span>
                                                <a href="#" class="link-more">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="#">Jungle safari for families</a></h3>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
                                </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?PHP
	$this->load->view('footer_v');
?>