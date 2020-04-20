<?php
    require_once "connect.php";

    function getAdvert(){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `adverts` ORDER BY RAND() LIMIT 3");
        closeDB();
        return resultToArray($result);
    }


    function getNews($limit, $id = 0){
        global $mysqli;
        connectDB();
        if($id != 0){
            $where = "WHERE `id` = ".$id;
            $result = $mysqli->query("SELECT * FROM `articles` $where ORDER BY `id`  DESC LIMIT $limit");
        }
        if($id == 0){
            $result = $mysqli->query("SELECT * FROM `articles` ORDER BY `id`  DESC LIMIT $limit");
        }
        closeDB();
        if(!$id)
            return resultToArray($result);
        else 
            return $result->fetch_assoc();
    }

    function getUserList(){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `users` ORDER BY  `login`");
        return resultToArray($result);
    }

    function resultToArray($result){
        $array = array();
        while(($row = $result->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }
?>