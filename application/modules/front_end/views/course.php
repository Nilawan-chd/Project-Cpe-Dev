
    <div id="content" class="page-wrap">
        <div class="container content-wrapper">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="post-wrap" role="main">
                        <article id="post-8473" class="post-8473 page type-page status-publish hentry">
                            <header class="entry-header">
                                <h1 class="title-post entry-title">หลักสูตร</h1></header><!-- .entry-header -->

                            <div class="entry-content">
                                <div class="su-tabs su-tabs-style-default su-tabs-mobile-stack su-tabs-vertical"
                                     data-active="1" data-scroll-offset="0">
                                    <div class="su-tabs-nav">
                                        <?php foreach ($category_course as $category_courses) { ?>
                                            <span class="" data-url="" data-target="blank" tabindex="0"
                                                  role="button"><?php echo $category_courses->title; ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="su-tabs-panes">
                                        <?php foreach ($category_course as $category_courses) { ?>
                                            <div class="su-tabs-pane su-u-clearfix su-u-trim"
                                                 data-title="<?php echo $category_courses->title; ?>">
                                                <div class="su-row">
                                                    <article id="post-24"
                                                             class="post-24 page type-page status-publish hentry">
                                                        <div class="entry-content">
                                                            <p>
                                                                <a href="http://www.cpe.eng.rmutp.ac.th/images/07/eng_icon4.jpg"><img
                                                                            alt="eng_icon4"
                                                                            class="alignnone size-medium wp-image-82"
                                                                            height="72"
                                                                            src="<?php echo base_url('/storage/uploads/images/category_course/' . $category_courses->img); ?>"
                                                                            width="300"></a><br style="color: #3d3d3d;"><br>
                                                                <span style="color: #3d3d3d;"><span
                                                                            style="color: green;"><strong>ชื่อหลักสูตร</strong>&nbsp;</span></span><br
                                                                        style="color: #3d3d3d;">
                                                                <span style="color: #3d3d3d;">ชื่อภาษาไทย <?php echo $category_courses->name_th; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;">
                                                                <span style="color: #3d3d3d;">ชื่อภาษาอังกฤษ <?php echo $category_courses->name_en; ?>&nbsp;</span>
                                                            <ul>
                                                                <?php
                                                                $category_course_id = $category_courses->id;
                                                                $this->load->model('Course_model');
                                                                $course = $this->Course_model->get_course_by_category_course_id($category_course_id);
                                                                foreach ($course as $courses) { ?>
                                                                    <li>
                                                                        <h6>
                                                                            <strong><a href="<?php echo base_url('/storage/uploads/files/course/' . $courses->file_pdf); ?>"><?php echo $courses->title; ?></a></strong>
                                                                        </h6>
                                                                    </li>
                                                                <?php } ?>
                                                            </ul>
                                                            </p>
                                                            <p>
                                                                <br style="color: #3d3d3d;"><br>
                                                                <span style="color: #3d3d3d;"><span
                                                                            style="color: green;"><strong>ชื่อปริญญา</strong></span></span><span
                                                                        style="color: #3d3d3d;">&nbsp;</span><br
                                                                        style="color: #3d3d3d;"><br>
                                                                <span style="color: #3d3d3d;">ชื่อเต็มภาษาไทย&nbsp;<?php echo $category_courses->name_th_full; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;">
                                                                <span style="color: #3d3d3d;">ชื่อย่อภาษาไทย&nbsp; <?php echo $category_courses->name_th_short; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;">
                                                                <span style="color: #3d3d3d;">ชื่อเต็มภาษาอังกฤษ&nbsp; <?php echo $category_courses->name_en_full; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;">
                                                                <span style="color: #3d3d3d;">ชื่อย่อภาษาอังกฤษ&nbsp; <?php echo $category_courses->name_en_short; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;">
                                                                <br style="color: #3d3d3d;"><br>
                                                                <span style="color: #3d3d3d;"><span
                                                                            style="color: green;"><strong>วัตถุประสงค์&nbsp;</strong></span></span>
                                                                <span style="color: #3d3d3d;"><?php echo $category_courses->objective; ?>&nbsp;</span><br
                                                                        style="color: #3d3d3d;"><br>
                                                            </p>


                                                            <p>
                                                                &nbsp;</p>
                                                        </div><!-- .entry-content -->
                                                    </article>

                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                    </main>
                </div>
            </div>
        </div>
    </div>
