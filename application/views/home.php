<?php 
session_start();
if(!isset($_SESSION['isLoged'])) {
header('Location:'. site_url(). 'workharder/');
}


?>
<!DOCTYPE html>
<html lang="en" style="height:100%; width:100%;">

<head style="height:100%; width:100%;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <title>WorkHarder - to fight with procrastination</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style>
        .x {
            background: url("<?php echo base_url();?>images/footer_lodyas.png");
            overflow: auto;
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
            font-size: 25px;
        }

        .dropdown-transparent {
            background: transparent;
            border: none;


        }

        .dropdown {

            color: #6D6D6D;
            font-size: 17px;
            height: 100%;
            margin-left: 10px;
            cursor: pointer;
        }

        .submit-x:hover {
            cursor: pointer;
        }

        .card-in {
            background-color: #3f3f3f;
            margin: 10px;
        }

        .card-window {
            padding-bottom: 1px;
            min-height: 300px;
            width: 100%;
            background-color: #3d3d3d;
            margin-bottom: 100px;
        }

        p {

            word-wrap: break-word;

        }

        .mark-as {
            cursor: pointer;
            opacity: 0.5;

        }

        .item-dropdown:hover {
            background-color: #CAC9C9;
        }

        .dropdown-item {
            cursor: pointer;
            margin-bottom: 0;
        }

        .dropdown-delete {
            background-color: #dc3545;
        }

        .dropdown-delete:hover {
            background-color: #F25B69;
        }

        .input-edit {
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 18px;
        }

        .dd-saveedit {
            font-size: 18px;
            height: 100%;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="height:100%; width: 100%;">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>scripts/js-corner.js"></script>
    <script>
        var test = "cokolwiek";
        $(document).ready(function() {
            //////////////////////////////////////////
            $(".dd-delete").click(function(event) {
                var x = $(this).closest(".card-in").find(".mark-as");
                var icon = $(this).closest(".col-3").find(".dropdown");
                var menu = $(this).closest(".col-3").find(".dropdown-menu");
                var id = $(x).attr("id");
                $(icon).removeClass("show");
                $(menu).removeClass("show");
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        idDelete: id
                    },
                    success: function(result) {

                        $(x).closest(".card-in").fadeOut("fast", function() {

                        });

                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                        console.log(id);
                    },

                });
            });
            $(".dd-editname").click(function() {
                var nav = $(this).closest(".card-in").find("p.text-infixed-row");
                var id = $(nav).attr("id");
                var textDefault2 = $(nav).text();
                var textDefault = $.trim(textDefault2);
                var icon = $(this).closest(".col-3").find(".dropdown");
                var menu = $(this).closest(".col-3").find(".dropdown-menu");
                $(icon).removeClass("show");
                $(menu).removeClass("show");
                var textString = '<div class="row"><div class="col-10"><input type="text" class="xD input-edit"  value="' + textDefault + '" autofocus placeholder="Zatwierdź enterem" style="width:100%;"/></div><div class="col-2" style="padding-left:0px;"><i class="far fa-save d-flex align-items-center dd-saveedit" ></i></div></div>';
                $(nav).replaceWith(textString);
                var input = $(this).closest(".card-in").find("input.input-edit");
                var inputSend = $(input).closest(".row").find(".dd-saveedit");
                var textTosend = $(input).val();
                $(".dd-saveedit").click(function() {
                    var textTosend = $(input).val();
                    var zapytanie = 'UPDATE records SET todo="'+textTosend+'" WHERE id='+id;
                    console.log(id);
                    console.log(textTosend);
                    console.log(zapytanie);
                    
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                        data: {
                            newText: textTosend,
                            idText: id
                        },
                        success: function(result) {
                            
                            var textDefaultNew = '<div class="col-10 xyzyx"> <p class="text-infixed-row">' + textTosend + '</p></div>';
                            var inputDiv = $(input).closest(".xyzyx");
                            $(inputDiv).replaceWith(textDefaultNew);
                        },
                        error: function(request, error) {
                            console.log(arguments);
                            alert(" Can't do because: " + error);
                        },

                    });

                });
                $(input).focus();
                $(document).keypress(function(e) {
                    if (e.which == 13) {

                        $(inputSend).click();
                    }
                });



            });

            $(".dropdown").click(function(event) {

                $(this).addClass("show");
                $(this).closest('.dropleft').find('.dropdown-menu').addClass("show");
                //Pokaż menu

                $(this).closest('.dropleft').find('.dropdown-menu').mouseleave(function(event) {
                    $(this).removeClass("show");
                    $(this).closest('.dropleft').find('.dropdown').removeClass("show");


                });
            });

            $(".mark-as").mouseenter(function() {
                $(this).animate({
                    color: "red",
                    opacity: "1"
                }, 300, function() {
                    // Animation complete.
                });
            });
            $(".mark-as").mouseout(function() {
                $(this).animate({
                    color: "red",
                    opacity: "0.5"
                }, 300, function() {
                    // Animation complete.
                });
            });
            // Get the input field
            var input = document.getElementById("textTosend");
            var input2 = document.getElementById("textTosend2");
            var input3 = document.getElementById("textTosend3");
            var input4 = document.getElementById("textTosend4");

            // Execute a function when the user releases a key on the keyboard
            input.addEventListener("keyup", function(event) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
                    // Trigger the button element with a click
                    document.getElementById("btn-1").click();
                }
            });
            input2.addEventListener("keyup", function(event) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
                    // Trigger the button element with a click
                    document.getElementById("btn-2").click();
                }
            });
            input3.addEventListener("keyup", function(event) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
                    // Trigger the button element with a click
                    document.getElementById("btn-3").click();
                }
            });
            input4.addEventListener("keyup", function(event) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
                    // Trigger the button element with a click
                    document.getElementById("btn-4").click();
                }
            });
            $(".card-window").corner("15px");
            $(".card-in").corner("3px");
            var username = "<?php echo $_SESSION['username'];?>";
            //AJAX

            $(".mark-as").click(function(event) {
                var id = $(this).attr("id");
                var text = "p#" + id;
                var value = $(text).text();

                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        id: id
                    },
                    success: function(result) {


                        //$(text).css("text-decoration", "line-through");
                        $(text).animate({
                            color: "blue"
                        }, 2000);
                        $(text).closest(".card-in").fadeOut("fast", function() {
                            // Animation complete.
                        });
                        //$(text).closest(".card-in").css("display", "none");
                        //animacja

                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    },

                });
            });
            $(".submit-x1").click(function(event) {
                var textTosend = $("#textTosend").val();
                var submitNum = 1;
                document.getElementById('textTosend').value = '';
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        textTosend: textTosend,
                        username: username,
                        submitNum: submitNum
                    },
                    success: function(result) {
                        $("#todo1").append('<div class="row fix-for-row card-in"><div class="col-11 xyzyx"><p class="text-infixed-row"><p>' + result + '</p> </div> <div class="col-1"></div></div>');
                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    },

                });
            });
            $(".submit-x2").click(function(event) {
                var textTosend = $("#textTosend2").val();
                var submitNum = 2;
                document.getElementById('textTosend2').value = '';
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        textTosend: textTosend,
                        username: username,
                        submitNum: submitNum
                    },
                    success: function(result) {
                        $("#todo2").append('<div class="row fix-for-row card-in"><div class="col-11 xyzyx"><p class="text-infixed-row"><p>' + result + '</p> </div> <div class="col-1"></div></div>');
                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }

                });
            });
            $(".submit-x3").click(function(event) {
                var textTosend = $("#textTosend3").val();
                var submitNum = 3;
                document.getElementById('textTosend3').value = '';
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        textTosend: textTosend,
                        username: username,
                        submitNum: submitNum
                    },
                    success: function(result) {
                        $("#todo3").append('<div class="row fix-for-row card-in"><div class="col-11 xyzyx"><p class="text-infixed-row"><p>' + result + '</p> </div> <div class="col-1"></div></div>');
                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }

                });
            });
            $(".submit-x4").click(function(event) {
                var textTosend = $("#textTosend4").val();
                var submitNum = 4;
                document.getElementById('textTosend4').value = '';
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo site_url('workharder/user_data_submit'); ?>",
                    data: {
                        textTosend: textTosend,
                        username: username,
                        submitNum: submitNum
                    },
                    success: function(result) {
                        $("#todo4").append('<div class="row fix-for-row card-in"><div class="col-11 xyzyx"><p class="text-infixed-row"><p>' + result + '</p> </div> <div class="col-1"></div></div>');
                    },
                    error: function(request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
                    }


                });

            });

        });

    </script>

    <div class="container-fluid x" style="width:100%; height:100%;">
        <!--  Początek containera -->
        <div class="row navbar">
            <!-- TOP -->
            <div class="col-2"><a href="<?php echo site_url(); ?>workharder/"><img src="https://i.imgur.com/Y9C7wR7.png" alt="" class="logo" style="padding-left:0px;"></a></div>

            <div class="col-8">
                <ul class="nav  nav-justified" role="tablist">

                    <li class="active smbggr" style="height:100%;"><a href="#1kartajust" role="tab" data-toggle="tab">Zadania</a></li>

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
                        <div class="row" style="height: 100%; margin-right: 0px; margin-left: 0px;">
                            <div class="col-3">
                                <!-- MIEJSCE PRÓB I TESTÓW OKIENKA     POCZĄTEK-->

                                <div class="card-window">
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div id="todo1">
                                        <div class="row fix-for-row card-in" style="border-radius: 3px;">
                                            <div class="col-10 xyzyx">
                                                <p class="text-infixed-row">

                                                    Zacząć żyć</p>
                                            </div>

                                            <div class="col-2" style="padding-left:0px;">
                                                <div class="row" style="height:100%;">
                                                    <div class="col-3" style="padding:0px;">

                                                        <div class=" dropleft " style="height:100%;">

                                                            <i class="fas fa-ellipsis-v d-flex align-items-center check dropdown"></i>

                                                            <div class="dropdown-menu " style="left: 0px; top: 0px; position: absolute; transform: translate3d(-196px, 0px, 0px);" x-placement="left-start">
                                                                <p class="dropdown-item item-dropdown dd-edit">Edytuj</p>
                                                                <p class="dropdown-item item-dropdown dd-editname">Zmień nazwę</p>
                                                                <p class="dropdown-item item-dropdown">Something else here</p>
                                                                <div class="dropdown-divider"></div>
                                                                <p class="dropdown-item dropdown-delete dd-delete">Usuń</p>
                                                            </div>
                                                        </div>








                                                    </div>
                                                    <div class="col-9"><a href="#" class="fas fa-check-square d-flex align-items-center" style=" color:#6D6D6D; font-size:25px; height:100%;"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--GENEROWANIE <i class="fas fa-ellipsis-v d-flex align-items-center check" style=" color:#6D6D6D; font-size:17px; height:100%;margin-left:10px;"></i>-->

                                        <?php
                                    $arr_num_1 = count($array1);
                                    if($arr_num_1>0) {
                                        $max = $arr_num_1 - 1;
                                        for($i=0; $i<=$max; $i++) {
                                            echo 
                                            '<div class="row fix-for-row card-in">
                                        <div class="col-10 xyzyx">
                                            <p class="text-infixed-row" id="'.$array1id[$i].'">
                                                
                                                '.$array1[$i].'</p>
                                        </div>
                                    
                                       <div class="col-2" style="padding-left:0px;"><div class="row" style="height:100%;"><div class="col-3" style="padding:0px;"><div class=" dropleft " style="height:100%;">
   
      <i class="fas fa-ellipsis-v d-flex align-items-center check dropdown" ></i>

  <div class="dropdown-menu " style="left: 0px; top: 0px; position: absolute; transform: translate3d(-196px, 0px, 0px);" x-placement="left-start">
                                                                <p class="dropdown-item item-dropdown dd-edit">Edytuj</p>
                                                                <p class="dropdown-item item-dropdown dd-editname">Zmień nazwę</p>
                                                                <p class="dropdown-item item-dropdown">Something else here</p>
                                                                <div class="dropdown-divider"></div>
                                                                <p class="dropdown-item dropdown-delete dd-delete">Usuń</p>
                                                            </div>
  </div></div><div class="col-9"><i class="fas fa-check-square d-flex align-items-center mark-as" style=" color:#6D6D6D; font-size:25px; height:100%;" id="'.$array1id[$i].'"></i></div></div>
                                    </div>
                                    </div>';
                                            
                                        }
                                    }
                                    
                                    ?>
                                    </div>
                                    <!-- GENEROWANIE-->
                                    <div class="row border-row"></div>
                                    <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!" name="textTosend" id="textTosend"> <input type="button" value="+" class="submit-x col-1 submit-x1" id="btn-1" style="font-size:20px;">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- MIEJSCE PRÓB I TESTÓW OKIENKA     KONIEC-->
                            <div class="col-3">

                                <div class="card-window ">
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div id="todo2">

                                        <!--GENEROWANIE-->
                                        <?php
                                    $arr_num_2 = count($array2);
                                    if($arr_num_2>0) {
                                        $max = $arr_num_2 - 1;
                                        for($i=0; $i<=$max; $i++) {
                                            echo 
                                            '<div class="row fix-for-row card-in">
                                        <div class="col-10 xyzyx">
                                            <p class="text-infixed-row">
                                                
                                                '.$array2[$i].'</p>
                                        </div>
                                    
                                        <div class="col-2"></div>
                                    </div>';
                                            
                                        }
                                    }
                                    
                                    ?>
                                    </div>
                                    <!-- GENEROWANIE-->

                                    <div class="row border-row "></div>
                                    <div class="row fix-for-row " style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!" name="textTosend2" id="textTosend2"> <input type="button" value="+" class="submit-x col-1 submit-x2" style="font-size:20px;" id="btn-2">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-3">

                                <div class="card-window ">
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div id="todo3">

                                        <!--GENEROWANIE-->

                                        <?php
                                    $arr_num_3 = count($array3);
                                    if($arr_num_3>0) {
                                        $max = $arr_num_3 - 1;
                                        for($i=0; $i<=$max; $i++) {
                                            echo 
                                            '<div class="row fix-for-row card-in">
                                        <div class="col-10 xyzyx">
                                            <p class="text-infixed-row">
                                                
                                                '.$array3[$i].'</p>
                                        </div>
                                    
                                        <div class="col-2"></div>
                                    </div>';
                                            
                                        }
                                    }
                                    
                                    ?>
                                    </div>
                                    <!-- GENEROWANIE-->
                                    <div class="row border-row"></div>
                                    <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!" name="textTosend3" id="textTosend3"> <input type="button" value="+" class="submit-x col-1 submit-x3" style="font-size:20px;" id="btn-3">
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-3">

                                <div class="card-window">
                                    <div class="row fix-for-row" style="border-radius: 3px; margin-bottom: 0px;">
                                        <div class="col-10">
                                            <p class="top-card-text" style="margin-bottom:0px;margin-bottom: 0px;">Codzienne nawyki</p>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div id="todo4">

                                        <!--GENEROWANIE-->
                                        <?php
                                    $arr_num_4 = count($array4);
                                    if($arr_num_4>0) {
                                        $max = $arr_num_4 - 1;
                                        for($i=0; $i<=$max; $i++) {
                                            echo 
                                            '<div class="row fix-for-row card-in">
                                        <div class="col-10 xyzyx">
                                            <p class="text-infixed-row">
                                                
                                                '.$array4[$i].'</p>
                                        </div>
                                    
                                        <div class="col-2"></div>
                                    </div>';
                                            
                                        }
                                    }
                                    
                                    ?>
                                    </div>
                                    <!-- GENEROWANIE-->
                                    <div class="row border-row"></div>
                                    <div class="row fix-for-row" style="padding-top:10px;">
                                        <div class="col-12" style="padding-left: 10px;">
                                            <input class="xD col-10" style="padding-left: 12px;" type="text" placeholder="Something new!" name="textTosend4" id="textTosend4"> <input type="button" value="+" class="submit-x col-1 submit-x4" style="font-size:20px;" id="btn-4">
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
