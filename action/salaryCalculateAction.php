<?php
error_reporting(E_ERROR);
setlocale(LC_MONETARY,"en_IN");
include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

$validationFlag = true;

if ($_POST['attendance_project_id'] == '') {
    
	$validationFlag = false;
	$response['message'] = "Somthing Wrong Input for Project Id";

}elseif ($_POST['attendance_contractor_id'] == '') {
    
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for Contractor Id";

}elseif ($_POST['attendance_Fromdate'] == '') {
    
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for From Date";

}elseif ($_POST['attendance_Todate'] == '') {
    
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for To Date";

}

if ($validationFlag) {

	$fromDate = trim($_POST['attendance_Fromdate']);
	$toDate = trim($_POST['attendance_Todate']);

    $sqlAttendance = "SELECT att.attendance_date, att.attendance_flag, att.attendance_count, att.attendance_meason, att.attendance_helper, att.attendance_department, proj.project_Name,proj.location, con.contractor_name, con.contractor_charge, con.contractor_meason, con.contractor_helper FROM attendance as att INNER JOIN contractor as con ON con.contractor_id = att.attendance_contractor_id INNER JOIN project as proj ON proj.project_id = att.attendance_project_id WHERE att.createdat between "."'".$fromDate."'"." and "."'".$toDate."'"." AND att.attendance_type = 2 ";

	$result = $conn->query($sqlAttendance);

	$resultMeasonArr = array();
	$resultHelperArr = array();
	$resultDepartmentArr = array();
	$newArr  = array();
	$i=0;
	$response = '';
	
	foreach ($result as $key => $valueArr) {
		$newArr[] = $valueArr;
	}

	for ($k=0; $k < count($newArr); $k++) { 
		$resultMeasonArr[$i]['project_name'] = $newArr[$k]['project_Name'];
		$resultMeasonArr[$i]['contractor_name'] = $newArr[$k]['contractor_name'];
		$resultMeasonArr[$i]['contractor_charge'] = $newArr[$k]['contractor_charge'];
		$resultMeasonArr[$i]['attendance_date'] = $newArr[$k]['attendance_date'];
		$resultMeasonArr[$i]['contractor_meason'] = $newArr[$k]['contractor_meason'];
		$resultHelperArr[$i]['contractor_helper'] = $newArr[$k]['contractor_helper'];
		$resultDepartmentArr[$i]['contractor_department'] = 100;
		$resultMeasonArr[$i]['mon'] = '';
		$resultMeasonArr[$i]['tue'] = '';
		$resultMeasonArr[$i]['wed'] = '';
		$resultMeasonArr[$i]['thu'] = '';
		$resultMeasonArr[$i]['fri'] = '';
		$resultMeasonArr[$i]['sat'] = '';

		$measonCommison=0;
		$helperCommison=0;
		$departmentCommison=0;

		$measonWeeklyCount= 0;
		$measonAmount = 0;
		$measonContractorCommission = 0;
		$measonGrandTotal = 0;

		$helperWeeklyCount= 0;
		$helperAmount = 0;
		$helperContractorCommission = 0;
		$helperGrandTotal = 0;

		$departmentWeeklyCount= 0;
		$departmentAmount = 0;
		$departmentContractorCommission = 0;
		$departmentGrandTotal = 0;

		foreach ($newArr as $countArr) {

			if ($countArr['attendance_flag'] == 'Y') {

				if (date('D',strtotime($countArr['attendance_date'])) == 'Mon') {
					$resultMeasonArr[$i]['mon'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['mon'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['mon'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];

				}
				
				if(date('D',strtotime($countArr['attendance_date'])) == 'Tue'){
					$resultMeasonArr[$i]['tue'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['tue'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['tue'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];	
				}

				if(date('D',strtotime($countArr['attendance_date'])) == 'Wed'){
					$resultMeasonArr[$i]['wed'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['wed'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['wed'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];	
				}

				if(date('D',strtotime($countArr['attendance_date'])) == 'Thu'){
					$resultMeasonArr[$i]['thu'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['thu'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['thu'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];
				}

				if(date('D',strtotime($countArr['attendance_date'])) == 'Fri'){
					$resultMeasonArr[$i]['fri'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['fri'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['fri'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];
				}

				if(date('D',strtotime($countArr['attendance_date'])) == 'Sat'){
					$resultMeasonArr[$i]['sat'] = $countArr['attendance_meason'];
					$resultHelperArr[$i]['sat'] = $countArr['attendance_helper'];
					$resultDepartmentArr[$i]['sat'] = $countArr['attendance_department'];
					$measonWeeklyCount = $measonWeeklyCount + $countArr['attendance_meason'];
					$helperWeeklyCount = $helperWeeklyCount + $countArr['attendance_helper'];
					$departmentWeeklyCount = $departmentWeeklyCount + $countArr['attendance_department'];	
				}
			}
			
		}

		$measonAmount = $measonWeeklyCount * $newArr[$k]['contractor_meason'];
		$measonContractorCommission = ($newArr[$k]['contractor_charge'] / 100) * $measonAmount;
		$measonGrandTotal = $measonAmount + $measonContractorCommission;
		$resultMeasonArr[$i]['measonAmount'] = $measonAmount;
		$resultMeasonArr[$i]['measonContractorCommission'] = $measonContractorCommission;
		$resultMeasonArr[$i]['measonGrandTotal'] = $measonGrandTotal;

		$helperAmount = $helperWeeklyCount * $newArr[$k]['contractor_helper'];
		$helperContractorCommission = ($newArr[$k]['contractor_charge'] / 100) * $helperAmount;
		$helperGrandTotal = $helperAmount + $helperContractorCommission;
		$resultHelperArr[$i]['helperAmount'] = $helperAmount;
		$resultHelperArr[$i]['helperContractorCommission'] = $helperContractorCommission;
		$resultHelperArr[$i]['helperGrandTotal'] = $helperGrandTotal;


		$departmentAmount = $departmentWeeklyCount * 100;
		$departmentContractorCommission = ($newArr[$k]['contractor_charge'] / 100) * $departmentAmount;
		$departmentGrandTotal = $departmentAmount + $departmentContractorCommission;
		$resultDepartmentArr[$i]['departmentAmount'] = $departmentAmount;
		$resultDepartmentArr[$i]['departmentContractorCommission'] = $departmentContractorCommission;
		$resultDepartmentArr[$i]['departmentGrandTotal'] = $departmentGrandTotal;

		$i++;
	}

	$grandTotal = $measonGrandTotal + $helperGrandTotal + $departmentGrandTotal;

	$response ='  <div class="row" style="margin-top:10px;">
                        <div class="col-12">
                           <div class="alert alert-warning alert-dismissible">
                              <b>Note :</b> In Worker Salary Report, we have shown the <b> Day wise count of Meason and Helper as well as Department </b> to calculate the salary of worker.
                           </div>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
	                            <div class="card-header">
	                               <h3 class="card-title" style="text-align: center;">Worker Salary Report</h3>
	                            </div>
                            
	                             <div class="card-body">
	                               <table class="table table-bordered">
	                                 <thead>
	                                    <tr>
	                                       <th>Project</th>
	                                       <th>Contractor</th>
	                                       <th>Position</th>
	                                       <th>Mon</th>
	                                       <th>Tue</th>
	                                       <th>Wed</th>
	                                       <th>Thu</th>
	                                       <th>Fri</th>
	                                       <th>Sat</th>
	                                       <th>Contractor<br> Commission (%) </th>
	                                       <th>Total</th>
	                                    </tr>
	                                 </thead>
	                                 <tbody>
	                                    <tr>
	                                       <td rowspan="5"><span class="badge bg-success">'.$resultMeasonArr[0]['project_name'].'</span></td>
	                                       <td rowspan="6"><span class="badge bg-danger">'.$resultMeasonArr[0]['contractor_name'].'</span></td>
	                                    </tr>';

	
	for ($j=0; $j < count($resultMeasonArr); $j++) { 
		$response .= '<tr>   
	                       <td bgcolor="#f3dfa4">Meason Weekly Salary Details<br><br><b> Note : Charges of Meason - '.$resultMeasonArr[$j]['contractor_meason'].'</b> (Rupees per day)  </td>
	                       <td>'.$resultMeasonArr[$j]['mon'].'</td>
	                       <td>'.$resultMeasonArr[$j]['tue'].'</td>
	                       <td>'.$resultMeasonArr[$j]['wed'].'</td>
	                       <td>'.$resultMeasonArr[$j]['thu'].'</td>
	                       <td>'.$resultMeasonArr[$j]['fri'].'</td>
	                       <td>'.$resultMeasonArr[$j]['sat'].'</td>
	                       <td bgcolor="#b4e9b7"><span class="badge bg-warning">'.$resultMeasonArr[$j]['contractor_charge'].' %</span><br><br><b><span> Commission : '.IND_money_format($resultMeasonArr[$j]['measonContractorCommission']).'.00 </span><b></td>
	                       <td bgcolor="#b4e9b7">'.IND_money_format($resultMeasonArr[$j]['measonGrandTotal']).'.00</td>
	                    </tr>
	                    <tr>   
	                       <td bgcolor="#f3dfa4">Helper Weekly Salary Details<br><br><b> Note : Charges of Helper - '.$resultHelperArr[$j]['contractor_helper'].'</b> (Rupees per day)  </td>
	                       <td>'.$resultHelperArr[$j]['mon'].'</td>
	                       <td>'.$resultHelperArr[$j]['tue'].'</td>
	                       <td>'.$resultHelperArr[$j]['wed'].'</td>
	                       <td>'.$resultHelperArr[$j]['thu'].'</td>
	                       <td>'.$resultHelperArr[$j]['fri'].'</td>
	                       <td>'.$resultHelperArr[$j]['sat'].'</td>
	                       <td bgcolor="#b4e9b7"><span class="badge bg-warning">'.$resultMeasonArr[$j]['contractor_charge'].' %</span><br><br><b><span> Commission : '.IND_money_format($resultHelperArr[$j]['helperContractorCommission']).'.00 </span><b></td>
	                       <td bgcolor="#b4e9b7">'.IND_money_format($resultHelperArr[$j]['helperGrandTotal']).'.00</td>
	                    </tr>
	                    <tr>   
	                       <td bgcolor="#f3dfa4">Department Weekly Salary Details<br><br><b> Note : Charges of Department - '.$resultDepartmentArr[$j]['contractor_department'].'</b> (Rupees per day)  </td>
	                       <td>'.$resultDepartmentArr[$j]['mon'].'</td>
	                       <td>'.$resultDepartmentArr[$j]['tue'].'</td>
	                       <td>'.$resultDepartmentArr[$j]['wed'].'</td>
	                       <td>'.$resultDepartmentArr[$j]['thu'].'</td>
	                       <td>'.$resultDepartmentArr[$j]['fri'].'</td>
	                       <td>'.$resultDepartmentArr[$j]['sat'].'</td>
	                       <td bgcolor="#b4e9b7"bgcolor="#b4e9b7"><span class="badge bg-warning">'.$resultMeasonArr[$j]['contractor_charge'].' %</span><br><br><b><span> Commission : '.IND_money_format($resultDepartmentArr[$j]['departmentContractorCommission']).'.00 </span><b></td>
	                       <td bgcolor="#b4e9b7">'.IND_money_format($resultDepartmentArr[$j]['departmentGrandTotal']).'.00</td>
	                    </tr>
	                    <tr>
	                    	<td bgcolor="#f3dfa4" colspan="8"><b>Grand Total</b></td>
	                    	<td bgcolor="#b4e9b7"><b>'.IND_money_format($grandTotal).'.00</b></td>
	                    </tr>
	                 </tbody>
	               </table>
	             </div>
	       </div>
	      
	    </div>      
	 </div>';
	}	
	

echo $response;

}else{
    
    $response['status'] = false;
    $conn->close();
    //echo json_encode($response);
}

function IND_money_format($number){
    $decimal = (string)($number - floor($number));
    $money = floor($number);
    $length = strlen($money);
    $delimiter = '';
    $money = strrev($money);

    for($i=0;$i<$length;$i++){
        if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$length){
            $delimiter .=',';
        }
        $delimiter .=$money[$i];
    }

    $result = strrev($delimiter);
    $decimal = preg_replace("/0\./i", ".", $decimal);
    $decimal = substr($decimal, 0, 3);

    if( $decimal != '0'){
        $result = $result.$decimal;
    }

    return $result;
}





