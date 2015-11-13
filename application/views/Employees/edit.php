            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit employee info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>employees/editEmpDetails">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" id="name" value="<?php echo ($q->{"name"}); ?>" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" id="phone" value="<?php echo ($q->{"phone"}); ?>" type="number" min="0" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input class="form-control" id="role" value="<?php echo ($q->{"role"}); ?>" type="text" name="role">                 
                                        </div>
                                        <input type="text" value="<?php echo ($q->{"id"}); ?>" hidden name="id">
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
                var petrol = document.getElementById('petrol').value;
                var diesel = document.getElementById('diesel').value;
                if(petrol == "" || diesel == "") {
                    document.getElementById('message').innerHTML = "Please fill all fields";
                    return false;
                }
            }
        </script>