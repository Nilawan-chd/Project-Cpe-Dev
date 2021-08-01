
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
                                        <?php foreach ($lab as $labs) { ?>
                                            <span class="" data-url="" data-target="blank" tabindex="0"
                                                  role="button"><?php echo $labs->title; ?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="su-tabs-panes">
                                        
                                            <div class="su-tabs-pane su-u-clearfix su-u-trim"
                                                 data-title="<?php echo $labs->title; ?>">
                                                <div class="su-row">
                                                    <article id="post-125" class="post-125 page type-page status-publish hentry">
                                                        <div class="entry-content">
                                                            <?php echo $labs->detail; ?>
                                                        </div><!-- .entry-content -->
                                                    </article></div>
                                            </div>
                                      
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                    </main>
                </div>
            </div>
        </div>
    </div>
