            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url();?>employees/viewAttendance">View attendance </a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center"></th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                           foreach ($q->result() as $row):
                                        ?>
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $row->name; ?></td>
                                            <td class="text-center"><a class="btn btn-success" href="<?php echo base_url();?>employees/setAttendancePresent?name=<?php echo $row->name; ?>">Present</a></td>
                                            <td class="text-center"><a class="btn btn-danger" href="<?php echo base_url();?>employees/setAttendanceAbsent?name=<?php echo $row->name; ?>">Absent</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <?php var_dump($q1); ?>
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