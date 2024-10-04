<h1>INTRODUEIX DADES</h1>
<form method="post" action="ex32.php">
    <textarea name="comentari"></textarea>
    <label for="separador">Separador:</label>
    <input type="text" name="separador">
    <input type="submit">

    <?php
    $comentari = $_POST["comentari"];
    $separador = $_POST["separador"];

    $fitxer = fopen('comentaris.txt', "a");
    
    //foreach ($fitxer as $linea){ 
        $paraules = explode(' ', $comentari); 
        $lineaProcesada .= implode($separador,$paraules);
        
    //}
    $lineaProcesada .= "\n";
    fwrite($fitxer,$lineaProcesada);
?>
</form>