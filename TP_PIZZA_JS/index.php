<!doctype html>
<html>
<head>
<title>Formulaire commande pizza</title>
<link rel="stylesheet" href="styles.css" />
<meta charset="UTF-8"/>
</head>
<body>
<div>


<h1>Formulaire de commande de Pizza</h1>
<form id="zePizzaForm" action="process.php" method="POST">

<!-- SET IDENTIFICATION -->
<fieldset>
<legend>IDENTIFICATION</legend>

<!-- Champ utilisateur -->
<div>
<p>Utilisateur</p>
<p><input id="user" type="text" name="user" placeholder="Utilisateur SVP" /></p>
<p id="err-user" class="error"></p>
</div>

<!-- Champ mot de passe -->
<div>
<p>Mot de passe</p>
<p><input id="pass" type="password" name="pass"  /></p>
<p id="err-pass" class="error"></p>
</div>

</fieldset>

<!-------------------------------------------------------->

<!-- SET COMMANDE -->
<fieldset>
<legend>COMMANDE</legend>

<!-- Boutons radio -->
<div>
<p>Taille</p>
<p>
<input id="small" type="radio" name="size" value="small" />
<label for="small">S</label>

<input id="medium" type="radio" name="size" value="medium" />
<label for="medium">M</label>

<input id="big" type="radio" name="size" value="big" />
<label for="big">L</label>

<input id="xbig" type="radio" name="size" value="big" />
<label for="xbig">XXL</label>
</p>
<p id="err-size" class="error"></p>
</div>

<!-- Check box Ingrédient -->
<div>
<p>Ingrédients</p>
<p>
<input id="tomate" type="checkbox" name="topping[]" value="tomate" checked />
<label for="tomate">Tomate</label>

<input id="oeuf" type="checkbox" name="topping[]" value="oeuf" />
<label for="oeuf">Oeuf</label>

<input id="mozarella" type="checkbox" name="topping[]" value="mozarella" />
<label for="mozarella">Mozarella</label>

<input id="jambon" type="checkbox" name="topping[]" value="jambon" />
<label for="jambon">Jambon</label>

</p>
<p id="err-topping" class="error"></p>
</div>

<!-- Paiement -->
<div>
<p>Paiement</p>
<p>
<select id="payment" name="payment">
<option value="-1">SVP, choisissez un mode de paiement</option>
<option value="CB">Carte bancaire</option>
<option value="BITCOIN" >Bitcoin</option>
<option value="PAYPAL">Paypal</option>
<option value="CASH">Espèces</option>
</select>
</p>
<p id="err-payment" class="error"></p>
</div>

</fieldset>


<div>
<!--<p><input type="submit" value="Envoyer le commande" /></p>-->
<!--<p><input type="image" src="medias/BT_OK.png" /></p>-->
<p><input id="bt-check" type="button" value="Envoyer" /></p>
</div>

</form>

</div>

<script src="check.js"></script>
</body>
</html>