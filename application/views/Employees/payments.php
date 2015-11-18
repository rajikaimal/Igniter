            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add payments
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url(); ?>employees/addPayment">
                                        <div class="form-group">
                                            <label>Employee name</label>
                                            <select class="form-control" id="name" type="text" name="name">
                                                <option></option>
                                                <?php foreach($q->result() as $row): ?>
                                                <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input class="form-control" id="amount" type="number" min="0" name="amount">
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" id="date" type="date" name="date">
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
                var petrol = document.getElementById('petrol').value;
                var diesel = document.getElementById('diesel').value;
                if(petrol == "" || diesel == "") {
                    document.getElementById('message').innerHTML = "Please fill all fields";
                    return false;
                }
            }
        </script>