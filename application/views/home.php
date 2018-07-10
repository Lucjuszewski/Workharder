<?php 
if($access==true) {header('Location:'. site_url(). 'workharder/home');} elseif($access=false) {
    echo "niezalogowany"; 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <title>WorkHarder - to fight with procrastination</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/fontello.css">
    <style>
        .x {
            background: url("<?php echo base_url();?>images/footer_lodyas.png");
        }

        .y {
            background-color: #353535;
        }

        .top-card-text {
            font-size: 20px;
            text-align: justify;
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .fix-for-row {
            margin-right: 0px;
            margin-left: 0px;
            margin-bottom: 20px;
        }

        .text-infixed-row {
            font-size: 18px;
            padding: 10px 0px;
            margin-bottom: 0;
        }

        .border-row {
            height: 1px;
            border-top-style: solid;
            border-width: 1px;
            border-color: grey;
            margin-right: 0px;
            margin-left: 0px;
            padding-left: 20px;
            padding-left: 20px;
            margin-left: 40px;
            margin-right: 40px;
        }

        .xD {
            background: transparent;
            border: none;
            color: white;
            padding-right: 0px;

        }

        .xD:focus {
            background: transparent;
            border: none;
        }
        .submit-x {
            background: transparent;
            border: none;
            color: white;
            font-size:25px;
        }
        .submit-x:hover {
            cursor: pointer;
        }
        .card-in {
            background-color:#3f3f3f; margin:10px;
        }
        .card-window {
            padding-bottom:1px;
            width: 100%; 
            background-color:#3d3d3d; 
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="height:100%; width: 100%;">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>scripts/js-corner.js"></script>
    <script>
        $(document).ready(function() {
            $(".card-window").corner("15px");
            $(".card-in").corner("3px");
        });

    </script>
    <div class="container-fluid x" style="width:100%; height:100%;">
        <!--  Początek containera -->
        <div class="row navbar">
            <!-- TOP -->
            <div class="col-2"><a href="<?php echo site_url(); ?>workharder/"><img src="https://www.smartads.in/resources/assets/images/logo/smartadslogo.png" alt=""></a></div>

            <div class="col-8">
                <ul class="nav  nav-justified" role="tablist">

                    <li class="active smbggr"><a href="#1kartajust" role="tab" data-toggle="tab">Zadania</a></li>

                    <li class="smbggr"><a href="#2kartajust" role="tab" data-toggle="tab">Dziennik</a></li>

                    <li class="smbggr"><a href="#3kartajust" role="tab" data-toggle="tab">Wykresy</a></li>

                    <li class="smbggr"><a href="#4kartajust" role="tab" data-toggle="tab">Do zapamiętania</a></li>

                </ul>
            </div>

            <div class="col-2">

            </div>

        </div>
        <!-- TOP -->
        <div class="row" style="margin-right: 0px; margin-left: 0px; padding-top:20px;">
            <div class="col12" style="height:100%; width: 100%;">
                <div class="tab-content">

                    <div class="tab-pane active" id="1kartajust" style="height:500px; width: 100%;">
                        <div class="row" style="height: 90%; margin-right: 0px; margin-left: 0px;">
                            <div class="col-3">
                                <!-- MIEJSCE PRÓB I TESTÓW OKIENKA     POCZĄTEK-->

                                <div class="card-window" >
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row fix-for-row card-in">
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row border-row"></div>
                                    <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <form action="" style="width:100%;"><input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!"> <input type="submit" value="+" class="submit-x col-1" style="font-size:20px;"></form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- MIEJSCE PRÓB I TESTÓW OKIENKA     KONIEC-->
                            <div class="col-3">

                                <div class="card-window " >
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in">
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row border-row"></div>
                                     <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <form action="" style="width:100%;"><input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!"> <input type="submit" value="+" class="submit-x col-1" style="font-size:20px;"></form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-3">

                                <div class="card-window" >
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row fix-for-row card-in">
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row border-row"></div>
                                     <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <form action="" style="width:100%;"><input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!"> <input type="submit" value="+" class="submit-x col-1" style="font-size:20px;"></form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-3">

                                <div class="card-window" >
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row fix-for-row card-in" >
                                        <div class="col-11">
                                            <p class="text-infixed-row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, a.</p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row border-row"></div>
                                     <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <form action="" style="width:100%;"><input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!"> <input type="submit" value="+" class="submit-x col-1" style="font-size:20px;"></form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="2kartajust">Zawartość drugiej karty</div>

                    <div class="tab-pane" id="3kartajust">Zawartość trzeciej karty</div>

                    <div class="tab-pane" id="4kartajust">Zawartość czwartej karty</div>

                </div>
            </div>
        </div>


    </div>
    <!--  Koniec containera -->
</body>

</html>
