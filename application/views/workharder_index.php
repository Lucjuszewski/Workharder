<?php 
session_start();
if($access==true) { 
header('Location:'. site_url(). 'workharder/home');
                  
                  
                  } elseif($access=false) {
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
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="height:100%; width: 100%;">
 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
    $(function(){
    $('.btn-login').on('click',function() {
        $( ".dark-layer" ).show( 400, function() {
    // Animation complete.
        });
    });
        $('.hyperlink').on('click',function() {
               $( ".dark-layer" ).hide( 400, function() {
    // Animation complete.
        });                          
        });
    });
</script>
  
   <div class="container-fluid x" style="position:relative; height:100%; width: 100%; padding-left:0; padding-right:15px;">
   <div class="dark-layer" style="background-color:#000000; 
    position:absolute; 
    height:100%; 
    width: 100%;
    z-index:1; opacity: 0.88; padding: 0 0 ; display:none;">
    <div class="close-icon-container d-flex  justify-content-end"  style=" width:100%; margin-top:20px; padding-right:40px; "><div class="x-icon" style=" position:fixed; z-index:1;"><a href="####wyjscie" style="font-size:40px;" class="hyperlink" >X</a></div></div>
    <div class="d-flex justify-content-center align-items-center" style="height:100%; width:100%; position:fixed;"><!--   Okno logowania  POCZĄTEK   -->
       
        <div class="bordersquare x row" style="width:700px;">
        <div class="login-window col-5" style="border-right-style: dotted;  padding-right:35px; float:left;">
        <form action="http://[::1]/codeigniter/workharder/index" method="post" accept-charset="utf-8" style="width:100%;">
        <div class="full-width d-flex justify-content-center align-items-center" style="width:100%; margin-bottom:10px;"><a href="<?php echo site_url(); ?>workharder/"><img src="https://www.smartads.in/resources/assets/images/logo/smartadslogo.png" alt=""></a></div>
        <div class="form-group">

                <input type="text" class="form-control" name="loginUsername" placeholder="Nazwa użytkownika albo adres email" required>

               </div>
               <div class="form-group">
               <input type="password" class="form-control" name="loginPassword" placeholder="Hasło" required> </div>
               
            <div class="form-row"><div class="form-group col-md-12 d-flex align-items-center justify-content-end"><button  type="submit" class="btn btn-primary btn-lg" style="width:100%;">Zaloguj się</button></div></div><div class="form-row"><div class="form-group col-md-12" style="margin-bottom:0; text-align:center;"><a href="#pomocprzyhasle" style="font-size:12px; border-right-style: solid; padding-right:10px; border-right-width:thin;">Zapomniałem hasła</a><a href="#pomocprzyemailu" style="font-size:12px; padding-left:10px;">e-maila</a></div></div>
        </form> <!--   Okno logowania KONIEC    --> </div>
        <div class="register-prop col-7 container-fluid"><div class="row"><div class="col-12" style="text-align:center;"><h2>Nie masz jeszcze konta?</h2></div></div><div class="row"><div class="col-12" style="text-align:center;"><h5>Dołącz już dzisiaj do naszej społeczności aby pokonać prokrastynację!</h5></div></div><div class="row" ><div class="d-flex align-items-center justify-content-center" style="width:100%; padding-top:20px;"><button type="button" class="btn btn-primary btn-lg">Zarejestruj się!</button></div></div></div><div style="clear:both;"></div>
        
        </div></div>
    </div>
   
   <div class="row navbar">
        <div class="col-2" ><a href="<?php echo site_url(); ?>workharder/"><img src="https://www.smartads.in/resources/assets/images/logo/smartadslogo.png" alt=""></a></div>
        
          <div class="col-1"></div>
             <div class="col-7"><nav class="nav">
  <a class="nav-link active" href="#">O projekcie</a>
  <a class="nav-link" href="#">FAQ</a>
  <a class="nav-link" href="#">Wspomóż projekt</a>
  
</nav></div>
              <div class="col-2"><div class="d-flex justify-content-end button-zaloguj"><button type="button" class="btn btn-primary btn-login">Zaloguj się</button></div></div>
             
    </div> 
    <div class="container d" style="height:100%;">
    <div class="row">
    <div class="col-lg-12" style="height:500px;">
        <div id="xd" style="margin-top:15%; margin-bottom:5%; "><h1 class="text-center" style="text-align: center; font-size:50px;">Razem z WorkHarderem pokonamy prokrastynację!</h1></div>
    <a href="<?php echo site_url('Workharder/register'); ?>"><div class="d-flex justify-content-center "><button type="button" class="btn btn-primary btn-lg">Zarejestruj się!</button></div></a>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-6 box-info">
        <div class="inner-container title-info"><h2>Śledź swoje postępy w realizowaniu celów!</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis autem quae commodi molestias minus? Iure dolorum dicta, aliquid distinctio sed.</p></div></div>
        <div class="col-lg-6 box-info"><div class="inner-container title-info" ><h2>Śledź swoje postępy w realizowaniu celów!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis autem quae commodi molestias minus? Iure dolorum dicta, aliquid distinctio sed.</p></div></div>
    </div>
        <div class="row"><div class="col-12" style="height:50px;  font-size:20px; margin-top:20px;"><div class="d-flex justify-content-center ">Wszelkie prawa zastrzeżone &copy;</div></div>
    
    
    </div>
    </div>
    
    </div>
</body>

</html>
<!--
// TODO: Drugi raz poprawić responsywnosc, zrobic to na wzor tych niebieskich pojemnikow oddzielonych marginesami
// TODO: Mechanizm logowania i okienko logowania przy kliknięciu przycisku
// TODO: Zaimplementować JS i JQuery
// TODO: Przekierowanie na strone główną i pierwsze szlify :) 
// FUTURE: Pomyślec o zrobieniu/kupieniu loga
// FUTURE: Pomyśleć o githubie na poważnie