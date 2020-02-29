<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a
                            href="<?php echo base_url('backoffice/dashboard'); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: ไฟล์ดาวน์โหลด</a></div>

                <div class="breadcrumb-item"><a
                            href="<?php echo base_url('backoffice/page/download/category'); ?>">ไฟล์ดาวน์โหลด:
                        (ประเภท - <?php echo $category_download->title; ?>)</a></div>
                <div class="breadcrumb-item">แก้ไข ไฟล์ดาวน์โหลด</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>แก้ไข ไฟล์ดาวน์โหลด</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/download/download/update/' . $download->id); ?>"
                                  method="post"
                                  enctype="multipart/form-data" onsubmit="return validateFileExtension(this.fileField)">
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i> ข้อมูล</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* หัวข้อไฟล์ดาวน์โหลด</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="title"
                                               value="<?php echo $download->title; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">ประเภทไฟล์ดาวน์โหลด</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" value="<?php echo $category_download->id; ?>"
                                               name="category_download_id">
                                        <input type="text" class="form-control"
                                               value="<?php echo $category_download->title; ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* File PDF</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file input-file-w-30">
                                            <input input type="file" name="file" class="custom-file-input"
                                                   onchange="PreviewFile(this, 'previewFileCatalog'); return validateFileExtension(this)"
                                                   value="<?php echo $download->file; ?>">
                                            <label class="custom-file-label" id="previewFileCatalog">เลือกไฟล์(.pdf|.doc|.docx)</label>
                                            <div style="margin-top: 12px; display: block;"><span>old file: </span><a
                                                        style="display: inline-block;"
                                                        href="<?php echo base_url('storage/uploads/files/download/' . $download->file); ?>"><?php echo $download->file; ?></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit"
                                            class="btn btn-primary">Save changes
                                    </button>
                                    <a href="<?php echo base_url('backoffice/page/download/download/show/' . $category_download->id); ?> "
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
<script>
    function PreviewFile(input, previewFile) {
        $("#" + previewFile).html(input.files[0].name)
    }

    function validateFileExtension(fld) {
        if (!/(\.doc|\.docx|\.pdf|\.xls|\.xlsx|\.rtf|\.txt|\.rar|\.zip)$/i.test(fld.value)) {
            alert("Invalid file type.");
            fld.form.reset();
            fld.focus();
            return false;
        }
        return true;
    }
</script>

