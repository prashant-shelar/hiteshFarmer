<?php
include ('../action/dbconnect.php');
include ('../them/header.php');
include ('../action/getList.php');
$listobj = new getList();
?>

<div class="content-wrapper">
   <!-- Main content -->
   <section class="content mt-4">
      <div class="container-fluid">


         <div id="labAdd">
            <form class="form-horizontal" id="add_form">

               <input type="hidden" id="action" name="action" value="add" />
               <input type="hidden" class="form-control" id="aa" name="aa" />
               <div class="card card-success">
                  <div class="card-header">
                     <h3 class="card-title">Create Farmer</h3>
                  </div>

                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="form-group">
                              <label for="bb"> प्रयोगशाळा संदर्भ क्र.*</label>
                              <input type="text" class="form-control" id="bb" name="bb" placeholder="Lab Id" />
                           </div>
                        </div>

                        <div class="col-sm-3">
                           <div class="form-group">
                              <label for="cc"> शेतक-याचे नाव *</label>
                              <input type="text" class="form-control" id="cc" name="cc" placeholder="Farmer Name" />
                           </div>
                        </div>

                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="dd"> सर्व्हे / गट क्रमांक *</label>
                              <input type="text" class="form-control" id="dd" name="dd" placeholder="GAT No" />
                           </div>
                        </div>

                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="ee"> गाव*</label>
                              <input type="text" class="form-control" id="ee" name="ee" placeholder="Village Name" />
                           </div>
                        </div>

                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="ff"> तालुका *</label>
                              <input type="text" class="form-control" id="ff" name="ff" placeholder="Taluka Name" />
                           </div>
                        </div>

                        <div class="col-sm-2">
                           <div class="form-group">
                              <label for="gg"> जिल्हा *</label>
                              <input type="text" class="form-control" id="gg" name="gg" placeholder="Distic Name" />
                           </div>
                        </div>
                        <div class="col-sm-3" id="waterSrc">
                           <div class="form-group">
                              <label for="hh"> नमुना श्रोत*</label>
                              <input type="text" class="form-control" id="hh" name="hh" placeholder="Water Source" />
                           </div>
                        </div>

                        <div class="col-sm-3" id="pick">
                           <div class="form-group">
                              <label for="ii"> पिक *</label>
                              <input type="text" class="form-control" id="ii" name="ii" placeholder="Pick" />
                           </div>
                        </div>

                        <div class="col-sm-2" id="area">
                           <div class="form-group">
                              <label for="jj"> क्षेत्र *</label>
                              <input type="text" class="form-control" id="jj" name="jj" placeholder="Area" />
                           </div>
                        </div>

                        <div class="col-sm-4 ml-4">
                           <label for="kk"> अहवाल </label>
                           <div class="form-group">

                              <input type="radio" class="form-check-input"  name="kk" value="soil"
                                 onclick="setReport()" checked>
                              <label class="form-check-label mr-4" for="माती">
                                 मृदा विश्लेषण अहवाल
                              </label>

                              <input type="radio" class="form-check-input" name="kk" value="water"
                                 onclick="setReport()">
                              <label class="form-check-label" for="जल">
                                 जल विश्लेषण अहवाल
                              </label>
                           </div>

                        </div>

                        <div>
                           <input type="hidden" id="ll" name="ll" value="<?php echo date('d/m/y'); ?>"/>
                           <input type="hidden" id="pppp" name="pppp"  value="<?php echo $_SESSION['user_id']; ?>"/>
                        </div>


                     </div>
                  </div>


                  <div class="card card-secondary" id="soilReport">
                     <div class="card-header">
                        <h3 class="card-title"> मृदा विश्लेषण अहवाल</h3>
                     </div>

                     <div class="card-body">

                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">घटक</th>
                                 <th scope="col">परिमाण</th>
                                 <th scope="col">घटकाचे नमुन्यातील प्रमाण</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="mm"> आम्ल विम्ल निर्देशांक(सामू) ph</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="mm" name="mm">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="nn" name="nn" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="oo"> विद्युत वाहकता (क्षारता) Electric conductivity</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="oo" name="oo">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="pp" name="pp" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="qq"> सेंद्रिय कर्ब
                                          Organic Carbon
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="qq" name="qq">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="rr" name="rr" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="ss"> चुनखडी (मुक्त चुना)
                                          Calcium Carbonate
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="ss" name="ss">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="tt" name="tt" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label> मुख्य अन्नद्रव्ये</label>
                                    </div>
                                 </td>

                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="uu"> उपलब्ध नत्र
                                          Available Nitrogen (N)
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="uu" name="uu">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="vv" name="vv" placeholder="" />
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="ww">उपलब्ध स्फुरद
                                          Available Phosphorus (P) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="ww" name="ww">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="xx" name="xx" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="yy">उपलब्ध पालाश
                                          Available Potash (K) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="yy" name="yy">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="zz" name="zz" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>सुक्ष्म अन्नद्रव्ये</label>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>
                                       उपलब्ध लोह Available Iron (Fe)
                                    </label>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="aaa" name="aaa">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="bbb" name="bbb" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>
                                       उपलब्ध जस्त Available Zinc (Zn)
                                    </label>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="ccc" name="ccc">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="ddd" name="ddd" placeholder="" />
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>
                                    <label>
                                       उपलब्ध तांबे Available Copper (Cu)
                                    </label>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="eee" name="eee">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="fff" name="fff" placeholder="" />
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>
                                    <label>
                                       उपलब्ध मंगल Available Maganese(Mn)
                                    </label>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="ggg" name="ggg">
                                          <option value="">Select Action Type</option>
                                          <option>डेसिसायमन/मि.</option>
                                          <option>शेकडा</option>
                                          <option>कि.ग्र/हेक्टर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="hhh" name="hhh" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <!-- WATER REPORT -->

                  <div class="card card-info" id="waterReport">
                     <div class="card-header">
                        <h3 class="card-title"> जल विश्लेषण अहवाल</h3>
                     </div>

                     <div class="card-body">

                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">घटक</th>
                                 <th scope="col">परिमाण</th>
                                 <th scope="col">घटकाचे नमुन्यातील प्रमाण</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="iii"> पाण्यातील घटक</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="iii" name="iii">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="jjj" name="jjj" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="kkk"> सामु ( pH )</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="kkk" name="kkk">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="lll" name="lll" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="mmm"> विद्युत वाहकता / क्षारता ( EC )
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="mmm" name="mmm">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="nnn" name="nnn" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="ooo"> कॅटायन्स
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="ooo" name="ooo">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="ppp" name="ppp" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="qqq"> कॅल्शियम ( Ca )</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="qqq" name="qqq">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="rrr" name="rrr" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="sss"> मग्नेशीयम ( Mg )
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="sss" name="sss">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="ttt" name="ttt" placeholder="" />
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="uuu">सोडियम ( Na ) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="uuu" name="uuu">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="vvv" name="vvv" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="www">पोटॅशियम ( K ) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="www" name="www">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="xxx" name="xxx" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>अँनियन्स</label>
                                 </td>
                                 <td></td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="yyy">कार्बोनेट्स ( Co3 )</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="yyy" name="yyy">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="zzz" name="zzz" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="aaaa"> बायकार्बोनेट्स ( HCo3 )
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="aaaa" name="aaaa">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="bbbb" name="bbbb" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="cccc"> क्लोराईटस ( Cl )
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="cccc" name="cccc">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="dddd" name="dddd" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="eeee">सल्फेट ( So4 )</label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="eeee" name="eeee">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="ffff" name="ffff" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="gggg">सोडियम शोषण गुणांक ( SAR )
                                       </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="gggg" name="gggg">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="hhhh" name="hhhh" placeholder="" />
                                    </div>
                                 </td>
                              </tr>

                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="iiii">अवशेषात्मक सोडियम कार्बोनेट ( RSC ) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="iiii" name="iiii">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="jjjj" name="jjjj" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-group">
                                       <label for="kkkk">कॅल्शियम ते मग्नेशियम गुणांक (Ca:Mg) </label>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <select class="form-control" id="kkkk" name="kkkk">
                                          <option value="">Select Action Type</option>
                                          <option>डे.सी./ मीटर</option>
                                          <option>मि.इ./ लिटर</option>
                                       </select>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="form-group">
                                       <input type="text" class="form-control" id="llll" name="llll" placeholder="" />
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>


                     </div>

                  </div>



                  <div class="card-footer">
                     <button type="submit" class="btn btn-info">Save</button>
                     <button type="button" id="cancelbut" class="btn btn-default"
                        onclick="onSelect('list')">Cancel</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <div id="mlist">
         <div class="card card-info">
            <div class="card-header">
               <h3 class="card-title">List of Reports</h3>
               <div class="card-tools">
                  <a href="#" class="btn btn-app bg-success" onclick="onSelect('add')">
                     <i class="fas fa-edit"></i> Add
                  </a>
               </div>
            </div>
            <div class="card-body">
               <div id="applytable"></div>
            </div>
            <div class="card-footer">
            </div>
         </div>
      </div>


      <div id="generateSoilReport">
         <!-- Header-start -->
         <div id="headerReport" style="border:solid 1px black;padding:10px;">

            <div style="display: flex;justify-content: space-between;">
               <div>
                  <span><b>जावक क्र. : </b></span><span id="heading-1"> ६३०</span>
               </div>
               <div class="mt-2">
                  <span><b>दिनांक : </b></span><span id="heading-2">--/--/----</span>
               </div>
            </div>
            <div style="display: flex;justify-content: space-between;">
               <div class="mt-1">
                  <span><b>प्रयोगशाळा संदर्भ क्र. : </b></span><span id="heading-3"> ००१०</span>
               </div>
               <div class="mt-2">
                  <span><b>शेतक-याचे नाव : </b></span><span id="heading-4">आधार खंडू देवरे</span>
               </div>
            </div>

            <div style="display: flex;justify-content: space-between;">
               <div class="mt-2">
                  <span><b>गाव : </b></span><span id="heading-5">मानके</span>
               </div>
               <div class="mt-2">
                  <span><b>तालुका : </b></span><span id="heading-6">मालेगाव</span>
               </div>
               <div class="mt-2">
                  <span><b>जिल्हा : </b></span><span id="heading-7">नाशिक</span>
               </div>
            </div>

            <div style="display: flex;justify-content: space-between;">

               <div class="mt-2">
                  <span><b>सर्व्हे / गट क्रमांक : </b></span><span id="heading-8">७८/२/२</span>
               </div>
               <div class="mt-2">
                  <span><b>पिक : </b></span><span id="heading-9">काकडी</span>
               </div>
               <div class="mt-2">
                  <span><b>क्षेत्र : </b></span><span id="heading-10">०.४० हेक्टर</span>
               </div>
            </div>

         </div>
         <!-- Header-END -->

         <div style="text-align: center;margin-top: 10px;margin-bottom:10px;">
            <span id="heading-11">
               <b>
                  मृदा विश्लेषण अहवाल
               </b>
            </span>
         </div>

         <table style="width:100%;border:1px solid black; text-align: center;">
            <thead style="border:1px solid black;">
               <tr style="border:1px solid black; height:50px;">
                  <th style="border:1px solid black; width:18%;">
                     घटक
                  </th>
                  <th style="border:1px solid black;width:18%;">
                     परिमाण
                  </th>
                  <th style="border:1px solid black;width:18%;">
                     घटकाचे नमुन्यातील प्रमाण
                  </th>
                  <th tyle="border:1px solid black;width:18%;">
                     स्पस्टीकरन
                  </th>
                  <th style="border:1px solid black;width:30%;">
                     घटकाचे प्रमाण व शेरा
                  </th>

               </tr>
            </thead>
            <tbody>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">आम्ल विम्ल निर्देशांक(सामू) ph</td>
                  <td style="border:1px solid black;"><span id="P-1"></span></td>
                  <td style="border:1px solid black;"><span id="GNP-1"></span></td>
                  <td style="border:1px solid black;"><span id="SP-1">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">६.०० पेक्षा कमी आम्लयुक्त, ६.१ ते ८.५; सर्वसाधारण, ८.६ ते ९.०:
                     विम्ल होण्याच्या मार्गावर, ९.१ पेक्षा जास्त : विम्लयुक्त</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">विद्युत वाहकता (क्षारता) Electric conductivity</td>
                  <td style="border:1px solid black;"><span id="P-2">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-2">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-2">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">१.०० पेक्षा कमी: सर्वसाधारण १.०१ ते २.००: पिक उ.गवणीस नुकसानकारक,
                     २.०१ ते 3.०० : क्षार संवेदनक्षम पिकाच्या वाढीस नुकसानकारक, 3.०० पेक्षा जास्त : पिकास वाढीस
                     हानीकारक.</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">सेंद्रिय कर्ब
                     Organic Carbon
                  </td>
                  <td style="border:1px solid black;"><span id="P-3">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-3">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-3">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">०.२० पेक्षा कमी : अत्यंत कमी, ०.२१ ते ०.४० : कमी, ०.४१ ते ०.६० :
                     मध्यम, ०.६१ ते ०.८० : थोडे जास्त, ०.८१ ते १.०० : जास्त, १.०० पेक्षा जास्त : अत्यंत जास्त </td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">चुनखडी (मुक्त चुना)
                     Calcium Carbonate
                  </td>
                  <td style="border:1px solid black;"><span id="P-4">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-4">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-4">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">०.५० पेक्षा कमी : अत्यंत कमी, ०.५१ ते २.५० : कमी, २.५१ ते ५.०० :
                     मध्यम, ५.०१ ते १०.०० : थोडे जास्त, १०.०१ ते च्या पुढे : अत्यंत जास्त / पिकास हानीकारक.</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;"><b>मुख्य अन्नद्रव्ये </b></td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध नत्र
                     Available Nitrogen (N)
                  </td>
                  <td style="border:1px solid black;"><span id="P-5">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-5">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-5">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">१४० पेक्षा कमी : अत्यंत कमी, १४१ ते २८० : कमी, २८१-४२० : मध्यम,
                     ४२१-५६० : थोडे जास्त, ५६१-७०० : जास्त, ७०० पेक्षा जास्त : अत्यंत .</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध स्फुरद
                     Available Phosphorus (P)
                  </td>
                  <td style="border:1px solid black;"><span id="P-6">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-6">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-6">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">७ पेक्षा कमी : अत्यंत कमी, ८ ते 14 : कमी कमी, १५ ते २१ : मध्यम,
                     २२-२८ : थोडे जास्त, २९ ते ३५ : जास्त, ३५ पेक्षा जास्त : अत्यंत जास्त .</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध पालाश
                     Available Potash (K)
                  </td>
                  <td style="border:1px solid black;"><span id="P-7">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-7">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-7">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">१०० पेक्षा कमी : अत्यंत कमी, १०१ ते १५० : कमी, १५१ ते २००: मध्यम,
                     २०१ ते २५० : थोडे जास्त,२५१ ते ३०० : जास्त, ३०० पेक्षा जास्त : अत्यंत जास्त .</td>
               </tr>
               <tr style="height:35px;">
                  <td>
                     <b>सुक्ष्म अन्नद्रव्ये</b>
                  </td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध लोह
                     Available Iron (Fe)
                  </td>
                  <td style="border:1px solid black;"><span id="P-8">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-8">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-8">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">
                     उपलब्ध लोह
                     Available Iron (Fe)
                     पी.पी.एम.
                     ६.६० योग्य प्रमाणात ४.५० पेक्षा कमी : कमी, ४.५० ते १०.०० : योग्य प्रमाणात, १०.०० पेक्षा जास्त :
                     आवश्यकतेपेक्षा जास्त.
                  </td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध जस्त
                     Available Zinc (Zn)
                  </td>
                  <td style="border:1px solid black;"><span id="P-9">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-9">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-9">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">०.६० पेक्षा कमी : कमी, ०.६१ ते १.०० : योग्य प्रमाणात, १.१० पेक्षा
                     जास्त : भरपूर.</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध तांबे
                     Available Copper (Cu)
                  </td>
                  <td style="border:1px solid black;"><span id="P-10">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-10">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-10">सर्वसाधारण</span></td>
                  <td style="border:1px solid black;">०.२० पेक्षा कमी : कमी, ०.२० ते ०.५० : मध्यम, ०.५१ ते १०.०० :
                     आवश्यकतेपेक्षा जास्त, १०.०० पेक्षा जास्त : भरपूर.</td>
               </tr>
               <tr style="border:1px solid black; height:auto;">
                  <td style="border:1px solid black;">उपलब्ध मंगल
                     Available Maganese(Mn)
                  </td>
                  <td style="border:1px solid black;"><span id="P-11">डेसिसायमन/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP-11">६.९७</span></td>
                  <td style="border:1px solid black;"><span id="SP-11">सर्वसाधारण </span></td>
                  <td style="border:1px solid black;">२.०० पेक्षा कमी : कमी, २.०० ते ५.०० : योग्य प्रमाणात,५.०१ ते ५०.००
                     : आवश्यकतेपेक्षा जास्त, ५०.०० पेक्षा जास्त : भरपूर</td>
               </tr>
            </tbody>
         </table>

      </div>
      
      <div id="generateSoilReportAction" style="text-align: center;margin-top: 10px;"><button onclick="onPrintPaper()">GENERATE REPORT-PDF</button>
      </div>

      <div id="generateWaterReport">
         <!-- Header-start -->
         <div id="headerReport" style="border:solid 1px black;padding:10px;">

            <div style="display: flex;justify-content: space-between;">
               <div class="mt-2">
                  <span><b>पावती क्र. : </b></span><span id="heading1-1"> -</span>
               </div>
               <div class="mt-2">
                  <span class="mt-2"><b>दिनांक : </b></span><span id="heading1-2">--/--/--</span>
               </div>
            </div>
            <div style="display: flex;justify-content: space-between;">
               <div class="mt-2">
                  <span><b>प्रयोगशाळा संदर्भ क्र. : </b></span><span id="heading1-3"> ----</span>
               </div>
               <div class="mt-2">
                  <span><b>शेतक-याचे नाव : </b></span><span id="heading1-4">--- --- ---</span>
               </div>
            </div>

            <div style="display: flex;justify-content: space-between;">
               <div class="mt-2">
                  <span><b>गाव : </b></span><span id="heading1-5">---</span>
               </div>
               <div class="mt-2">
                  <span><b>तालुका : </b></span><span id="heading1-6">---</span>
               </div>
               <div class="mt-2">
                  <span><b>जिल्हा : </b></span><span id="heading1-7">---</span>
               </div>
            </div>

            <div style="display: flex;justify-content: space-between;">

               <div class="mt-2">
                  <span><b>सर्व्हे / गट क्रमांक : </b></span><span id="heading1-8">--/---</span>
               </div>

               <div class="mt-2">
                  <span><b>नमुना श्रोत : </b></span><span id="heading1-10">---</span>
               </div>

            </div>

         </div>
         <!-- Header-END -->

         <table style="width:100%;border:1px solid black; text-align: center;">
            <thead style="border:1px solid black;">
               <tr style="border:1px solid black; height:50px;">
                  <th style="border:1px solid black; width:18%;">
                     पाण्यातील घटक
                  </th>
                  <th style="border:1px solid black;width:18%;">
                     परिमाण
                  </th>
                  <th style="border:1px solid black;width:18%;">
                     घटकाचे नमुन्यातील प्रमाण
                  </th>
                  <th style="border:1px solid black;width:30%;">
                     घटकाचे सर्वसाधारण प्रमाण
                  </th>

               </tr>
            </thead>
            <tbody>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">सामू (ph)</td>
                  <td style="border:1px solid black;"><span id="P1-1"></span></td>
                  <td style="border:1px solid black;"><span id="GNP1-1"></span></td>
                  <td style="border:1px solid black;"> ६.५० ते ८.५०</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">विद्युत वाहकता / क्षारता ( EC )</td>
                  <td style="border:1px solid black;"><span id="P1-2">डेसि/मि</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-2">--</span></td>
                  <td style="border:1px solid black;"> ०.०० ते ०.५०</td>
               </tr>
               <tr style="height:35px;">
                  <td> <b>
                        कॅटायन्स </td>
                  </b>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">कॅल्शियम ( Ca )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-3">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-3">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १.५०</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">मग्नेशीयम ( Mg )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-4">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-4">--</span></td>
                  <td style="border:1px solid black;">०.०० ते ५.००</td>
               </tr>

               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">सोडियम ( Na )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-5">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-5">--</span></td>
                  <td style="border:1px solid black;">०.०० ते ४.००</td>
               </tr>

               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">पोटॅशियम ( K )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-6">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-6">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १.००</td>
               </tr>
               <tr style="height:35px;">
                  <td>
                     <b>अँनियन्स</b>
                  </td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">कार्बोनेट्स ( Co3 )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-7">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-7">--</span></td>
                  <td style="border:1px solid black;">
                     ०.०० ते १.५०
                  </td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">बायकार्बोनेट्स ( HCo3 )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-8">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-8">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १.५०</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">क्लोराईटस ( Cl )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-9">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-9">--</span></td>
                  <td style="border:1px solid black;">०.०० ते २.००</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">सल्फेट ( So4 )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-10">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-10">--</span></td>
                  <td style="border:1px solid black;">०.०० ते २.००</td>
               </tr>
               <tr style="height:35px;">
                  <td></td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">सोडियम शोषण गुणांक ( SAR )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-11">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-11">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १०</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">अवशेषात्मक सोडियम कार्बोनेट ( RSC )
                  </td>
                  <td style="border:1px solid black;"><span id="P1-12">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-12">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १.२५</td>
               </tr>
               <tr style="border:1px solid black; height:35px;">
                  <td style="border:1px solid black;">कॅल्शियम ते मग्नेशियम गुणांक (Ca:Mg)
                  </td>
                  <td style="border:1px solid black;"><span id="P1-13">मि.इ./ लिटर</span></td>
                  <td style="border:1px solid black;"><span id="GNP1-13">--</span></td>
                  <td style="border:1px solid black;">०.०० ते १.५</td>
               </tr>
            </tbody>
         </table>

      </div>
      <div id="generateWaterReportAction" style="text-align: center;margin-top: 10px;"><button onclick="onPrintPaperWater()">GENERATE WATER REPORT-PDF</button>


      </div>








