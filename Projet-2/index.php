<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Projet 2</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
            <?php
                echo'<h1>Salut à toi l\'utilisateur</h1>'
            ?>
            <hr>
<!--La table de 3-->
            <a href="tablede3.php" class="btn btn-primary btn-sm btn-block"> Afficher la table de 3</a>
            <hr>
<!--Selection de la table-->            
            <h2 class="text-primary">Sélection de la table</h2>
                <form method="post" action="selectiondelatable.php">

                    <div class="form-group">
                        <label for="multiple">Choix de la table</label>
                        <select class="form-control" id="multiple" name="multiple">
                            <option value="1" id="Value">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-success">Résultat</button>
                </form>
            <hr>
<!--Les tables-->
            <div>
                <h2 class="text-primary">Choix d'une (ou de plusieurs) table(s):</h2>
                    <form action="checkbox.php" method="post">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="4">
                            <label class="form-check-label" for="inlineRadio1">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="5">
                            <label class="form-check-label" for="inlineRadio2">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="6">
                            <label class="form-check-label" for="inlineRadio3">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio1" value="7">
                            <label class="form-check-label" for="inlineRadio1">7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio2" value="8">
                            <label class="form-check-label" for="inlineRadio2">8</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="9">
                            <label class="form-check-label" for="inlineRadio3">9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineCheckbox[]" id="inlineRadio3" value="10">
                            <label class="form-check-label" for="inlineRadio3">10</label>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Voir les résultats</button>
                </form>
            </div>
            <hr>
<!--Questions-->
            <h2 class="text-primary">Révision</h2>
            <form action="aleatoire.php" method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label for="reponse">Les calculs sont </label>
                            <br>
                            <?php
                            
                            $nombre = array(1,2,3,4,5,6,7,8,9,10);
                            $multiple = array(1,2,3,4,5,6,7,8,9,10);
                            $tableaudesresultats= array();
                            
                            //Calcul n°1
                            $alea_nbr = array_rand($nombre);
                            $alea_multi = array_rand($multiple);                                                      
                           
                            $resultat = $alea_nbr * $alea_multi;
                            echo '</br>' . $alea_nbr . ' X ' . $alea_multi. ' = </br>';
                            array_push($tableaudesresultats,$resultat);
                            
                            ?>
                            <input type="hidden" name="resultat1" id="resultat1" value="<?= $resultat ?>">
                            <br>
                    </div>
                                <div class="form-group">
                                    <label for="answerInput">Votre réponse</label>
                                    <input type="text" class="form-control" name="answerInput1" id="answerInput1"/>
                                </div>
                             <br>
                    <div class="form-group">
                            <?php //Calcul n°2
                            $alea_nbr = array_rand($nombre);
                            $alea_multi = array_rand($multiple);
                            
                            $resultat = $alea_nbr * $alea_multi;
                            echo $alea_nbr . ' X ' . $alea_multi. ' = </br>';
                            array_push($tableaudesresultats,$resultat); 
                            ?>

                            <input type="hidden" name="resultat2" id="resultat2" value="<?= $resultat ?>">
                            <br>
                    </div>
                                <div class="form-group">
                                    <label for="answerInput">Votre réponse</label>
                                    <input type="text" class="form-control" name="answerInput2" id="answerInput2"/>
                                </div>
                            <br>
                    <div class="form-group">       
                            <?php //Calcul n°3
                            $alea_nbr = array_rand($nombre);
                            $alea_multi = array_rand($multiple);
                            
                            $resultat = $alea_nbr * $alea_multi;
                            echo $alea_nbr . ' X ' . $alea_multi. ' = </br>';
                            array_push($tableaudesresultats,$resultat); 
                            ?>

                            <input type="hidden" name="resultat3" id="resultat3" value="<?= $resultat ?>">
                            <br>
                    </div>
                                <div class="form-group">
                                    <label for="answerInput">Votre réponse</label>
                                    <input type="text" class="form-control" name="answerInput3" id="answerInput3"/>
                                </div>
                            <br>
                     <div class="form-group">
                            <?php //Calcul n°4
                            $alea_nbr = array_rand($nombre);
                            $alea_multi = array_rand($multiple);
                            
                            $resultat = $alea_nbr * $alea_multi;
                            echo $alea_nbr . ' X ' . $alea_multi. ' = </br>';
                            array_push($tableaudesresultats,$resultat); 
                            ?>

                            <input type="hidden" name="resultat4" id="resultat4" value="<?= $resultat ?>">
                            <br>
                      </div>
                                <div class="form-group">
                                    <label for="answerInput">Votre réponse</label>
                                    <input type="text" class="form-control" name="answerInput4" id="answerInput4"/>
                                </div>
                            <br>
                        <div class="form-group">
                            <?php //Calcul n°5
                            $alea_nbr = array_rand($nombre);
                            $alea_multi = array_rand($multiple);
                            
                            $resultat = $alea_nbr * $alea_multi;
                            echo $alea_nbr . ' X ' . $alea_multi. ' = </br>';
                            array_push($tableaudesresultats,$resultat); 
                            
                            ?>

                            <input type="hidden" name="resultat5" id="resultat5" value="<?= $resultat ?>">
                            <br>
                        </div>
                                <div class="form-group">
                                    <label for="answerInput">Votre réponse</label>
                                    <input type="text" class="form-control" name="answerInput5" id="answerInput5"/>
                                </div>
                                <br> 
                                <?php // print_r($tableaudesresultats);?>
                                <br> 
                                <button type="submit" name="btn-result" class="btn btn-outline-success">Valider</button>
                                                
                </div>
            </form> 
        </div>
    </div>
</div>
</body>
</html>