<h1>PROCESSA CONTACTES</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Cognom 1</th>
        <th>Cognom 2</th>
        <th>Telèfon</th>
    </tr>
<?php
    $fitxer = file('contactes31.txt');
    
    foreach ($fitxer as $linea){ //foreach itera la array y inserta el valor actual en el siguiente arg
        $camps = explode(', ', $linea); 
        $lineaProcesada .= implode('#',$camps);
        file_put_contents('contactes31b.txt',$lineaProcesada);
        echo '<tr>';
        foreach ($camps as $camp) {
                        echo '<td>',$camp,'</td>';
        }
        echo '</tr>';
    }
?>
</table>