            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Amount(Rs)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $count = 0;
                                           foreach ($q->result() as $row):
                                        ?>
                                        <form method="post" action="<?php echo base_url();?>clients/remove">
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->name; ?></td>
                                            <td class="text-center"><?php echo $row->amount; ?></td>
                                            <?php if($row->status != "paid"): ?>
                                            <td class="text-center"><a class="btn btn-success" href="<?php echo base_url(); ?>clients/updateStatusPay?name=<?php echo $row->name; ?>">Paid</a></td>
                                            <?php endif; ?>
                                            <?php $count = $count + $row->amount; ?>
                                        </tr>
                                            <?php endforeach; ?>
                                        <tr>
                                            <td class="text-center"><b>Total(Rs)</b></td>
                                            
                                            <td class="text-center"><b><?php echo $count; ?></b></td>
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