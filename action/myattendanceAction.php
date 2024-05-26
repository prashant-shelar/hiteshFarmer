<?php
error_reporting(E_ERROR);
setlocale(LC_MONETARY,"en_IN");
include './dbconnect.php';
include './dboperation.php';
$action = $_POST['action'];

$validationFlag = true;

if ($_POST['attendance_user_id'] == '') {
    
    $validationFlag = false;
    $response['message'] = "Somthing Wrong Input for User Id";

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
    $attendanceUserId = trim($_POST['attendance_user_id']);

    $sqlAttendance = "SELECT att.attendance_date, att.attendance_user_name, att.attendance_flag,
                      emp.contact_number, emp.email_address, emp.department, emp.position_held, emp.joining_date, 
                      emp.bank_account_details_for_salary_deposit, emp.full_name, emp.date_of_birth  
                      FROM attendance as att
                      INNER JOIN user as usr ON usr.user_id = att.attendance_user_id
                      INNER JOIN employee as emp ON emp.emp_user_id = usr.user_id  
                      WHERE att.attendance_date between "."'".$fromDate."'"." and "."'".$toDate."'"." AND att.attendance_type = 1 AND att.attendance_user_id = "."'".$attendanceUserId."'"." ";

    $result = $conn->query($sqlAttendance);

    $resultAttendanceArr = array();
    $newArr  = array();
    $i=0;
    $response = '';
    $month = date('m',strtotime($_POST['attendance_Fromdate']));
    $year = date('Y',strtotime($_POST['attendance_Fromdate']));
    $totalDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
    foreach ($result as $key => $valueArr) {
        $newArr[] = $valueArr;
    }

    $totalPresentDays = 0;

    for ($k=0; $k < count($newArr); $k++) { 

        $resultAttendanceArr[$i]['attendance_date'] = $newArr[$k]['attendance_date'];
        $resultAttendanceArr[$i]['full_name'] = $newArr[$k]['full_name'];
        $resultAttendanceArr[$i]['email_address'] = $newArr[$k]['email_address'];
        $resultAttendanceArr[$i]['contact_number'] = $newArr[$k]['contact_number'];
        $resultAttendanceArr[$i]['department'] = $newArr[$k]['department'];
        $resultAttendanceArr[$i]['bank_account_details_for_salary_deposit'] = $newArr[$k]['bank_account_details_for_salary_deposit'];
        $resultAttendanceArr[$i]['joining_date'] = $newArr[$k]['joining_date'];
        $resultAttendanceArr[$i]['date_of_birth'] = $newArr[$k]['date_of_birth'];
        foreach ($newArr as $countArr) {
            if ($countArr['attendance_flag'] == 'Y') {
                for ($p=0; $p < $totalDays; $p++) { 
                    if (date('d',strtotime($countArr['attendance_date'])) == $p) {
                        $resultAttendanceArr[$i][$p] = 'P';
                        $totalPresentDays = $totalPresentDays + 1;
                        $resultAttendanceArr[$i][$p.'-bgcolor'] = 'bgcolor="#97f28b"';
                    }else{
                        $resultAttendanceArr[$i][$p] = 'A';
                        $resultAttendanceArr[$i][$p.'-bgcolor'] = 'bgcolor="#f28b8b"';
                    }
                }  
            }  
        }

        $i++;
    }

    $dayCharge = 200;
    $totalEarning = $totalPresentDays * $dayCharge;
    $totalDeduction = $totalDays * $dayCharge;
    $totalDeduction = $totalDeduction - $totalEarning;

    if(count($resultAttendanceArr) > 0){

        $response ='  <div class="row" style="margin-top:10px;">
                        <div class="col-12">
                           <div class="alert alert-warning alert-dismissible">
                              <b>Note :</b> In Employee Salary Report, we have shown the <b> Day wise Attendance Details </b> to calculate the salary of worker.
                           </div>  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                   <h3 class="card-title" style="text-align: center;">Employee Salary Report</h3>
                                </div>
                            
                                 <div class="card-body">
                                   <table class="table table-bordered">
                                     <thead>
                                        <tr>
                                            <th colspan="31" bgcolor="#f3dfa4">Employee Attendance Details</th>
                                        </tr>
                                        <tr>
                                            <th colspan="15" bgcolor="#97f28b">Present Colour Code (P : Present)</th>
                                            <th colspan="16" bgcolor="#f28b8b">Absent Colour Code (A : Absent)</th>
                                        </tr>
                                        <tr>';

                                        for ($m=1; $m <= $totalDays; $m++) { 
                                            $response .=' <th>'.$m.'</th>';
                                        }
                           
                $response .='            </tr>
                                     </thead>
                                     <tbody>';
                                        

                    $response .= '  <tr>';
        for ($j=0; $j < count($resultAttendanceArr); $j++) { 
            for ($l=0; $l < $totalDays; $l++) { 
                $response .= '  <td '.$resultAttendanceArr[$j][$l.'-bgcolor'].'>'.$resultAttendanceArr[$j][$l].'</td>';
            }
                        
        $response .= '  </tr>
                        <tr>
                            <td colspan="'.$totalDays.'"></td>
                        </tr> 
                        <tr>
                            <td colspan="15"><b>Payslip For Month : </b></td>
                            <td colspan="16" bgcolor="#f3dfa4"><b> '.date('F-Y',strtotime($_POST['attendance_Fromdate'])).'</b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b>Employee Name : </b></td>
                            <td colspan="7" bgcolor="#f3dfa4"><b>'.$resultAttendanceArr[$j]['full_name'].'</b></td>
                            <td colspan="8"><b>Total Working Days : </b></td>
                            <td colspan="8" bgcolor="#f3dfa4"><b>'.$totalDays.' </b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b>Date of Birth (DOB) : </b></td>
                            <td colspan="7" bgcolor="#f3dfa4"><b> '.$resultAttendanceArr[$j]['date_of_birth'].'</b></td>
                            <td colspan="8"><b>Paid Days : </b></td>
                            <td colspan="8" bgcolor="#f3dfa4"><b> '.$totalPresentDays.' </b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b>Department : </b></td>
                            <td colspan="7" bgcolor="#f3dfa4"><b>'.$resultAttendanceArr[$j]['department'].'</b></td>
                            <td colspan="8"><b>Contact No : </b></td>
                            <td colspan="8" bgcolor="#f3dfa4"><b>'.$resultAttendanceArr[$j]['contact_number'].'</b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b>Date of Joining (DOJ) : </b></td>
                            <td colspan="7" bgcolor="#f3dfa4"><b>'.$resultAttendanceArr[$j]['joining_date'].'</b></td>
                            <td colspan="8"><b>Bank A/C No : </b></td>
                            <td colspan="8" bgcolor="#f3dfa4"><b>'.$resultAttendanceArr[$j]['bank_account_details_for_salary_deposit'].'</b></td>
                        </tr>
                        <tr>
                            <td colspan="15" bgcolor="#97f28b"><b>Earning </b></td>
                            <td colspan="16" bgcolor="#f28b8b"><b> Deduction </b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b>Total Earning :</b> <br><br> Salery Compensation for per day charge is : <b>'.$dayCharge.' </b></td>
                            <td colspan="7"><b> <b>'.IND_money_format($totalEarning).'.00 </b> </b></td>
                            <td colspan="8"><b> Total Deduction : </b></td>
                            <td colspan="8"><b> <b>'.IND_money_format($totalDeduction).'.00 </b>  </b></td>
                        </tr>
                        <tr>
                            <td colspan="8"><b> Net Pay : </b></td>
                            <td colspan="23"><b> <b>'.IND_money_format($totalEarning).'.00 </b> </b></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
            </div>
            
            </div>      
        </div>';
        }

    }else{

        $response .='  <div class="row" style="margin-top:10px;">
                        <div class="col-8">
                           <div class="alert alert-danger alert-dismissible">
                              No Records found for the Month : <b> '.date('F-Y',strtotime($_POST['attendance_Fromdate'])).' </b>
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