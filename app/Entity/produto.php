<?php

namespace App\Entity;

class Vaga{

    /**
     * identificador unico do produto
     * @var integer
     */
    public $id;

    /**
     * Titulo do produto
     * @var string
     */
    public $titulo;

    /**
     * Descrição do produto
     * @var string
     */
    public $descricao;

    /**
     * Define se o produto esta disponivel ou não
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de publicação do produto
     * (mesmo sendo data vai chegar como uma string)
     * @var string
     */
    public $data;

    /**
     * Metodo responsavel por cadastrar um novo produto
     * @return boolean
     */
    public function Cadastrar(){
        //DEFINIR A DATA (formato americano)
        $this->data = date('Y-m-d H-i-s');

        //INSERIR NO BANCO DE DADOS
        $obDatabase = new Database('vagas')
        //ATRIBUIR O ID NA INSTANCIA

        //RETURN SUCESSO MLK 
    }
}