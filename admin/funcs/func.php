<?php
    

   
    require_once("connect.php");
    function getArts ($limit, $id){
        
        global $mysqli;
        $mysqli = new mysqli("localhost", 
      "root", "", "vh");
        $mysqli->query ("SET NAMES 'utf-8'");
        if($id)
            $where = "WHERE `id` = ".$id;
        $result = $mysqli->query("SELECT * FROM `arts` $where ORDER BY `id` 
        DESC LIMIT $limit");
        $mysqli->close ();
        if(!$id)
            return resultToArray ($result);
        else
            return $result->fetch_assoc();
      }
      
      function resultToArray($result) {
          $array = array();
          while(($row = $result->fetch_assoc()) != false)
                $array[] = $row;
        return $array;
        
      }
?>