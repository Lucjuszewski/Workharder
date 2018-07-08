<?php 
if(isset($u_correct)) {if($u_correct==true) {$u = true;} elseif($u_correct==false) {$u = false;}}
if(isset($p_correct)) {if($p_correct==true) {$p = true;} elseif($p_correct==false) {$p = false;}}
if(isset($p2_correct)) {if($p2_correct==true) {$p2 = true;} elseif($p2_correct==false) {$p2 = false;}}
if(isset($e_correct)) {if($e_correct==true) {$e = true;} elseif($e_correct==false) {$e = false;}}
if(isset($recaptcha_correct)) {if($recaptcha_correct==true) {$rc = true;} elseif($recaptcha_correct==false) {$rc = false;}}
if($isRegister) {
    header('Location:'. site_url(). 'workharder/youAreWelcome');
}
?>
<!DOCTYPE html>
<html lang="en" style="height:100%;">
<head>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <title>WorkHarder - to fight with procrastination</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css">
    <style>
        .x {
           background: url("<?php echo base_url();?>images/footer_lodyas.png");
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body style="height:100%;width:100%;">
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
   <div class="container-fluid x" style="height:100%; width:100%;padding-right: 0px; padding-left: 0px; position:relative;">
     <div class="dark-layer" style="background-color:#000000; 
    position:absolute; 
    height:100%; 
    width: 100%;
    z-index:1; opacity: 0.88; padding: 0 0 ; display:none;">
    <div class="close-icon-container d-flex  justify-content-end"  style=" width:100%; margin-top:20px; padding-right:40px; "><div class="x-icon" style=" position:fixed; z-index:1;"><a href="####wyjscie" style="font-size:40px;" class="hyperlink" >X</a></div></div>
    <div class="d-flex justify-content-center align-items-center" style="height:100%; width:100%; position:fixed;"><!--   Okno logowania  POCZĄTEK   -->
       
        <div class="bordersquare x row" style="width:700px;">
        <div class="login-window col-5" style="border-right-style: dotted;  padding-right:35px; float:left;">
        <form action="http://[::1]/codeigniter/workharder/register" method="post" accept-charset="utf-8" style="width:100%;">
        <div class="full-width d-flex justify-content-center align-items-center" style="width:100%; margin-bottom:10px;"><a href="<?php echo site_url(); ?>workharder/"><img src="https://www.smartads.in/resources/assets/images/logo/smartadslogo.png" alt=""></a></div>
        <div class="form-group">

                <input type="text" class="form-control" name="loginUsername" placeholder="Nazwa użytkownika albo adres email" required>

               </div>
               <div class="form-group">
               <input type="password" class="form-control" name="loginPassword" placeholder="Hasło" required> </div>
               
            <div class="form-row"><div class="form-group col-md-12 d-flex align-items-center justify-content-end"><button  type="submit" class="btn btn-primary btn-lg" style="width:100%;">Zaloguj się</button></div></div><div class="form-row"><div class="form-group col-md-12" style="margin-bottom:0; text-align:center;"><a href="#pomocprzyhasle" style="font-size:12px; border-right-style: solid; padding-right:10px; border-right-width:thin;">Zapomniałem hasła</a><a href="#pomocprzyemailu" style="font-size:12px; padding-left:10px;">e-maila</a></div></div>
        </form></div>
        <div class="register-prop col-7 container-fluid"><div class="row"><div class="col-12" style="text-align:center;"><h2>Nie masz jeszcze konta?</h2></div></div><div class="row"><div class="col-12" style="text-align:center;"><h5>Dołącz już dzisiaj do naszej społeczności aby pokonać prokrastynację!</h5></div></div><div class="row" ><div class="d-flex align-items-center justify-content-center" style="width:100%; padding-top:20px;"><button type="button" class="btn btn-primary btn-lg">Zarejestruj się!</button></div></div></div><div style="clear:both;"></div>
        
        </div> <!--   Okno logowania KONIEC    --> </div>
    </div>
      <div class="row navbar" style="margin:0">
        <div class="col-2" ><a href="<?php echo site_url(); ?>workharder/"><img src="https://www.smartads.in/resources/assets/images/logo/smartadslogo.png" alt=""></a></div>
        
          <div class="col-1"></div>
             <div class="col-7"><nav class="nav">
  <a class="nav-link active" href="#">O projekcie</a>
  <a class="nav-link" href="#">FAQ</a>
  <a class="nav-link" href="#">Wspomóż projekt</a>
  
</nav></div>
              <div class="col-2"><div class="d-flex justify-content-end"><button type="button" class="btn btn-primary btn-login">Zaloguj się</button></div></div>
             
    </div> 
       <div class="row" style="height:84%;width:100%; margin:0" ><div class="container-fluid x" style="height:100%;width:100%;"><div class="col-12" style="height:100%;width:100%;" ><div class="d-flex justify-content-center align-items-center" style="height:100%;"><div class="bordersquare">
          <div class="field-form d-flex align-items-center justify-content-center">
          <form action="http://[::1]/codeigniter/workharder/register" method="post" accept-charset="utf-8" style="width:100%;">
               <div class="form-group">
                   
                   <input type="text" class="form-control <?php if($u==true) {echo "is-valid";} elseif(isset($u)) {echo "is-invalid";}?>" name="inputUsername" placeholder="Nazwa użytkownika" required>
                   <?php 
                   if($u==false&&!isset($u_inDB))  {echo '<div class="invalid-feedback">Nazwa użytkownika może zawierać od x do x znaków A-Z i cyfr 0-9</div>';} elseif($u==false&&isset($u_inDB)) {
                       echo '<div class="invalid-feedback">Konto z taką nazwą użytkownika już istnieje!</div>';
                   }
                   ?>
               </div>
               <div class="form-group">
                   
                   <input type="text" class="form-control <?php if($e==true) {echo "is-valid";} elseif(isset($e)) {echo "is-invalid";}?>" name="inputEmail" placeholder="Adres email" required>
                   <?php 
                   if($e==false&&!isset($e_inDB))  {echo '<div class="invalid-feedback">Błędnie wprowadzony email!</div>';} elseif($e==false&&isset($e_inDB)) {
                       echo '<div class="invalid-feedback">Konto z takim emailem już istnieje!</div>';
                   }
                   ?>
               </div>
               <div class="form-group">
                   
                   <input type="password" class="form-control <?php if($p==true&&$p2==true) {echo "is-valid";} elseif(isset($p)||isset($p2)) {echo "is-invalid";}?>" name="inputPassword1" placeholder="Hasło" required>
                   <?php 
                   if($p==false)  {echo '<div class="invalid-feedback">Hasło może zawierać tylko następujące znaki oraz hasło nie może być dłuższe niż 16 i nie krótsze niż 6 znaków.</div>';}
                   ?>
               </div>
               <div class="form-group">
                   
                   <input type="password" class="form-control <?php if($p2==true) {echo "is-valid";} elseif(isset($p2)) {echo "is-invalid";}?>" name="inputPassword2" placeholder="Powtórz hasło" required>
                   <?php 
                   if($p2==false)  {echo '<div class="invalid-feedback">Hasła nie są takie same.</div>';}
                   ?>
               </div>
               <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="regulaminCheck" required>
          <label class="form-check-label" for="regulaminCheck">
        Zgadzam się na regulamin.
      </label>
    </div>
    <div class="form-check">
          <input class="form-check-input" type="checkbox" name="newsletterCheck">
          <label class="form-check-label" for="newsletterCheck">
        Chcę otrzymywać powiadomienia na temat nowości w projekcie. 
      </label>
    </div>
  </div>
          <div class="form-row"><div class="form-group col-md-6" style="margin-bottom:0;"><div class="g-recaptcha" data-sitekey="6Lf2UVsUAAAAALQHY3wlYTfQy-eu43ZGYwwC4Z6j"></div></div><div class="form-group col-md-6 d-flex align-items-center justify-content-end"><button  type="submit" class="btn btn-primary btn-lg">Zarejestruj się</button></div></div>
          <?php if(isset($rc)&&$rc==false) {echo '<div class="form-group"><div class="is-recaptcha-invalid">Proszę przejść próbę recaptcha</div></div>';} ?>
          <input type="hidden" name="issend" value="1"/>
          
              </form>
          
           </div></div></div></div></div></div>
    </div>
</body>

</html>
<!--
// TODO: Drugi raz poprawić responsywnosc, zrobic to na wzor tych niebieskich pojemnikow oddzielonych marginesami
// TODO: 432 px to złota liczba z 700 wiec warto ja użyc w reje, poza tym ten przycisk wyśrodkować w pionie i poziomie na lewo
// TODO: Przekierowanie na strone logowania

// TODO: Przekierowanie na strone główną i pierwsze szlify :) 
// FUTURE: Pomyślec o zrobieniu/kupieniu loga
// FUTURE: Pomyśleć o githubie na poważnie