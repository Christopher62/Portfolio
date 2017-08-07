﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio de Christopher D.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <a href="" class="fa fa-chevron-up fa-2x" aria-hidden="true" id="toTop"></a>
    <nav class="navbar navbar-default navbar-fixed-top" id="nav1">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNav1">
        <ul class="nav navbar-nav navbar-right col-md-9">
          <li><a id="acceuil" href="#">accueil</a></li>
          <li><a href="#title1">portfolio</a></li>
          <li><a id="apropos" href="#title2">a propos</a></li>
          <li><a href="#title3">contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="#"><!-- Retour en haut / Back to top --></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10 text-center" id="home">
        	<button id="ENG" type="button" class="btn" onclick="EN()">ENG (Change in English)</button>
          <button id="FRA" type="button" class="btn" onclick="window.location.reload()">FRA (Recharger la page)</button>
          <p id="p1">Bienvenue sur mon portfolio, il a été créé au cours de la formation Simplon de Boulogne-Sur-Mer (promo #2).<br>
          Je suis apprenant en Développement Front-End.<br>
          Bonne visite !</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
      	<div id="title1">
      		<h1 class="text-center">Portfolio :</h1>
      	</div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
      	<div class="col-md-offset-3 col-sm-offset-1" id="portfolio">
      		<input type="button" class="bton" value="TOUT" id="toutbtn">
        	<input type="button" class="bton" value="PRO" id="probtn">
        	<input type="button" class="bton" value="PERSO" id="persobtn">
        	<i class="fa fa-times-circle fa-2x quit" aria-hidden="true"></i>
      	</div>
      </div>
    </div>
    <div class="container-fluid" id="Affichage">
      <div class="row">
        <img src="images/HTML-CSS/image1.png">
        <img src="images/HTML-CSS/image2.png">
        <img src="images/HTML-CSS/image3.png">
        <img src="images/HTML-CSS/image4.png">
        <img src="images/JS/mot.png">
        <img src="images/JS/palindrome.png">
        <img src="images/PHP-SQL/uploadsql.png">
        <img src="images/PHP-SQL/uploadsql2.png">
      </div>
    </div>
    <div class="container-fluid" id="TOUT">
      <div class="row">
        <img src="images/HTML-CSS/image1.png">
        <img src="images/JS/palindrome.png">
        <img src="images/BootStrap/Cap1.png">
        <img src="images/PHP-SQL/uploadsql2.png">
        <p id="descr1" class="text-center" style="color:#FFF">Challenge en HTML & JS, Crea en BootStrap, Exo en PHP !</p>
      </div>
    </div>
    <div class="container-fluid" id="PRO">
      <div class="row">
        <img src="images/PRO/AEICW1.png">
        <img src="images/PRO/AEICW2.png">
        <img src="images/PRO/AEICW3.png">
        <img src="images/PRO/AEICW4.png">
        <p id="descr2" class="text-center" style="color:#FFF">Projet pour l'Asso AEICW (Stage) ! Image(s) qui apparaît au "clic" & qui redirige vers le site au "double-clique" !</p>
        <img src="images/PRO/CMS.png">
        <img src="images/PRO/CMS.png">
        <img src="images/PRO/CMS.png">
        <img src="images/PRO/CMS.png">
        <p id="descr3" class="text-center" style="color:#FFF">A Venir ! En cours : site-vitrine pour la boulangerie Déjeuner Minute...</p>
      </div>
    </div>
    <div class="container-fluid" id="PERSO" style="cursor:pointer">
      <div class="row">
        <img id="imgHTML" src="images/img-logo/persohtml.png">
        <img id="imgJS" src="images/img-logo/persojs.png">
        <img id="imgBS" src="images/img-logo/persobs.png">
        <img id="imgPHPSQL" src="images/img-logo/persophpsql.png">
      </div>
    </div>
    <div class="container-fluid" id="HTMLCSS">
      <div class="row">
        <button id="btn1" type="button" class="btn btn-danger quit2">Retour</button>
        <p><img src="images/img-logo/html-css.png"></p>
        <img src="images/HTML-CSS/ex5part1.png">
        <img src="images/HTML-CSS/ex5part2.png">
        <img src="images/HTML-CSS/ex5part3.png">
        <img src="images/HTML-CSS/ex5part4.png">
        <img src="images/HTML-CSS/maquette.png">
        <img src="images/HTML-CSS/image1.png">
        <img src="images/HTML-CSS/image2.png">
        <img src="images/HTML-CSS/image3.png">
        <img src="images/HTML-CSS/image4.png">
        <p id="descr4" class="text-center" style="color:#FFF">Challenge & Exo en HTML / CSS !</p>
      </div>
    </div>
    <div class="container-fluid" id="JS">
      <div class="row">
        <button id="btn2" type="button" class="btn btn-danger quit2">Retour</button>
        <p><img src="images/img-logo/js-logo.png"></p>
        <img src="images/JS/chaud.png">
        <img src="images/JS/bravo.png">
        <img src="images/JS/mot.png">
        <img src="images/JS/palindrome.png">
        <p id="descr5" class="text-center" style="color:#FFF">Challenge & Exo en JavaScript !</p>
      </div>
    </div>
    <div class="container-fluid" id="BootStrap">
      <div class="row">
        <button id="btn3" type="button" class="btn btn-danger quit2">Retour</button>
        <p><img src="images/img-logo/bootstrap.png"></p>
        <img src="images/BootStrap/Cap1.png">
        <img src="images/BootStrap/Cap2.png">
        <img src="images/BootStrap/Cap3.png">
        <img src="images/BootStrap/Cap4.png">
        <img src="images/BootStrap/Cap5.png">
        <img src="images/BootStrap/Cap6.png">
        <img src="images/BootStrap/Cap7.png">
        <img src="images/BootStrap/Cap8.png">
        <img src="images/BootStrap/Cap9.png">
        <img src="images/BootStrap/Cap10.png">
        <p id="descr6" class="text-center" style="color:#FFF">Reprod, crea, challenge... en BootStrap !</p>
      </div>
    </div>
    <div class="container-fluid" id="PHPSQL">
      <div class="row">
        <button id="btn4" type="button" class="btn btn-danger quit2">Retour</button>
        <p><img src="images/img-logo/php.png"></p>
        <img src="images/PHP-SQL/phpexo3.png">
        <img src="images/PHP-SQL/phpexo3_2.png">
        <img src="images/PHP-SQL/uploadsql.png">
        <img src="images/PHP-SQL/uploadsql2.png">
        <p id="descr7" class="text-center" style="color:#FFF">Exo en PHP !</p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
      	<div class="text-center" id="title2" style="font-size: 36px"> <!-- (FR) style pour la traduction en anglais / (EN) style for english translation -->
      		<h1>A propos de moi :</h1>
      	</div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
      	<div class="col-xs-offset-1 col-xs-10 text-center" id="about">
	        <p>Bonjour, je m'appel Christopher, je suis âgé de 21 ans et je réside à Boulogne Sur Mer.</p>
	        <p>J'ai suivi une formation (Oct 2016 - Juin 2017) à <a id="a_pres" href="http://simplon.co/" target="_blank">Simplon.co</a> Boulogne-Sur-Mer => formation de 6 mois dans le développement web.</p>
	        <p>Bilan des compétences :</p>
	        <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
		        <div class="progress">
		          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
		            <span style="color:black">HTML / CSS (60%)</span>
		          </div>
		        </div>
			      <div class="progress">
		          <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
		            <span style="color:black">JS (55%)</span>
		          </div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
		            <span style="color:black">BootStrap (65%)</span>
		          </div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
		            <span style="color:black">PHP (35%)</span>
		          </div>
		        </div>
		        <div class="progress">
		          <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
		            <span style="color:black">Symfony 3 (20%)</span>
		          </div>
		        </div>
	        </div>
      	</div>
      </div>
    </div>
    <div class="container-fluid">
    	<div class="row">
    		<div id="title3">
    			<h1 class="text-center">Contact :</h1>
    		</div>
    	</div>
    </div>
    <div class="container-fluid text-center" id="contain">
      <div class="row">
      <div class="col-md-6 col-sm-6" id="contact">
        <form action="#contain" onsubmit="return verifForm(this)" method="POST">
          <div class="form-group">
            <input id="name" name="name" type="text" placeholder="Nom" class="form-control" onblur="verifName(this)" autocomplete="off">
          </div>
          <div class="form-group">
            <input id="subject" name="subject" type="text" placeholder="Objet du message" class="form-control" onblur="verifSubject(this)" autocomplete="off">
          </div>
          <div class="form-group">
            <input id="email" name="email" type="text" placeholder="E-mail" class="form-control" onblur="verifMail(this)" autocomplete="off">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message" name="message" placeholder="Formulaire non fonctionnel pour l'envoi des mails ! ..." rows="5" autocomplete="off"></textarea>
          </div>
          <div class="form-group">
            <div class="text-right">
              <button type="submit" id="sub1">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 col-sm-6" id="adress">
        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Boulogne-Sur-Mer, Haut-de-France, France</li>
        <li><i class="fa fa-envelope" aria-hidden="true"></i> christopher.dachicourt@gmail.com</li>
        <div id="divnoire"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40406.95430349443!2d1.5710286544264254!3d50.73042695901836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c40b157a363%3A0x40af13e8163fb30!2s62200+Boulogne-sur-Mer!5e0!3m2!1sfr!2sfr!4v1489154671671" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div id="sn">
          <a href="https://www.facebook.com/christopher.dachicourt/" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/ChrisSimplon2/" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/christopher-dachicourt-144882110/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
          <a href="https://github.com/Christopher62/" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="text-center" id="footer">
          <footer>
            <p>&copy Christopher Dachicourt - 2017 - <a id="a_mentions" href="page/mentions.php">Mentions Légales</a></p>
            <p id="ps">Post-scriptum : Vous pouvez retourner en haut de page via le bouton fixé (flèche à droite)</p>
          </footer>
        </div>
      </div>
    </div>
    <script src="https://use.fontawesome.com/8d66db2fbe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
