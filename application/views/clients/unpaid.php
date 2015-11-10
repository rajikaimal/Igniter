            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span><a href="<?php echo base_url();?>clients/summary">Summary of the month</a></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                           foreach ($q->result() as $row):
                                        ?>
                                        <form method="post" action="<?php echo base_url();?>clients/remove">
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->name; ?></td>
                                            <td class="text-center"><?php echo $row->amount; ?></td>
                                            <td class="text-center"><?php echo $row->date; ?></td>
                                            <!-- <td class="text-center"><a class="btn btn-success" href="<?php echo base_url(); ?>clients/updateStatus?id=<?php echo $row->id ?>">Paid</a></td> -->
                                            <td class="text-center"><a class="btn btn-danger" href="<?php echo base_url(); ?>clients/removeLoan?id=<?php echo $row->id ?>">Remove</a></td>
                                        </tr>
                                        <?php endforeach; ?>
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