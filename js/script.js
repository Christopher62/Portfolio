// FR : retour en haut de page / back to top
$(window).scroll(function() {
  if ($(this).scrollTop() >= 100) {
    $('#toTop').fadeIn(200);
  } else {
    $('#toTop').fadeOut(200);
  }
});
$('#toTop').click(function() {
  $('body,html').animate({
    scrollTop : 0
  }, 500);
});
// FR : div cachées / EN : hidden div
$(function(){
  $(".quit, #PERSO, #HTMLCSS, #JS, #BootStrap, #PHPSQL").hide();
});
// FR : afficher div "TOUT" / EN : show "ALL" div
$(function(){
  $("#TOUT").hide();
  $("#toutbtn").click(function(){
    $("#Affichage").fadeOut();
    $("#PRO").fadeOut();
    $("#PERSO").fadeOut();
    $("#TOUT").fadeIn();
    $(".quit").show();
  });
});
// FR : cacher div "TOUT" / EN : hide "ALL" div
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#TOUT").fadeOut();
    $(this).fadeOut();
  });
});
// FR : afficher div "PRO" / EN : show "PRO" div
$(function(){
  $("#PRO").hide();
  $("#probtn").click(function(){
    $("#Affichage").fadeOut();
    $("#TOUT").fadeOut();
    $("#PERSO").fadeOut();
    $("#PRO").fadeIn();
    $(".quit").show();
  });
});
// FR : cacher div "PRO" / EN : hide "PRO" div
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#PRO").fadeOut();
    $(this).fadeOut();
  });
});
// FR : afficher div "PERSO" / EN : show "PERSO" div
$(function(){
  $("#PERSO").hide();
  $("#persobtn").click(function(){
    $("#Affichage").fadeOut();
    $("#TOUT").fadeOut();
    $("#PRO").fadeOut();
    $("#PERSO").fadeIn();
    $(".quit").show();
  });
});
// FR : cacher div "PERSO" / EN : hide "PERSO" div
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#PERSO").fadeOut();
    $(this).hide();
  });
});
// FR : afficher div "HTMLCSS" & cacher div "PERSO" / EN : show "HTMLCSS" div & hide "PERSO" div
$(function(){
  $("#imgHTML").click(function(){
    $("#PERSO").hide();
    $("#HTMLCSS").fadeIn();
    $(".quit").hide();
    $(".quit2").show();
  });
});
// FR : cacher div "HTMLCSS" & afficher div "PERSO" / EN : hide "HTMLCSS" div & show "PERSO" div
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#HTMLCSS").fadeOut();
    $(this).hide();
  });
});
// FR : afficher div "JS" & cacher div "PERSO" / EN : show "JS" div & hide "PERSO" div
$(function(){
  $("#imgJS").click(function(){
    $("#PERSO").hide();
    $("#JS").fadeIn();
    $(".quit").hide();
    $(".quit2").show();
  });
});
// FR : cacher div "JS" & afficher div "PERSO" / EN : hide "JS" div & show "PERSO" div
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#JS").fadeOut();
    $(this).hide();
  });
});
// FR : afficher div "BootStrap" & cacher div "PERSO" / EN : show "BootStrap" div & hide "PERSO" div
$(function(){
  $("#imgBS").click(function(){
    $("#PERSO").hide();
    $("#BootStrap").fadeIn();
    $(".quit").hide();
    $(".quit2").show();
  });
});
// FR : cacher div "BootStrap" & afficher div "PERSO" / EN : hide "BootStrap" div & show "PERSO" div
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#BootStrap").fadeOut();
    $(this).hide();
  });
});
// FR : afficher div "PHPSQL" & cacher div "PERSO" / EN : show "PHPSQL" div & hide "PERSO" div
$(function(){
  $("#imgPHPSQL").click(function(){
    $("#PERSO").hide();
    $("#PHPSQL").fadeIn();
    $(".quit").hide();
    $(".quit2").show();
  });
});
// FR : cacher div "PHPSQL" & afficher div "PERSO" / EN : hide "PHPSQL" div & show "PERSO" div
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#PHPSQL").fadeOut();
    $(this).hide();
  });
});
// FR : traduction en anglais / EN : english translation
function EN(){
  document.getElementById("accueil").innerHTML = "home";
  document.getElementById("apropos").innerHTML = "about";
  document.getElementById("ENG").innerHTML = "EN (Page in English)";
  document.getElementById("FRA").innerHTML = "FR (Reload the page)";
  document.getElementById("p1").innerHTML = "Welcome to my portfolio, he was created during the training Simplon of Boulogne-Sur-Mer (promo #2).<br>I am a learner in Front-End development.<br>Good visit !";
  document.getElementById("toutbtn").innerHTML = "&nbsp;&nbsp;ALL&nbsp;"; // &nsbp; --> espace pour traduction / &nbsp; --> space for translation //
  document.getElementById('descr1').innerHTML = "Challenge in HTML & JS, Crea in BootStrap, Exo in PHP !";
  document.getElementById('descr2').innerHTML = "Project for Asso AEICW (Internship in company) ! Image(s) appear at the \"click\" & that redirects to the site to \"double-click\" !";
  document.getElementById('descr3').innerHTML = "Coming Soon ! In progress : showcase site for the bakery Déjeuner Minute...";
  document.getElementById('descr4').innerHTML = "Challenge & Exo in HTML / CSS !";
  document.getElementById('descr5').innerHTML = "Challenge & Exo in JavaScript !";
  document.getElementById('descr6').innerHTML = "Reprod, crea, challenge... in BootStrap !";
  document.getElementById('descr7').innerHTML = "Exo in PHP !";
  document.getElementById("title2").innerHTML = "About Me :";
  document.getElementById('pres').innerHTML = "Hello, I'm Christopher, I'm 21 years old and I live in Boulogne-Sur-Mer.<br>I followed a training (Oct 2016 - June 2017) in <a id='a_pres' href='http://simplon.co/' target='_blank'>Simplon.co</a> Boulogne-Sur-Mer => 6 months training in web development.<br>Skills assessment :";
  document.getElementById('sn').innerHTML = "On social networks :";
  document.getElementById("a_mentions").innerHTML = "Legal Notice";
  document.getElementById("ps").innerHTML = "You can back to top with fixed icon (arrow in right)";
}
