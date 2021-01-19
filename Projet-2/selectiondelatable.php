<h4 class="text-info">La table de <?php echo $_POST['multiple'] ?>:</h4>
<?php
if(isset($_POST['multiple'])){
    $multiple = $_POST['multiple'];
    for ($i = 1; $i < 11; $i++) {
        echo '<ul>
                <li> ' . $i * $multiple . '</li>
             </ul>';
    }
}
?>
<a href="index.php" class="btn btn-outline-warning">Retour</a>
