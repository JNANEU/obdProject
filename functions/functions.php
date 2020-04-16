<?php
    require_once "connect.php";

    function getNews($limit){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $limit");
        closeDB();
        return resultToArray($result);
    }

    function resultToArray($result){
        $array = array();
        while(($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
?>