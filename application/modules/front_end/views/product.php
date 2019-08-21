    <div id="section1">
        <div class="warp-slide">
            <div id="slides">
                <div class="slides-container">
                    <img src="<?php echo base_url('storage/images/bg1-n1.jpg'); ?>" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slogan-head">
                        Alumination caused by the integration of people with experience and expertise in aluminum directly.
                        We are ready to offer a new way of decorating buildings are beautiful and add value to the maximum.
                        As well, we will have to innovate and develop products, aluminum continued using the brand name that
                        ALUINCH.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="slogan-web" class="main-section">
        <div class="graphic">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-box">
                            <h1>ALUMINIUM INSTINCT!</h1>
                            <p>
                                Aluminium Instinct, The creative modern aluminium frame style has always<br/> concerned
                                equable frame design both in vertical and horizontal line.
                            </p>
                        </div>
                        <div class="fb"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headbar">
                        <div class="triangle"></div>
                        <h2>PRODUCT</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-item">
                        <?php foreach ($list_products as $products) { ?>
                        <li class="product-list <?php if (rawurldecode($this->uri->segment(2)) == $products['group_product_slug']) { echo 'active'; } ?>">
                            <a><?php echo $products['group_product_name']; ?></a>
                            <ul class="sub-list-item">
                                <?php foreach ($products['category_products'] as $category_product) { ?>
                                    <li class="active">
                                        <a href="<?php echo base_url('product/' . $products['group_product_slug'] . '/' . $category_product['category_product_slug'] . '/' . $category_product['category_product_id']); ?>">
                                            <?php echo $category_product['category_product_name']; ?>
                                            <p><?php echo $category_product['category_product_desc']; ?></p>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="product-main">
                        <div class="head-item"><?php echo $list_products_specific['group_product_name']; ?></div>
                        <h4><?php echo $list_products_specific['category_product_name'] . ':' . $list_products_specific['category_product_desc']; ?></h4>
                        <div class="main-pic">
                            <img src="<?php echo base_url('storage/uploads/products/' . $list_products_specific['category_product_image_cover']); ?>" class="img-responsive"/>
                        </div>
                        <div class="list-pdf">
                            <ul>
                                <li>
                                    <div><a onClick="ga('send', 'event', 'Downloads', 'Click', 'Catalog', '100');" href="#" target="_blank">Download Catalog</a></div>
                                </li>
                                <li>
                                    <div><a href="#" target="_blank">Download Price</a></div>
                                </li>
                                <li>
                                    <div id="cad-form">Download Cad</div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <ul id="list-loadmore" class="listing">
                            <?php foreach ($list_products_specific['products'] as $product) { ?>
                                <li class="lb-detail" data-code="<?php echo $product->id . '-code'; ?>" data-val="<?php echo $product->id; ?>">
                                    <img src="<?php echo base_url('storage/uploads/products/' . $product->image); ?>" class="img-responsive img-center"/>
                                    <div class="clearfix"></div>
                                    <div class="box-topic"><?php echo $product->title; ?></div>
                                    <div class="box-des"><?php echo $product->description_en . ' | ' . $product->description_th; ?></div>
                                    <div class="clearfix"></div>
                                    <div class="viewdetail">
                                        VIEW DETAIL <div class="icon"><img src="<?php echo base_url('storage/images/product/iconview.png'); ?>"/></div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                        <div align="center">
                            <div id="loadmore">Load More</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="product-lightbox warp-light-box">
        <div class="product-lightbox bg-black"></div>
        <div id="product-des" class="main-bl-product">
            <div id="arrow-product-left" class="arrow-left"><i class="glyphicon glyphicon-menu-left"></i></div>
            <div id="arrow-product-right" class="arrow-right"><i class="glyphicon glyphicon-menu-right"></i></div>
            <div class="close-lb"><img src="<?php echo base_url('storage/images/product/close.png'); ?>"/></div>
            <div id="ajax-result"></div>
        </div>
    </div>

    <div class="cad-lightbox warp-light-box">
        <div class="cad-lightbox bg-black"></div>
        <div id="product-cad" class="main-bl-product">
            <div class="close-lb"><img src="<?php echo base_url('storage/images/product/close.png'); ?>"/></div>
            <div class="warp-slide-product">
                <a target="_blank" href="https://line.me/R/ti/p/%40arc6608f">
                    <div><h1>Please scan the QR code below to continue to download CAD.</h1></div>
                    <div style="text-align: center;"><img width="50%" src="<?php echo base_url('storage/images/qr-code.jpg'); ?>"/></div>
                </a>
            </div>
        </div>
    </div>

    <!-- contact -->
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
    <script>
        function check-captcha()
        {
            document.getElementById('btn-footer-submit').disabled = false;
        }
    </script>
    <style type="text/css">
        button[disabled], html input[disabled] {
            opacity: 0.5;
        }
    </style>
    <div id="contact">
        <div class="graphic"><img src="<?php echo base_url('storage/images/product/graphic-footer.png'); ?>" class="img-responsive"/></div>
        <div class="main-box-head">
            <div class="warp">
                <div class="box-header">CONTACT
                    <br/>US
                </div>
            </div>
        </div>
        <div class="bg"></div>
        <div class="bg-orange">
            <div class="warp">
                <div class="box-contact box-contact-1">
                    <div class="clearfix"></div>
                    <span class="head">CONTACT INFO</span>
                    <div class="clearfix"></div>
                    <div class="list-contact">
                        <div class="media">
                            <div class="media-left media-top">
                                <img class="media-object" src="<?php echo base_url('storage/images/c1.png'); ?>">
                            </div>
                            <div class="media-body">
                                Alumination Ltd.<br/>
                                1369 Room No. 7, Chan road, Thungwatdon, Sathorn, Bangkok 10120<br/>
                                Fax : 02 286 3669
                            </div>
                        </div>
                        <div class="media box-c">
                            <div class="media-left media-middle">
                                <img class="media-object" src="<?php echo base_url('storage/images/c3.png'); ?>">
                            </div>
                            <div class="media-body" style="padding-top:5px;">
                                <a href="mailto:info@aluinch.com">info@aluinch.com</a>
                            </div>
                        </div>
                        <div class="contact-clear"></div>
                        <div class="media box-c">
                            <div class="media-left media-middle">
                                <img class="media-object" src="<?php echo base_url('storage/images/c5.png'); ?>">
                            </div>
                            <div class="media-body map" style="padding-top:5px;" data-toggle="modal" data-target="#map">
                                VIEW COMPANY MAP
                            </div>
                        </div>
                    </div>
                    <div class="list-contact2">
                        <div class="media box-c">
                            <div class="media-left media-middle">
                                <img class="media-object" src="<?php echo base_url('storage/images/c2.png'); ?>">
                            </div>
                            <div class="media-body" style="padding-top:5px;">
                                <a href="tel:022863666"> 02 286 3666</a>
                            </div>
                        </div>
                        <div class="media box-c">
                            <div class="media-left media-middle">
                                <img class="media-object" src="<?php echo base_url('storage/images/c4.png'); ?>">
                            </div>
                            <div class="media-body" style="padding-top:5px;">
                                www.aluinch.com
                            </div>
                        </div>
                        <div class="media box-c desktop">
                            <div class="media-body">
                                <br/> Sitemap
                                <br/>Terms and Conditions
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="copy desktop">
                        Copyright © 2015 www.aluinch.com All Rights Reserved. SEO maintained by iSEO.in.th
                    </div>
                    <div class="copy-line desktop"></div>
                    <div class="partner desktop">partnership by <img src="<?php echo base_url('storage/images/partner-logo.jpg'); ?>" width="100"/>Company</div>
                </div>
                <div class="box-contact form-contact">
                    <form method="post" action="https://www.aluinch.com/sendemail_system.php">
                        <input type="text" name="name" placeholder="Name:" required/>
                        <input type="text" name="email" placeholder="Email:" required/>
                        <input type="text" name="company" placeholder="Company:"/>
                        <input type="text" name="tel" placeholder="Phone:"/>
                        <textarea name="detail" placeholder="Message:" required></textarea>
                        <div style="padding-bottom: 20px;" data-callback="check-captcha" class="g-recaptcha" data-sitekey="6LcVeUYUAAAAADtuawZIutfIUO5U8badCga1I5yL"></div>
                        <input type="submit" id="btn-footer-submit" value="Send Message" style="margin-top: 0px;"/>
                    </form>
                    <div class="fb">
                        <a href="http://line.me/ti/p/~ALUMINATION" target="_blank">
                            <img src="<?php echo base_url('storage/images/line-icon.png'); ?>"/>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="https://www.facebook.com/ALUINCH/" target="_blank"><img src="<?php echo base_url('storage/images/fb2.png'); ?>"/></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="copy mobile">Sitemap | Terms and Conditions</div>
                    <div class="copy mobile">Copyright © 2015 www.aluinch.com All Rights Reserved. SEO maintained by
                        iSEO.in.th
                    </div>
                    <div class="clearfix"></div>
                    <div class="copy-line mobile"></div>
                    <div class="partner mobile">partnership by <span class="yellow">In The Glazz</span> Company</div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="map-canvas" class="map-google"></div>
    </div>
    <!-- end contact -->

    <!-- Push Custom Scripts -->
    <script>
        $(function () {
            $("#navi ul li.product-nav").addClass("active");


            size_li = $("#list-loadmore li").size();
            x = 6;
            $('#list-loadmore li:lt(' + x + ')').show();
            $('#loadmore').click(function () {
//        x= (x+5 <= size_li) ? x+5 : size_li;
//        $('#list-loadmore li:lt('+x+')').show();
                $('#list-loadmore li').show();
                equalheight('#list-loadmore li');
                $("#loadmore").hide();
            });
            $('#showLess').click(function () {
                x = (x - 5 < 0) ? 3 : x - 5;
                $('#list-loadmore li').not(':lt(' + x + ')').hide();
            });
        });
    </script>

    <!-- map -->
    <div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border:none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('storage/images/viewmap.jpg'); ?>" class="img-responsive"/>
                </div>
            </div>
        </div>
    </div>
    <!-- map -->
