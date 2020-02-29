<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: ติดต่อ</a></div>
                <div class="breadcrumb-item active">แก้ไข ติดต่อ</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>แก้ไข ติดต่อ</h4>
                        </div>
                        <div class="card-body">

                            <!--Alert -->
                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <form action="<?php echo base_url('backoffice/page/contact/info/update/'.$contacts->id); ?>" method="post" enctype="multipart/form-data">
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i> ข้อมูล</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">หัวข้อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="title" value="<?php echo $contacts->title; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">รายละเอียด</label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" name="detail"><?php echo $contacts->detail; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">เว็บไซต์</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="web" value="<?php echo $contacts->web;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">โทรศัพท์</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="tel" value="<?php echo $contacts->tel;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" value="<?php echo $contacts->email;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">แผนที่</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="map" value="<?php echo $contacts->map;?>">
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-primary">บันทึก</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
