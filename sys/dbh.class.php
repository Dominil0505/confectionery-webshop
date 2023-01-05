<?php

class Dbh
{
    protected function connect()
    {
      $db_name = "webfejlesztes_beadando";
      $host = "localhost";
      $username = "root";
      $passwd = "";

        try {
            $dns = "mysql:host=".$host.";dbname=".$db_name.';charset=utf8';
            $PDO = new PDO($dns, $username, $passwd);
            $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $PDO;
        } catch (PDOException $e) {
            echo 'DB ERROR';
        }
    }
}
