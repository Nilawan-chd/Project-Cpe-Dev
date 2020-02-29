<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a
                            href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: หลักสูตร</a></div>

                <div class="breadcrumb-item"><a
                            href="<?php echo base_url('backoffice/page/course/category'); ?>">หลักสูตร:
                        (ประเภท - <?php echo $category_course->title; ?>)</a></div>
                <div class="breadcrumb-item">เพิ่ม หลักสูตร</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>เพิ่ม หลักสูตร</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/course/course/store'); ?>" method="post"
                                  enctype="multipart/form-data">
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i> ข้อมูล</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* หัวข้อหลักสูตร</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ประเภทหลักสูตร</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="<?php echo $category_course->id; ?>"
                                               name="category_course_id">
                                        <input type="text" class="form-control"
                                               value="<?php echo $category_course->title; ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* ไฟล์ PDF</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file input-file-w-30">
                                            <input type="file" class="custom-file-input" name="file_pdf" onchange="PreviewFile(this, 'previewFileCatalog');" accept=".pdf">
                                            <label class="custom-file-label" id="previewFileCatalog">เลือกไฟล์(.pdf)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit"
                                            class="btn btn-primary">บันทึก
                                    </button>
                                    <a href="<?php echo base_url('backoffice/page/course/course/show/'.$category_course->id); ?> "
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
<script>
    function PreviewFile(input, previewFile) {
        $("#" + previewFile).html(input.files[0].name)

    }
</script>

