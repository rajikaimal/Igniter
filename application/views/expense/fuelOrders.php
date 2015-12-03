            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add payments
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>expense/addFuelOrderPayment">
                                        <div class="form-group">
                                            <label>Fuel type</label>
                                            <select class="form-control" id="type" type="text" name="fuel">
                                                <option value="petrol">Petrol</option>
                                                <option value="diesel">Diesel</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="date" type="date" name="date">
                                        </div>
                                        <button type="submit" class="btn btn-default" onclick="return checkFields()">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <span id="message" style="color:#FF1A1A"></span>
                                    </form>
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

        <script type="text/javascript">
            function checkFields() {
                var type = document.getElementById('type').value;
                var date = document.getElementById('date').value;
                if(type == "" || date == "") {
                    document.getElementById('message').innerHTML = "Please fill all fields";
                    return false;
                }
            }
        </script>