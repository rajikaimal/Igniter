        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Readings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>    
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                            <form method="post" action="saveReadings">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Oil type</th>
                                            <th>Reading</th>
                                            <th>Testing</th>
                                            <th>Current stock</th>
                                            <th>Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Petrol</td>
                                            <td><input type="number" name="readingPetrol" class="form-control" value="<?php echo $realReadingPetrol; ?>"></td>
                                            <td><input type="number" name="testingPetrol" class="form-control" value=""></td>
                                            <td><input type="number" name="stocKPetrol" class="form-control" value="<?php echo $petrolStock; ?>"></td>
                                            <td class="center"><select class="form-control" name="petrolOrder">
                                                <option>0</option>
                                                <option>6600</option>
                                                <option>13200</option>
                                                <option>19800</option>
                                            </select></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Diesel</td>
                                            <td><input type="number" name="readingDiesel" class="form-control" value="<?php echo $realReadingDiesel; ?>"></td>
                                            <td><input type="number" name="testingDiesel" class="form-control" value=""></td>
                                            <td><input type="number" name="stockDiesel" class="form-control" value="<?php echo $dieselStock; ?>"></td>
                                            <td class="center"><select class="form-control" name="dieselOrder">
                                                <option>0</option>
                                                <option>6600</option>
                                                <option>13200</option>
                                                <option>19800</option>
                                            </select></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-default">Save</button>    
            </form>
        </div>