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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>/admin/groups">Groups</a></li>
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
                        <h4 class="card-title">Client Grouping List</h4>
                        <h6 class="card-subtitle">A list of Client Grouping List </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 


                                <button class="add_btn btn btn-primary btn-small" id="add_btn"> <i class="fa fa-plus"></i> Add </button>





                                <div class="table_div">
                                    <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Groups Export Report"/>

                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Group Name</th>
                                                <th>Description</th>
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
                                            foreach ($groups as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->name; ?></td>
                                                    <td><?php echo $value->description; ?></td>
                                                    <td><?php echo $value->status; ?></td>
                                                    <td><?php echo $value->created_at; ?></td>
                                                    <td><?php echo $value->updated_at; ?></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary edit_btn" id="edit_btn"><i class="fa fa-edit"></i> </button></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary delete_btn" id="delete_btn"><i class="fa fa-trash"></i> </button></td>
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
                                                    <h4 class="m-b-0 text-white">Add Groups</h4>
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
                                                            <label>Group Name : <span class="text-danger">*</span> </label> 
                                                            <input type="text"  required="" name="name" class=" input input-rounded input-sm  form-control name"/>

                                                        </div> 


                                                        <div class="form-group">
                                                            <label>Description :  <span class="text-danger">*</span> </label> 
                                                            <textarea name="description" class=" input input-rounded input-sm  form-control description-text description" id="description"></textarea>

                                                        </div> 







                                                        <div class="form-group">
                                                            <label>Status : <span class="text-danger">*</span> </label> 
                                                            <select name="status" class=" input input-rounded input-sm  form-control" id="status" >
                                                                <option value="">Please select</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Disabled">Disabled</option>
                                                            </select>
                                                        </div>


                                                        <button type="submit" class="submit_add_div btn btn-success btn-small" id="submit_add_div"><i class="fa fa-save"></i>Add Group</button>
                                                        <button type="button" class="close_add_div btn btn-danger btn-small" id="close_add_div"><i class="fa fa-stop"></i>Cancel</button>
                                                    </form>













                                                </div>
                                            </div></div></div>




                                </div>



                                <div class="row edit_div" id="edit_div" style="display: none">



                                    <div class="col-lg-12">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Edit Groups</h4>
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
                                                        <label>Group Name : <span class="text-danger">*</span> </label> 
                                                        <input type="text"  required="" name="name" id="edit_name" class=" input input-rounded input-sm  form-control name"/>

                                                    </div> 


                                                    <div class="form-group">
                                                        <label>Description : <span class="text-danger">*</span> </label> 
                                                        <textarea name="description"  class=" input input-rounded input-sm  form-control description-text description" id="edit_description"></textarea>

                                                    </div> 






                                                    <div class="form-group">
                                                        <label>Status :  <span class="text-danger">*</span> </label> 
                                                        <select name="status" class=" input input-rounded input-sm  form-control " id="edit_status" >
                                                            <option value="">Please select</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Disabled">Disabled</option>
                                                        </select>
                                                    </div>


                                                    <input type="hidden" name="group_id" class=" input input-rounded input-sm  form-control group_id" id="edit_group_id" />




                                                    <button type="submit" class="submit_edit_div btn btn-success btn-small" id="submit_edit_div"><i class="fa fa-save"></i>Update Group</button>
                                                    <button type="button" class="close_edit_div btn btn-danger btn-small" id="close_edit_div"><i class="fa fa-stop-circle-o"></i>Cancel</button>
                                                </form>









                                            </div>
                                        </div></div></div>



                                <div class="row delete_div" id="delete_div" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Delete Groups</h4>
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


                                                    <p><span class="delete_description"></span></p>


                                                    <input type="hidden" name="message_type_id" class="input input-rounded input-sm  form-control message_type_id" id="delete_message_type_id" />




                                                    <button type="submit" class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Message Type</button>
                                                    <button type="button" class="close_delete_div btn btn-danger btn-small" id="close_delete_div">Cancel</button>
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
            $(".add_btn").hide();
            $(".description").empty();
            $(".phone_no").empty();
            $(".e_mail").empty();


            $(".add_div").show();
            $(".table_div").hide();


        });


        $(document).on('click', ".edit_btn", function () {
            $(".add_btn").hide();
            $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_group_data";
            var success_alert = "Group added successfully ... :) ";
            var error_alert = "An Error Ocurred";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_group_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {
                        $("#edit_name").empty();
                        $("#edit_group_id").empty();
                        $("#edit_description").empty();
                        $("#edit_phone_no").empty();
                        $("#edit_e_mail").empty();
                        $("#edit_created_at").empty();
                        $("#edit_timestamp").empty();





                        $("#edit_name").val(value.name);
                        $('#edit_group_id').val(value.id);
                        $('#edit_description').val(value.description);
                        $('#edit_phone_no').val(value.phone_no);
                        $('#edit_e_mail').val(value.e_mail);
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
                url: "<?php echo base_url(); ?>admin/get_group_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_group_id').val(value.id);

                        var delete_descripton = "Do you want to delete Group :  " + value.name + "";
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
            $(".f_name").empty();

            $(".l_name").empty();

            $(".phone_no").empty();
            $(".e_mail").empty();

            $(".m_name").empty();
            $(".dob").empty();
            $(".add_btn").show();

        });


        $(".close_edit_div").click(function () {
            $(".edit_div").hide();
            $(".table_div").show();

            $(".add_btn").show();

        });


        $(".submit_add_div").click(function () {
            var controller = "admin";
            var submit_function = "add_group";
            var form_class = "add_form";
            var success_alert = "Group added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);
        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_group";
            var form_class = "edit_form";
            var success_alert = "Group data updated successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_group";
            var form_class = "delete_form";
            var success_alert = "Group data delete successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);
        });






    });
</script>



<!--END MAIN WRAPPER -->



