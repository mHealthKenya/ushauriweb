                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Administration</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/role_modules">Role Modules</a></li>
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
                        <h4 class="card-title">Role Modules Management</h4>
                        <h6 class="card-subtitle">Role Modules Management </h6>
                        <div class="table-responsive m-t-40">




                            <form id="assign_access_form" class="assign_access_form form-horizontal">

                                <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>

                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                <div class="div_role_name" id="div_role_name">
                                    <select name="role_name" id="role_name" class="role_name input-rounded input-sm form-control">
                                        <option>Please select Role Name : </option>
                                        <?php foreach ($roles as $value) {
                                            ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>



                                </div>

                                <div id="rights_div" class="rights_div" style="display: none;">

                                    <div class="form-group">


                                        <hr>

                                        <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Roles Export Report"/>

                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Check
                                                    </th>
                                                    <th>
                                                        Function Name
                                                    </th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <input type="checkbox" name="select_all_fctns" id="select_all_fctns" class="select_all_fctns  minimal"/>
                                                    </td>   
                                                    <td>Select All</td> </tr>
                                                <?php foreach ($modules as $value) {
                                                    ?>
                                                    <tr>


                                                        <td> 
                                                            <input type="checkbox" name="functions[]" id="functions" value="<?php echo $value->id; ?>"   class=" minimal functions administration_functions" />

                                                        </td><td> <?php echo $value->module; ?></td>
                                                        <td><?php echo $value->description; ?></td>
                                                    </tr>


                                                    <?php
                                                }
                                                ?>


                                            </tbody>
                                        </table>








                                    </div>











                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success assign_access_btn" id="assign_access_btn">Assign Roles </button>
                                            <button type="reset" class="btn btn-primary cancel_btn" id="cancel_btn">Cancel</button>

                                        </div>
                                    </div>



                                </div>
                            </form>






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






<script>
    $(document).ready(function () {


        $("#role_name").change(function () {
            $(".loader").show();
            $(".rights_div").show();

            var user_id = this.value;
            $.ajax({
                type: "GET",
                url: "<?php echo base_url(); ?>admin/get_role_permissions/" + user_id,
                dataType: "JSON",
                success: function (response) {
                    $(".rights_div").show();
                    $("input:checkbox").prop("checked", false);
                    $(".loader").hide();
                    for (i = 0; i < response.length; i++) {
                        var value = response[i].module_id;
                        if (value == "No Modules Assigned") {
                            $(".rights_div").show();

                        } else {

                            $("input:checkbox[value=" + value + "]").prop("checked", true);

                        }

                    }

                }, error: function (data) {

                    $(".loader").hide();
                    sweetAlert("Oops...", "Something went wrong!", "error");

                }
            });

        });

        $('#assign_access_form').submit(function (event) {

            dataString = $("#assign_access_form").serialize();

            $(".loader").show();
            $(".btn").prop('disabled', true);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>admin/assign_roles_modules",
                data: dataString,
                success: function (data) {
                    $(".loader").hide();
                    swal({
                        title: "Success!",
                        text: "Modules Assigned Successfullly!",
                        type: "success",
                        confirmButtonText: "Okay!",
                        closeOnConfirm: true
                    }, function () {
                        window.location.reload();

                    });
                    $(".rights_div").hide();


                }, error: function (data) {
                    $(".btn").prop('disabled', false);
                    $(".loader").hide();
                    sweetAlert("Oops...", "Something went wrong!", "error");
                    $(".btn").prop('disabled', false);
                }

            });
            event.preventDefault();
            return false;
        });




    });
</script>



<script type="text/javascript">
    $(document).ready(function () {
        $('.addministration_select_all').click(function (event) {  //on click 

            if (this.checked) { // check select status
                $('.administration_functions').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.administration_functions').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

        $('.daily_ops_select_all').click(function (event) {  //on click 

            if (this.checked) { // check select status
                $('.daily_ops_functions').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.daily_ops_functions').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

        $('.reports_select_all').click(function (event) {  //on click 

            if (this.checked) { // check select status
                $('.reports_functions').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.reports_functions').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

        $('.select_all_fctns').click(function (event) {  //on click 

            if (this.checked) { // check select status
                $('.functions').each(function () { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"               
                });
            } else {
                $('.functions').each(function () { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
                });
            }
        });

    });
</script>




<script type="text/javascript">
    $(document).ready(function () {
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

                    $.each(response, function (i, value) {

                        $("#edit_name").empty();
                        $("#edit_module_id").empty();
                        $("#edit_controller").empty();
                        $("#edit_function").empty();





                        $("#edit_name").val(value.module);
                        $('#edit_module_id').val(value.id);
                        $('#edit_controller').val(value.controller);
                        $('#edit_location').val(value.function);

                        $('#edit_created_at').val(value.created_at);
                        $('#edit_timestamp').val(value.timestamp);
                        $('#edit_status option[value=' + value.status + ']').attr("selected", "selected");
                        $('#edit_level option[value=' + value.level + ']').attr("selected", "selected");

                    });


                    $(".edit_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
                    sweetAlert("Oops...", "" + error_alert + "", "error");

                }

            });









        });



        $(document).on('click', ".delete_btn", function () {


            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var error_alert = "An Error Ocurred";


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_module_data/" + data_id,
                dataType: "JSON",
                success: function (response) {

                    $.each(response, function (i, value) {


                        $('#delete_module_id').val(value.id);

                        var delete_descripton = "Do you want to delete Module :  " + value.module_name + "";
                        $(".delete_description").append(delete_descripton);
                    });


                    $(".delete_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
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




<div class="modal_loading" id="modal_loading"><!-- Place at bottom of page --></div>
<style type="text/css">
    /* Start by setting display:none to make this hidden.
Then we position it in relation to the viewport window
with position:fixed. Width, height, top and left speak
for themselves. Background we set to 80% white with
our animation centered, and no-repeating */
    .modal_loading {
        display:    none;
        position:   fixed;
        z-index:    1000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, .8 ) 
            50% 50% 
            no-repeat;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {
        var opts = {
            lines: 12             // The number of lines to draw
            , length: 7             // The length of each line
            , width: 5              // The line thickness
            , radius: 10            // The radius of the inner circle
            , scale: 1.0            // Scales overall size of the spinner
            , corners: 1            // Roundness (0..1)
            , color: '#000'         // #rgb or #rrggbb
            , opacity: 1 / 4          // Opacity of the lines
            , rotate: 0             // Rotation offset
            , direction: 1          // 1: clockwise, -1: counterclockwise
            , speed: 1              // Rounds per second
            , trail: 100            // Afterglow percentage
            , fps: 20               // Frames per second when using setTimeout()
            , zIndex: 2e9           // Use a high z-index by default
            , className: 'spinner'  // CSS class to assign to the element
            , top: '50%'            // center vertically
            , left: '50%'           // center horizontally
            , shadow: false         // Whether to render a shadow
            , hwaccel: false        // Whether to use hardware acceleration (might be buggy)
            , position: 'absolute'  // Element positioning
        }
        var target = document.getElementById('modal_loading');
        var spinner = new Spinner(opts).spin(target);
    });
</script>




<!--END MAIN WRAPPER -->



















































































