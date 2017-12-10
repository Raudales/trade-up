<?php
    function connect (){
        $path = "localhost";
        $user = "root";
        $db = "trade_up";
        $password = "";
        $mysql = new mysqli($path, $user, $password, $db);
        $mysql->query("SET NAMES 'utf8'");
        return $mysql;
    }
        
            