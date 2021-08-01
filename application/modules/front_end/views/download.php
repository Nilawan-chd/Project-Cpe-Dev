

<div id="content" class="page-wrap">
    <div class="container content-wrapper">
        <div class="row">

            <div id="primary" class="content-area">
                <main id="main" class="post-wrap" role="main">


                    <article id="post-22" class="post-22 page type-page status-publish hentry">
                        <header class="entry-header">
                            <h1 class="entry-title">ดาวน์โหลด</h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php foreach ($category_download as $category_downloads) { ?>
                            
                            <p><span style="color: #3d3d3d;"><?php echo $category_downloads->title; ?></span></p>
                            <ul>
                                <?php
                                $category_download_id = $category_downloads->id;
                                $this->load->model('Download_model');
                                $download = $this->Download_model->get_download_by_category_download_id($category_download_id);
                                foreach ($download as $downloads) { ?>
                                <li style="color: #3d3d3d;"><a href="<?php echo base_url('/storage/uploads/files/download/' . $downloads->file); ?>"><?php echo $downloads->title; ?></a></li>
                            <?php  }?>
                            </ul>
                            <hr style="color: #3d3d3d;" width="90%">
                            <?php } ?>
                        </div><!-- .entry-content -->
                    </article>