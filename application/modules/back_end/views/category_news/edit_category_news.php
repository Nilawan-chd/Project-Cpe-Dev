<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a>
                </div>
                <div class="breadcrumb-item"><a href="#">หน้า: หน้าแรก</a></div>
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/page/home/news'); ?> ">ประเภทข่าวสาร</a>
                </div>
                <div class="breadcrumb-item">แก้ไข ประเภทข่าวสาร</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>แก้ไข ประเภทข่าวสาร</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/home/news/update/' . $category_news->id); ?>"
                                  method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>* หัวข้อ</label>
                                    <input type="text" class="form-control" name="title"
                                           value="<?php echo $category_news->title; ?>" required>
                                </div>
                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit"
                                            class="btn btn-primary">บันทึก
                                    </button>
                                    <a href="<?php echo base_url('backoffice/page/home/news'); ?> "
                                       class="btn btn-secondary">ปิด</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
