// J'appelle mon formumlaire ici par cette synthaxe -->
$(document).ready(function() {
// Je selectionne le bouton
$("#btn").click(function(){
// On crée une variable par default
valid  = true;
// <!-- la condition pour le formulaire à traiter -->
if($("#nom").val() ==""){
// <!-- on traite la couleur du formulaire -->
$("#nom").css("border-color","#FF0000");
$(".hot2").show();
$(".error-1").show().text("Ce champ est requis!");
$(".error-1").css("color","#FF0000");
// $(".error").show();
$(".hot1").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
					
valid = false;
}
	
else if (!$("#nom").val().match(/^[a-zA-Z\d\s]+$/)) {
// <!-- on traite la couleur du formulaire -->
$("#nom").css("border-color","#FF0000");
$(".hot2").show();
$(".error-1").show().text("Le format du nom n'est pas autorisé!");
$(".error-1").css("color","#FF0000");
$(".hot1").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
valid = false;
}
				
else{
// <!-- on traite la couleur du formulaire -->
$("#nom").css("border-color","#09c372");
$(".hot1").show();
$(".error-1").hide().text("");
$(".hot2").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
valid = true;
}
				
// <!-- LE CHAMP DE L"ADRESSE ELECTRONIQUE -->
// <!-- LE CHAMP DE L"ADRESSE ELECTRONIQUE -->
// <!-- LE CHAMP DE L"ADRESSE ELECTRONIQUE -->
if($("#email").val() ==""){
// <!-- on traite la couleur du formulaire -->
$("#email").css("border-color","#FF0000");
$(".error-2").show().text("Ce champ est requis!");
$(".hot4").show();
$(".hot3").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
					
valid = false;
}
				
else if(!$("#email").val().match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)){
// <!-- on traite la couleur du formulaire -->
$("#email").css("border-color","#FF0000");
$(".error-2").show().text("Votre email n'est pas valide!");
$(".hot4").show();
$(".hot3").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
					
valid = false;
}

else {
// <!-- on traite la couleur du formulaire -->
$("#email").css("border-color","#09c372");
$(".hot3").show();
$(".hot4").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
return valid;
}
			
// <!-- LE CHAMP DU COMENENTAIRE -->
// <!-- LE CHAMP DU COMENENTAIRE -->
// <!-- LE CHAMP DU COMENENTAIRE -->
if($("#comment").val() ==""){
// <!-- on traite la couleur du formulaire -->
$("#comment").css("border-color","#FF0000");
$(".error-3").show().text("Ce champ est requis!");
$(".hot6").show();
$(".hot5").hide();
// $(".error").show().text("Ce champ est requis");
// <!-- $(".hot5").hide(); -->
// <!-- Je traite l'apparition des check ou exclamation -->
valid = false;
}
else if ($("#comment").val() !==""){
// <!-- on traite la couleur du formulaire -->
$("#comment").css("border-color","#09c372");
$(".error-3").hide().text("Ce champ est requis!");
$(".hot5").show();
$(".hot6").hide();
// <!-- Je traite l'apparition des check ou exclamation -->
		return valid;
		}
	
	return valid;
	});
});

// JE GERE LE KEYUP POUR LE NOM
// JE GERE LE KEYUP POUR LE NOM
$(document).ready(function(){
  // Pour le champ nom
  // Pour le champ nom
  $("#nom").keyup(function(){
	  
	  if($("#nom").val() ==""){
// on traite la couleur du formulaire 
		$("#nom").css("border-color","#FF0000");
		$(".hot2").show();
		$(".error-1").show().text("Ce champ est requis!");
		$(".error-1").css("color","#FF0000");
		$(".error-1").show();
		$(".hot1").hide();
}else{
    $(".error-1").hide().text("Ce champ est requis!");
    $(".hot2").hide();
	$("#nom").css("border-color","black");
}	

	// $(".hot4").hide();
	// $("#email").css("border-color","black");
	
	// $(".hot6").hide();
	// $("#comment").css("border-color","black");
	
	// La fermeture du keyup
  });
  

 // La fermeture du document ready
});


// JE GERE LE KEYUP POUR L'EMAIL
// JE GERE LE KEYUP POUR L'EMAIL
$(document).ready(function(){
  // Pour le champ nom
  // Pour le champ nom
  $("#email").keyup(function(){
	  
	  if($("#email").val() ==""){
// on traite la couleur du formulaire 
		$("#email").css("border-color","#FF0000");
		$(".hot4").show();
		$(".error-2").show().text("Ce champ est requis!");
		$(".error-2").css("color","#FF0000");
		$(".error-2").show();
		$(".hot3").hide();
}else{
    $(".error-2").hide().text("Ce champ est requis!");
    $(".hot4").hide();
	$("#email").css("border-color","black");
}	
	// La fermeture du keyup
  });
 // La fermeture du document ready
});


// JE GERE LE KEYUP POUR LE COMMENT
// JE GERE LE KEYUP POUR LE COMMENT
$(document).ready(function(){
  // Pour le champ nom
  // Pour le champ nom
  $("#comment").keyup(function(){
	  
	  if($("#comment").val() ==""){
// on traite la couleur du formulaire 
		$("#comment").css("border-color","#FF0000");
		$(".hot6").show();
		$(".error-3").show().text("Ce champ est requis!");
		$(".error-3").css("color","#FF0000");
		$(".error-3").show();
		$(".hot5").hide();
}else{
    $(".error-3").hide().text("Ce champ est requis!");
    $(".hot6").hide();
	$("#comment").css("border-color","black");
}	
	// La fermeture du keyup
  });
 // La fermeture du document ready
});