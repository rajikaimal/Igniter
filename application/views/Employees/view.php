            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Employee Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                           foreach ($q->result() as $row):
                                        ?>
                                        <form method="post" action="<?php echo base_url();?>clients/remove">
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->name; ?></td>
                                            <td class="text-center"><?php echo $row->phone; ?></td>
                                            <td class="text-center"><?php echo $row->role; ?></td>
                                            <td class="text-center"><a class="btn btn-success" href="<?php echo base_url();?>employees/editEmployee?id=<?php echo $row->id; ?>">Edit</a></td>
                                            <td class="text-center"><a class="btn btn-danger" href="<?php echo base_url();?>employees/removeEmployee?id=<?php echo $row->id; ?>">Remove</a></td>
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