<?php
   include './dbconnect.php';
   include './dboperation.php';
   include './getPermission.php';
   $fieldname = $_POST['field'];
   $primeryid = $_POST['field']; //"id";
//   $tableName = $_POST['tablename'];  //"orderdetail";
   $perPage = $_POST['perpage']; // 10;
   $pageNo = $_POST['pageno']; //2;
   $tableSql = $_POST['tableSql'];
   if ($pageNo == 1) {
      $start = 0;
   } else {
      $start = ($pageNo - 1) * $perPage;
   }
   $DelPermTrue = false;
   if (isset($_POST["DelPermission"])) {
      $DelPermTrue = getpermission($_POST["DelPermission"]);
   }

   $SecurityTrue = false;
   if (isset($_POST["Permission"])) {
      $SecurityTrue = getpermission($_POST["Permission"]);
   }
   $filter = "";
   $tableRecord = getpage($conn, $tableSql, $start, $perPage, $filter);
   $forCount = GetAllRecordBySql($tableSql, $conn);
   $TotalRecords = 0;
   while ($row = $forCount->fetch_assoc()) {
      $TotalRecords++;
   }
   $TotalPage = ceil($TotalRecords / $perPage);
?>

<table id="example1" class="table table-bordered table-striped">
   <thead>
      <tr>
          <?php  if (!isset($_POST["action"])) {?>
         <th>Action</th>
         <?php } ?>
          <?php  if (isset($_POST["attachement"])) {?>
            <th>Download</th>
         <?php } ?>
         <?php while ($field = $tableRecord->fetch_field()) { ?>
               <th><?php echo str_replace("_", " ", $field->name); ?></th>
            <?php } ?>
      </tr>
   </thead>
   <tbody>
      <?php while ($row = $tableRecord->fetch_assoc()) { ?>
            <tr>
               <?php  if (!isset($_POST["action"])) {?>
               <td style="display:flex;">    
               <?php  if (isset($_POST["printAction"])) {?>
                   <button class="btn btn-success btn-xs mr-1" onclick="onPrint('<?php echo $row[$primeryid]; ?>')"><i class="fa fa-print"></i></button>
               <?php } ?>

                     <button class="btn btn-success btn-xs" onclick="onEdit('<?php echo $row[$primeryid]; ?>')"><i class="fa fa-pen"></i></button>
                     <?php if($primeryid =="user_id"){  if($row["user_active"] == "Y") {?>
                     <label class="switch">
                        <input type="checkbox" checked onclick="onActive('<?php echo $row[$primeryid]; ?>','N')">
                        <span class="slider round"></span>
                      </label>
                     <?php  }else{  ?>
                     <label class="switch">
                        <input type="checkbox" onclick="onActive('<?php echo $row[$primeryid]; ?>','Y')">
                        <span class="slider round"></span>
                      </label>
                     <?php } }?>
               
               </td>
               <?php } ?>
                <?php  if (isset($_POST["attachement"])) {?>
                   <td>
                   <a href="../taskAttachment/12/<?php echo $row['task_attachment']; ?>" download><i class="fa fa-download"></i></a>
                  </td>
               <?php } ?>
               <?php foreach ($row as $key) {
                  if (str_contains($key,'-')) { ?> 
                     <td><span class="badge bg-warning"><?php echo $key ?></span></td>
                  <?php } else { ?>
                     <td><?php echo $key ?></td>
               <?php } } ?>
            </tr>
         <?php } ?>
   </tbody>
</table>
<div class="row">
   <div class="col-sm-12 col-md-5">
      <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
         Showing <?php echo $start + 1; ?> to <?php
            if ($start + $perPage > $TotalRecords) {
               echo $TotalRecords;
            } else {
               echo $start + $perPage;
            }
         ?> of <?php echo $TotalRecords; ?> entries</div>
   </div>
   <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
         <ul class="pagination">
            <?php if ($pageNo == 1) { ?>
                  <li class="paginate_button page-item previous disabled">
                     <a onclick="ongetPage('<?php echo $pageNo ?>')" aria-controls="example2" class="page-link">Previous</a></li>
               <?php } else { ?>
                  <li class="paginate_button page-item previous enabled">
                     <a onclick="ongetPage('<?php echo $pageNo - 1; ?>')" aria-controls="example2" class="page-link">Previous</a></li>
               <?php } ?>
            <!-- <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                 <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                 <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                 <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                 <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                 <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>  -->

            <?php if ($pageNo == $TotalPage) { ?>
                  <li class="paginate_button page-item next disabled" id="example2_next">
                     <a onclick="ongetPage('<?php echo $pageNo + 1; ?>')" aria-controls="example2" class="page-link">Next</a></li>
               <?php } else { ?>
                  <li class="paginate_button page-item next enabled" id="example2_next">
                     <a onclick="ongetPage('<?php echo $pageNo + 1; ?>')" aria-controls="example2" class="page-link">Next</a></li>
                  <?php } ?>
         </ul>
      </div>
   </div>
</div>
