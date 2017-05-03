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
$(function(){
  $(".quit, #PERSO, #HTMLCSS, #JS, #BootStrap, #PHPSQL").hide();
});
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
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#TOUT").fadeOut();
    $(this).fadeOut();
  });
});
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
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#PRO").fadeOut();
    $(this).fadeOut();
  });
});
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
$(function(){
  $(".quit").click(function(){
    $("#Affichage").fadeIn();
    $("#PERSO").fadeOut();
    $(this).hide();
  });
});
$(function(){
    $("#imgHTML").click(function(){
      $("#PERSO").hide();
      $("#HTMLCSS").fadeIn();
      $(".quit").hide();
      $(".quit2").show();
    });
});
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#HTMLCSS").fadeOut();
    $(this).hide();
  });
});
$(function(){
    $("#imgJS").click(function(){
      $("#PERSO").hide();
      $("#JS").fadeIn();
      $(".quit").hide();
      $(".quit2").show();
    });
});
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#JS").fadeOut();
    $(this).hide();
  });
});
$(function(){
    $("#imgBS").click(function(){
      $("#PERSO").hide();
      $("#BootStrap").fadeIn();
      $(".quit").hide();
      $(".quit2").show();
    });
});
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#BootStrap").fadeOut();
    $(this).hide();
  });
});
$(function(){
    $("#imgPHPSQL").click(function(){
      $("#PERSO").hide();
      $("#PHPSQL").fadeIn();
      $(".quit").hide();
      $(".quit2").show();
    });
});
$(function(){
  $(".quit2").click(function(){
    $("#PERSO").fadeIn();
    $(".quit").show();
    $("#PHPSQL").fadeOut();
    $(this).hide();
  });
});
    function couleur(champ, erreur){
      if(erreur)
        champ.style.borderColor = "red";
      else
        champ.style.borderColor = "green";
    }
    function verifName(champ){
      var regex = /^[a-zA-Z]+[a-z]{1,}$/;
      if(!regex.test(champ.value) || champ.value == ""){
        alert('Le prénom ne doit pas comporter de chiffre ! / Merci de compléter ce champ');
        couleur(champ, true);
        return false;
      }else{
        couleur(champ, false);
        return true;
      }
    }
    function verifSubject(champ){
      var regex2 = /^[a-zA-Z]$/;
      if(champ.value == ""){
        alert("Veuillez saisair le sujet de votre message !");
        couleur(champ, true);
        return false;
      }else{
        couleur(champ, false);
        return true;
      }
    }
    function verifMail(champ){
      var regex3 = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,3}$/;
      if(!regex3.test(champ.value)){
        alert("Veuillez saisir un e-mail valide !");
        couleur(champ, true);
        return false;
      }else{
        couleur(champ, false);
        return true;
      }
    }

    function verifForm(f){
      var nameOk = verifName(f.name);
      var subjectOk = verifSubject(f.subject);
      var mailOk = verifMail(f.email);
      if(nameOk && subjectOk && mailOk){
        alert("Votre message a bien été envoyé ! / Rappel : Formulaire non fonctionnel !");
        return true;
      }else{
        alert("Veuillez vérfier les champs de saisies en bordure rouge !");
        return false;
      }
    }
