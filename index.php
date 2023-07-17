<?php
    require_once __DIR__.'/Models/SistemiComunicazione.php';

    $comm = new SistemiComunicazione('Fabrizio','Antoneloo','Sakuto','ciao Antonello');
    var_dump($comm);

?>