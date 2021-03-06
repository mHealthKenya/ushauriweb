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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>/admin/contents">Messages</a></li>
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
                        <h4 class="card-title">Content List</h4>
                        <h6 class="card-subtitle">A list of Clients Messages Content in the  system </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 


                                <button class="add_btn btn btn-primary btn-sm btn-rounded" id="add_btn"><i class="fa fa-plus"></i>Add </button>





                                <div class="table_div">

                                    <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Content Export Report"/>

                                    
                                    
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Content</th>
                                                <th>Message Type</th>
                                                <th>Groups</th>
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
                                            foreach ($contents as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->content; ?></td>
                                                    <td><?php echo $value->message_type_name; ?></td>
                                                    <td><?php echo $value->group_name; ?></td>
                                                    <td><?php echo $value->language_name; ?></td>
                                                    <td><?php echo $value->status; ?></td>
                                                    <td><?php echo $value->created_at; ?></td>
                                                    <td><?php echo $value->updated_at; ?></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary edit_btn btn-rounded btn-sm" id="edit_btn"><i class="fa fa-edit"></i> </button></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary delete_btn btn-rounded btn-sm" id="delete_btn"><i class="fa fa-trash"></i> </button></td>
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
                                                    <h4 class="m-b-0 text-white">Add Content</h4>
                                                </div>
                                                <div class="card-body">






                                                    <form class="form add_form" id="add_form">
                                                        <div class="row">
                                                            <div class="col-sm-6">

                                                                <div class="form-group">
                                                                    <label>Content :<span class="text-danger">*</span>  </label> 
                                                                    <textarea required="" name="content" class=" input input-rounded input-sm form-control description-text content textarea_editor" id="content"></textarea>

                                                                </div> 

                                                                <div class="form-group">
                                                                    <label>Response : <span class="text-danger">*</span> </label> 

                                                                    <select required="" class="input input-rounded input-sm form-control response input-rounded input-sm "  id="response" name="response">
                                                                        <option value="">Please select : </option>                                               
                                                                        <?php foreach ($response as $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value->id ?>"> <?php echo $value->value ?></option>
                                                                        <?php }
                                                                        ?>
                                                                    </select>
                                                                </div> 


                                                                <div class="form-group">
                                                                    <label>Message Type : <span class="text-danger">*</span> </label>

                                                                    <select required="" class=" input input-rounded input-sm form-control message_type_id  input-rounded input-sm "  id="message_type_id" name="message_type_id">
                                                                        <option value="">Please select : </option>                                               
                                                                        <?php foreach ($message_types as $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                        <?php }
                                                                        ?>
                                                                    </select> 

                                                                </div>


                                                                <div class="form-group">
                                                                    <label>Language : <span class="text-danger">*</span> </label>

                                                                    <select required="" class=" input input-rounded input-sm form-control language_id  input-rounded input-sm  "  id="language_id" name="language_id">
                                                                        <option value="">Please select : </option>                                               
                                                                        <?php foreach ($languages as $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                        <?php }
                                                                        ?>
                                                                    </select> 

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Groups : </label>

                                                                    <select required="" class=" input input-rounded input-sm form-control groups_id  input-rounded input-sm  "  id="groups_id" name="groups_id">
                                                                        <option value="">Please select : </option>                                               
                                                                        <?php foreach ($groups as $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                        <?php }
                                                                        ?>
                                                                    </select> 

                                                                </div>



                                                                <div class="form-group">
                                                                    <label>Status : <span class="text-danger">*</span></label> 
                                                                    <select required="" name="status" class=" input input-rounded input-sm form-control status  input-rounded input-sm  " id="status" >
                                                                        <option value="">Please select</option>
                                                                        <option value="Active">Active</option>
                                                                        <option value="Disabled">Disabled</option>
                                                                    </select>
                                                                </div>










                                                                <button class="submit_add_div btn btn-success btn-sm btn-rounded" type="submit" id="submit_add_div">Add Content</button>
                                                                <button class="close_add_div btn btn-danger btn-sm btn-rounded" type="button" id="close_add_div">Cancel</button>

                                                            </div>

                                                        </div>




                                                    </form>










                                                </div>
                                            </div></div></div>




                                </div>



                                <div class="row edit_div" id="edit_div" style="display: none">



                                    <div class="col-lg-12">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Edit Content</h4>
                                            </div>
                                            <div class="card-body">





                                                <form class="form edit_form" id="edit_form">





                                                    <div class="row">
                                                        <div class="col-sm-6">

                                                            <div class="form-group">
                                                                <label>Content : <span class="text-danger">*</span> </label> 
                                                                <textarea required="" name="content" class=" input input-rounded input-sm form-control description-text content" id="edit_content"></textarea>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Response : <span class="text-danger">*</span> </label> 
                            <!--                                    <input type="text"  required="" id="edit_response" name="response" class="form-control response"/>-->

                                                                <select required="" class=" input input-rounded input-sm form-control response  input-rounded input-sm "  id="edit_response" name="response">
                                                                    <option value="">Please select : </option>                                               
                                                                    <?php foreach ($response as $value) {
                                                                        ?>
                                                                        <option value="<?php echo $value->id ?>"> <?php echo $value->value ?></option>
                                                                    <?php }
                                                                    ?>
                                                                </select>

                                                            </div> 






                                                            <div class="form-group">
                                                                <label>Message Type : <span class="text-danger">*</span></label>

                                                                <select required="" class=" input input-rounded input-sm form-control message_type_id  input-rounded input-sm "  id="edit_message_type_id" name="message_type_id">
                                                                    <option value="">Please select : </option>                                               
                                                                    <?php foreach ($message_types as $value) {
                                                                        ?>
                                                                        <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                    <?php }
                                                                    ?>
                                                                </select> 

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">


                                                            <div class="form-group">
                                                                <label>Language : <span class="text-danger">*</span> </label>

                                                                <select required="" class=" input input-rounded input-sm form-control language_id  input-rounded input-sm "  id="edit_language_id" name="language_id">
                                                                    <option value="">Please select : </option>                                               
                                                                    <?php foreach ($languages as $value) {
                                                                        ?>
                                                                        <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                    <?php }
                                                                    ?>
                                                                </select> 

                                                            </div>


                                                            <div class="form-group">
                                                                <label>Groups : <span class="text-danger">*</span> </label>

                                                                <select required="" class=" input input-rounded input-sm form-control groups_id  input-rounded input-sm "  id="edit_groups_id" name="groups_id">
                                                                    <option value="">Please select : </option>                                               
                                                                    <?php foreach ($groups as $value) {
                                                                        ?>
                                                                        <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                    <?php }
                                                                    ?>
                                                                </select> 

                                                            </div>









                                                            <div class="form-group">
                                                                <label>Status : <span class="text-danger">*</span> </label> 
                                                                <select required="" name="status" class=" input input-rounded input-sm form-control status  input-rounded input-sm  " id="edit_status" >
                                                                    <option value="">Please select</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Disabled">Disabled</option>
                                                                </select>
                                                            </div>



                                                            <input required="" type="hidden" name="content_id" class=" input input-rounded input-sm form-control content_id  input-rounded input-sm  " id="edit_content_id" />




                                                            <button class="submit_edit_div btn btn-success btn-sm btn-rounded" type="submit" id="submit_edit_div">Update Content</button>
                                                            <button class="close_edit_div btn btn-danger btn-sm btn-rounded" type="button" id="close_edit_div">Cancel</button>

                                                        </div>
                                                    </div>



                                                </form>









                                            </div>
                                        </div></div></div>



                                <div class="row delete_div" id="delete_div" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Delete Content</h4>
                                            </div>
                                            <div class="card-body">




                                                <form class="form delete_form" id="delete_form">


                                                    <p><span class="delete_content"></span></p>


                                                    <input type="hidden" name="content_id" class=" input input-rounded input-sm form-control content_id  input-rounded input-sm  " id="delete_content_id" />




                                                    <button class="submit_delete_div btn btn-success btn-sm btn-rounded" type="submit" id="submit_delete_div">Delete Content</button>
                                                    <button class="close_delete_div btn btn-danger btn-sm btn-rounded" type="button" id="close_delete_div">Cancel</button>
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

            $(".content").empty();




            $(".add_div").show();
            $(".table_div").hide();


        });


        $(document).on('click', ".edit_btn", function () {

            $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_content_data";
            var success_alert = "Content added successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_content_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $("#edit_content_id").empty();
                        $("#edit_content").empty();






                        $("#edit_name").val(value.content);
                        $('#edit_content_id').val(value.id);
                        $('#edit_groups_id option[value=' + value.group_id + ']').attr("selected", "selected");
                        $('#edit_message_type_id option[value=' + value.message_type_id + ']').attr("selected", "selected");
                        $('#edit_language_id option[value=' + value.language_id + ']').attr("selected", "selected");
                        $('#edit_response option[value=' + value.identifier + ']').attr("selected", "selected");
                        $('#edit_content').val(value.content);
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
            var error_alert = "Ooops , Something really bad has happened (:";


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_content_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_content_id').val(value.id);

                        var delete_descripton = "Do you want to delete Content :  " + value.content + "";
                        $(".delete_content").append(delete_descripton);
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
            var submit_function = "add_content";
            var form_class = "add_form";
            var success_alert = "Content added successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);


            $(".add_div").show();
            $(".table_div").hide();
        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_content";
            var form_class = "edit_form";
            var success_alert = "Content data updated successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".edit_div").show();
            $(".table_div").hide();
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_content";
            var form_class = "delete_form";
            var success_alert = "Content data delete successfully ... :) ";
            var error_alert = "Ooops , Something really bad has happened (:";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".delete_div").show();
            $(".table_div").hide();
        });






    });
</script>




<!--END MAIN WRAPPER -->

