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
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i>โลโก้ สาขา</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">พรีวิว</label>
                                    <div class="col-sm-9">
                                        <img id="previewImgCover" src="<?php echo base_url('storage/uploads/images/contacts/'. $contacts->img);?>" style="background-color: #fff;" width="20%"
                                             onerror="this.onerror=null;this.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAANlBMVEXz9Pa5vsq2u8jN0dnV2N/o6u7FydPi5Onw8fS+ws3f4ee6v8v29/jY2+Hu7/Ly9PbJztbQ1dxJagBAAAAC60lEQVR4nO3b2ZaCMBREUQbDJOP//2wbEGVIFCHKTa+zH7uVRVmBBJQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCpdOzvQQqaq2KmuSrOzQ02lSeRem8rpsQq/ozg72Kj4UkAxEev8awnzs7P1yiIadsfpQXjfZCHhUCzbfmeurdNz6bDRsBWRsB+k0cXxdHjpa0wkTBn3hKnjzRZyEgYk3IeEv2RKWCt1cN9EJ0zjfm7Mq/rAVgUnbLpwnK/zA2tnuQmzJHquuqJq91blJuwmAW8rHbV3q2ITFrOAt7Xz3l2UmrBMlpcHe9fOUhOqRYVhFO/cqtSEy0H6bh/tJ1uhCctqlTB/NSnG9pOt1ISXjxLq825laVFowo9GaRPrF9talJqw3n6macaZ09yi1ISG2cLyriwePwxzi1ITru4s2naxma59TC2KTRjE83FqmQ6yeDaUDS3KTRhMV96h5TTSLD4HQ4uCE9bxePUU5pYL/3mD5o9CcMKgTONc39NNLrV5iK4aNLUoOWHQ38RQtW3nsm6db92i8ISvGBtct+hvwqyzBFxE9DehrcHlQPU1YWNvcNGirwlfNThv0ZOE9eJG1OsGZy36kVBdczU9e7RvAz5b9CFhqfIwSp4XwG+OwUWLPiRUV/33Z4tbGtTvGK635CfUDfb/SO5rt20N9t8m65fLT9g3GD5abDY2qC+lvEg4NjhEvLW4tUFvEj4a7OXq3TzoW8Jpg0PEzfk8SThv8EMeJFw1+O8SHmrQg4QHG/Qg4cEGxSc83KD4hIcblJ6w3L508TXh+vtDEpLw3GwDEpKQhOdznVD2fRr9tdpRw/1HqQndIeEvkXCXUlDC+1NBndsnge/fwyVnp9PGH3p95dm1WMKza4/fI37j+UPXR/c+2X9/hjQI0uO3LsyuMioM9A8Sjy/W1iIhY7Sn2tzpUahdWyXiNDNSxcWtSlCBAAAAAAAAAAAAAAAAAAAAAAAAAAAAwCn+AEXGNosxDBhFAAAAAElFTkSuQmCC';">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* เลือกภาพ </label>
                                    <div class="col-sm-9">
                                        <div class="custom-file input-file-w-30">
                                            <input type="file" class="custom-file-input" name="img"
                                                   onchange="PreviewImage(this, 'previewImgCover');" value="<?php echo $contacts->img; ?>" required  accept="image/gif, image/jpeg, image/png">
                                            <label class="custom-file-label">เลือกไฟล์ (.gif | .jpg | .png)</label>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-top: 20px;"><h6><i class="fa fa-tag"></i> ข้อมูล</h6></div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* หัวข้อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="title" value="<?php echo $contacts->title; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* หน่วยงาน</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="department" value="<?php echo $contacts->department;?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* มหาวิทยาลัย</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="university" value="<?php echo $contacts->university;?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">* ที่อยู่</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" class="form-control" name="address" required="required"><?php echo $contacts->address;?></textarea>
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
                                    <label class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="facebook" value="<?php echo $contacts->facebook;?>">
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
<script>
    function PreviewImage(input, previewImage) {
        if (input.files && input.files[0]) {
            var reader = new FileReader()

            reader.onload = function (e) {
                $('#' + previewImage).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
