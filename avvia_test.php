<?php

session_start();

$nome_autore = $_SESSION['nomeaut'];

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
       
       
       
        <style>
        /* NON SERVE A NIENTE */
        #map {
            width: 909px;
            height: 592px;
        }
        </style>
        
        
        <script>
        // qua dentro ci potrei mettere del codice javascript
        
        </script>

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



        <link rel="stylesheet" href="../webservice/bootstrap/dist/css/bootstrap.min.css">
        <script src="../webservice/bootstrap/dist/js/bootstrap.min.js"></script>


        <!--script src="https://code.jquery.com/jquery-3.3.1.min.js"></script-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        
        <link rel="stylesheet" href="../webservice/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
        <script src="../webservice/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>



        <title></title>
    </head>
    <body>
	<div class="container" style="background-color: #e3f2fd;">

    
    <div style="text-align: center;">    <h1> Avvia il test  </h1></div>
        
        <div class="row">
		  <!-- //<form action="run_rtklib.php" method="POST"> -->
		 
		 
		 

	
		  
		 <!--  <button type="submit" class="btn btn-primary"> <i class="fas fa-play"></i> salva configurazione e procedi </button> -->
		<!-- </form> -->
        
           
      </div>
    <div class="row">
    <div class="col"> </div>
    <div class="col"><a href="./configurazioni_output/prova_<?php echo $nome_autore ?>.conf" download>
    <button class="btn btn-primary"> <i class="fas fa-download"></i> Download file di configurazione </button>
    </a> </div>
    <div class="col">
    
    <form action="avvia_test1.php" method="POST">
    <input type="hidden" name="nome_autore" value="<?php echo $nome_autore;?>" />

    
    <button type="submit" class="btn btn-primary"> <i class="fas fa-play"></i> Avvia il test </button>
    
    
    </form>
    </div>
    <div class="col"> </div>
    </div>    
        
    
              	<br><div style="text-align: center;"><button type="submit" onClick="location.href='index.php'" class="btn btn-primary">  <i class="fas fa-home"></i> home </button>     </div>	    
       		<br><div class="row">  </div>
       
       </div>   
      
              
  <!-- Footer -->
<footer class="page-footer font-small">

    <!-- Footer Elements -->
    <div class="container"style="background-color:#bcd1de;">

      <!-- Grid row-->
      <br><div class="row">

        <!-- Grid column -->
        <div class="col">
          <div class="flex-center align-middle">

            <!-- Facebook -->
            <div style="text-align: center;"><a class="fb-ic" href="https://www.facebook.com/Gteronline" target="_blank">
            <img src="./img/facebook.png" height="30" hspace="50" alt="errore: non carica immagine"> 
            </a>
            <!-- Twitter -->
            <a class="tw-ic"href="https://twitter.com/Gteronline" target="_blank" >
             <img src="./img/twitter.png" height="30" hspace="50"alt="errore: non carica immagine"> 
            </a>
            <!-- Google +-->
            <a class="gplus-ic"href="https://plus.google.com/+GterIt" target="_blank">
              <img src="./img/googleplus.png" height="30" hspace="50" alt="errore: non carica immagine">
            </a>
            <!--Linkedin -->
            <a class="li-ic"href="https://www.linkedin.com/company/gter-srl-innovazione-in-geomatica-gnss-e-gis/" target="_blank">
               <img src="./img/linkedin.png" height="30" hspace="50" alt="errore: non carica immagine">
            </a>
            <!--Github-->
            <a class="git-ic" href="https://github.com/gtergeomatica/StazioneGNSS_gter" target="_blank" >
              <img src="./img/github.png" height="30"  hspace="50"alt="errore: non carica immagine">
            </a>
            <!--Slideshare-->
            <a class="pin-ic"href="https://www.slideshare.net/rmarzocchi84" target="_blank">
              <img src="./img/Slideshare.png" height="30"  hspace="50"alt="errore: non carica immagine">
            </a></div>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

  
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </div>
  </footer>
  <!-- Footer -->

   
  
    

    
     </body>
</html>



<?php


?>
