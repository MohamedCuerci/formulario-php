<?php

namespace App\db;

use \PDO;
use PDOException;

class Database{

    /**
     * Define o host do banco de dados
     * @var string
     */
    const HOST = 'localhost';

    /**
     * nome do banco de dados
     * @var string
     */
    const NAME = 'Mohamed_Cuerci;';

    /**
     * Usuario do banco
     * @var string
     */
    const USER = 'root';

    /**
     * Senha de acesso ao db
     * @var string
     */
    const PASS = '';


    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instancia de conexao com o banco de dados
     * @var PDO
     */
    private $connection;


    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * metodo resposnsavel por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.':dbname='.self::NAME, self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException){
            die('ERROR: deu algum erro ai mano kkkk');
        }
    }
}