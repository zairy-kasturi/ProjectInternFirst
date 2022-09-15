<?php


include '../../conf.php';
date_default_timezone_set('Asia/Kuala_Lumpur');

$NODE = test_input($_GET['node']);        
// $NODE_DATA = test_input($_GET['data']);

// var_dump($NODE);
// var_dump($NODE_DATA);

$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	
//check connection
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    echo  'Error';   
    exit();
}
else
{    
    $sql = "SELECT * FROM db_status WHERE (NODE='PP_UTEM') ORDER BY ID DESC";
    $result = $mysqli->query($sql);

    // var_dump($result);
    // var_dump($last_id);       
    // if($result)
    // {
    //     echo 'Success';
    // }
}
$mysqli->close();
        

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  
function cellDisplay($data, $num) {
    $str = "";

    if($data == "1")
    {
        $str = "<td id='cell".$num."' style='background-color:lime'>".$data."</td>";
    }
    else if($data == "0")
    {        
        $str = "<td style='background-color:red'>".$data."</td>";
    }
    return $str;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "head.php";?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Location : Unit Pembangunan</title>
    <link rel="Icon" type="Icon" href="ico.png">
    <!-- Custom fonts for this template-->
    <link href="ifutem/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="ifutem/css/sb-admin-2.min.css" rel="stylesheet">
    
    <style>
        .border-left-success
        {
            border-left: .8rem solid #0a9160!important;
        }
        .border-left-alarm
        {
            border-left: .8rem solid #f50017!important;
        }
        .text-status-normal
        {
            color: #00623f!important;
        }
        .text-status-warning
        {
            color: #ff0000!important;
        }

        .text-panel-name
        {
            color: #5a5a5a;

        }
        .icon-alarm-off
        {
            color: #ff030375;
            font-size: .8em;
        }
        .icon-fault-off
        {
            color: #d5d10782;
            font-size: .8em;
        }
        .icon-isolate-off
        {
            color: #25850057;
            font-size: .8em;
        }

        
        .icon-alarm-on
        {
            color: #ff0000;
            font-size: .8em;
        }
        .icon-fault-on
        {
            color: #d5d107;
            font-size: .8em;
        }
        .icon-isolate-on
        {
            color: #258500;
            font-size: .8em;
        }
        
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <!-- Sidebar Toggle (Topbar) -->
                    <?php include "topnavbar.php"?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-fw fa-tachometer-alt text-gray-400"></i> Panel Location: Unit Pembangunan</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row">
                        <div class="text-xs font-weight-bold text-uppercase mb-1 ml-3 text-panel-name">
                            GND.FLR
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                       <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="cardsensor2" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                GND.FLR BREAKGLASS</div>
                                            <div id="cardstatus2" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                            
                                            <i id="iconalarm2" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                            <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                            <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hammer fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor3" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                    GND.FLR Smoke Detector Server Room</div>
                                            <div id="cardstatus3" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm3" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor4" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                GND.FLR Smoke Detector AHU G/1</div>
                                            <div id="cardstatus4" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm4" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor5" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                GND.FLR Smoke Detector AHU G/2</div>
                                            <div id="cardstatus5" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm5" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor6" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                GND.FLR Smoke Detector Switch Room</div>
                                            <div id="cardstatus6" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm6" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor7" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                GND.FLR Heat Detector SERVER Room</div>
                                            <div id="cardstatus7" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm7" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
    
                    </div>


                    <!-- Content Row -->
                    <div class="row">
                        <div class="text-xs font-weight-bold text-uppercase mb-1 ml-3 text-panel-name">
                            1ST.FLR
                        </div>
                    </div>                    
                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor8" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                1ST.FLR BREAKGLASS</div>
                                            <div id="cardstatus8" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm8" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hammer fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div  id="cardsensor9" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                1ST.FLR Smoke Detector Comrack Room</div>
                                            <div id="cardstatus9" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm9" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="cardsensor10" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                1ST.FLR Smoke Detector AHU 1/1</div>
                                            <div id="cardstatus10" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm10" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="cardsensor11" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                1ST.FLR Smoke Detector AHU 1/2</div>
                                            <div id="cardstatus11" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm11" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="cardsensor12" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                                1ST.FLR Smoke Detector  Elect. Riser</div>
                                            <div id="cardstatus12" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm12" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div id="cardsensor13" class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-panel-name">
                                            1ST.FLR Smoke Detector Hose Reel Pump Room</div>
                                            <div id="cardstatus13" class="h5 mb-0 font-weight-bold text-status-normal">Normal
                                            </div>
                                                <i id="iconalarm13" class="fas fa-circle fa-1x icon-alarm-off"></i>
                                                <i class="fas fa-circle fa-1x icon-fault-off"></i>
                                                <i class="fas fa-circle fa-1x icon-isolate-off"></i>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div> 

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ingeniouscity Solution Engineering 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="ifutem/vendor/jquery/jquery.min.js"></script>
    <script src="ifutem/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="ifutem/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="ifutem/js/sb-admin-2.min.js"></script>

    <script>

    $(document).ready(function(){
        updateStatus();
    });
        
    setInterval(() => {

        updateStatus();

    }, 5000);

    function updateStatus()
    {
        $.ajax({url: "/ifastv2/controller.php?cmd=STATUS&node=PP_UTEM", success: function(result){
            // console.log(result);
            // console.log("Sensor 2:" + result[2]);
            // console.log("Sensor 3:" + result[3]);
            for(let i=2; i< 14; i++)
            {
                var idname = "#cardsensor" + i;
                var idstatus = "#cardstatus" + i;
                var idicon = "#iconalarm" + i;
                if(result[i] == '0')
                {
                    $(idname).removeClass("border-left-success");
                    $(idname).addClass("border-left-alarm");
                    $(idstatus).removeClass("text-status-normal");
                    $(idstatus).addClass("text-status-warning");
                    $(idstatus).text("Alarm Triggered");
                    
                    $(idicon).removeClass("icon-alarm-off");
                    $(idicon).addClass("icon-alarm-on");
                }
                else if(result[i] == '1')
                {
                    $(idname).removeClass("border-left-alarm");
                    $(idname).addClass("border-left-success");
                    $(idstatus).removeClass("text-status-warning");
                    $(idstatus).addClass("text-status-normal");
                    $(idstatus).text("Normal");
                    $(idicon).removeClass("icon-alarm-on");
                    $(idicon).addClass("icon-alarm-off");
                }
            }
        }});
    }

    </script>

</body>

</html>