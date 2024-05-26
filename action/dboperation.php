<?php

   function AddOperation($tablename, $obj, $conn) {
      $sqlcreeate = "INSERT INTO " . $tablename . " (";
      $valuearray = " VALUES ( ";
      $count = 1;
      foreach ($obj as $key => $value) {
         if ($key == "action") {
            
         } else {
            if ($count != 1) {
               $sqlcreeate .= ",";
               $valuearray .= ",";
            }
            $sqlcreeate .= $key;
            $valuearray .= "'$obj[$key]'";
            $count++;
         }
      }
      $sqlcreeate .= " )";
      $valuearray .= " ); ";
//      $sqlcreeate . $valuearray;
   // echo $sqlcreeate . $valuearray;
      return $conn->query($sqlcreeate . $valuearray);
   }

   function UpdateOperation($tablename, $obj, $conn) {
      $sqlcreate = "UPDATE " . $tablename . " SET ";
      $Whereclose = "";
      $count = 1;
      foreach ($obj as $key => $value) {
         if ($key == "action" || $count == 2) {
            if ($count == 2) {
               $Whereclose = "WHERE " . $key . " = " . $value . " ;";
            }
         } else {
            if ($count != 3) {
               $sqlcreate .= " , ";
            }
            $sqlcreate .= $key . " = '" . $value . "' ";
         }
         $count++;
      }
//      $sqlcreate . $Whereclose;
  //   $sqlcreate . $Whereclose;
      return $conn->query($sqlcreate . $Whereclose);
   }
 
   function GetAllRecord($tablename, $conn) {
      $sqlforselect = "select * from " . $tablename . " where is_active = 'Y'";
      return $result = $conn->query($sqlforselect);
   }

   function GetAllRecordBySql($sql, $conn) {
      return $result = $conn->query($sql);
   }

   function getsinglerecord($tableName, $id, $conn, $colname) {
      $sqlforsingledata = "select * from " . $tableName . " where  " . $colname . " = '" . $id . "'";
      $result = $conn->query($sqlforsingledata);
      return resultsetArray($result);
   }
   
   function getsinglerecordbysql($sql,$conn) {
       $sqlforsingledata = $sql;
       $result = $conn->query($sqlforsingledata);
       return resultsetArray($result);
   }

   function getrecord($tableName, $id, $conn, $colname) {
      $sqlforsingledata = "select * from " . $tableName . " where is_active = 'Y' and " . $colname . " = " . $id . ";";
//      echo $sqlforsingledata;
      return $result = $conn->query($sqlforsingledata);
   }

   function Dropdownloadbyidlist($table, $fieldname, $fieldvalue, $conn) {
      $sqlselectbyid = "select * from " . $table . " where is_active = 'Y' and " . $fieldname . " = " . $fieldvalue . "";
      $result = $conn->query($sqlselectbyid);
      return $result;
   }

   function DeleteOperation($tablename, $obj, $conn, $fieldname) {
      $sqldelete = "DELETE FROM " . $tablename . " where " . $fieldname . " = " . $obj . " ;";
//      echo $sqldelete;
      return $conn->query($sqldelete);
   }

   function DeleteSoftOperation($tablename, $obj, $conn, $fieldname) {
      $sqldelete = "update " . $tablename . " set is_active = 'N' where " . $fieldname . " = '" . $obj . "' ;";
      echo $sqldelete;
      return $conn->query($sqldelete);
   }

   function getautocompleterecord($tableName, $id, $conn, $colname) {
      $autoarray = array();
      $sqlforsingledata = "select * from " . $tableName . " where is_active = 'Y' and " . $colname . " LIKE '%" . $id . "%'";
      $result = $conn->query($sqlforsingledata);
      while ($row = $result->fetch_assoc()) {
         $data['id'] = $row['item_id'];
         $data['value'] = $row['item_name_short'];
         array_push($autoarray, $data);
      }
      return $autoarray;
   }

   function resultsetArray($resultset) {
      $array_result = [];
      while ($row = $resultset->fetch_assoc()) {
         while ($field = $resultset->fetch_field()) {
            $array_result[$field->name] = $row[$field->name];
         }
      }

      return $array_result;
   }

   function getlistrecord($tableName, $id, $conn, $colname) {
      $sqlforsingledata = "select * from " . $tableName . " where  " . $colname . " = '" . $id . "'";
      $result = $conn->query($sqlforsingledata);
      return resultsetList($result);
   }

   function resultsetList($resultset) {
      $autoarraylist = array();
      $keyArray = array();
      while ($fielddata = $resultset->fetch_field()) {
         array_push($keyArray, $fielddata->name);
      }
      while ($row = $resultset->fetch_assoc()) {
         $array_result = [];
         foreach ($keyArray as $keyv) {
            $array_result[$keyv] = $row[$keyv];
         }
         array_push($autoarraylist, $array_result);
      }
      return $autoarraylist;
   }

   function getRecordCount($conn, $tableName, $fieldname) {
      $result = $conn->query("SELECT COUNT(" . $fieldname . ") AS count FROM " . $tableName . " where is_active = 'Y' ");
      $row = mysqli_fetch_assoc($result);
      return $row['count'];
   }

   function getpage($conn, $tableSql, $start, $perPage) {
      $sqlforrecord = $tableSql . " limit " . $start . "," . $perPage;
//      echo $sqlforrecord;
      return $resultrecord = $conn->query($sqlforrecord);
   }

   function getArraysobj($arraylist) {
      $objArray = [];
      $finalarray = array();
      foreach ($arraylist as $single => $value) {
         foreach ($value as $datakey => $dataval) {
            $objArray[$datakey] = $dataval;
         }
         array_push($finalarray, $objArray);
      }
      return $finalarray;
   }
   
   function SendNotifactionToMobile($messageTitle,$messageDesc,$usertocken){
       // FCM API Url
       $url = 'https://fcm.googleapis.com/fcm/send';
       
       // Put your Server Response Key here
       $apiKey = "AAAAuDShYNw:APA91bF8jTbALsZwZmN3IZIdYz95gFVBzmMj4TpPikh8kMk7ocBwFcuJIQzJ9HqeL6uDNaXTQl1J1mwfmtq1pyl6azaJbbt6j9hiCx-RA8ddngdN6b9mEYzQbhTGh3GHNzgPmdj7_iet";
       
       // Compile headers in one variable
       $headers = array (
           'Authorization:key=' . $apiKey,
           'Content-Type:application/json'
       );
       
       // Add notification content to a variable for easy reference
       $notifData = [
           'title' => $messageTitle,
           'body' => $messageDesc
           
       ];
       
       // Create the api body
       $apiBody = [
           'notification' => $notifData,
           'data' => $notifData,
           'to' => $usertocken
       ];
       
       // Initialize curl with the prepared headers and body
       $ch = curl_init();
       curl_setopt ($ch, CURLOPT_URL, $url );
       curl_setopt ($ch, CURLOPT_POST, true );
       curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
       curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));
       
       // Execute call and save result
       $result = curl_exec ( $ch );
       
       // Close curl after call
       curl_close ( $ch );
   }

// function getpage($tableName,$conn,$pageno,$perpage,$filter){
    
    
    
// }
