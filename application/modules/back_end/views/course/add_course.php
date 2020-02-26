<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a
                            href="<?php echo base_url('backoffice/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Page: หน้าแรก</a></div>
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/page/home/news'); ?>">ประเภทข่าวสาร</a>
                </div>
                <div class="breadcrumb-item"><a
                            href="<?php echo base_url('backoffice/page/home/news/list/show/' . $category_new->id); ?>">ข่าวสาร:
                        (ประเภท - <?php echo $category_new->title; ?>)</a></div>
                <div class="breadcrumb-item">เพิ่ม ข่าวสาร</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>เพิ่ม ข่าวสาร</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/home/news/list/store'); ?>" method="post"
                                  enctype="multipart/form-data">
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i> ข้อมูล</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* หัวข้อข่าว</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">รายละเอียดย่อ</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ประเภทข่าว</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="<?php echo $category_new->id; ?>"
                                               name="category_news_id">
                                        <input type="text" class="form-control"
                                               value="<?php echo $category_new->title; ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">รายละเอียด</label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" name="detail"></textarea>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit"
                                            class="btn btn-primary">Save changes
                                    </button>
                                    <a href="<?php echo base_url('backoffice/page/home/news/list/show/' . $category_new->id); ?> "
                                       class="btn btn-secondary">Close</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
