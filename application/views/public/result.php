
<div class="all-wrapper with-side-panel solid-bg-all">
<div class="layout-w">
          <div class="content-w">
              <!--------------------
END - Breadcrumbs
-------------------->
              <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
              <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <h2 class="text-center">Result of <?php echo $firstName." ".$lastName; ?></h2>
                                <table class="table table-responsive table-bordered"">
                                	<tr>
                                		<th>Sr.No.</th>
                                		<th>Question</th>
                                		<th>Right Answer</th>
										<th>User Given  Answer</th>
										<th>Result</th>
										<th>Marks</th>
                                	</tr>
                                	<tr>
                                		<td>1</td>
                                		<td>Obesity is a risk factor for which of the following types of cancer?</td>
                                		<td><?php echo $ansQuestion1 ?></td>
										<td><?php echo $question1 ?></td>
										<td><?php if($ansQuestion1 == $question1) 
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										?></td>
										<td><?php if($ansQuestion1 == $question1) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>2</td>
                                		<td>Cancer may cause when...?</td>
                                		<td><?php echo $ansQuestion2 ?></td>
										<td><?php echo $question2 ?></td>
										<td><?php if($ansQuestion2 == $question2) 
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										?></td>
										<td><?php if($ansQuestion2 == $question2) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>3</td>
                                		<td>Agents that can cause cancer are named as....</td>
                                		<td><?php echo $ansQuestion3 ?></td>
										<td><?php echo $question3 ?></td>
										<td><?php if($ansQuestion3 == $question3)
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										?></td>
										<td><?php if($ansQuestion3 == $question3) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>4</td>
                                		<td>Naturally occur carcinogens include?</td>
                                		<td><?php echo $ansQuestion4 ?></td>
										<td><?php echo $question4 ?></td>
										<td><?php if($ansQuestion4 == $question4) 
											{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										 ?></td>
										<td><?php if($ansQuestion4 == $question4) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>5</td>
                                		<td>What is the leading cause of cancer death worldwide?</td>
                                		<td><?php echo $ansQuestion5 ?></td>
										<td><?php echo $question5 ?></td>
										<td><?php if($ansQuestion5 == $question5)
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										 ?></td>
										<td><?php if($ansQuestion5 == $question5) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>6</td>
                                		<td>Aside from not smoking, research has shown which of these to be a major cause of cancer?</td>
                                		<td><?php echo $ansQuestion6 ?></td>
										<td><?php echo $question6 ?></td>
										<td><?php if($ansQuestion6 == $question6) 
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										?></td>
										<td><?php if($ansQuestion6 == $question6) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>7</td>
                                		<td>Alcohol has been shown to increase risk for which of these cancers?</td>
                                		<td><?php echo $ansQuestion7 ?></td>
										<td><?php echo $question7 ?></td>
										<td><?php if($ansQuestion7 == $question7)
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										?></td>
										<td><?php if($ansQuestion7 == $question7) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>8</td>
                                		<td>Coffee increases cancer risks</td>
                                		<td><?php echo $ansQuestion8 ?></td>
										<td><?php echo $question8 ?></td>
										<td><?php if($ansQuestion8 == $question8) 
										{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										 ?></td>
										<td><?php if($ansQuestion8 == $question8) 
										{echo "+1";} else {echo "0";}?></td>
                                	</tr>
                                	<tr>
                                		<td>9</td>
                                		<td>Which factor(s) increase breast cancer risk?</td>
                                		<td><?php echo $ansQuestion9 ?></td>
										<td><?php echo $question9 ?></td>
										<td><?php if($ansQuestion9 == $question9) 
													{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
										 ?></td>
										<td><?php if($ansQuestion9 == $question9) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<td>10</td>
                                		<td>Most common site of metastasis in breast cancer is...</td>
                                		<td><?php echo $ansQuestion10 ?></td>
										<td><?php echo $question10 ?></td>
										<td>
											<?php 
												if($ansQuestion10 == $question10)
												{
													?><img src="<?php echo base_url();?>assets/images/right.jpg" alt="right" class="img img-responsive tdimg"><?php
												}
												else
												{
													?><img src="<?php echo base_url();?>assets/images/wrong.jpg" alt="wrong" class="img img-responsive tdimg"><?php
												}
											?>
										</td>
										<td><?php if($ansQuestion10 == $question10) {echo "+1";} else {echo "0";} ?></td>
                                	</tr>
                                	<tr>
                                		<th class="text-center" colspan="2">Total Correct Answers</th>
                                		<td class="text-center"><?php echo $marks; ?></td>
                                		<th class="text-center">Time Taken(secs)</th>
                                		<th class="text-center" colspan="2"><?php echo $timetaken;?></th>
                                	</tr>
                                	<tr>
                                		<td colspan="6" class="text-center">
                                			<a href="<?php echo base_url(); ?>home/exitpage" class="btn btn-danger" type="submit">Exit Page</a></td>
                                	</tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>

                </div>