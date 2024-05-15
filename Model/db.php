<?php

    function Conexion(){
        $host = "localhost";
        $user = "root";
        $pass = "";

        $db = "dbdtl";

        $connect = mysqli_connect($host,$user,$pass);

        mysqli_select_db($connect, $db);

        return $connect;
    };
    

?>