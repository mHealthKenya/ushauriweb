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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>/admin/partners">Partners</a></li>
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
                        <h4 class="card-title">Partners List</h4>
                        <h6 class="card-subtitle">A list of Partners in the  system </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 

                                <?php
                                $access_level = $this->session->userdata('access_level');

                                if ($access_level == "Donor") {
                                    ?>

                                    <?php
                                } else {
                                    ?>
                                    <button class="add_btn btn btn-primary btn-small" id="add_btn"><i class="fa fa-plus"></i>Add </button>
                                    <?php
                                }
                                ?>


                                <div class="table_div">
                                    <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Partners Export Report"/>

                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Partner Name</th>
                                                <th>Partner Type</th>
                                                <th>Phone No</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Date Added</th>
                                                <th>Time Stamp</th>
                                                <?php
                                                $access_level = $this->session->userdata('access_level');
                                                if ($access_level == "Donor") {
                                                    ?>

                                                    <?php
                                                } else {
                                                    ?>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <?php
                                                }
                                                ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($partners as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->partner_name; ?></td>
                                                    <td><?php echo $value->partner_type_name; ?></td>
                                                    <td><?php echo $value->phone_no; ?></td>
                                                    <td><?php echo $value->e_mail; ?></td>
                                                    <td><?php echo $value->location; ?></td>
                                                    <td><?php
                                                        $status = $value->status;
                                                        if ($status == "Active") {
                                                            ?>
                                                            <span style="color: green"><?php echo $status; ?></span>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <span style="color: red"><?php echo $status; ?></span>
                                                            <?php
                                                        }
                                                        ?></td>
                                                    <td><?php echo $value->created_at; ?></td>
                                                    <td><?php echo $value->updated_at; ?></td>


                                                    <?php
                                                    $access_level = $this->session->userdata('access_level');
                                                    if ($access_level == "Donor") {
                                                        ?>

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <td>
                                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                            <button class="btn btn-primary edit_btn" id="edit_btn"><i class="fa fa-edit"></i> </button></td>
                                                        <td>
                                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>" class="id"/>
                                                            <button class="btn btn-primary delete_btn" id="delete_btn"><i class="fa fa-trash"></i> </button></td>

                                                        <?php
                                                    }
                                                    ?>


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
                                                    <h4 class="m-b-0 text-white">Add Partner</h4>
                                                </div>
                                                <div class="card-body">


                                                    <form class="form add_form" id="add_form">


                                                        <div class="row">
                                                            <div class="col-sm-6 ">
                                                                <?php
                                                                $csrf = array(
                                                                    'name' => $this->security->get_csrf_token_name(),
                                                                    'hash' => $this->security->get_csrf_hash()
                                                                );
                                                                ?>

                                                                <input type="hidden" class="tokenizer" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />



                                                                <div class="form-group">
                                                                    <label>Partner Name : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="name" class=" input input-rounded input-sm form-control name"/>

                                                                </div> 


                                                                <div class="form-group">
                                                                    <label>Description : <span class="text-danger">*</span> </label> 
                                                                    <textarea name="description" class="input input-rounded input-sm  form-control description-text description" id="description"></textarea>

                                                                </div> 

                                                                <div class="form-group">
                                                                    <label>Location : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="location" class=" input input-rounded input-sm  form-control location"/>

                                                                </div> 




                                                                <div class="form-group">
                                                                    <label>E mail : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="e_mail" class=" input input-rounded input-sm  form-control e_mail"/>

                                                                </div> 


                                                            </div>

                                                            <div class="col-sm-6 ">
                                                                <div class="form-group">
                                                                    <label>Phone No :  <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="phone_no" class=" input input-rounded input-sm  form-control phone_no"/>

                                                                </div> 

                                                                <div class="form-group">
                                                                    <label>Partner Type : <span class="text-danger">*</span></label>

                                                                    <select class=" input input-rounded input-sm  form-control partner_type_id"  id="partner_type_id" name="partner_type_id">
                                                                        <option value="">Please select : </option>                                               
                                                                        <?php foreach ($partner_type as $value) {
                                                                            ?>
                                                                            <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                        <?php }
                                                                        ?>
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



                                                                <div class="form-group">
                                                                    <label>Partner Logo <span class="text-danger">*</span></label> <br>
                                                                    <span class="label label-info">Please do not add special characters or space when naming your image Allowed format : JPG,JPEG,PNG</span>
                                                                    <br>
                                                                    <input type="file" required="" name="partner_logo" id="partner_logo" class=" input input-rounded input-sm  form-control partner_logo" size="20" />
                                                                </div>



                                                                <button type="submit" class="submit_add_div btn btn-success btn-small" id="submit_add_div">Add Partner</button>
                                                                <button type="button" class="close_add_div btn btn-danger btn-small" id="close_add_div">Cancel</button>
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
                                                <h4 class="m-b-0 text-white">Edit Partner</h4>
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
                                                                <label>Partner Name :<span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="name" id="edit_name" class=" input input-rounded input-sm  form-control name"/>

                                                            </div> 


                                                            <div class="form-group">
                                                                <label>Description : <span class="text-danger">*</span> </label> 
                                                                <textarea name="description"  class=" input input-rounded input-sm  form-control description-text description" id="edit_description"></textarea>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Location : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="location" id="edit_location" class=" input input-rounded input-sm  form-control location"/>

                                                            </div> 




                                                            <div class="form-group">
                                                                <label>E mail : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="e_mail" id="edit_e_mail" class=" input input-rounded input-sm  form-control e_mail"/>

                                                            </div> 





                                                        </div>




                                                        <div class="col-sm-6">

                                                            <div class="edit_image_div" id="edit_image_div">

                                                            </div>


                                                            <div class="form-group">
                                                                <label>Phone No : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="phone_no" id="edit_phone_no" class=" input input-rounded input-sm  form-control phone_no"/>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Partner Type : <span class="text-danger">*</span> </label>

                                                                <select class=" input input-rounded input-sm  form-control partner_type_id"  id="edit_partner_type_id" name="partner_type_id">
                                                                    <option value="">Please select : </option>
                                                                    <?php foreach ($partner_type as $value) {
                                                                        ?>
                                                                        <option value="<?php echo $value->id ?>"> <?php echo $value->name ?></option>
                                                                    <?php }
                                                                    ?>
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



                                                            <input type="hidden" name="partner_id" class=" input input-rounded input-sm  form-control partner_id" id="edit_partner_id" />




                                                            <button type="submit" class="submit_edit_div btn btn-success btn-small" id="submit_edit_div">Update Partner</button>
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
                                                <h4 class="m-b-0 text-white">Delete Partner</h4>
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


                                                    <input type="hidden" name="partner_id" class=" input input-rounded input-sm  form-control partner_id" id="delete_partner_id" />

                                                    <button type="submit" class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Partner</button>
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

            $(".description").empty();
            $(".location").empty();
            $(".phone_no").empty();
            $(".e_mail").empty();


            $(".add_btn").hide();
            $(".add_div").show();
            $(".table_div").hide();


        });

        $(".close_edit_div").click(function () {
            $(".edit_div").hide();
            $(".table_div").show();

            $(".add_btn").show();

        });
        $(document).on('click', ".edit_btn", function () {

            $(".add_btn").hide();
            $('.loader').show();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_partner_data";
            var success_alert = "Partner added successfully ... :) ";
            var error_alert = "An Error Ocurred";



            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_partner_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {

                        $("#edit_name").empty();
                        $("#edit_partner_id").empty();

                        $("#edit_description").empty();
                        $("#edit_location").empty();
                        $("#edit_phone_no").empty();
                        $("#edit_e_mail").empty();
                        $("#edit_created_at").empty();
                        $("#edit_timestamp").empty();
                        $("#edit_partner_id").empty();


                        $("#edit_name").val(value.partner_name);
                        $('#edit_partner_id').val(value.id);
                        $('#edit_partner_type_id option[value=' + value.partner_type_id + ']').attr("selected", "selected");
                        $('#edit_description').val(value.description);
                        $('#edit_location').val(value.location);
                        $('#edit_phone_no').val(value.phone_no);
                        $('#edit_e_mail').val(value.e_mail);
                        $('#edit_created_at').val(value.created_at);
                        $('#edit_timestamp').val(value.timestamp);
                        $('#edit_status option[value=' + value.status + ']').attr("selected", "selected");




                        imgPath = "<?php echo base_url(); ?>uploads/logo/Partner/" + value.partner_logo + "";

                        var img = $("<img />").attr('src', imgPath)
                                .on('load', function () {
                                    if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                                        alert('broken image!');
                                    } else {
                                        $("#edit_image_div").append(img);
                                    }
                                });






                    });


                    $(".edit_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
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
                url: "<?php echo base_url(); ?>admin/get_partner_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_partner_id').val(value.id);

                        var delete_descripton = "Do you want to delete Partner :  " + value.partner_name + "";
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
            $(".add_btn").show();
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
            $('.loader').show();
            var controller = "admin";
            var submit_function = "add_partner";
            var form_class = "add_form";
            var success_alert = "Partner added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            //submit_data(controller, submit_function, form_class, success_alert, error_alert);


            $("#" + form_class + "").submit(function (event) {

                $('.modal_loading').show();
                $(".btn").prop('disabled', true);
                dataString = $("#" + form_class + "").serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>" + controller + "/" + submit_function + "",
                    data: dataString,
                    success: function (data) {
                        $('.modal_loading').hide();
                        data = JSON.parse(data);
                        var response = data[0].response;
                        if (response === true) {


                            $('.loader').hide();


                            var tokenizer = $(".tokenizer").val();

                            var file_data = $('#partner_logo').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('file', file_data);
                            form_data.append('tokenizer', tokenizer);
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/add_logo/Partner", // point to server-side controller method
                                dataType: 'text', // what to expect back from the server
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,
                                type: 'post',
                                success: function (response) {
                                    $('.loader').hide();
                                    console.log(response);


                                    swal({
                                        title: "Success!",
                                        text: "" + success_alert + "",
                                        type: "success",
                                        confirmButtonText: "Okay!",
                                        closeOnConfirm: true
                                    }, function () {
                                        window.location.reload(1);
                                    });



                                },
                                error: function (response) {
                                    $(".btn").prop('disabled', false);
                                    $('.loader').hide();
                                    console.log(response);
                                }
                            });



                        } else if (response === 'Partner_Exists') {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Info", "Partner already exists in the  system ", 'info');
                        } else {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Oops...", "" + error_alert + "", "error");
                        }


                    }, error: function (data) {
                        $(".btn").prop('disabled', false);
                        $('.modal_loading').hide();
                        sweetAlert("Oops...", "" + error_alert + "", "error");
                    }

                });
                event.preventDefault();
                return false;
            });




            $(".add_div").show();
            $(".table_div").hide();



        });



        $(".submit_edit_div").click(function () {
            $('.loader').show();
            var controller = "admin";
            var submit_function = "edit_partner";
            var form_class = "edit_form";
            var success_alert = "Partner data updated successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".edit_div").show();
            $(".table_div").hide();
        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_partner";
            var form_class = "delete_form";
            var success_alert = "Partner data delete successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $(".delete_div").show();
            $(".table_div").hide();
        });






    });
</script>




<!--END MAIN WRAPPER -->











