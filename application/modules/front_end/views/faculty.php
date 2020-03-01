<div id="content" class="page-wrap">
    <div class="container content-wrapper">
        <div class="row">
            <div class="content-area">
                <main class="post-wrap" role="main">
                    <article class="container">
                        <header class="entry-header">
                            <h1 class="title-post entry-title">คณาจารย์</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <div id="pl-8130" class="panel-layout">

                                <?php foreach ($faculty as $faculties) { ?>

                                    <div style="padding: 10px 0; " data-overlay="true"
                                         data-overlay-color="#000000"
                                         class="panel-row-style panel-row-style-for-8130-3">

                                        <div id="pgc-8130-3-0" class="row">

                                            <div id="panel-8130-3-0-2" class="col-sm-4"
                                                 data-index="8">
                                                <div style="text-align: center;" data-title-color="#443f3f"
                                                     data-headings-color="#443f3f"
                                                     class="panel-widget-style panel-widget-style-for-8130-3-0-2">
                                                    <img
                                                            width="60%" height="80%"
                                                            src="<?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?>"
                                                            class="image wp-image-8150  attachment-260x261 size-260x261"
                                                            alt="" style="max-width: 100%; height: auto;"
                                                            srcset="<?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?> 350w, <?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?> 400w, <?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?> 230w, <?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?> 480w, <?php echo base_url('/storage/uploads/images/faculty/' . $faculties->img); ?> 484w"
                                                            sizes="(max-width: 260px) 100vw, 260px"/></div>
                                            </div>
                                            <div id="panel-8130-3-0-3" class="col-sm-8"
                                                 data-index="9">
                                                <div style="text-align: left;" data-title-color="#443f3f"
                                                     data-headings-color="#443f3f"
                                                     class="panel-widget-style panel-widget-style-for-8130-3-0-3">
                                                    <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                        <div class="siteorigin-widget-tinymce textwidget">
                                                            <h6>
                                                                <strong><?php echo $faculties->name_th; ?></strong>
                                                            </h6>
                                                                <?php echo $faculties->name_en; ?><br>
                                                                การศึกษา<p></p>
                                                                <ul>
                                                                    <?php echo $faculties->education; ?>
                                                                </ul>
                                                                <p>วิชาที่สอน : <?php echo $faculties->course; ?><br>
                                                                    ความเชี่ยวชาญ :&nbsp;<?php echo $faculties->expert; ?><br>
                                                                    เว็บไซต์ :&nbsp;<a href="<?php echo $faculties->web; ?>" target="_blank" rel="noopener noreferrer"><?php echo $faculties->web; ?></a><br>
                                                                    โทรศัพท์ :&nbsp;<?php echo $faculties->tel; ?><br>
                                                                    Email&nbsp;:&nbsp;<?php echo $faculties->email; ?></p></td>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <hr>
                                <?php } ?>

                            </div>
                        </div>
            </div><!-- .entry-content -->
            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
            </article><!-- #post-## -->
            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
</div>
</div><!-- #content -->
