<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: หน้าแรก</a></div>
                <div class="breadcrumb-item">ประเภทข่าวสาร</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>รายการ ประเภทข่าวสาร</h4>
                            <div class="card-header-action">
                                <a href="<?php echo base_url('backoffice/page/home/news/create'); ?>"
                                   class="btn btn-primary">
                                    <i class="fas fa-plus"></i> เพิ่ม
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                            <?php } ?>

                            <div class="table-responsive">
                                <table class="table table-striped" id="ssmDataTable">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>หัวข้อ</th>
                                        <th>สร้าง เมื่อ</th>
                                        <th>รายการย่อย</th>
                                        <th>การกระทำ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
										if (count($category_news) > 0) {
                                            $counter = 1;
                                            foreach ($category_news as $category_new) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $counter++; ?></td>
                                                    <td><?php echo $category_new->title; ?></td>
                                                    <td><?php echo $category_new->created_at; ?></td>
                                                    <td>
                                                        <a class="btn btn-warning"
                                                           href="<?php echo base_url('backoffice/page/home/news/list/show/' . $category_new->id); ?>">
                                                            <i class="far fa-view"></i> รายการ
                                                            (<?php echo $category_new->counter; ?>)</a>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline">
                                                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-cog"></i> จัดการ
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item has-icon" href="<?php echo base_url('backoffice/page/home/news/edit/' . $category_new->id); ?>"><i class="far fa-edit"></i> แก้ไข</a>
                                                                <a class="dropdown-item has-icon" onclick="deleteCategoryProduct('<?php echo base_url('backoffice/page/home/news/destroy/' . $category_new->id); ?>')"><i class="far fa-trash-alt"></i> ลบ</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
									<?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- JS Libraies -->
<script src="<?php echo base_url('resources/back_end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back_end/assets/js/page/modules-datatables.js'); ?>"></script>

<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back_end/assets/js/vfs_fonts.js'); ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>


<script>
    var grid;

    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1500)
    }

    function deleteCategoryProduct(url) {
        swal({
            title: 'Are you sure ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        success: function (res) {
                            swal({
                                title: 'Success',
                                icon: 'success',
                                button: 'Great!'
                            })

                            reload()
                        },
                        error: function (res) {
                            swal({
                                title: 'Oops...',
                                text: 'Fail',
                                icon: 'error',
                                timer: '1500'
                            })
                        }
                    })
                } else {
                    swal('Cancel')
                }
            })
    }
</script>
