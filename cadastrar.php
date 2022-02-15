<?php

require __DIR__.'/vendor/autoload.php';

#usado pra debbug, pra confirmar se os dados do post estao funcionando
#print_r($_POST);

use \App\Entity\Vaga;



#verificar 
if(isset($_POST['titulo'], $_POST['descricao'])){
    $obVaga = new Vaga;
    $obVaga->titulo = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo = $_POST['ativo'];
    $obVaga->Cadastrar();
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';