</div>
</section>
<!-- /.content -->
</div>

<script>

   $("#header-name").text("Lab Report");
   $('#waterReport').hide();
   $('#area').show();
   $('#waterSrc').hide();
   $('#pick').show();

   $('#generateSoilReport').hide();
   $('#generateSoilReportAction').hide();
   $('#generateWaterReport').hide();
   $('#generateWaterReportAction').hide();


   $('#labAdd').hide();
   $('#medit').hide();
   var tableName = "lab_report";
   var fieldName = "aa";
   var actionName = "";
   var perPage = 10;
   var pageNo = 1;
   let Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
   });

   ongetPage(pageNo);


   function onSelect(operation) {
      switch (operation) {
         case "add":
            $('#labAdd').show();
            $('#action').val('add');
            $('#mlist').hide();
            break;
         case "list":
            $('#labAdd').hide();
            $('#mlist').show();
            document.getElementById("add_form").reset();
            ongetPage(1);
            break;
         case "edit":
            $('#labAdd').show();
            $('#action').val('edit');
            $('#mlist').hide();
            $("#labAdd :input").prop("disabled", false);
            break;
         default:
            $('#labAdd').hide();
            $('#mlist').show();
      }
   }

   function isInputNumber(event) {
      var ch = String.fromCharCode(event.which);
      if (!(/[0-9]/.test(ch))) {
         event.preventDefault();
      }
   }


   function setReport() {

      if ($('form  input[name=kk]:checked').val() === 'soil') {
         $('#waterReport').hide();
         $('#waterSrc').hide();
         $('#pick').show();
         $('#area').show();
         $('#soilReport').show();
      }

      if ($('form  input[name=kk]:checked').val() === 'water') {
         $('#soilReport').hide();
         $('#area').hide();
         $('#pick').hide();
         $('#waterSrc').show();
         $('#waterReport').show();
      }

   }

   function ongetPage(pageNo) {
      $.ajax({
         url: "../action/tableCreator.php",
         type: "POST",
         data: {
            tableSql: "SELECT aa, bb as Lab_Id, cc as Farmer_Name, dd as Gate_No, ee as Village from lab_report order by aa desc"
            , field: fieldName, perpage: perPage, pageno: pageNo, Permission: "ACTIONSEDIT", printAction: true
         },
         success: function (data) {
            $("#applytable").html(data);
         }
      });
   }

   $("#add_form").on('submit', (function (e) {

      if (document.getElementById("bb").value == "") {
         alert("Please Select bb");
         return false;
      }

      if (document.getElementById("cc").value == "") {
         alert("Please Select cc");
         return false;
      }

      if (document.getElementById("dd").value == "") {
         alert("Please Select dd");
         return false;
      }
      if (document.getElementById("ee").value == "") {
         alert("Please Select ee");
         return false;
      }

      if (document.getElementById("ff").value == "") {
         alert("Please Select ff");
         return false;
      }

      if (document.getElementById("gg").value == "") {
         alert("Please Select gg");
         return false;
      }





      if ($('form  input[name=kk]:checked').val() === 'soil') {
         if (document.getElementById("ii").value == "") {
            alert("Please Select ii");
            return false;
         }
         if (document.getElementById("jj").value == "") {
            alert("Please Select jj");
            return false;
         }
      }
      if ($('form  input[name=kk]:checked').val() === 'water') {

         if (document.getElementById("hh").value == "") {
            alert("Please Select hh");
            return false;
         }
      }


      e.preventDefault();
      $.ajax({
         url: "../action/labAction.php",
         type: "POST",
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function (data) {
            if (JSON.parse(data).status) {
               document.getElementById("add_form").reset();
               Toast.fire({
                  icon: 'success',
                  title: JSON.parse(data).message
               });
               onSelect('list');
            } else {
               document.getElementById("add_form").reset();
               Toast.fire({
                  icon: 'error',
                  title: 'Wrong Request'
               });
            }
         }, error: function () {
         }
      });
   }));

   function onPrint(printObj) {
      $('#generateSoilReport').show();
      $('#generateSoilReportAction').show();
      $('#mlist').hide();

      setReportData(printObj);
   }

   function onPrintPaper() {
      var printContents = document.getElementById('generateSoilReport').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function onPrintPaperWater(){
      var printContents = document.getElementById('generateWaterReport').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

   function setReportData(headerId) {
      // actionNameN = "singlerecord";
      // $.ajax({
      //    url: "../action/labAction.php",
      //    type: "POST",
      //    data: JSON.stringify({ table_name: tableName, key: headerId, action: actionNameN, field: fieldName }),
      //    success: function (data) {

      //       let object = JSON.parse(data);
      //       console.log("RESULT:", object['aa']);

      //       $("#heading-1").text(object['bb']);
      //       // Date
      //       // $("#heading-2").text(object['cc']);    
      //       $("#heading-3").text(object['cc']);
      //       $("#heading-4").text(object['dd']);
      //       $("#heading-5").text(object['ee']);

      //       $("#heading-8").text(object['dd']);

      //       // for (a in object) {
      //       //    if (a == 'customer_name') {
      //       //       $('#cName').text(object[a]);
      //       //    }

      //       // }
      //    }, error: function () {
      //    }
      // });

      actionNameN = "singlerecord";
      // this.onSelect('edit');
      $.ajax({
         url: "../action/labAction.php",
         type: "POST",
         data: { table_name: tableName, key: headerId, action: actionNameN, field: fieldName },
         success: function (data) {
            let object = JSON.parse(data);
            console.log("OBJECT:", object);
            if (object['kk'] == 'soil') {
               $('#generateSoilReport').show();
               $('#generateSoilReportAction').show();
               $('#generateWaterReport').hide();
               $('#generateSoilWaterReportAction').hide();           
               $("#heading-1").text(object['aa']);
               // Date
               $("#heading-2").text(object['ll']);    
               $("#heading-3").text(object['bb']);
               $("#heading-4").text(object['cc']);
               $("#heading-5").text(object['ee']);
               $("#heading-6").text(object['ff']);
               $("#heading-7").text(object['gg']);


               $("#heading-8").text(object['dd']);
               $("#heading-9").text(object['ii']);
               $("#heading-10").text(object['jj']);

               //Set data
               $("#P-1").text(object['mm']);
               $("#GNP-1").text(object['nn']);

               if (object['nn'] < 6) $("#SP-1").text("आम्लयुक्त");
               if (object['nn'] >= 6.1 && object['nn'] <= 8.5) $("#SP-1").text("सर्वसाधारण");
               if (object['nn'] >= 8.6 && object['nn'] <= 9.0) $("#SP-1").text("विम्ल होण्याच्या मार्गावर");
               if (object['nn'] >= 9.1) $("#SP-1").text("विम्लयुक्त");

               // ६.०० पेक्षा कमी आम्लयुक्त, ६.१ ते ८.५; सर्वसाधारण, ८.६ ते ९.०: विम्ल होण्याच्या मार्गावर, ९.१ पेक्षा जास्त : विम्लयुक्त

               $("#P-2").text(object['oo']);
               $("#GNP-2").text(object['pp']);

               if (object['pp'] < 1) $("#SP-2").text("सर्वसाधारण");
               if (object['pp'] >= 1.01 && object['pp'] <= 2) $("#SP-2").text("पिक उ.गवणीस नुकसानकारक");
               if (object['pp'] >= 2.01 && object['pp'] <= 3) $("#SP-2").text("क्षार संवेदनक्षम पिकाच्या वाढीस नुकसानकारक");
               if (object['pp'] > 3.00) $("#SP-2").text("पिकास वाढीस हानीकारक");
               // १.०० पेक्षा कमी: सर्वसाधारण १.०१ ते २.००: पिक उ.गवणीस नुकसानकारक, २.०१ ते 3.०० : क्षार संवेदनक्षम पिकाच्या वाढीस नुकसानकारक, 3.०० पेक्षा जास्त : पिकास वाढीस हानीकारक.


               $("#P-3").text(object['qq']);
               $("#GNP-3").text(object['rr']);

               if (object['rr'] < 0.20) $("#SP-3").text("अत्यंत कमी");
               if (object['rr'] >= 0.21 && object['rr'] <= 0.40) $("#SP-3").text("कमी");
               if (object['rr'] >= 0.41 && object['rr'] <= 0.60) $("#SP-3").text("मध्यम");
               if (object['rr'] >= 0.61 && object['rr'] <= 0.80) $("#SP-3").text("थोडे जास्त");
               if (object['rr'] >= 0.81 && object['rr'] <= 1.00) $("#SP-3").text("जास्त");
               if (object['rr'] > 1) $("#SP-3").text("अत्यंत जास्त");

               // ०.२० पेक्षा कमी : अत्यंत कमी, 
               // ०.२१ ते ०.४० : कमी, 
               // ०.४१ ते ०.६० : मध्यम, 
               // ०.६१ ते ०.८० : थोडे जास्त, 
               // ०.८१ ते १.०० : जास्त, 
               // १.०० पेक्षा जास्त : अत्यंत जास्त

               $("#P-4").text(object['ss']);
               $("#GNP-4").text(object['tt']);

               if (object['tt'] < 0.50) $("#SP-4").text("अत्यंत कमी");
               if (object['tt'] >= 0.51 && object['tt'] <= 2.50) $("#SP-4").text("कमी");
               if (object['tt'] >= 2.51 && object['tt'] <= 5.00) $("#SP-4").text("मध्यम");
               if (object['tt'] >= 5.01 && object['tt'] <= 10.00) $("#SP-4").text("थोडे जास्त");
               if (object['tt'] >= 10.01) $("#SP-4").text("अत्यंत जास्त / पिकास हानीकारक");

               // ०.५० पेक्षा कमी: अत्यंत कमी,
               //  ०.५१ ते २.५० : कमी,
               //   २.५१ ते ५.०० : मध्यम,
               //    ५.०१ ते १०.०० : थोडे जास्त, 
               //    १०.०१ ते च्या पुढे: अत्यंत जास्त / पिकास हानीकारक.


               $("#P-5").text(object['uu']);
               $("#GNP-5").text(object['vv']);

               if (object['vv'] < 140) $("#SP-5").text("अत्यंत कमी");
               if (object['vv'] >= 141 && object['vv'] <= 280) $("#SP-5").text("कमी");
               if (object['vv'] >= 281 && object['vv'] <= 420) $("#SP-5").text("मध्यम");
               if (object['vv'] >= 421 && object['vv'] <= 560) $("#SP-5").text("थोडे जास्त");
               if (object['vv'] >= 561 && object['vv'] <= 700) $("#SP-5").text("जास्त");
               if (object['vv'] > 700) $("#SP-5").text("अत्यंत");

               // १४० पेक्षा कमी : अत्यंत कमी,
               //  १४१ ते २८० : कमी,
               //  २८१-४२० : मध्यम,
               //   ४२१-५६० : थोडे जास्त, 
               //   ५६१-७०० : जास्त, 
               //   ७०० पेक्षा जास्त : अत्यंत .

               $("#P-6").text(object['ww']);
               $("#GNP-6").text(object['xx']);

               if (object['xx'] < 7) $("#SP-6").text("अत्यंत कमी");
               if (object['xx'] >= 8 && object['xx'] <= 14) $("#SP-6").text("कमी कमी");
               if (object['xx'] >= 15 && object['xx'] <= 21) $("#SP-6").text("मध्यम");
               if (object['xx'] >= 22 && object['xx'] <= 28) $("#SP-6").text("थोडे जास्त");
               if (object['xx'] >= 29 && object['xx'] <= 35) $("#SP-6").text("जास्त");
               if (object['xx'] > 35) $("#SP-6").text("अत्यंत जास्त");

               // ७ पेक्षा कमी : अत्यंत कमी, 
               // ८ ते 14 : कमी कमी, 
               // १५ ते २१ : मध्यम, 
               // २२-२८ : थोडे जास्त, 
               // २९ ते ३५ : जास्त, 
               // ३५ पेक्षा जास्त : अत्यंत जास्त 

               $("#P-7").text(object['yy']);
               $("#GNP-7").text(object['zz']);
               // $("#SP-1").text();

               if (object['zz'] < 100) $("#SP-7").text("अत्यंत कमी");
               if (object['zz'] >= 101 && object['zz'] <= 150) $("#SP-7").text("कमी कमी");
               if (object['zz'] >= 151 && object['zz'] <= 200) $("#SP-7").text("मध्यम");
               if (object['zz'] >= 201 && object['zz'] <= 250) $("#SP-7").text("थोडे जास्त");
               if (object['zz'] >= 251 && object['zz'] <= 300) $("#SP-7").text("जास्त");
               if (object['zz'] > 300) $("#SP-7").text("अत्यंत जास्त");

               // १०० पेक्षा कमी : अत्यंत कमी, 
               // १०१ ते १५० : कमी, 
               // १५१ ते २००: मध्यम, 
               // २०१ ते २५० : थोडे जास्त,
               // २५१ ते ३०० : जास्त, 
               // ३०० पेक्षा जास्त : अत्यंत जास्त

               $("#P-8").text(object['aaa']);
               $("#GNP-8").text(object['bbb']);

               if (object['bbb'] < 4.50) $("#SP-8").text("कमी");
               if (object['bbb'] == 6.60) $("#SP-8").text("योग्य प्रमाणात");
               if (object['bbb'] >= 4.50 && object['bbb'] <= 10.00) $("#SP-8").text("योग्य प्रमाणात");
               if (object['bbb'] > 10) $("#SP-8").text("आवश्यकतेपेक्षा जास्त");

               // उपलब्ध लोह Available Iron (Fe) पी.पी.एम. 
               // ६.६० योग्य प्रमाणात 
               // ४.५० पेक्षा कमी : कमी, 
               // ४.५० ते १०.०० : योग्य प्रमाणात,
               // १०.०० पेक्षा जास्त : आवश्यकतेपेक्षा जास्त.

               $("#P-9").text(object['ccc']);
               $("#GNP-9").text(object['ddd']);
               if (object['ddd'] < 0.60) $("#SP-9").text("कमी");
               if (object['ddd'] >= 0.61 && object['ddd'] <= 1.00) $("#SP-9").text("योग्य प्रमाणात");
               if (object['ddd'] > 1.10) $("#SP-9").text("भरपूर");
               // ०.६० पेक्षा कमी : कमी, ०.६१ ते १.०० : योग्य प्रमाणात, १.१० पेक्षा जास्त : भरपूर.

               $("#P-10").text(object['eee']);
               $("#GNP-10").text(object['fff']);
               if (object['fff'] < 0.20) $("#SP-10").text("कमी");
               if (object['fff'] >= 0.20 && object['fff'] <= 0.50) $("#SP-10").text("मध्यम");
               if (object['fff'] >= 0.51 && object['fff'] <= 10.00) $("#SP-10").text("आवश्यकतेपेक्षा जास्त");
               if (object['fff'] > 10.00) $("#SP-10").text("भरपूर");
               // ०.२० पेक्षा कमी : कमी, 
               // ०.२० ते ०.५० : मध्यम, 
               // ०.५१ ते १०.०० : आवश्यकतेपेक्षा जास्त, 
               // १०.०० पेक्षा जास्त : भरपूर.


               $("#P-11").text(object['ggg']);
               $("#GNP-11").text(object['hhh']);

               if (object['hhh'] < 2.00) $("#SP-11").text("कमी");
               if (object['hhh'] >= 2.00 && object['hhh'] <= 5.00) $("#SP-11").text("योग्य प्रमाणात");
               if (object['hhh'] >= 5.01 && object['hhh'] <= 50.00) $("#SP-11").text("आवश्यकतेपेक्षा जास्त");
               if (object['hhh'] > 50.00) $("#SP-11").text("भरपूर");
               //२.०० पेक्षा कमी : कमी, 
               //२.०० ते ५.०० : योग्य प्रमाणात,
               //५.०१ ते ५०.०० : आवश्यकतेपेक्षा जास्त, 
               //५०.०० पेक्षा जास्त : भरपूर

            } //Soil Report end

            if (object['kk'] == 'water') {
               $('#generateWaterReport').show();
               $('#generateWaterReportAction').show();
               $('#generateSoilReport').hide();
               $('#generateSoilReportAction').hide();
               $("#heading1-1").text(object['aa']);
               // Date
               $("#heading1-2").text(object['ll']);    
               $("#heading1-3").text(object['bb']);
               $("#heading1-4").text(object['cc']);
               $("#heading1-5").text(object['ee']);
               $("#heading1-6").text(object['ff']);
               $("#heading1-7").text(object['gg']);


               $("#heading1-8").text(object['dd']);
               $("#heading1-9").text(object['ii']);
               $("#heading1-10").text(object['hh']);

               $("#P1-1").text(object['iii']);
               $("#GNP1-1").text(object['jjj']);
               $("#P1-2").text(object['kkk']);
               $("#GNP1-2").text(object['lll']);

               $("#P-3").text(object['mmm']);
               $("#GNP1-3").text(object['nnn']);
               $("#P1-4").text(object['ooo']);
               $("#GNP1-4").text(object['ppp']);

               $("#P1-5").text(object['qqq']);
               $("#GNP1-5").text(object['rrr']);
               $("#P1-6").text(object['sss']);
               $("#GNP1-6").text(object['ttt']);

               $("#P-7").text(object['uuu']);
               $("#GNP1-7").text(object['vvv']);
               $("#P1-8").text(object['www']);
               $("#GNP1-8").text(object['xxx']);

               $("#P1-9").text(object['yyy']);
               $("#GNP1-9").text(object['zzz']);
               $("#P1-10").text(object['aaaa']);
               $("#GNP1-10").text(object['bbbb']);

               $("#P-11").text(object['cccc']);
               $("#GNP1-11").text(object['dddd']);
               $("#P1-12").text(object['eeee']);
               $("#GNP1-12").text(object['ffff']);
               $("#P1-13").text(object['gggg']);
               $("#GNP1-13").text(object['hhhh']);
            }



         }, error: function () {
         }
      });


   }


</script>
<?php include ("../them/footer.php"); ?>