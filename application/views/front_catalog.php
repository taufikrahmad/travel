<?PHP
	$this->load->view('front_header_v');
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
                        <?php
                            foreach ($catalog as $key => $cat) {
                        ?>
                            <article class="col-sm-6 col-md-4 article has-hover-s3">
                                <div class="img-wrap">
                                    <a href="#">
                                        <div id="pict" style="height: 215px; width: 370px; overflow: hidden; ">
                                        <img src="<?php echo base_url();?>assets/img/<?=$cat->pict?>" height="215" width="370" alt="image description">
                                        </div>
                                    </a>
                                    <div class="img-caption text-uppercase"><?=$cat->nama_paket?></div>
                                    <div class="hover-article">
                                        <div class="star-rating" style="margin-top: 30px;">
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
                                            <span class="price">from <span><?=$cat->currency?> <?=number_format($cat->price,2)?></span></span>
                                            <a href="#" class="link-more">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#"><?=$cat->nama_paket?></a></h3>
                                <?=$cat->description;?>
                            </article>
                        <?php } ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?PHP
	$this->load->view('front_footer_v');
?>