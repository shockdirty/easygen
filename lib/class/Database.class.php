<?php

/**
 * Inicialização do banco de dados
 *
 * @category    Database
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Classe de conexão ao banco de dados usando PDO no padrão Singleton.
 * Modo de Usar:
 * require_once './Database.class.php';
 * use Extends para aderir os metodos da classe
 * $slq = $this->db->query(database_query)
 */

   class Database
    {   
        protected $db;
        function __construct(){
            try 
            {
                $this->db = new PDO('mysql:host=easybox_sys.mysql.dbaas.com.br;dbname=easybox_sys;charset=utf8', 'easybox_sys', 'loca1020');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch(PDOException $e)
            {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

    }
