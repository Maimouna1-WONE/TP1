<!DOCTYPE html>
<html lang="en">
    <head><title>Exercice 3</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    </head>
    <body>
        <h1>Le nombre de m ou M dans un mot</h1>
        <h2>Donnez les mots sous la forme * * * * * </h2>
        <form method="post" action="exo3.php">
        Delimiteur: <input type="text" name="b"/> <br/>
          Donner les mots separes par le delimiteur: <input type="text" name="a"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>


     <?php
     if (isset($_POST['valider'])) {
        $chaine=$_POST['a'];
        $delimiter=$_POST['b'];
        $tab=explode($delimiter,$chaine);
            for($i=0;$i<count($tab);$i++){
                if(strlen($tab[$i])<=20){
                    $trouve_moi='m';$trouve_moi='M';
                    $position = stripos($tab[$i], $trouve_moi);
                //strpos(...); ne gere pas  la casse
                    if ($position === false) {
                    echo $trouve_moi.' n\'a pas été trouvé dans la chaine "'.$tab[$i].'"<br/>';
                    } else
                    {
                    echo $trouve_moi.' a été trouvée dans la chaine "',$tab[$i],'" à la position "',$position. '"<br/>';
                    }
                }
                else{ echo $tab[$i].' nest pas bon parce que la chaine est superieure a 20 caracteres<br/>';}


            }




     }
?>
</body>
</html> 
