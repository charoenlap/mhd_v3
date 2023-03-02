<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Program : <?php echo $program_head; ?></h1>
                    <h1>Trial No : <?php echo $trial_name; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <h4>รายงานการได้รับสิ่งส่งตรวจ</h4>
        <div class="container">
            <?php require_once($require_export_received); ?>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <h4>รายงานผล</h4>
                            <div class="col-md-4">
                                <?php require_once($require_export); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>