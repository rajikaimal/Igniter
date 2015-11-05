        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>History</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>stocks/history">
                            <div class="panel-footer">
                                <span class="pull-left">View history</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Stocks</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Oil Stock readings
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="stocks/readings">
                                        <div class="form-group">
                                            <label>Petrol</label>
                                            <input class="form-control" id="petrol" type="number" min="0" name="petrol">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Diesel</label>
                                            <input class="form-control" id="diesel" type="number" min="0" name="diesel">
                                            
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