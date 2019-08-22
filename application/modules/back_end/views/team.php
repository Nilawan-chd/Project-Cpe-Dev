<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/back-end/node_modules/prismjs/themes/prism.css'); ?> ">

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Item: Teams</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Manage Item</a></div>
                <div class="breadcrumb-item">Teams</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>List of Teams</h4>
                            <div class="card-header-action">
                                <a href="#modalAddEditTeam" class="btn btn-primary" onclick="addTeam()" data-toggle="modal">
                                    <i class="fas fa-plus"></i> Add News
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $counter = 1;
                                        foreach ($teams as $team) {
                                            echo '<tr>';
                                            echo '<td class="text-center">' . $counter++ . '</td>';
                                            echo '<td>' . $team->title . '</td>';
                                            echo '<td>' . $team->body . '</td>';
                                            echo '<td>' . '<img alt="image" src=' . base_url('storage/images/teams/' . $team->image) . ' width="120">' . '</td>';
                                            echo '<td>
                                                        <a class="btn btn-warning" onclick="editTeam(' . "'" . base_url("backoffice/manage-item/teams/edit/$team->id") . "'" . ')"><i class="fas fa-edit"></i> Edit</a>
                                                        <a class="btn btn-danger" onclick="deleteTeam(' . "'" . base_url("backoffice/manage-item/teams/destroy/$team->id") . "'" . ')"><i class="fas fa-trash-alt"></i> Delete</a>
                                                    </td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAddEditTeam">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Modal Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addEditTeamForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="hidden" value="" id="id">
                            <input type="text" class="form-control" name="title" id="title" required="required">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="body" id="body" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <div class="text-center mb-3">
                                <img id="imgTeam" src="" class="rounded" width="200px">
                            </div>
                            <input type="file" class="form-control" name="file" id="file" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnAddTeam">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JS Libraies -->
<script src="<?php echo base_url('resources/back-end/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/back-end/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js'); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('resources/back-end/assets/js/page/modules-datatables.js'); ?>"></script>

<script>
    function reload() {
        setTimeout(function () {
            location.reload()
        }, 1 * 1500)
    }

    function clearForm() {
        $('#modalAddEditTeam form')[0].reset()
    }

    function addTeam() {
        clearForm()
        $('#modalTitle').html('Add')
        $('#id').val('')
        $('#title').val('')
        $('#body').val('')
        $('#file').val('').attr('required', 'required')
        $('#imgTeam').attr('src', '')
    }

    function editTeam(url) {
        clearForm()

        $.ajax({
            url: url,
            success: function (res) {
                let team = res.data

                $('#modalAddEditTeam').modal('show')

                $('#modalTitle').html('Edit')
                $('#id').val(team.id).attr('data-link-to-update', url.replace('edit', 'update'))
                $('#title').val(team.title)
                $('#body').val(team.body)
                $('#imgTeam').attr('src', "<?php echo base_url('storage/images/teams/'); ?>" + team.image)
                $('#file').removeAttr('required')
            },
            error: function (res) {
                swal({
                    title: 'Oops...',
                    text: 'fail',
                    icon: 'error',
                    timer: '1500'
                })
            }
        })
    }

    function deleteTeam(url) {
        swal({
            title: 'Are you sure ?',
            icon: 'warning',
            button: true,
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

    $(document).ready(function () {
        $('#addEditTeamForm').on('submit', function (e) {
            e.preventDefault()

            let $data = new FormData($(this)[0]),
                $teamId = $('#id').val(),
                url = '',
                method = 'POST',
                fileData = ''

            // Case: Update
            if ($teamId != '') {
                url = $('#id').attr('data-link-to-update')
                fileData = $("#file").prop("files")[0]
                $data.append('file', fileData)
            }
            // Case: Insert New
            else {
                url = '<?php echo base_url('backoffice/manage-item/teams/store'); ?>'
            }

            $.ajax({
                type: method,
                url: url,
                data: $data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (res) {
                    $('#modalAddEditTeam').modal('hide')
                    swal({
                        title: 'Success',
                        icon: 'success',
                        button: "Great!"
                    })

                    reload()
                },
                error: function (res) {
                    swal({
                        title: 'Oops...',
                        text: 'fail',
                        icon: 'error',
                        timer: '1500'
                    })
                }
            })
        })
    })
</script>