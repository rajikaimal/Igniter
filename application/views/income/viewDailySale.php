            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url(); ?>income/viewDailySale">View sales of this month </a>
                            ----- <a href="<?php echo base_url(); ?>income/rates">Set rates </a>
                        </div>
                        <div class="panel-body">
                        <h3>Petrol</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sales</th>
                                            <th class="text-center">Amount (Rs)</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sum = 0;
                                           foreach ($dataPetrol->result() as $row):
                                        ?>
                                        <form method="post" action="<?php echo base_url();?>clients/remove">
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->sales; ?></td>
                                            <td class="text-center"><?php echo ($row->sales*$petrolRate); ?></td>
                                            <td class="text-center"><?php echo $row->date; ?></td>
                                        </tr>
                                        <?php $sum = $sum + $row->sales*$petrolRate; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td class="text-center"><b>Total</b></td>
                                            <td class="text-center"><b><?php echo $sum; ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <div class="panel-body">
                        <h3>Diesel</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sales</th>
                                            <th class="text-center">Amount (Rs)</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sum = 0;
                                           foreach ($dataDiesel->result() as $row):
                                        ?>
                                        <form method="post" action="<?php echo base_url();?>clients/remove">
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->sales; ?></td>
                                            <td class="text-center"><?php echo ($row->sales*$dieselRate); ?></td>
                                            <td class="text-center"><?php echo $row->date; ?></td>
                                        </tr>
                                        <?php $sum = $sum + $row->sales*$petrolRate; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td class="text-center"><b>Total</b></td>
                                            <td class="text-center"><b><?php echo $sum; ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->