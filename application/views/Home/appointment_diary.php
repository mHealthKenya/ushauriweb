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
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?><?php echo $this->uri->segment(1); ?>/<?php echo $this->uri->segment(2); ?>">Appointment Diary </a></li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">


        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Scheduled Visits </h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">











                            <table id="scheduled_visit_table" class="table table_wrapper table-bordered table-condensed table-hover table-responsive table-stripped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>UPN</th>
                                        <th> Name</th>
                                        <th>Sex</th>
                                        <th>Current Age</th>
                                        <th>Purpose of visit</th>
                                        <th>Stable Patient</th>
                                        <th>Date Attended</th>
                                        <th>Next ART ReFill Appointment Date</th>
                                        <th>Next ART Clinical Appointment Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($scheduled_visit as $value) {
                                        ?>
                                        <tr>
                                            <td class="a-center"><?php echo $i; ?></td>
                                            <td class="a-center"><?php echo $value->clinic_number; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->gender; ?></td>
                                            <td class="a-center" ><?php echo $value->age; ?></td>
                                            <td class="a-center" ><?php echo $value->appointment_attended; ?></td>
                                            <td class="a-center" ><?php echo $value->stable; ?></td>
                                            <td class="a-center" ><?php echo $value->date_attended; ?></td>
                                            <td class="a-center" ><?php echo $value->next_re_fill_appointment; ?></td>
                                            <td class="a-center" ><?php echo $value->next_clinical_appointment; ?></td>

                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Unscheduled Visits </h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">


                            <table id="defaulter_visit_table" class="table table_wrapper table-bordered table-condensed table-hover table-responsive table-stripped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>UPN</th>
                                        <th> Name</th>
                                        <th>Sex</th>
                                        <th>Current Age</th>
                                        <th>Purpose of visit</th>
                                        <th>Stable Patient</th>
                                        <th>Date of Missed Appointment</th>
                                        <th>Date Attended </th>
                                        <th>Next  Clinical Appointment Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($defaulter_visit as $value) {
                                        ?>
                                        <tr>
                                            <td class="a-center"><?php echo $i; ?></td>
                                            <td class="a-center"><?php echo $value->clinic_number; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->gender; ?></td>
                                            <td class="a-center" ><?php echo $value->age; ?></td>
                                            <td class="a-center" ><?php echo $value->expln_app; ?></td>
                                            <td class="a-center" ><?php echo $value->stable; ?></td>
                                            <td class="a-center" ><?php echo $value->missed_appointment_date; ?></td>
                                            <td class="a-center" ><?php echo $value->fnl_outcome_dte; ?></td>
                                            <td class="a-center" ><?php echo $value->next_clinical_appointment_date; ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>







                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Defaulter Bookings/Visits </h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="unscheduled_visit_table" class="table table_wrapper table-bordered table-condensed table-hover table-responsive table-stripped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>UPN</th>
                                        <th> Name</th>
                                        <th>Sex</th>
                                        <th>Current Age</th>
                                        <th>Purpose of visit</th>
                                        <th>Stable Patient</th>
                                        <th>Date Booked</th>
                                        <th>Next ART ReFill Appointment Date</th>
                                        <th>Next ART Clinical Appointment Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($unscheduled_visit as $value) {
                                        ?>
                                        <tr>
                                            <td class="a-center"><?php echo $i; ?></td>
                                            <td class="a-center"><?php echo $value->clinic_number; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->gender; ?></td>
                                            <td class="a-center" ><?php echo $value->age; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->stable; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                            <td class="a-center" ><?php echo $value->client_name; ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Summary Reports </h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="panel panel-primary" >

                                <div class="panel-heading"> 
                                    CLIENT CLINICAL ATTENDANCE SUMMARY
                                </div>

                                <div class="panel-body">
                                    <table class="table-bordered table-condensed table-hover  table-responsive table_wrapper" >
                                        <thead>
                                            <tr>
                                                <th>Visit Types</th>
                                                <th>Total Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($scheduled_visits_attended as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Scheduled Visits and Attended
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            foreach ($missed_appointments as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Missed Appointments
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            foreach ($missed_appointments as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Unscheduled Visits 
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer"></div>
                            </div>

                            <div class="panel panel-primary" >

                                <div class="panel-heading"> 
                                    DEFAULTER CLINICAL ATTENDANCE SUMMARY
                                </div>

                                <div class="panel-body">
                                    <table class="table-bordered table-condensed table-hover table-responsive table-responsive table_wrapper">
                                        <thead>
                                            <tr>
                                                <th>Visit Types</th>
                                                <th>Total Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($booked_attended_clinic as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Booked Visits and Attended 
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            foreach ($clinic_missed_appointment as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Missed Appointment
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer"></div>
                            </div>






                            <div class="panel panel-primary" >

                                <div class="panel-heading"> 
                                    STABLE CLIENT ARVs REFILL ATTENDANCE SUMMARY
                                </div>

                                <div class="panel-body">
                                    <table class="table-bordered table-condensed table-hover table-responsive table-responsive table_wrapper">
                                        <thead>
                                            <tr>
                                                <th>Visit Types</th>
                                                <th>Total Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($scheduled_arv_pick as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Scheduled for ARV Pick up 
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            foreach ($missed_arv_pick as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Missed ARV Pick Up Appointment
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            foreach ($unscheduled_arv as $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        Unscheduled Visits 
                                                    </td>
                                                    <td><?php
                                                        echo $value->no_of_appointments;
                                                        ?></td>
                                                </tr>  
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer"></div>
                            </div>

                            <div class="panel panel-primary" >

                                <div class="panel-heading"> 

                                </div>

                                <div class="panel-body">
                                    Codes for Purpose of visit: 
                                    R-Refill,C-Cinical visit,V-Viral load Sample collection		



                                </div>
                                <div class="panel-footer"></div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <!-- End PAge Content -->






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






<script type="text/javascript">
    $(document).ready(function () {

        pre_art_summary();
        function pre_art_summary() {
            $.ajax({
                type: "GET",
                async: true,
                url: "<?php echo base_url(); ?>reports/art_attended_summary",
                dataType: "JSON",
                success: function (response) {
                    console.log(response);
                    var male_attended = 0;
                    var female_attended = 0;
                    $.each(response, function (i, value) {
                        var app_status = value.app_status;

                        var male = value.Male1;
                        var female = value.Female1;


                        if (app_status == 'Booked' || app_status == 'Notified') {
                            male_attended += parseInt(male);
                            female_attended += parseInt(female);
                        }

                        console.log(",ale => " + male_attended);
                        console.log("Female  => " + female_attended);

                        $("#confirm_client_id").empty();

                        $("#confirm_status").empty();

                        $("#confirm_f_name").empty();

                        $("#confirm_m_name").empty();

                        $("#confirm_l_name").empty();


                        $("#confirm_mobile").empty();


                        $("#confirm_client_id").val(value.app_status);
                        $('#confirm_clinic_number').val(value.male1);
                        $('#confirm_mobile').val(value.Female1);


                    });





                }, error: function (data) {
                    sweetAlert("", " An error occured ...", "error");

                }

            });


        }




















    });
</script>




<!--END MAIN WRAPPER -->