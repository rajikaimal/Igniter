            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add lubricants
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>stocks/addLubricant">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="name" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input class="form-control" id="amount" type="number" min="0" name="amount">
                                        </div>
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <input class="form-control" id="supplier" type="text" name="supplier">                 
                                        </div>
                                        <button type="submit" class="btn btn-default" onclick="return checkFields()">Save</button>
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
                var name = document.getElementById('name').value;
                var amount = document.getElementById('amount').value;
                var supplier = document.getElementById('supplier').value;
                if(name == "" || amount == "" || supplier == "") {
                    document.getElementById('message').innerHTML = "Please fill all fields";
                    return false;
                }
            }
        </script>