<?php 

    include 'Classe/classe.php';

    $carro1 = new Modelos("MOBI", 2018, "Fiat");
    $carro2 = new Modelos("PEUGEOT 3008", 2022, "Peugeot");
    $carro3 = new Modelos("JEEP RENEGADE SÉRIE S", 2023, "Jeep");
    $carro4 = new Modelos("GOL", 2011, "Volkswagen" );

    echo "<h2>{$carro1->getNome()}</h2>
        <ol>
            <li>Ano: {$carro1->getAno()}</li>
            <li>Marca: {$carro1->getMarca()}</li>
           
        </ol>
        
        <h2>{$carro2->getNome()}</h2>
        <ul>
            <li>Ano: {$carro2->getAno()}</li>
            <li>Marca: {$carro2->getMarca()}</li>
            
        </ul>
        
        <h2>{$carro3->getNome()}</h2>
        <ol>
            <li>Ano: {$carro3->getAno()}</li>
            <li>Marca: {$carro3->getMarca()}</li>
        </ol>
        
        <h2>{$carro4->getNome()}</h2>
        <ul>
            <li>Ano: {$carro4->getAno()}</li>
            <li>Marca: {$carro4->getMarca()}</li>
            
        </ul>";

?>