
<?php //Répéter 5 cinq fois cette formule
//Recup de l'entrée du joueur
if(isset($_POST['answerInput1'])){
    $answerInput = $_POST['answerInput1'];
}
//Récup de la reponse input type hiden
if(isset($_POST['resultat1'])){
    $resultat = $_POST['resultat1'];
}

//Condition du message si bonne ou mauvaise réponse
if($answerInput == $resultat){
    echo "<p>Bonne réponse! Le résultat était bien $resultat pour le premier calcul!</p>";
}else{
    echo "<p>Mauvaise réponse! Dommage, c'était $resultat pour le premier calcul!</p>";
}
?>


<?php
//Recup de l'entrée du joueur
if(isset($_POST['answerInput2'])){
    $answerInput = $_POST['answerInput2'];
}
//Récup de la reponse input type hiden
if(isset($_POST['resultat2'])){
    $resultat = $_POST['resultat2'];
}

//Condition du message si bonne ou mauvaise réponse
if($answerInput == $resultat){
    echo "<p>Bonne réponse! Le résultat était bien $resultat pour le deuxième calcul!</p>";
}else{
    echo "<p>Mauvaise réponse! Dommage, c'était $resultat pour le deuxième calcul!</p>";
}
?>

<?php
//Recup de l'entrée du joueur
if(isset($_POST['answerInput3'])){
    $answerInput = $_POST['answerInput3'];
}
//Récup de la reponse input type hiden
if(isset($_POST['resultat3'])){
    $resultat = $_POST['resultat3'];
}

//Condition du message si bonne ou mauvaise réponse
if($answerInput == $resultat){
    echo "<p>Bonne réponse! Le résultat était bien $resultat pour le troisième calcul!</p>";
}else{
    echo "<p>Mauvaise réponse! Dommage, c'était $resultat pour le troisième calcul!</p>";
}
?>

<?php
//Recup de l'entrée du joueur
if(isset($_POST['answerInput4'])){
    $answerInput = $_POST['answerInput4'];
}
//Récup de la reponse input type hiden
if(isset($_POST['resultat4'])){
    $resultat = $_POST['resultat4'];
}

//Condition du message si bonne ou mauvaise réponse
if($answerInput == $resultat){
    echo "<p>Bonne réponse! Le résultat était bien $resultat pour le quatrième calcul!</p>";
}else{
    echo "<p>Mauvaise réponse! Dommage, c'était $resultat pour le quatrième calcul!</p>";
}
?>

<?php
//Recup de l'entrée du joueur
if(isset($_POST['answerInput5'])){
    $answerInput = $_POST['answerInput5'];
}
//Récup de la reponse input type hiden
if(isset($_POST['resultat5'])){
    $resultat = $_POST['resultat5'];
}

//Condition du message si bonne ou mauvaise réponse
if($answerInput == $resultat){
    echo "<p>Bonne réponse! Le résultat était bien $resultat pour le cinquième calcul!</p>";
}else{
    echo "<p>Mauvaise réponse! Dommage, c'était $resultat pour le cinquième calcul!</p>";
}
?>
<hr>
<a href="index.php" class="btn">Retour</a>
