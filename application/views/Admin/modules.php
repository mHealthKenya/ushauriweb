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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/modules">Modules</a></li>
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
                        <h4 class="card-title">Module List</h4>
                        <h6 class="card-subtitle">A list of  Modules in the  system </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 


                                <button class="add_btn btn btn-primary btn-sm" id="add_btn"><i class="fa fa-plus"></i> Module</button>





                                <div class="table_div">
                                    <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Modules Export Report"/>

                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Module Name</th>
                                                <th>Controller</th>
                                                <th>Function</th>
                                                <th>Level</th>
                                                <th>Span Class</th>
                                                <th>Icon Class</th>
                                                <th>Status</th>
                                                <th>Date Added</th>
                                                <th>Module Stamp</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($modules as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->module; ?></td>
                                                    <td><?php echo $value->function; ?></td>
                                                    <td><?php echo $value->controller; ?></td>
                                                    <td><?php echo $value->level; ?></td>
                                                    <td><?php echo $value->span_class; ?></td>
                                                    <td><?php echo $value->icon_class; ?></td>
                                                    <td><?php
                                                        $status = $value->status;
                                                        if ($status == "Active") {
                                                            ?>
                                                            <label style="color: green"><?php echo $status; ?></label>
                                                            <?php
                                                        } else if ($status == "Disabled") {
                                                            ?>
                                                            <label style="color: red"><?php echo $status; ?></label>

                                                            <?php
                                                        }
                                                        ?></td>
                                                    <td><?php echo $value->created_at; ?></td>
                                                    <td><?php echo $value->updated_at; ?></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary edit_btn btn-sm" id="edit_btn"><i class="fa fa-edit"></i> </button></td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                        <button class="btn btn-primary delete_btn btn-sm" id="delete_btn"><i class="fa fa-trash"></i> </button></td>
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
                                                    <h4 class="m-b-0 text-white">Add Module</h4>
                                                </div>
                                                <div class="card-body">



                                                    <form class="form add_form" id="add_form">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <?php
                                                                $csrf = array(
                                                                    'name' => $this->security->get_csrf_token_name(),
                                                                    'hash' => $this->security->get_csrf_hash()
                                                                );
                                                                ?>

                                                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />


                                                                <div class="form-group">
                                                                    <label>Module Name : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="name" id="name" placeholder="Module Name " class=" input input-rounded input-sm  form-control name"/>

                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Controller : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="controller" placeholder="Controller Name" id="controller" class=" input input-rounded input-sm  form-control controller"/>

                                                                </div> 

                                                                <div class="form-group">
                                                                    <label>Function : <span class="text-danger">*</span> </label> 
                                                                    <input type="text" name="function" class=" input input-rounded input-sm  form-control function" id="function" placeholder="Function Name"/>
                                                                </div> 


                                                                <div class="form-group">
                                                                    <label>Description : <span class="text-danger">*</span> </label> 

                                                                    <textarea class=" input input-rounded input-sm  form-control description" id="description" name="description" placeholder="Enter your Description here..."></textarea>
                                                                </div> 



                                                            </div>
                                                            <div class="col-sm-6">


                                                                <div class="form-group">
                                                                    <label>Span Class value : <span class="text-danger">*</span> </label> 

                                                                    <textarea class=" input input-rounded input-sm  form-control span" id="span" name="span" placeholder="Enter your Span here..."></textarea>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label>Icon Class Value :  <span class="text-danger">*</span> </label> 

                                                                    <textarea class=" input input-rounded input-sm  form-control icon" id="icon" name="icon" placeholder="Enter your Icon here..."></textarea>
                                                                </div> 



                                                                <div class="form-group">
                                                                    <label>Level : <span class="text-danger">*</span> </label> <span class="info">Level 1 : This module link will appear at the  top bar of the  system. Level 2 : This module link will appear at the left bar of the system </span>
                                                                    <select name="level" class=" input input-rounded input-sm  form-control level" id="level" >
                                                                        <option value="">Please select</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                    </select>
                                                                </div>




                                                                <div class="form-group">
                                                                    <label>Status : <span class="text-danger">*</span> </label> 
                                                                    <select name="status" class=" input input-rounded input-sm  form-control status" id="status" >
                                                                        <option value="">Please select</option>
                                                                        <option value="Active">Active</option>
                                                                        <option value="Disabled">Disabled</option>
                                                                    </select>
                                                                </div>






                                                                <button type="submit" class="submit_add_div btn btn-success btn-sm" id="submit_add_div"><i class="fa fa-save"></i>Add Module</button>
                                                                <button type="button" class="close_add_div btn btn-danger btn-sm" id="close_add_div"><i class="fa fa-stop"></i>Cancel</button>





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
                                                <h4 class="m-b-0 text-white">Edit Module</h4>
                                            </div>
                                            <div class="card-body">





                                                <form class="form edit_form" id="edit_form">

                                                    <div class="row">

                                                        <div class="col-sm-6">

                                                            <?php
                                                            $csrf = array(
                                                                'name' => $this->security->get_csrf_token_name(),
                                                                'hash' => $this->security->get_csrf_hash()
                                                            );
                                                            ?>

                                                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                                            <div class="form-group">
                                                                <label>Module Name : <span class="text-danger">*</span></label> 
                                                                <input type="text"  required="" name="name" id="edit_name" class="input input-rounded input-sm  form-control name"/>

                                                            </div> 
                                                            <div class="form-group">
                                                                <label>Controller : <span class="text-danger">*</span></label> 
                                                                <input type="text"  required="" name="controller" id="edit_controller" class=" input input-rounded input-sm  form-control controller"/>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Function : <span class="text-danger">*</span> </label> 
                                                                <input type="text" name="function" class=" input input-rounded input-sm  form-control function" id="edit_function" placeholder="Function Name"/>
                                                            </div> 


                                                            <div class="form-group">
                                                                <label>Description : <span class="text-danger">*</span> </label> 

                                                                <textarea class="input input-rounded input-sm  form-control description" id="edit_description" name="description" placeholder="Enter your Description here..."></textarea>
                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-6">

                                                            <div class="form-group">
                                                                <label>Span Class value : <span class="text-danger">*</span> </label> 

                                                                <textarea class=" input input-rounded input-sm  form-control span" id="edit_span" name="span" placeholder="Enter your Span here..."></textarea>
                                                            </div> 


                                                            <div class="form-group">
                                                                <label>Icon Class Value : <span class="text-danger">*</span> </label> 
                                                                <span>Kindly reference the  following link to get the  right type of coding you would like : <a href="http://getbootstrap.com/components/"></a></span>
                                                                <textarea class=" input input-rounded input-sm  form-control icon" id="edit_icon" name="icon" placeholder="Enter your Icon here..."></textarea>
                                                            </div> 


                                                            <div class="form-group">
                                                                <label>Level : <span class="text-danger">*</span> </label> <span class="info">Level 1 : This module link will appear at the  top bar of the  system. Level 2 : This module link will appear at the left bar of the system </span>

                                                                <select name="level" class=" input input-rounded input-sm  form-control level" id="edit_level" >
                                                                    <option value="">Please select</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                </select>
                                                            </div>




                                                            <div class="form-group">
                                                                <label>Status : <span class="text-danger">*</span> </label> 
                                                                <select name="status" class=" input input-rounded input-sm  form-control status" id="edit_status" >
                                                                    <option value="">Please select</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Disabled">Disabled</option>
                                                                </select>
                                                            </div>



                                                            <input type="hidden" name="module_id" class="form-control module_id" id="edit_module_id" />




                                                            <button type="submit" class="submit_edit_div btn btn-success btn-small" id="submit_edit_div">Update Module</button>
                                                            <button type="button" class="close_edit_div btn btn-danger btn-small" id="close_edit_div">Cancel</button>

                                                        </div>

                                                    </div>





                                                </form>









                                            </div>
                                        </div></div></div>



                                <div class="row delete_div" id="delete_div" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="card card-outline-primary">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Delete Module</h4>
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


                                                    <input type="hidden" name="module_id" class="form-control module_id" id="delete_module_id" />




                                                    <button type="submit" class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Module</button>
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

        $(".close_edit_div").click(function () {
            $(".edit_div").hide();
            $(".table_div").show();

            $(".add_btn").show();

        });



        $(document).on('click', ".add_btn", function () {
            $(".name").empty();

            $(".name").empty();
            $(".controller").empty();
            $(".function").empty();
            $(".e_mail").empty();

            $(".add_div").show();
            $(".table_div").hide();


        });


        $(document).on('click', ".edit_btn", function () {
            $('.loader').show();

            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_module_data";
            var success_alert = "Module added successfully ... :) ";
            var error_alert = "An Error Ocurred";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_module_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {

                        $("#edit_name").empty();
                        $("#edit_module_id").empty();
                        $("#edit_controller").empty();
                        $("#edit_function").empty();
                        $("#edit_description").empty();
                        $("#edit_span").empty();
                        $("#edit_icon").empty();



                        $("#edit_name").val(value.module);
                        $('#edit_module_id').val(value.id);
                        $('#edit_controller').val(value.controller);
                        $('#edit_function').val(value.function);
                        $('#edit_description').val(value.description);
                        $("#edit_icon").val(value.icon_class);
                        $("#edit_span").val(value.span_class);
                        $('#edit_created_at').val(value.created_at);
                        $('#edit_timestamp').val(value.timestamp);
                        $('#edit_status option[value=' + value.status + ']').attr("selected", "selected");
                        $('#edit_level option[value=' + value.level + ']').attr("selected", "selected");

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
                url: "<?php echo base_url(); ?>admin/get_module_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_module_id').val(value.id);

                        var delete_descripton = "Do you want to delete Module :  " + value.module + "";
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

        });





        $(".submit_add_div").click(function () {

            var controller = "admin";
            var submit_function = "add_module";
            var form_class = "add_form";
            var success_alert = "Module added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);


            $(".add_div").show();
            $(".table_div").hide();
        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_module";
            var form_class = "edit_form";
            var success_alert = "Module data updated successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".edit_div").show();
            $(".table_div").hide();
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_module";
            var form_class = "delete_form";
            var success_alert = "Module data delete successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".delete_div").show();
            $(".table_div").hide();
        });






    });
</script>







<!--END MAIN WRAPPER -->




