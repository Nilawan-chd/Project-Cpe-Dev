<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: ดาวน์โหลด</a></div>
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/page/download/category') ?>">ดาวน์โหลด</a></div>
                <div class="breadcrumb-item">เพิ่ม ประเภทดาวน์โหลด</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>เพิ่ม ประเภทดาวน์โหลด</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/download/category/update/'.$category_download->id); ?>" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>* หัวข้อ</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $category_download->title; ?>">
                                </div>

                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit"
                                            class="btn btn-primary">Save changes
                                    </button>
                                    <a href="<?php echo base_url('backoffice/page/download/category'); ?> "
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
