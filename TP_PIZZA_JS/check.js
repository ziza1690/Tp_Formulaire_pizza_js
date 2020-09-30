// check.js

// Event 'click' sur le bouton
document.getElementById("bt-check").onclick = check;


//------------------------------------------------
// function check()
//------------------------------------------------
function check(){

// Au moindre souci, ça passe à 'false'
let validationFinale = true;

// Nettoyage des champs
document.getElementById("err-user").innerHTML = "";
document.getElementById("err-pass").innerHTML = "";
document.getElementById("err-size").innerHTML = "";
document.getElementById("err-topping").innerHTML = "";
document.getElementById("err-payment").innerHTML = "";

//-------------------------
// valid user
if(document.getElementById("user").value.length < 10 || document.getElementById("user").value.length > 20){
	document.getElementById("err-user").innerHTML = "Min: 10 - Max: 20 !";
	validationFinale = false;
}

//-------------------------
// valid pass
if(document.getElementById("pass").value.length < 5 || document.getElementById("pass").value.length > 10){
	document.getElementById("err-pass").innerHTML = "Entre 5 et 10 caractères !";
	validationFinale = false;
}

//-------------------------
// valid size
var size = document.getElementsByName("size");
var tailleOK = false;
for(let i = 0; i < size.length; i++){
	if(size[i].checked == true) tailleOK = true;
}

if(!tailleOK){
	document.getElementById("err-size").innerHTML = "SVP saisissez une taille !";
	validationFinale = false;
}

//-------------------------
// valid toppings
var toppings = document.getElementsByName("topping[]");
var toppingCount = 0;
for(let i = 0; i < toppings.length; i++){
	if(toppings[i].checked == true) ++toppingCount;
}

if(toppingCount < 3){
	document.getElementById("err-topping").innerHTML = "SVP au moins 3 ingrédients !";
	validationFinale = false;
}

//-------------------------
// valid payment
// En 2 instructions
var laListe = document.getElementById("payment").options;
var optionSelectionnee = document.getElementById("payment").selectedIndex;
var optionPaiement = laListe[optionSelectionnee].value;

// En 1 instruction
//var optionPaiement = document.getElementById("payment").options[document.getElementById("payment").selectedIndex].value;

if(optionPaiement == -1){
	document.getElementById("err-payment").innerHTML = "SVP saisissez une moyen de paiement !";
	validationFinale = false;
}

// validation finale
if(validationFinale) document.getElementById("zePizzaForm").submit();
	
} // FIN function check();

