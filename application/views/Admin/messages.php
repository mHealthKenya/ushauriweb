                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>/admin/messages">Messages</a></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->




        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Time List</h4>
                        <h6 class="card-subtitle">A list of Clients Preferred Texting Time in the  system </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 


                                <button class="add_btn btn btn-primary btn-small" id="add_btn">Add Time</button>





                                <div class="table_div">
  <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Messages Export Report"/>

                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Message</th>
                                                <th>Message Type</th>
                                                <th>Language</th>
                                                <th>Status</th>
                                                <th>Date Added</th>
                                                <th>Time Stamp</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($messages as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->message; ?></td>
                                                    <td><?php echo $value->message_type_name; ?></td>
                                                    <td><?php echo $value->language_name; ?></td>
                                                    <td><?php echo $value->status; ?></td>
                                                    <td><?php echo $value->created_at; ?></td>
                                                    <td><?php echo $value->updated_at; ?></td>
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



                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card card-outline-primary">
                                                <div class="card-header">
                                                    <h4 class="m-b-0 text-white">Add Time</h4>
                                                </div>
                                                <div class="card-body">






                                                    <form class="form add_form" id="add_form">

                                                        <?php
                                                        $csrf = array(
                                                            'name' => $this->security->get_csrf_token_name(),
                                                            'hash' => $this->security->get_csrf_hash()
                                                        );
                                                        ?>

                                                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />


                                                        <div class="form-group">
                                                            <label>Message : </label> 
                                                            <textarea name="message" class="form-control description-text message" id="message"></textarea>

                                                        </div> 

                                                        <div class="form-group">
                                                            <label>Response : </label> 

                                                            <select class="form-control response"  id="response" name="response">
                                                                <option value="">Please select : </option>                                               
                                                                <?php foreach ($response as $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value->id ?>"> <?php echo $value->value ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>


<!--<input type="text"  required="" name="response" class="form-control response"/>-->

                                                        </div> 






                                                        <div class="form-group">
                                                            <label>Message Type : </label>

                                                            <select class="form-control message_type_id"  id="message_type_id" name="message_type_id">
                                                                <option value="">Please select : </option>                                               
                                                                <?php foreach ($message_types as $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                <?php }
                                                                ?>
                                                            </select> 

                                                        </div>


                                                        <div class="form-group">
                                                            <label>Language : </label>

                                                            <select class="form-control language_id"  id="language_id" name="language_id">
                                                                <option value="">Please select : </option>                                               
                                                                <?php foreach ($languages as $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                <?php }
                                                                ?>
                                                            </select> 

                                                        </div>


                                                        <div class="form-group">
                                                            <label>Groups : </label>

                                                            <select class="form-control groups_id"  id="groups_id" name="groups_id">
                                                                <option value="">Please select : </option>                                               
                                                                <?php foreach ($groups as $value) {
                                                                    ?>
                                                                    <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                <?php }
                                                                ?>
                                                            </select> 

                                                        </div>



                                                        <div class="form-group">
                                                            <label>Status : </label> 
                                                            <select name="status" class="form-control status" id="status" >
                                                                <option value="">Please select</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Disabled">Disabled</option>
                                                            </select>
                                                        </div>










                                                        <button class="submit_add_div btn btn-success btn-small" id="submit_add_div">Add Message</button>
                                                        <button class="close_add_div btn btn-danger btn-small" id="close_add_div">Cancel</button>
                                                    </form>











                                                </div>
                                            </div></div></div>




                                </div>



                                <div class="row edit_div" id="edit_div" style="display: none">



                                    <div class="col-lg-12">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Edit Time</h4>
                                            </div>
                                            <div class="card-body">





                                                <form class="form edit_form" id="edit_form">




                                                    <?php
                                                    $csrf = array(
                                                        'name' => $this->security->get_csrf_token_name(),
                                                        'hash' => $this->security->get_csrf_hash()
                                                    );
                                                    ?>

                                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />




                                                    <div class="form-group">
                                                        <label>Message : </label> 
                                                        <textarea name="message" class="form-control description-text message" id="edit_message"></textarea>

                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Response : </label> 
                    <!--                                    <input type="text"  required="" id="edit_response" name="response" class="form-control response"/>-->

                                                        <select class="form-control response"  id="edit_response" name="response">
                                                            <option value="">Please select : </option>                                               
                                                            <?php foreach ($response as $value) {
                                                                ?>
                                                                <option value="<?php echo $value->id ?>"> <?php echo $value->value ?></option>
                                                            <?php }
                                                            ?>
                                                        </select>

                                                    </div> 






                                                    <div class="form-group">
                                                        <label>Message Type : </label>

                                                        <select class="form-control message_type_id"  id="edit_message_type_id" name="message_type_id">
                                                            <option value="">Please select : </option>                                               
                                                            <?php foreach ($message_types as $value) {
                                                                ?>
                                                                <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                            <?php }
                                                            ?>
                                                        </select> 

                                                    </div>


                                                    <div class="form-group">
                                                        <label>Language : </label>

                                                        <select class="form-control language_id"  id="edit_language_id" name="language_id">
                                                            <option value="">Please select : </option>                                               
                                                            <?php foreach ($languages as $value) {
                                                                ?>
                                                                <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                            <?php }
                                                            ?>
                                                        </select> 

                                                    </div>


                                                    <div class="form-group">
                                                        <label>Groups : </label>

                                                        <select class="form-control groups_id"  id="edit_groups_id" name="groups_id">
                                                            <option value="">Please select : </option>                                               
                                                            <?php foreach ($groups as $value) {
                                                                ?>
                                                                <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                            <?php }
                                                            ?>
                                                        </select> 

                                                    </div>









                                                    <div class="form-group">
                                                        <label>Status : </label> 
                                                        <select name="status" class="form-control status" id="edit_status" >
                                                            <option value="">Please select</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Disabled">Disabled</option>
                                                        </select>
                                                    </div>



                                                    <input type="hidden" name="message_id" class="form-control message_id" id="edit_message_id" />




                                                    <button class="submit_edit_div btn btn-success btn-small" id="submit_edit_div">Update Message</button>
                                                    <button class="close_edit_div btn btn-danger btn-small" id="close_edit_div">Cancel</button>
                                                </form>







                                            </div>
                                        </div></div></div>



                                <div class="row delete_div" id="delete_div" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Delete Time</h4>
                                            </div>
                                            <div class="card-body">




                                                <form class="form delete_form" id="delete_form">


                                                    <?php
                                                    $csrf = array(
                                                        'name' => $this->security->get_csrf_token_name(),
                                                        'hash' => $this->security->get_csrf_hash()
                                                    );
                                                    ?>

                                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />




                                                    <p><span class="delete_message"></span></p>


                                                    <input type="hidden" name="message_id" class="form-control message_id" id="delete_message_id" />




                                                    <button class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Message</button>
                                                    <button class="close_delete_div btn btn-danger btn-small" id="close_delete_div">Cancel</button>
                                                </form>




                                            </div>
                                        </div></div></div>





                            </div>








                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->





        <!-- END COMMENT AND NOTIFICATION  SECTION -->

    </div>






    <!--END MAIN WRAPPER -->


</div>





<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
<footer class="footer"> © 2018 Ushauri -  All rights reserved. Powered  by <a href="https://mhealthkenya.org">mHealth Kenya Ltd</a></footer>
<!-- End footer -->
</div>
<!-- End Page wrapper  -->





<!--END BLOCK SECTION -->














<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', ".add_btn", function () {
            $(".name").empty();

            $(".message").empty();




            $(".add_div").show();
            $(".table_div").hide();


        });


        $(document).on('click', ".edit_btn", function () {

            $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_message_data";
            var success_alert = "Message added successfully ... :) ";
            var error_alert = "An Error Ocurred";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_message_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $("#edit_message_id").empty();
                        $("#edit_message").empty();






                        $("#edit_name").val(value.message);
                        $('#edit_message_id').val(value.id);
                        $('#edit_groups_id option[value=' + value.group_id + ']').attr("selected", "selected");
                        $('#edit_message_type_id option[value=' + value.message_type_id + ']').attr("selected", "selected");
                        $('#edit_language_id option[value=' + value.language_id + ']').attr("selected", "selected");
                        $('#edit_response option[value=' + value.identifier + ']').attr("selected", "selected");
                        $('#edit_message').val(value.message);
                        $('#edit_created_at').val(value.created_at);
                        $('#edit_timestamp').val(value.timestamp);
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
            var error_alert = "An Error Ocurred";


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_message_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_message_id').val(value.id);

                        var delete_descripton = "Do you want to delete Message :  " + value.message + "";
                        $(".delete_message").append(delete_descripton);
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
            $(".f_name").empty();

            $(".l_name").empty();

            $(".phone_no").empty();
            $(".e_mail").empty();

            $(".m_name").empty();
            $(".dob").empty();

        });





        $(".submit_add_div").click(function () {
            var controller = "admin";
            var submit_function = "add_message";
            var form_class = "add_form";
            var success_alert = "Message added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);


            $(".add_div").show();
            $(".table_div").hide();
        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_message";
            var form_class = "edit_form";
            var success_alert = "Message data updated successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".edit_div").show();
            $(".table_div").hide();
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_message";
            var form_class = "delete_form";
            var success_alert = "Message data delete successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".delete_div").show();
            $(".table_div").hide();
        });






    });
</script>



<!--END MAIN WRAPPER -->







