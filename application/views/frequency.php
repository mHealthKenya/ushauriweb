<!--END BLOCK SECTION -->
<hr />
<!-- COMMENT AND NOTIFICATION  SECTION -->
<div class="row" id="data">

    <div class="col-lg-12">


        <div class="panel panel-primary" id="main_clinician">

            <div class="panel-heading"> 
                Message flow frequency
            </div>   
            <div >


                <div class="panel-body"> 

                    <button class="add_btn btn btn-primary btn-small" id="add_btn">Add Frequency</button>
                    <div class="table_div">

                        <table id="table" class="table table-bordered table-condensed table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Frequency Name</th>
                                    <th>Date Added</th>
                                    <th>Time Stamp</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($frequency as $value) {
                                    ?>
                                    <tr>
                                        <td class="a-center"><?php echo $i; ?></td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo $value->created_at; ?></td>
                                        <td><?php echo $value->updated_at; ?></td>
                                        <td><?php echo $value->status; ?></td>
                                        <td>
                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                            <button class="btn btn-primary edit_btn" id="edit_btn">Edit </button></td>
                                        <td>
                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                            <button class="btn btn-primary delete_btn" id="delete_btn">Delete </button></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>


                    </div>









                    <div class="add_div" style="display: none;">



                        <div class="panel-body  formData" id="addForm">
                            <h2 id="actionLabel">Add Frequency</h2>






                            <form class="form add_form" id="add_form">
                                
                                
                                   <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>

                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                <div class="form-group">
                                    <label>Frequency Name : </label> 
                                    <input type="text"  required="" name="name" class="form-control name"/>

                                </div> 


                                <div class="form-group">
                                    <label>Status : </label> 
                                    <select class="form-control " id="" name="status">
                                        <option value="">Please select : </option>
                                        <option value="Active">Active</option>
                                        <option value="Disabled">Disabled</option>
                                    </select>

                                </div> 






                                <button class="submit_add_div btn btn-success btn-small" id="submit_add_div">Add Frequency</button>
                                <button class="close_add_div btn btn-danger btn-small" id="close_add_div">Cancel</button>
                            </form>





                        </div>




                    </div>






                    <div class="edit_div" style="display: none;">











                        <div class="panel-body  formData" id="editForm">
                            <h2 id="actionLabel">Edit Frequency</h2>






                            <form class="form edit_form" id="edit_form">

   <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>

                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />


                                <div class="form-group">
                                    <label>Frequency Name : </label> 
                                    <input type="text"  required="" name="name" id="edit_name" class="form-control name"/>

                                </div> 

                                <div class="form-group">
                                    <label>Status : </label> 
                                    <select name="status" class="form-control" id="edit_status" >
                                        <option value="">Please select</option>
                                        <option value="Active">Active</option>
                                        <option value="Disabled">Disabled</option>
                                    </select>
                                </div>



                                <input type="hidden" name="frequency_id" class="form-control frequency_id" id="edit_frequency_id" />




                                <button class="submit_edit_div btn btn-success btn-small" id="submit_edit_div">Update Frequency</button>
                                <button class="close_edit_div btn btn-danger btn-small" id="close_edit_div">Cancel</button>
                            </form>





                        </div>




                    </div>





                    <div class="delete_div" style="display: none;">











                        <div class="panel-body  formData" id="deleteForm">
                            <h2 id="actionLabel">Delete Frequency</h2>






                            <form class="form delete_form" id="delete_form">


                                
                                   <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>

                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                
                                
                                <p><span class="delete_description"></span></p>


                                <input type="hidden" name="frequency_id" class="form-control frequency_id" id="delete_frequency_id" />




                                <button class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Frequency</button>
                                <button class="close_delete_div btn btn-danger btn-small" id="close_delete_div">Cancel</button>
                            </form>





                        </div>




                    </div>









                </div>
            </div>              
          

        </div>        












    </div>



</div>
</div>
<!-- END COMMENT AND NOTIFICATION  SECTION -->

</div>








<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', ".add_btn", function () {

            $(".add_div").show();
            $(".table_div").hide();


        });


        $(document).on('click', ".edit_btn", function () {

 $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_frequency_data";
            var success_alert = "Frequency added successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_frequency_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
 $('.loader').hide();
                    $.each(response, function (i, value) {

                        $("#edit_name").val(value.name);
                        $('#edit_frequency_id').val(value.id);
                        $('#edit_created_at').val(value.created_at);
                        $('#edit_frequencystamp').val(value.frequencystamp);
                        $('#edit_status option[value=' + value.status + ']').attr("selected", "selected");

                    });


                    $(".edit_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
                     $('.loader').hide();
                    sweetAlert("Oops...", "" + error_alert + "", "error");

                }

            });









        });



        $(document).on('click', ".delete_btn", function () {

 $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var error_alert = "Ooops , Something really bad has happened (:";


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_frequency_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
 $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_frequency_id').val(value.id);

                        var delete_descripton = "Do you want to delete Frequency :  " + value.name + "";
                        $(".delete_description").append(delete_descripton);
                    });


                    $(".delete_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
                     $('.loader').hide();
                    sweetAlert("Oops...", "" + error_alert + "", "error");

                }

            });









        });



        $(".close_add_div").click(function () {
            $(".add_div").hide();
            $(".table_div").show();
            $(".name").empty();

            $(".status").empty();



        });





        $(".submit_add_div").click(function () {
            var controller = "admin";
            var submit_function = "add_frequency";
            var form_class = "add_form";
            var success_alert = "Frequency added successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".add_div").hide();
            $(".table_div").show();
            $(".name").empty();

            $(".status").empty();
        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_frequency";
            var form_class = "edit_form";
            var success_alert = "Frequency data updated successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".edit_div").hide();
            $(".table_div").show();
            $(".name").empty();

            $(".status").empty();
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_frequency";
            var form_class = "delete_form";
            var success_alert = "Frequency data delete successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".delete_div").hide();
            $(".table_div").show();
            $(".name").empty();

            $(".status").empty();
        });






    });
</script>




<!--END MAIN WRAPPER -->