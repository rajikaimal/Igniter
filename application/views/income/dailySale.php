            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo base_url(); ?>income/viewDailySale">View sales of this month </a>
                            <a href="<?php echo base_url(); ?>income/rates">Set rates </a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>income/addDailySales">
                                        <div class="form-group">
                                            <label>Petrol</label>
                                            <input class="form-control" placeholder="petrol sales" id="petrol" type="number" min="0" name="petrol">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Diesel</label>
                                            <input class="form-control" placeholder="diesel sales" id="diesel" type="number" min="0" name="diesel">
                                            
                                        </div>
    
                                        <button type="submit" class="btn btn-default" onclick="return checkFields()">Done</button>
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
                var petrol = document.getElementById('petrol').value;
                var diesel = document.getElementById('diesel').value;
                if(petrol == "" || diesel == "") {
                    document.getElementById('message').innerHTML = "Please fill all fields";
                    return false;
                }
            }
        </script>