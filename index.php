<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard : Sistem Amaran Pintar </title>
    <link rel="Icon" type="Icon" href="ico.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/zoom-marker.css" rel="stylesheet" >
    <link href="css/easy-loading.css" rel="stylesheet" >

    <style>
        .zoom-marker-hover-dialog
        {
            color: black;
            background-color: #d9d9d9
        }

        .blink
        {
            animation-name: blinkMarker;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        @keyframes blinkMarker {
            0%   {top: 44px}
            100% {top: 55px}
        }

        .zoom-marker span
        {
            position: absolute;
            left: 45px;
            color: #ffffffeb;
            font-size: smaller;
            font-weight: 800;
            text-shadow: 1px 1px #000000, -1px 1px #000000, -1px -1px #000000;

        }
        
    </style>
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>
                    <!-- Sidebar Toggle (Topbar) -->
                    <?php include "topnavbar.php"?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <i class="fas fa-fw fa-tachometer-alt text-gray-400"></i> Dashboard</h1>

                    </div> -->

                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Area  -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown 
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Location Map</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        
                                    </div>
                                </div>-->
                                <!-- Card Body -->
                                <div class="card-body rounded" style="padding:0 !important">
                                    
                                    <!-- <img class="img-fluid rounded mx-auto d-block" src="img/utemmap2.png" alt="Peta Utem" width= "100%" height="auto" > -->

                                    <div id="zoom-marker-div" class="zoom-marker-div" style="width:100%!important">
                                        <img class="zoom-marker-img" id="zoom-marker-img" alt="Peta Utem" name="viewArea"  draggable="false" src="ifutem/img/utemmap3.png"/>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Zoommarker plugin JavaScript-->
    <script src="vendor/zoommarker/zoom-marker.min.js"></script>
    <script src="vendor/zoommarker/jquery.mousewheel.min.js"></script>
    <script src="vendor/zoommarker/hammer.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        $(document).ready(function () {


            $('#zoom-marker-img').zoomMarker({
                src: "ifutem/img/utemmap3.png",
                rate: 0.2,
                width: 1900,
                min: 1900,
                max: 5000,
                marker_size: 40,
                move_limit: false,
                markers:[
                    {
                        src:"ifutem/img/marker.svg", 
                        x:1080, 
                        y:152, 
                        draggable: false,
                        hint:{
                            value: "Pejabat Pembangunan"
                        }, 
                        dialog:{
                            value: "Pejabat Pembangunan"
                        },
                        click:function(e){
                        
                            // alert("Hello:" + e);
                            window.location.href = "ploc1";
                        
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:353, 
                        y:815, 
                        draggable: false,
                        hint:{
                            value: "Pintu Gerbang UTeM"
                        }, 
                        dialog:{
                            value: "Pintu Gerbang UTeM"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:955, 
                        y:330, 
                        draggable: false,
                        hint:{
                            value: "Dewan Canselor"
                        }, 
                        dialog:{
                            value: "Dewan Canselor"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:629, 
                        y:300, 
                        draggable: false,
                        hint:{
                            value: "Masjid Sayyidina Abu Bakar"
                        }, 
                        dialog:{
                            value: "Masjid Sayyidina Abu Bakar"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:800, 
                        y:460, 
                        draggable: false,
                        hint:{
                            value: "Laman Hikmah"
                        }, 
                        dialog:{
                            value: "Perpustakaan Laman Hikmah"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:645, 
                        y:523, 
                        draggable: false,
                        hint:{
                            value: "FTMK"
                        }, 
                        dialog:{
                            value: "Fakulti Teknologi Maklumat & Komunikasi"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:800, 
                        y:547, 
                        draggable: false,
                        hint:{
                            value: "FKM"
                        }, 
                        dialog:{
                            value: "Fakulti Kejuruteraan Mekanikal"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:1015, 
                        y:506, 
                        draggable: false,
                        hint:{
                            value: "FKP"
                        }, 
                        dialog:{
                            value: "Fakulti Kejuruteraan Pembuatan"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:244, 
                        y:479, 
                        draggable: false,
                        hint:{
                            value: "KK Satria (Blok Tuah)"
                        }, 
                        dialog:{
                            value: "Kolej Kediaman Satria (Blok Tuah)"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:180, 
                        y:478, 
                        draggable: false,
                        hint:{
                            value: "KK Satria (Blok Jebat)"
                        }, 
                        dialog:{
                            value: "Kolej Kediaman Satria (Blok Jebat)"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:191, 
                        y:383, 
                        draggable: false,
                        hint:{
                            value: "KK Satria (Blok Lekir)"
                        }, 
                        dialog:{
                            value: "Kolej Kediaman Satria (Blok Lekir)"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:265, 
                        y:338, 
                        draggable: false,
                        hint:{
                            value: "KK Satria (Blok Kasturi)"
                        }, 
                        dialog:{
                            value: "Kolej Kediaman Satria (Blok Kasturi)"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:282, 
                        y:382, 
                        draggable: false,
                        hint:{
                            value: "Kafe Satria"
                        }, 
                        dialog:{
                            value: "Kafe Kediaman Satria"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:453, 
                        y:185, 
                        draggable: false,
                        hint:{
                            value: "KK Lestari"
                        }, 
                        dialog:{
                            value: "Kolej Kediaman Lestari"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:748, 
                        y:254, 
                        draggable: false,
                        hint:{
                            value: "Kafeteria Staf UTeM"
                        }, 
                        dialog:{
                            value: "Kafeteria Staf UTeM"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:685, 
                        y:368, 
                        draggable: false,
                        hint:{
                            value: "PPPK UTeM"
                        }, 
                        dialog:{
                            value: "PPPK UTeM"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:521, 
                        y:407, 
                        draggable: false,
                        hint:{
                            value: "Klinik UTeM"
                        }, 
                        dialog:{
                            value: "Klinik UTeM"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:802, 
                        y:117, 
                        draggable: false,
                        hint:{
                            value: "Kompleks Sukan"
                        }, 
                        dialog:{
                            value: "Kompleks Sukan"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:839, 
                        y:80, 
                        draggable: false,
                        hint:{
                            value: "Stadium UTeM"
                        }, 
                        dialog:{
                            value: "Stadium UTeM"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:717, 
                        y:457, 
                        draggable: false,
                        hint:{
                            value: "PBPI"
                        }, 
                        dialog:{
                            value: "Pusat Bahasa & Pembangunan Insan"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:631, 
                        y:400, 
                        draggable: false,
                        hint:{
                            value: "PPP"
                        }, 
                        dialog:{
                            value: "Pusat Persatuan Pelajar"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:581, 
                        y:706, 
                        draggable: false,
                        hint:{
                            value: "PPS"
                        }, 
                        dialog:{
                            value: "Pusat Pengajian Siswazah"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:700, 
                        y:678, 
                        draggable: false,
                        hint:{
                            value: "Pusat Pembuatan Termaju"
                        }, 
                        dialog:{
                            value: "Pusat Pembuatan Termaju"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:752, 
                        y:200, 
                        draggable: false,
                        hint:{
                            value: "FKE"
                        }, 
                        dialog:{
                            value: "Fakulti Kejuruteraan Elektrik"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:617, 
                        y:240, 
                        draggable: false,
                        hint:{
                            value: "FKEKK"
                        }, 
                        dialog:{
                            value: "Fakulti Kejuruteraan Elektrik & Kejuruteraan Komputer"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:854, 
                        y:210, 
                        draggable: false,
                        hint:{
                            value: "Canselori"
                        }, 
                        dialog:{
                            value: "Canselori"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:825, 
                        y:250, 
                        draggable: false,
                        hint:{
                            value: "Pejabat HEPA"
                        }, 
                        dialog:{
                            value: "Pejabat Hal Ehwal Pelajar"
                        }
                    },
                    {
                        src:"ifutem/img/marker.svg", 
                        x:1032, 
                        y:209, 
                        draggable: false,
                        hint:{
                            value: "Pusat KOKU"
                        }, 
                        dialog:{
                            value: "Pusat KOKU"
                        }
                    }]
            });

            
        

        });



        setInterval(() => {

            //$("#zoom-marker-img0").toggle();
            // var posx = parseInt($("#zoom-marker-img0").css("top"));
            // var posNew;
            // if(lastAdd == 1)
            // {
            //     posNew = posx + 4;
            //     lastAdd = 0;
            // }
            // else
            // {
            //     posNew = posx - 4;
            //     lastAdd = 1;
            // }
             
            // console.log(posNew);
            // $("#zoom-marker-img0").css("top", posNew+"px");
            
            // $("#zoom-marker-img0").addClass("blink");

        }, 1000);

        $('#viewArea').on("zoom_marker_mouse_click",function(event, mouseObj){

            // when the image is clicked
            console.log(mouseObj);

        });


    </script>


</body>

</html>