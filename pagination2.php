<?php
function pagination($page,$tab){
            $NbrLigne = 0;
            if (count($tab) != 0) 
            { $k = ($page-1)*100; // premier indice du tableau a afficher
                        ?>
                            <table border="1">
                            <tbody>
                            <?php 
                            for($i=$k;$i<$k+100;$i+=10)
                                {
                               echo"<tr>";
                                for($j=$i;$j<$i+10;$j++)
                                { // -------------------------
                                        // DONNÉES À AFFICHER dans la cellule
                                       if(array_key_exists($j, $tab))
                                        echo "<td>$tab[$j]</td>";
                                        else echo "<td>&nbsp;</td>";
                                        // -------------------------
                                }
                               echo"</tr>";} ?> 
                            </tbody>
                            </table>
                        <?php } else { ?>
                pas de donnée à afficher
            <?php
            }   
        }
?> 
