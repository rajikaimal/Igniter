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
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Fuel</th>
                                            <th class="text-center">Reading (cm)</th>
                                            <th class="text-center">Testing (l)</th>
                                            <th class="text-center">Stock (l)</th>
                                            <th class="text-center">Order (l)</th>
                                            <th class="text-center">Price (Rs)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr class="odd gradeX">
                                            <td class="text-center"><?php echo $date; ?></td>
                                            <td class="text-center"><?php echo $oil; ?></td>
                                            <td class="text-center"><?php echo $reading; ?></td>
                                            <td class="text-center"><?php echo $testing; ?></td>
                                            <td class="text-center"><?php echo $stock; ?></td>
                                            <td class="text-center"><?php echo $order_amount; ?></td>
                                            <?php 
                                                if($oil == "petrol") :
                                            ?>
                                            <td class="text-center"><?php echo $order_amount*$petrolRate->{"petrol"};  ?></td>
                                            <?php 
                                                elseif($oil == "diesel") :
                                            ?>                                    
                                            <td class="text-center"><?php echo $order_amount*$dieselRate->{"diesel"};  ?></td>
                                            <?php endif; ?>

                                        </tr>
                                            
                                    </tbody>
                                    </table>
                                    <a href="<?php echo base_url(); ?>expense/addFuelPayment?date=<?php echo $date; ?>&oil=<?php echo $oil; ?>&payment=<?php echo $order_amount*$petrolRate->{"petrol"}; ?>" class="btn btn-success"> Add Payment </a>
                                    
                                    
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