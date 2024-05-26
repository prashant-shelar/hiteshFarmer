<?php
include './dbconnect.php';
$sqlforselect = "select * from " . $_POST['table_name'] . " where " . $_POST['field'] . " = '" . $_POST['sortvalue'] . "';" ;
$result = $conn->query($sqlforselect);
foreach ($result as $row) {
   ?>
   <option value="<?php echo $row[$_POST['field_id']] ?>"><?php echo $row[$_POST['field_name']] ?></option>
<?php } 