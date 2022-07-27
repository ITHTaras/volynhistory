<?php
    

   
    require_once("connect.php");
    function getArts ($limit, $alias){
        
        global $mysqli;
        $mysqli = new mysqli("localhost", 
      "root", "", "vh");
        if($alias)
            $where = "WHERE `alias` = '$alias'";
        $result = $mysqli->query("SELECT * FROM `arts` $where ORDER BY `id` 
        DESC LIMIT $limit");
        $mysqli->close ();
        if(!$alias)
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