
<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back_end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Custom CSS -->
<style>
    #sortable{
        padding: 0;
    }

    #sortable li{
        cursor: move;
        padding: 40px 0px;
        list-style-type: none;
        border-bottom: solid 1px #eee;
        height: 70px;
        display: flex;
        align-items: center;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 800px;
            margin: 1.75rem auto;
        }
    }
</style>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="<?php echo base_url('backoffice/dashboard'); ?>">แดชบอร์ด</a></div>
                <div class="breadcrumb-item"><a href="#">หน้า: หน้าแรก</a></div>
                <div class="breadcrumb-item active">แบนเนอร์</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>รายการ แบนเนอร์</h4>
                            <div class="card-header-action">
                                <button class="btn btn-primary" id="btnSort"><i class="fas fa-sort"></i>จัดเรียง</button>
                                <a href="<?php echo base_url('backoffice/page/about/faculty/create'); ?>" class="btn btn-primary" >
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
                                        <th>รูป</th>
                                        <th>ชื่อ</th>
                                        <th>ตำแหน่ง</th>
                                        <th>สร้างเมื่อ</th>
                                        <th>การกระทำ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $counter = 1;
                                    foreach ($faculty as $faculties) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $counter++; ?></td>
                                            <td>
                                                <img id="previewImgCover"
                                                     src="<?php echo base_url('storage/uploads/images/faculty/' . $faculties->img); ?>"
                                                     style="background-color: #fff;" height="100">
                                            </td>
                                            <td><?php echo $faculties->name_th; ?></td>
                                            <?php if ($faculties->status == 1) { ?>
                                                <td><?php echo 'หัวหน้าสาขา'; ?></td>
                                            <?php } else { ?>
                                                <td><?php echo 'คณาจารย์'; ?></td>
                                            <?php } ?>
                                            <td><?php echo $faculties->created_at; ?></td>
                                            <td>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                            id="dropdownMenuButton2" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-cog"></i> จัดการ
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item has-icon"
                                                           href="<?php echo base_url('backoffice/page/about/faculty/edit/' . $faculties->id); ?>"><i
                                                                    class="far fa-edit"></i> แก้ไข</a>
                                                        <a class="dropdown-item has-icon"
                                                           onclick="deleteProduct('<?php echo base_url('backoffice/page/about/faculty/destroy/' . $faculties->id); ?>')"><i
                                                                    class="far fa-trash-alt"></i> ลบ </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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

<!-- modal content -->
<div id="custom-width-modal" class="modal fade modal-sort-gallery" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="custom-width-modalLabel">จัดเรียง</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="btnSaveSorting">บันทึก</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- JS Libraies -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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
    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1500)
    }

    function deleteBanner(url) {
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

    $(document).ready(function() {
        $('#btnSort').on('click', function() {
            $.ajax({
                type: "POST",
                url: window.base_url + 'backoffice/page/about/faculty/ajax/get/faculty/sort/show',
                success: function(res) {
                    $('#custom-width-modal .modal-body').html(res.data)
                    $("#custom-width-modal #sortable").sortable({ placeholder: "ui-state-highlight" })
                    $("#custom-width-modal").modal('show')
                },
                error: function() {
                    alert("failure")
                }
            })
        })

        $('#btnSaveSorting').click(function() {

            $(".btnSaveSorting").text("Wait..")
            $('.btnSaveSorting').addClass('disabled')

            let selectedSort = []
            let selectedID = []

            $('#custom-width-modal ul#sortable li').each(function() {
                selectedSort.push($(this).attr("data-sort"))
                selectedID.push($(this).attr("id"))
            })

            $.ajax({
                type: "POST",
                url: window.base_url + 'backoffice/page/about/faculty/ajax/get/faculty/sort/update',
                data: {
                    id: selectedID,
                    sort: selectedSort
                },
                success: function(res) {
                    window.location.reload()
                },
                error: function(){
                    alert("failure")
                }
            })
        })
    })
</script>
