<body id="dashboard-back" class="menu-position-side menu-side-left  with-content-panel">
<div class="all-wrapper with-side-panel solid-bg-all">
<div class="layout-w">
          <div class="content-w">
              <!--------------------
END - Breadcrumbs
-------------------->
              <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">Final Result <?php echo $firstName." ".$lastName; ?></h6>
                                <div class="element-wrapper">
    <div class="element-box-tp">
        <div class="element-box-tp">
            <!--------------------
START - Table with actions
------------------  -->
            <div class="table-responsive">
                <table class="table table-bordered table-lg table-v2 table-striped">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Question</th>
                            <th>Correct Answers</th>
                            <th>Given Answers</th>
                            <th>Result</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <!-- Question 1 -->
                        <tr>
                            <td>1</td>
                            <td>Agents that can cause cancer are named as....</td>
                            <td><?php echo $ansQuestion1 ?></td>
                            <td><?php echo $question1 ?></td>
                            <td class="text-center"><?php if($ansQuestion1 == $question1) 
                                        {
                                          ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                        }
                                        else
                                          {
                                            ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                          }?>
                              </td>
                              <td class="text-center"><?php if($ansQuestion1 == $question1) {echo "1";} else {echo "0";} ?></td>
                        </tr>

                                            <!-- Question 2 -->
                        <tr>
                              <td>2</td>
                              <td>What is the leading cause of cancer death worldwide?</td>
                              <td><?php echo $ansQuestion2 ?></td>
                              <td><?php echo $question2 ?></td>
                              <td class="text-center"><?php if($ansQuestion2 == $question2) 
                                        {
                                          ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                        }
                                        else
                                        {
                                          ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                        }?>
                                </td>
                                <td class="text-center"><?php if($ansQuestion2 == $question2) {echo "1";} else {echo "0";} ?></td>
                          </tr>
                                        <!-- Question 3 -->
                          <tr>
                                <td>3</td>
                                <td>Coffee increases cancer risks.</td>
                                <td><?php echo $ansQuestion3 ?></td>
                                <td><?php echo $question3 ?></td>
                                <td class="text-center"><?php if($ansQuestion3 == $question3)
                                          {
                                            ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                          }
                                          else
                                          {
                                            ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                          }?>
                                </td>
                                <td class="text-center"><?php if($ansQuestion3 == $question3) {echo "1";} else {echo "0";} ?></td>
                          </tr>

                                        <!-- Question 4 -->
                                  <tr>
                                    <td>4</td>
                                    <td>Which of the following brand of AZ is indicated in prostate cancer?</td>
                                    <td><?php echo $ansQuestion4 ?></td>
                                    <td><?php echo $question4 ?></td>
                                    <td class="text-center"><?php if($ansQuestion4 == $question4) 
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                    </td>
                                    <td class="text-center"><?php if($ansQuestion4 == $question4) {echo "1";} else {echo "0";} ?></td>
                                  </tr>


                                        <!-- Question 5 -->
                                  <tr>
                                    <td>5</td>
                                    <td>If you get cancer, it's usually because someone in your family had cancer.</td>
                                    <td><?php echo $ansQuestion5 ?></td>
                                    <td><?php echo $question5 ?></td>
                                    <td class="text-center"><?php if($ansQuestion5 == $question5)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                    </td>
                                    <td class="text-center"><?php if($ansQuestion5 == $question5) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                <!-- Question 6 -->
                                  <tr>
                                    <td>6</td>
                                    <td>For most cancers, a biopsy will cause cancer cells to spread.</td>
                                    <td><?php echo $ansQuestion6 ?></td>
                                    <td><?php echo $question6 ?></td>
                                    <td class="text-center"><?php if($ansQuestion6 == $question6) 
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                    </td>
                                    <td class="text-center"><?php if($ansQuestion6 == $question6) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                  <!-- Question 7 -->
                                  <tr>
                                    <td>7</td>
                                    <td>Which of the following best describes cancer as a disease?</td>
                                    <td><?php echo $ansQuestion7 ?></td>
                                    <td><?php echo $question7 ?></td>
                                    <td class="text-center"><?php if($ansQuestion7 == $question7)
                                             {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                    </td>
                                    <td class="text-center"><?php if($ansQuestion7 == $question7) {echo "1";} else {echo "0";} ?></td>
                                  </tr>

                                          <!-- Question 8 -->
                                  <tr>
                                    <td>8</td>
                                    <td>Which of the following cancers is a cancer of the blood that often starts in the bone marrow?</td>
                                    <td><?php echo $ansQuestion8 ?></td>
                                    <td><?php echo $question8 ?></td>
                                    <td class="text-center"><?php if($ansQuestion8 == $question8) 
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion8 == $question8) {echo "1";} else {echo "0";}?></td>
                                  </tr>

                                            <!-- Question 9 -->
                                  <tr>
                                    <td>9</td>
                                    <td>What type of cancer treatment uses high energy waves to destroy cancer cells?</td>
                                    <td><?php echo $ansQuestion9 ?></td>
                                    <td><?php echo $question9 ?></td>
                                    <td class="text-center"><?php if($ansQuestion9 == $question9) 
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              } ?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion9 == $question9) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                      <!-- Question 10 -->
                                  <tr>
                                    <td>10</td>
                                    <td>A blood test can detect this marker which might indicate a genetic mutation that increases the risk of breast or ovarian cancer.</td>
                                    <td><?php echo $ansQuestion10 ?></td>
                                     <td><?php echo $question10 ?></td>
                                    <td class="text-center"><?php if($ansQuestion10 == $question10)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion10 == $question10) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                <!-- Question 11 -->
                                   <tr>
                                    <td>11</td>
                                    <td>This abbreviation represents a test for a protein that is produced by the prostate gland. The higher a man’s level, the more likely it is that he has prostate cancer.</td>
                                    <td><?php echo $ansQuestion11 ?></td>
                                     <td><?php echo $question11 ?></td>
                                    <td class="text-center"><?php if($ansQuestion11 == $question11)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion11 == $question11) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                            <!-- Question 12 -->
                                   <tr>
                                    <td>12</td>
                                    <td>Does hair dye use increase the risk of cancer</td>
                                    <td><?php echo $ansQuestion12 ?></td>
                                     <td><?php echo $question12 ?></td>
                                    <td class="text-center"><?php if($ansQuestion12 == $question12)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion12 == $question12) {echo "1";} else {echo "0";} ?></td>
                                  </tr>

                                                <!-- Question 13 -->
                                   <tr>
                                    <td>13</td>
                                    <td>The Naming of the Rooms in AZ office are on the basis of:</td>
                                    <td><?php echo $ansQuestion13 ?></td>
                                     <td><?php echo $question13 ?></td>
                                    <td class="text-center"><?php if($ansQuestion13 == $question13)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion13 == $question13) {echo "1";} else {echo "0";} ?></td>
                                  </tr>


                                            <!-- Question 14 -->
                                   <tr>
                                    <td>14</td>
                                    <td>Myth: All breast cancers are life-threatening.</td>
                                    <td><?php echo $ansQuestion14 ?></td>
                                     <td><?php echo $question14 ?></td>
                                    <td class="text-center"><?php if($ansQuestion14 == $question14)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion14 == $question14) {echo "1";} else {echo "0";} ?></td>
                                  </tr>

                                            <!-- Question 15 -->
                                   <tr>
                                    <td>15</td>
                                    <td>Switching to e-cigarettes might reduce the risk of cancer ?</td>
                                    <td><?php echo $ansQuestion15 ?></td>
                                     <td><?php echo $question15 ?></td>
                                    <td class="text-center"><?php if($ansQuestion15 == $question15)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion15 == $question15) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                    <!-- Question 16 -->
                                   <tr>
                                    <td>16</td>
                                    <td>Can injuries cause cancer ?</td>
                                    <td><?php echo $ansQuestion16 ?></td>
                                     <td><?php echo $question16 ?></td>
                                    <td class="text-center"><?php if($ansQuestion16 == $question16)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion16 == $question16) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                <!-- Question 17 -->
                                   <tr>
                                    <td>17</td>
                                    <td>Is cancer contagious?</td>
                                    <td><?php echo $ansQuestion17 ?></td>
                                     <td><?php echo $question17 ?></td>
                                    <td class="text-center"><?php if($ansQuestion17 == $question17)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion17 == $question17) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                <!-- Question 18 -->
                                   <tr>
                                    <td>18</td>
                                    <td>Which of the following is the latest advancement in the management of cancer?</td>
                                    <td><?php echo $ansQuestion18 ?></td>
                                     <td><?php echo $question18 ?></td>
                                    <td class="text-center"><?php if($ansQuestion18 == $question18)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion18 == $question18) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                <!-- Question 19 -->
                                   <tr>
                                    <td>19</td>
                                    <td>Which of the following is not a risk factor for Cancer?</td>
                                    <td><?php echo $ansQuestion19 ?></td>
                                     <td><?php echo $question19 ?></td>
                                    <td class="text-center"><?php if($ansQuestion19 == $question19)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion19 == $question19) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                                        <!-- Question 20 -->
                                   <tr>
                                    <td>20</td>
                                    <td>Cancer is represented as</td>
                                    <td><?php echo $ansQuestion20 ?></td>
                                     <td><?php echo $question20 ?></td>
                                    <td class="text-center"><?php if($ansQuestion20 == $question20)
                                              {
                                                ?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
                                              }
                                            else
                                              {
                                                  ?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
                                              }?>
                                      </td>
                                      <td class="text-center"><?php if($ansQuestion20 == $question20) {echo "1";} else {echo "0";} ?></td>
                                  </tr>
                                  <tr>
                                    <th class="text-center" colspan="3">Total Correct Answers</th>
                                    <td class="text-center" colspan="3"><?php echo $marks; ?></td>
                                  </tr>
                                  <tr>
                                    <th class="text-center" colspan="3">Time Taken(secs)</th>
                                    <th class="text-center" colspan="3"><?php echo (int) ($timetaken / 60)." mins ".(int) ($timetaken % 60)." secs";?></th>
                                  </tr>
                                  <tr>
                                    <td colspan="6" class="text-center">
                                      <input type="hidden" name="question" value="question9">
                                        <a href="<?php echo base_url();?>home/exitpage" class="btn btn-primary" name="storeprogress" type="submit">Exit Page</a></td>
                                  </tr>
                    </tbody>
                </table>
            </div>
            <!--------------------
END - Table with actions
------------------            -->
        </div>
    </div>
</div>
                            </div>
                        </div>
                    </div>

                </div>
