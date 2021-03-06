 
 <!--Author@ Nimmy Augustin-->
 <!--Date@ 10/08/18-->
 <!--A DevOps group project-->
 <!--A webpage which will allow students to view course timetable-->
 <?php include "header.php";?>
 <link rel="stylesheet" type="text/css" media="screen" href="css/timetable.css">

    <!--opens page container-->
        

        <!--navigation bar with the links to the other pages-->
    
           
			
    <section class="container" id=" mainContent">
        
            <div class="container-fluid" style="padding-top: 1% !important">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MSC in DevOps-
                                    <labele id="course_name"> Time Table
                                        <labele>
                                </h4>

                                <!--<h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> </h6> -->
                                <div class="table-responsive" >
                                    <table class="table table-bordered" id="time-table">
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>
 

    </section>
        
    </div><!-- closes page container-->
<script src="js/jquery.min.js"></script>
<!--load the bootstrap files last-->
    <!--As with the css file load any java script file here-->  
   <script>
       /* a function to show  the dropdown selection from Student hub*/
       

	   //--logic for time table
        $(document).ready(function () { 

            $.getJSON('course-timetable/msc-cs.json', function (data) {
              
                var rowheadhtml= '<thead><tr><th></th>';

                $.each(data.time_table, function(index) {     
                    rowheadhtml =rowheadhtml+'<th>' + data.time_table[index].day + '</th>';
                });
                $('#time-table').append(rowheadhtml+'</thead></tr>');

                    //var day = data.time_table[index].day;
                    $.each(data.time_table[0].cource_details,function(sub_index){
                        var time = data.time_table[0].cource_details[sub_index].time
                        //alert(time)
                        var rowhtml = '<tr><td><d>'+time+'</b></td>';
                        //$('#time-table').append('');
                        $.each(data.time_table ,function(time_index){
                           
                                $.each(data.time_table[time_index].cource_details,function(sub_time_index){
                                    if(data.time_table[time_index].cource_details[sub_time_index].time==time)
                                    {
                                       rowhtml= rowhtml+ '<td class="'+data.time_table[time_index].cource_details[sub_time_index].subject_code+'">'+data.time_table[time_index].cource_details[sub_time_index].subject+"<br /> " +data.time_table[time_index].cource_details[sub_time_index].room_id+"<br /> " +data.time_table[time_index].cource_details[sub_time_index].faculty+'</td>'
                                    }
                                });
                            
                        });
                        $('#time-table').append(rowhtml+'</tr>');
                    }); 


            });
        });
    </script>
<?php include "footer.php";?>
