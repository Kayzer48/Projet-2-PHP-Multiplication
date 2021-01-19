
<div class="container">
        <h3 class="text-success">la table de 3:</h3>
        <?php
        $multiplicateur = 3;
        for($i = 1; $i < 11; $i++){
            echo '<ul>
                <li> '. $i * $multiplicateur .'</li>
             </ul>';
        }
        ?>
    <a href="index.php" class="btn btn-outline-danger">Retour</a>
</div>