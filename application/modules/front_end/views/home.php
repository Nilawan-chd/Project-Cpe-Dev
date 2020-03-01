<?php
//$category_new_id = $category_new->id;
//
//$this->load->model('News_model');
//$news = $this->News_model->get_news_by_category_news_id($category_new_id);
//for ($i = 1; $i >= 12; $i++) {
//} ?>
<div class="sydney-hero-area">

    <div id="slideshow" class="header-slider" data-speed="4000" data-mobileslider="fullscreen">
        <div class="slides-container">
            <?php
            foreach ($banner as $banners) {
                ?>
                <div  class="slide-item slide-item-1"
                     style=" background-image:url('<?php echo base_url('storage/uploads/images/banner/' . $banners->title); ?>');">
                    <img class="mobile-slide preserve"
                         src="<?php echo base_url('storage/uploads/images/banner/' . $banners->title); ?>"
                         alt=""/>
                    <div class="slide-inner">
                        <div class="contain animated fadeInRightBig text-slider">
                            <h2 class="maintitle"></h2>
                            <p class="subtitle"></p>
                        </div>
                        </div>
                </div>
            <?php } ?>

        </div>
    </div>


</div>


<div id="content" class="page-wrap">
    <div class="container content-wrapper">
        <div class="row">

            <div id="primary" class="fp-content-area">
                <main id="main" class="site-main" role="main">

                    <div class="entry-content">
                        <div id="pl-7474" class="panel-layout">
                            <div id="pg-7474-0" class="panel-grid panel-has-style">
                                <div style="padding: 30px 0; " data-overlay="true" data-overlay-color="#000000"
                                     class="panel-row-style panel-row-style-for-7474-0">
                                    <div id="pgc-7474-0-0" class="panel-grid-cell">
                                        <div id="panel-7474-0-0-0"
                                             class="so-panel widget widget_media_image panel-first-child panel-last-child"
                                             data-index="0">
                                            <div style="text-align: left;" data-title-color="#443f3f"
                                                 data-headings-color="#443f3f"
                                                 class="panel-widget-style panel-widget-style-for-7474-0-0-0"><img
                                                        width="300" height="300"
                                                        src="<?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?>"
                                                        class="image wp-image-8489  attachment-full size-full" alt=""
                                                        style="max-width: 100%; height: auto;"
                                                        srcset="<?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 768w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 500w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 600w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 230w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 350w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 480w, <?php echo base_url('/storage/uploads/images/faculty/'.$faculty->img);?> 272w"
                                                        sizes="(max-width: 768px) 100vw, 768px"/></div>
                                        </div>
                                    </div>
                                    <div id="pgc-7474-0-1" class="panel-grid-cell">
                                        <div id="panel-7474-0-1-0"
                                             class="so-panel widget widget_sow-editor panel-first-child panel-last-child"
                                             data-index="1">
                                            <div style="text-align: left;" data-title-color="#443f3f"
                                                 data-headings-color="#443f3f"
                                                 class="panel-widget-style panel-widget-style-for-7474-0-1-0">
                                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                    <div class="siteorigin-widget-tinymce textwidget">
                                                        <h3 class="widget-title" style="text-align: left;">
                                                            หัวหน้าสาขา</h3>
                                                        <div class="siteorigin-widget-tinymce textwidget">
                                                            <h6>
                                                                <strong><?php echo $faculty->name_th; ?></strong>
                                                            </h6>
                                                            <?php echo $faculty->name_en; ?><br>
                                                            <br>
                                                            <p>ติดต่อ<br>
                                                            เว็บไซต์ :&nbsp;<a href="<?php echo $faculty->web; ?>" target="_blank" rel="noopener noreferrer"><?php echo $faculty->web; ?></a><br>
                                                            โทรศัพท์ :&nbsp;<?php echo $faculty->tel; ?><br>
                                                            Email&nbsp;:&nbsp;<?php echo $faculty->email; ?></p></td>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pg-7474-2" class="panel-grid panel-has-style">
                                <div style="padding: 30px 0; " data-overlay="true" data-overlay-color="#000000"
                                     class="panel-row-style panel-row-style-for-7474-2">
                                    <div id="pgc-7474-2-0" class="panel-grid-cell">
                                        <div id="panel-7474-2-0-0"
                                             class="so-panel widget widget_sow-headline panel-first-child"
                                             data-index="3">
                                            <div style="text-align: left;" data-title-color="#443f3f"
                                                 data-headings-color="#443f3f"
                                                 class="panel-widget-style panel-widget-style-for-7474-2-0-0">
                                                <div class="so-widget-sow-headline so-widget-sow-headline-default-5570f562d836">
                                                    <div class="sow-headline-container ">
                                                        <h4 class='sow-headline'>ข่าวประชาสัมพันธ์</h4>
                                                        <div class="decoration">
                                                            <div class="decoration-inside"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panel-7474-2-0-1" class="so-panel widget widget_lsow-posts-carousel"
                                             data-index="4">
                                            <div style="text-align: left;" data-title-color="#443f3f"
                                                 data-headings-color="#443f3f"
                                                 class="panel-widget-style panel-widget-style-for-7474-2-0-1">
                                                <div class="so-widget-lsow-posts-carousel so-widget-lsow-posts-carousel-default-3dd089290af6">
                                                    <div id="lsow-posts-carousel-5e5c2405010f4"
                                                         class="lsow-posts-carousel lsow-container"
                                                         data-settings='{"arrows":true,"dots":true,"autoplay_speed":3000,"animation_speed":300,"pause_on_hover":true,"display_columns":4,"scroll_columns":4,"gutter":10,"so_field_container_state":"open","autoplay":false,"tablet_width":800,"tablet_display_columns":2,"tablet_scroll_columns":2,"mobile_width":480,"mobile_display_columns":1,"mobile_scroll_columns":1}'>

                                                        <div data-id="id-11204" class="lsow-posts-carousel-item">
                                                            <article id="post-11204"
                                                                     class="post-11204 post type-post status-publish format-standard has-post-thumbnail hentry category-1">
                                                                <div class="lsow-project-image"><a
                                                                            href="http://eng.rmutp.ac.th/%e0%b8%9c%e0%b8%a5%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%97%e0%b8%94%e0%b8%aa%e0%b8%ad%e0%b8%9a%e0%b8%97%e0%b8%b2%e0%b8%87%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2-v-net/"
                                                                            target="_self"><img width="1024"
                                                                                                height="314"
                                                                                                src="http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-1024x314.jpg"
                                                                                                class="attachment-large size-large wp-post-image"
                                                                                                alt=""
                                                                                                srcset="http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-1024x314.jpg 1024w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-500x154.jpg 500w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-768x236.jpg 768w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-830x255.jpg 830w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-230x71.jpg 230w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-350x107.jpg 350w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61-480x147.jpg 480w, http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/vnet61.jpg 1140w"
                                                                                                sizes="(max-width: 1024px) 100vw, 1024px"/></a>
                                                                    <div class="lsow-image-info">
                                                                        <div class="lsow-entry-info"><h3
                                                                                    class="lsow-post-title"><a
                                                                                        href="http://eng.rmutp.ac.th/%e0%b8%9c%e0%b8%a5%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%97%e0%b8%94%e0%b8%aa%e0%b8%ad%e0%b8%9a%e0%b8%97%e0%b8%b2%e0%b8%87%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2-v-net/"
                                                                                        title="ผลการทดสอบทางการศึกษา V-NET"
                                                                                        target="_self" rel="bookmark">ผลการทดสอบทางการศึกษา
                                                                                    V-NET</a></h3><span
                                                                                    class="lsow-terms"><a
                                                                                        href="http://eng.rmutp.ac.th/category/%e0%b8%82%e0%b9%88%e0%b8%b2%e0%b8%a7%e0%b8%9b%e0%b8%a3%e0%b8%b0%e0%b8%8a%e0%b8%b2%e0%b8%aa%e0%b8%b1%e0%b8%a1%e0%b8%9e%e0%b8%b1%e0%b8%99%e0%b8%98%e0%b9%8c/">ข่าวประชาสัมพันธ์</a></span>
                                                                        </div>
                                                                    </div><!-- .lsow-image-info --></div>
                                                                <div class="lsow-entry-text-wrap "><h3
                                                                            class="entry-title"><a
                                                                                href="http://eng.rmutp.ac.th/%e0%b8%9c%e0%b8%a5%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%97%e0%b8%94%e0%b8%aa%e0%b8%ad%e0%b8%9a%e0%b8%97%e0%b8%b2%e0%b8%87%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%a8%e0%b8%b6%e0%b8%81%e0%b8%a9%e0%b8%b2-v-net/"
                                                                                title="ผลการทดสอบทางการศึกษา V-NET"
                                                                                target="_self" rel="bookmark">ผลการทดสอบทางการศึกษา
                                                                            V-NET</a></h3>
                                                                    <div class="entry-summary">ตรวจสอบผล 676&nbsp;total
                                                                        views, 180&nbsp;views today
                                                                    </div>
                                                                </div>
                                                            </article><!-- .hentry --></div>


                                                        <!-- .lsow-posts-carousel-item -->
                                                        <!-- .lsow-posts-carousel --></div>
                                                </div>
                                            </div>
                                            <div id="panel-7474-2-0-2"
                                                 class="so-panel widget widget_sow-button panel-last-child"
                                                 data-index="5">
                                                <div style="text-align: left;" data-title-color="#443f3f"
                                                     data-headings-color="#443f3f"
                                                     class="panel-widget-style panel-widget-style-for-7474-2-0-2">
                                                    <div class="so-widget-sow-button so-widget-sow-button-flat-6f7ec98be90d">
                                                        <div class="ow-button-base ow-button-align-center">
                                                            <a href="http://eng.rmutp.ac.th/category/ข่าวประชาสัมพันธ์"
                                                               class="ow-icon-placement-left ow-button-hover">
		<span>
			<span class="sow-icon-fontawesome sow-fas" data-sow-icon="&#xf00a;"></span>
			ดูทั้งหมด		</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- .entry-content -->

                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
    </div>
</div><!-- #content -->


<div class="sydney-hero-area">

    <div id="slideshow" class="header-slider" data-speed="4000" data-mobileslider="fullscreen">
        <div class="slides-container">

            <div class="slide-item slide-item-4"
                 style="background-image:url('http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/2.jpg');">
                <img class="mobile-slide preserve" src="http://eng.rmutp.ac.th/web2558/wp-content/uploads/2020/02/2.jpg"
                     alt=""/>
                <div class="slide-inner">
                    <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"></h2>
                        <p class="subtitle"></p>
                    </div>
                    <a href="http://sime.eng.rmutp.ac.th/?p=4144" class="roll-button button-slider">click</a></div>
            </div>
            <div class="slide-item slide-item-5"
                 style="background-image:url('http://eng.rmutp.ac.th/web2558/wp-content/uploads/2018/12/Picture1.png');">
                <img class="mobile-slide preserve"
                     src="http://eng.rmutp.ac.th/web2558/wp-content/uploads/2018/12/Picture1.png" alt=""/>
                <div class="slide-inner">
                    <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"></h2>
                        <p class="subtitle"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>



