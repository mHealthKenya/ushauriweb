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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/donors">Donors</a></li>
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
                        <h4 class="card-title">Donors List</h4>
                        <h6 class="card-subtitle">A list of Donors in the  system </h6>
                        <div class="table-responsive m-t-40">








                            <div class="panel-body"> 

                                <button class="add_btn btn btn-primary btn-small" id="add_btn"> <i class="fa fa-plus"></i> Add </button>



                                <div class="table_div">
                                    <input type="hidden" name="report_name" class="report_name input-rounded input-sm form-control " id="report_name" value="Donor Export Report"/>

                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Donor Name</th>
                                                <th>Description</th>
                                                <th>Phone No</th>
                                                <th>Email</th>
                                                <th>Date Added</th>
                                                <th>Time Stamp</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($donors as $value) {
                                                ?>
                                                <tr>
                                                    <td class="a-center"><?php echo $i; ?></td>
                                                    <td><?php echo $value->name; ?></td>
                                                    <td><?php echo $value->description; ?></td>
                                                    <td><?php echo $value->phone_no; ?></td>
                                                    <td><?php echo $value->e_mail; ?></td>
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
                                                    <h4 class="m-b-0 text-white">Add Donor</h4>
                                                </div>
                                                <div class="card-body">




                                                    <form class="form add_form" id="add_form">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <?php
                                                                $csrf = array(
                                                                    'name' => $this->security->get_csrf_token_name(),
                                                                    'hash' => $this->security->get_csrf_hash()
                                                                );
                                                                ?>

                                                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                                                <div class="form-group">
                                                                    <label>Donor Name : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="name" class=" input input-rounded input-sm  form-control name input-rounded input-sm"/>

                                                                </div> 


                                                                <div class="form-group">
                                                                    <label>Description : <span class="text-danger">*</span> </label> 
                                                                    <textarea name="description" class=" input input-rounded input-sm  form-control description-text description textarea_editor textarea" id="description"></textarea>

                                                                </div> 

                                                                <div class="form-group">
                                                                    <label>Phone No : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="phone_no" class=" input input-rounded input-sm  form-control phone_no input-rounded input-sm"/>

                                                                </div> 
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>E mail : <span class="text-danger">*</span> </label> 
                                                                    <input type="text"  required="" name="e_mail" class=" input input-rounded input-sm  form-control e_mail input-rounded input-sm"/>

                                                                </div> 




                                                                <div class="form-group">
                                                                    <label>Status : <span class="text-danger">*</span> </label> 
                                                                    <select name="status" class=" input input-rounded input-sm  form-control status input-sm input-rounded" id="status" >
                                                                        <option value="">Please select</option>
                                                                        <option value="Active">Active</option>
                                                                        <option value="Disabled">Disabled</option>
                                                                    </select>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label>Donor Logo <span class="text-danger">*</span></label><br>
                                                                    <span class="label label-info">Please do not add special characters or space when naming your image. Allowed format : JPG,JPEG,PNG</span>
                                                                    <br>
                                                                    <input type="file" required="" name="donor_logo" id="donor_logo" class=" input input-rounded input-sm  form-control donor_logo input-sm input-rounded" size="20" />
                                                                </div>




                                                                <button class="submit_add_div btn btn-success btn-sm btn-rounded" id="submit_add_div">Add Donor</button>
                                                                <button class="close_add_div btn btn-danger btn-sm btn-rounded" id="close_add_div">Cancel</button>
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
                                                <h4 class="m-b-0 text-white">Edit Donor</h4>
                                            </div>
                                            <div class="card-body">



                                                <form class="form edit_form" id="edit_form">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <?php
                                                            $csrf = array(
                                                                'name' => $this->security->get_csrf_token_name(),
                                                                'hash' => $this->security->get_csrf_hash()
                                                            );
                                                            ?>

                                                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                                            <div class="form-group">
                                                                <label>Donor Name : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="name" id="edit_name" class=" input input-rounded input-sm  form-control name input-rounded input-sm"/>

                                                            </div> 


                                                            <div class="form-group">
                                                                <label>Description : <span class="text-danger">*</span> </label> 
                                                                <textarea name="description"  class=" input input-rounded input-sm  form-control description-text description textarea_editor" id="edit_description"></textarea>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Phone No : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="phone_no" id="edit_phone_no" class=" input input-rounded input-sm  form-control phone_no input-rounded input-sm"/>

                                                            </div> 
                                                        </div>
                                                        <div class="col-md-6">  

                                                            <div class="form-group">
                                                                <label>E mail : <span class="text-danger">*</span> </label> 
                                                                <input type="text"  required="" name="e_mail" id="edit_e_mail" class=" input input-rounded input-sm form-control e_mail input-rounded input-sm"/>

                                                            </div> 

                                                            <div class="form-group">
                                                                <label>Status : <span class="text-danger">*</span> </label> 
                                                                <select name="status" class=" input input-rounded input-sm  form-control status input-rounded input-sm" id="edit_status" >
                                                                    <option value="">Please select</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Disabled">Disabled</option>
                                                                </select>
                                                            </div>

                                                            <div class="edit_image_div" id="edit_image_div">

                                                            </div>

                                                            <div class="form-group">
                                                                <label>Donor Logo <span class="text-danger">*</span> </label><br>
                                                                <span class="label label-info">Please do not add special characters or space when naming your image. Allowed format : JPG,JPEG,PNG</span>
                                                                <br>

                                                                <input type="file" required="" name="donor_logo" id="edit_donor_logo" class=" input input-rounded input-sm  form-control edit_donor_logo input-rounded input-sm" size="20" />
                                                            </div>






                                                            <input type="hidden" name="donor_id" class=" input input-rounded input-sm  form-control donor_id" id="edit_donor_id" />




                                                            <button type="submit" class="submit_edit_div btn btn-success btn-small" id="submit_edit_div">Update Donor</button>
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


                                                    <input type="hidden" name="donor_id" class=" input input-rounded input-sm  form-control donor_id" id="delete_donor_id" />




                                                    <button class="submit_delete_div btn btn-success btn-small" id="submit_delete_div">Delete Donor</button>
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

            $(".description").empty();
            $(".phone_no").empty();
            $(".e_mail").empty();


            $(".add_div").show();
            $(".table_div").hide();
            $(".add_btn").hide();


        });


        $(document).on('click', ".edit_btn", function () {
            $('.loader').show();
            $(".add_btn").hide();
            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();
            var controller = "admin";
            var get_function = "get_donor_data";
            var success_alert = "Donor added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            var imgPath;


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_donor_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {
                        $("#edit_name").empty();
                        $("#edit_donor_id").empty();
                        $("#edit_description").empty();
                        $("#edit_phone_no").empty();
                        $("#edit_e_mail").empty();
                        $("#edit_created_at").empty();
                        $("#edit_updated_at").empty();





                        $("#edit_name").val(value.name);
                        $('#edit_donor_id').val(value.id);
                        $('#edit_description').val(value.description);
                        $('#edit_phone_no').val(value.phone_no);
                        $('#edit_e_mail').val(value.e_mail);
                        $('#edit_created_at').val(value.created_at);
                        $('#edit_updated_at').val(value.updated_at);
                        $('#edit_status option[value=' + value.status + ']').attr("selected", "selected");
                        if (value.donor_logo === "null") {

                        } else {
                            imgPath = "<?php echo base_url(); ?>uploads/logo/Donor/" + value.donor_logo + "";

                            var img = $("<img />").attr('src', imgPath)
                                    .on('load', function () {
                                        if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                                            alert('broken image!');
                                        } else {
                                            $("#edit_image_div").append(img);
                                        }
                                    });









                        }


                    });


                    $(".edit_div").show();
                    $(".table_div").hide();


                }, error: function (data) {
                    sweetAlert("Oops...", "" + error_alert + "", "error");

                }

            });









        });




        $(document).on('click', ".delete_btn", function () {
            $(".add_btn").hide();
            $('.loader').show();

            //get data
            var data_id = $(this).closest('tr').find('input[name="id"]').val();

            var error_alert = "An Error Ocurred";


            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>admin/get_donor_data/" + data_id,
                dataType: "JSON",
                success: function (response) {
                    $('.loader').hide();
                    $.each(response, function (i, value) {


                        $('#delete_donor_id').val(value.id);

                        var delete_descripton = "Do you want to delete Donor :  " + value.name + " Description : " + value.description + "";
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
            var submit_function = "add_donor";
            var form_class = "add_form";
            var success_alert = "Donor added successfully ... :) ";
            var error_alert = "An Error Ocurred";
            //submit_data(controller, submit_function, form_class, success_alert, error_alert);

            $('.loader').show();



            $("#" + form_class + "").submit(function (event) {

                $('.modal_loading').show();
                dataString = $("#" + form_class + "").serialize();
                $(".btn").prop('disabled', true);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>" + controller + "/" + submit_function + "",
                    data: dataString,
                    success: function (data) {

                        $('.loader').hide();
                        data = JSON.parse(data);
                        var response = data[0].response;
                        if (response === true) {


                            var file_data = $('#donor_logo').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('file', file_data);
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/add_logo/Donor", // point to server-side controller method
                                dataType: 'text', // what to expect back from the server
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,
                                type: 'post',
                                success: function (response) {
                                    console.log(response);
                                },
                                error: function (response) {
                                    console.log(response);
                                }
                            });


                            swal({
                                title: "Success!",
                                text: "" + success_alert + "",
                                type: "success",
                                confirmButtonText: "Okay!",
                                closeOnConfirm: true
                            }, function () {
                                window.location.reload(1);
                            });




                        } else if (response === 'Donor_Exists') {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Info", "The Donor already exists in the  system ", 'info');
                        } else {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Oops...", "" + error_alert + "", "error");
                        }




                    }, error: function (data) {

                        $('.loader').hide();
                        $(".btn").prop('disabled', false);
                        sweetAlert("Oops...", "" + error_alert + "", "error");
                    }

                });
                event.preventDefault();
                return false;
            });








        });



        $(".submit_edit_div").click(function () {
            var controller = "admin";
            var submit_function = "edit_donor";
            var form_class = "edit_form";
            var success_alert = "Donor data updated successfully ... :) ";
            var error_alert = "An Error Ocurred";
            //submit_data(controller, submit_function, form_class, success_alert, error_alert);




            $("#" + form_class + "").submit(function (event) {
                $(".btn").prop('disabled', true);
                $('.modal_loading').show();
                dataString = $("#" + form_class + "").serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() ?>" + controller + "/" + submit_function + "",
                    data: dataString,
                    success: function (data) {

                        $('.loader').hide();
                        data = JSON.parse(data);
                        var response = data[0].response;
                        if (response === true) {







                            var file_data = $('#edit_donor_logo').prop('files')[0];
                            var form_data = new FormData();
                            form_data.append('file', file_data);
                            $.ajax({
                                url: "<?php echo base_url(); ?>admin/add_logo/Donor", // point to server-side controller method
                                dataType: 'text', // what to expect back from the server
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: form_data,
                                type: 'post',
                                success: function (response) {
                                    console.log(response);
                                },
                                error: function (response) {
                                    console.log(response);
                                }
                            });









                            swal({
                                title: "Success!",
                                text: "" + success_alert + "",
                                type: "success",
                                confirmButtonText: "Okay!",
                                closeOnConfirm: true
                            }, function () {
                                //window.location.reload(1);
                            });




                        } else if (response === 'Taken') {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Info", "Clinic No already taken ", 'info');
                        } else {
                            $(".btn").prop('disabled', false);
                            sweetAlert("Oops...", "" + error_alert + "", "error");
                        }


                    }, error: function (data) {

                        $('.loader').hide();


                        sweetAlert("Oops...", "" + error_alert + "", "error");
                    }

                });
                event.preventDefault();
                return false;
            });







        });




        $(".submit_delete_div").click(function () {
            var controller = "admin";
            var submit_function = "delete_donor";
            var form_class = "delete_form";
            var success_alert = "Donor data delete successfully ... :) ";
            var error_alert = "An Error Ocurred";
            submit_data(controller, submit_function, form_class, success_alert, error_alert);
        });






    });
</script>




<!--END MAIN WRAPPER -->


