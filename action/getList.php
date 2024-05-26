<?php
   
   class getList {
      
      function MasterLoadList($conn, $table) {
         $sqlforselect = "select * from " . $table;
         return $result = $conn->query($sqlforselect);
      }
      
      function DropdownList($conn, $table, $field, $fielddata) {
         $sqlforselect = "select * from " . $table . " where " . $field . " = '$fielddata'";
//        echo $sqlforselect;
         return $result = $conn->query($sqlforselect);
      }
      
      function DropdownDistList($conn, $table, $fieldname) {
         $sqlforselect = "SELECT " . $fieldname . " FROM " . $table . " WHERE editable = 1 GROUP BY " . $fieldname ;
        // echo $sqlforselect;
         return $result = $conn->query($sqlforselect);
      }
      
   }
