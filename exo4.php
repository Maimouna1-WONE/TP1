<!DOCTYPE html>
<html lang="en">
    <head><title>Exercice 4</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
    <body>
        <form method="post" action="exo4.php">
        Delimiteur: <input type="text" name="b"/> <br/>
            Entrez des phrases: <textarea type="text" name="a"></textarea> <br/>


            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
if (isset($_POST['valider'])) {
    $str=$_POST['a'];
    $delimiter=$_POST['b'];  
    $tab=explode($delimiter,$str);
    for ($i=0;$i<count($tab);$i++){
        echo $tab[$i].'</br>';
        if(preg_match("#^[A-Za-z,;'\"\\s]+[.?!]$#", $tab[$i])){
            if (strlen($tab[$i]<=200)){


//remplacer deux espaces par un espace dans une chaine
            preg_replace('/\s\s+/', ' ', $tab[$i]);


//espace en debut de chaine
            $tab[$i] = ltrim($tab[$i]);


   //espace en fin de chaine
            $tab[$i] = rtrim($tab[$i]);


            echo '</br> apres correction on a: '.$tab[$i].'<br/>' ;     
            }
        else echo 'Limite depassée';
        }
    else echo '<< '.$tab[$i].' >> nest pas une phrase</br>';
    }
}
?>
</body>
</html> 
