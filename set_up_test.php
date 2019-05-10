<?php



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
			
<!-- 		<link rel="stylesheet" href="./css/stile.css"> -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



        <link rel="stylesheet" href="../webservice/bootstrap/dist/css/bootstrap.min.css">
        <script src="../webservice/bootstrap/dist/js/bootstrap.min.js"></script>


        <!--script src="https://code.jquery.com/jquery-3.3.1.min.js"></script-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        
        <link rel="stylesheet" href="../webservice/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
        <script src="../webservice/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>



        <title></title>
    </head>
    <body style="background-color: #e3f2fd; height = 100vh">
	<div class="container">

    <form action="avvia_test1.php" method="POST">
      <div class="row">
		<!-- <div class="col-2"> </div> -->
		<div class="col"> 
		<div style="text-align: center;"> <h2> Inserisci i tuoi dati </h2> </div>
		</div> 
		<!-- <div class="col-2"> </div> -->
		</div>
       
       <div class="row"> 
       <div class="col"> </div>
		 	 <div class="form-group col">
		    <label for="nome"> Nome </label>
   		<input required="" type="text"  class="form-control" name="nome_autore" id="nome" placeholder="Inserisci il nome...">
  			</div>
		 
		 
		 <div class="form-group col">
		    <label for="exampleInputEmail1">Durata del test [min] </label>
		    <input required="" type="number" class="form-control" name="durata_test" id="durata" aria-describedby="emailHelp" min=1 max=180 placeholder="Specificare la durata del test">
		    
		  </div> 
        <div class="col"> </div>
       </div>
       
       
        
    <!-- <form action="run_rtklib.php" method="POST"> -->
    
    
      <div class="row">
		<div class="col"></div> 
		<div class="col-7"> 
		<div style="text-align: center;"> <h2> Modifica le impostazioni di rtklib </h2> </div></div> <div class="col" style="float:right;"><img src="./img/rtklib.png" height="50" alt="errore: non carica immagine"> </div> </div>
	
		
	
		
		
		  
   <div class="row">
		<div class="col-2"> </div>
		<div class="col-8">
		 <div style="text-align: center;"> 
		<h5> Puoi trovare maggiori informazioni sui parametri consultando il <a href="http://www.rtklib.com/rtklib_document.htm" target="_blank"> manuale di rtklib</a> </h5> </div>
		 </div>
		<div class="col-2"> </div>
		</div>
	
		  <div class="row"> </div>
		  
		 <div class="row"> 
		 
		<div class="form-group col">
             <label for="pos1_posmode"> Tipo di posizionamento: </label> 
             <select class="form-control" name="pos1_posmode" id="pos1_posmode" required="">
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="single" > single </option>
             <option name="tipo_segn" value="dgps" > dgps </option>
				 <option name="tipo_segn" value="kinematic" > kinematic </option>             
             <option name="tipo_segn" value="static" > static </option>
             <option name="tipo_segn" value="movingbase" > movingbase </option>
				 <option name="tipo_segn" value="fixed" > fixed </option>	             
             <option name="tipo_segn" value="ppp-kine" > ppp-kine </option>
             <option name="tipo_segn" value="ppp-static" > ppp-static </option>
             <option name="tipo_segn" value="ppp-fixed" > ppp-fixed </option>
             
             </select>            
					<small id="emailHelp" class="form-text text-muted">specificare il tipo di posizionamento.</small>        
        </div>
             		 
		 <div class="form-group col">
		    <label for="exampleInputEmail1">Angolo cut-off (10°-45°)</label>
		    <input required="" type="number" class="form-control" name="cut_off" id="cutoff" aria-describedby="emailHelp" min=10 max=45 > 
		    <small id="emailHelp" class="form-text text-muted">Inserire angolo cut-off  </small>
		  </div>
		  
		  <div class="form-group col">
              <label for="pos1_ionoopt">Tipo di correzione ionosferica:</label> 
             <select class="form-control" name="pos1_ionoopt" id="pos1_ionoopt" required="" >
            <!--  <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="off" > off </option>
             <option name="tipo_segn" value="brdc" > brdc </option>
				 <option name="tipo_segn" value="sbas" > sbas </option>             
             <option name="tipo_segn" value="dual-freq" > dual-freq </option>
             <option name="tipo_segn" value="est-stec" > est-stec </option>
				 <option name="tipo_segn" value="ionex-tec" > ionex-tec </option>	             
             <option name="tipo_segn" value="qzs-brdc" > qzs-brdc </option>
             <option name="tipo_segn" value="qzs-lex" > qzs-lex </option>
             <option name="tipo_segn" value="vtec_sf" > vtec_sf </option>
             <option name="tipo_segn" value="vtec_ef" > vtec_ef </option>
             <option name="tipo_segn" value="gtec" > gtec </option>
             </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il tipo di correzione.</small>        
        </div>
        
		  <div class="form-group col">
              <label for="pos1_tropopt">Tipo di correzione troposferica:</label> 
             <select class="form-control" name="pos1_tropopt" id="pos1_tropopt" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="off" > off </option>
             <option name="tipo_segn" value="saas" > saas </option>
				 <option name="tipo_segn" value="sbas" > sbas </option>             
             <option name="tipo_segn" value="est-ztd" > est-ztd </option>
             <option name="tipo_segn" value="est-ztdgrad" > est-ztdgrad </option>
				 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il tipo di correzione.</small>        
        </div>  
        
        </div>      
       <div class="row">     
        
		  <div class="form-group col">
              <label for="pos1_sateph">Tipo di effemeridi:</label> 
             <select class="form-control" name="pos1_sateph" id="pos1_sateph" required="" >
             <!-- <option name="tipo_segn" value="" >  </option> -->
             <option name="tipo_segn" value="brdc" > brdc </option>
             <option name="tipo_segn" value="precise" > precise </option>
	          <option name="tipo_segn" value="brdc+sbas" > brdc+sbas </option>	  
		       <option name="tipo_segn" value="brdc+ssrapc" > brdc+ssrapc </option>
		       <option name="tipo_segn" value="brdc+sscrom" > brdc+sscrom </option>
		  </select>  
		  <small id="emailHelp" class="form-text text-muted">selezionare il tipo di effemeridi.</small>           
        </div>
        
		  <div class="form-group col">
              <label for="pos1_navsys"> Sistema di navigazione:</label> 
             <select class="form-control" name="pos1_navsys" id="pos1_navsys" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="1" > gps </option>
             <option name="tipo_segn" value="2" > sbas </option>
				 <option name="tipo_segn" value="4" > glonass </option>             
             <option name="tipo_segn" value="8" > galileo </option>
             <option name="tipo_segn" value="16" > qzss </option>
				 <option name="tipo_segn" value="32" > compass </option>
				 
				 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il sistema di navigazione.</small>        
        </div>            
        
        <div class="form-group col">
             <label for="out_solformat"> Formato della soluzione:</label> 
             <select class="form-control" name="out_solformat" id="out_solformat" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="llh" > llh </option>
             <option name="tipo_segn" value="xyz" > xyz </option>
				 <option name="tipo_segn" value="enu" > enu </option>             
             <option name="tipo_segn" value="nmea" > nmea </option>
         	 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il sistema di navigazione.</small>        
        </div>  
 
      
        <div class="form-group col">
              <label for="out_timesys"> Sistema di riferimento temporale:</label> 
             <select class="form-control" name="out_timesys" id="out_timesys" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="gpst" > gpst </option>
             <option name="tipo_segn" value="utc" > utc </option>
				 <option name="tipo_segn" value="jst" > jst</option>             
     
				 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il sistema di riferimento per il tempo.</small>        
        </div>     
      

		</div> 
		
		<div class="row">
		<div class="form-group col">
		<label for="out_timeform"> Formato del tempo:</label> 
             <select class="form-control" name="out_timeform" id="out_timeform" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="tow" > tow </option>
             <option name="tipo_segn" value="hms" > hms </option>
				 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il formato del tempo.</small>
		
		</div>		
				
		
		
		
		
		
		<div class="form-group col">
		<label for="out_height"> Formato della quota:</label> 
             <select class="form-control" name="out_height" id="out_height" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="ellipsoidal" > ellipsoidal </option>
             <option name="tipo_segn" value="geodetic" > geodetic </option>
				 </select>            
					<small id="emailHelp" class="form-text text-muted">selezionare il formato della quota.</small>
		
		</div>		
		
		<div class="form-group col">
		<label for="out_geoid"> Geoide:</label> 
             <select class="form-control" name="out_geoid" id="out_geoid" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="internal" > internal </option>
             <option name="tipo_segn" value="egm96" > egm96 </option>
				 <option name="tipo_segn" value="egm08_2.5" > egm08_2.5 </option>             
             <option name="tipo_segn" value="egm08_1" > egm08_1 </option>
             <option name="tipo_segn" value="gsi2000" > gsi2000 </option>
            
         	 </select>            
					<small id="emailHelp" class="form-text text-muted">Selezionare il modello del Geoide</small>
		
		</div>		
		<div class="form-group col">
		<label for="outstr1_format"> Formato del file di output:</label> 
             <select class="form-control" name="outstr1_format" id="outstr1_format" required="" >
             <!-- <option name="tipo_segn" value="" >   </option> -->
             <option name="tipo_segn" value="llh" > llh </option>
             <option name="tipo_segn" value="xyz" > xyz </option>
				 <option name="tipo_segn" value="enu" > enu </option>             
             <option name="tipo_segn" value="nmea" > nmea </option>
            
         	 </select>            
					<small id="emailHelp" class="form-text text-muted">Selezionare il formato del file di output</small>
		
		</div>	
	
		
	
		
				
		</div>
		<div class="row">  
		<div class="col"> </div>
		<div class="col"> </div>
		<div class="col"> 
		<br><button type="submit" class="btn btn-primary"> <i class="fas fa-play"></i> sottometti configurazione e procedi </button>

		</div>
		<div class="col"> </div>
		<div class="col"> </div>
		 </div> 
		
		</form>
          	<br><div style="text-align: center;"><button type="submit" onClick="location.href='index.php'" class="btn btn-primary">  <i class="fas fa-home"></i> home </button>     </div>	    
       		<br><div class="row">  </div>
       
       </div>   
      
              
  <!-- Footer -->
<footer class="page-footer font-small" style="background-color:#bcd1de; 
    width: 100vw;
    bottom: 0vh;">

    <!-- Footer Elements -->
    <div class="container">

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
            <!--Instagram-->
            <a class="git-ic" href="https://www.instagram.com/gter_srl/?hl=it" target="_blank" >
              <img src="./img/instagram.png" height="30"  hspace="50"alt="errore: non carica immagine">
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
    <div class="footer-copyright text-center py-3"> Sito creato con 
      <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>   

    </div>
    
    <!-- Copyright -->
  </div>
  </footer>
  <!-- Footer -->

   
  
    

    
     </body>
</html>


<?php


?>
