<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if (isset($breadcrumb)) { ?>
                    <ol class="breadcrumb float-sm-right">
                        <?php $i = 0;foreach ($breadcrumb as $key => $value): ?>
                        <?php $i++; ?>
                        <?php if ($i == count($breadcrumb)): ?>
                        <li class="breadcrumb-item active"><?php echo $key; ?></li>
                        <?php else: ?>
                        <li class="breadcrumb-item"><a href=""><?php echo $key; ?></a></li>
                        <?php endif; ?>
                        <?php endforeach ?>


                    </ol>
                    <?php } ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ตารางแสดง<?php echo $title; ?></h3>
                            <div class="float-right"><a href="<?php echo $link_add;?>" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> เพิ่ม</a></div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <?php echo isset($success) ? '<div class="alert alert-success" role="alert">' . $success . '</div>' : ''; ?>
                            <?php echo isset($error) ? '<div class="alert alert-danger" role="alert">' . $error . '</div>' : ''; ?>
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>อีเมล</th>
                                        <th>ชื่อ</th>
                                        <th>สถานที่ปฏิบัติการ</th>
                                        <th>เข้าระบบล่าสุด</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- DataTables -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    var datapost = new Object();
    var path = '<?php echo route('customer/ajaxList'); ?>';
    var table = $('table.table');
    table.DataTable({
        processing: true,
        serverSide: true,
        language: {
            search: "ค้นหา",
            emptyTable: "ไม่พบข้อมูล",
            info: "หน้า _START_/_TOTAL_",
            infoEmpty: "Showing 0 to 0 of 0 entries",
            infoFiltered: "(แสดง _MAX_ จำนวนต่อหน้า )",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "แสดง _MENU_",
            loadingRecords: "กำลังโหลด...",
            processing: "กำลังประมวลผล...",
            search: "ค้นหา",
            zeroRecords: "ไม่พบข้อมูล",
            paginate: {
                first: "หน้าแรก",
                last: "หน้าสุดท้าย",
                next: "ต่อไป",
                previous: "กลับ"
            },
        },
        columnDefs: [{
                targets: 0,
                orderable: false
            },
            {
                targets: 5,
                orderable: false
            }
        ],
        order: [],
        ajax: {
            url: path,
            type: "POST",
            data: datapost,
            dataFilter: function(data) {
                var json = jQuery.parseJSON(data);
                return JSON.stringify(json); // return JSON string
            }
        },
        dataSrc: 'data',
        columns: [{
                data: "no"
            },
            {
                data: "email"
            },
            {
                data: "name"
            },
            {
                data: "laboratory"
            },
            {
                data: "date_login"
            },
            {
                data: "action",
                className: 'text-center'
            },
        ],
    });
});
</script>