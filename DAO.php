<?php
require_once 'login.php';

class DAO
{
    private $cadenaconexio;
    private $connection;

    function __construct()
    {
        try{
            $this->cadenaconexio = "mysql:host=".servername.
            // ";port=".puerto.
            ";dbname=".dbname;
            //"charset=".charset;
            $this->connection=new PDO($this->cadenaconexio, username, password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->exec('SET NAMES "utf8"');
        } catch (PDOException $e){
            echo 'Unable to connect to the database server:';
            echo $e->getMessage();
            exit();
        }
    }


    function getOne($sql)
    {
        $data = array();
        $result = $this->connection->query($sql);
 
        $error = $this->connection->errorInfo();
        if ($error[0] === "00000") {
            $result->execute();
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    array_push($data, $row);
                }
            }
        } else {
            throw new Exception($error[2]);
        }
        return $data;
    }

    function insert($sql, $valores){
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($valores);
     }


    function deleteOne($sql){
        $this->connection->exec($sql);
    }

function close()
    {
        $this->connection = null;
    }

}

?>