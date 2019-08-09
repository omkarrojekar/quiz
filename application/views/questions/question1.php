<body id="dashboard-back" class="menu-position-side menu-side-left  with-content-panel">

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
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">Quiz</h6>
                                <form id="quiz-form" class="element-box" action="<?php echo base_url();?>home/storeanswers" method="POST">
                                    <label class="labeltext">Q1. Agents that can cause cancer are named as....</label>      
                                    <label class="customradio"><span class="radiotextsty">Mutagen</span>
                                      <input type="radio" name="q1" value="Mutagen">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Carcinogen</span>
                                      <input type="radio" name="q1" value="Carcinogen">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Oncogene</span>
                                      <input type="radio" name="q1" value="Oncogene">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">None of Above</span>
                                      <input type="radio" name="q1" value="None of Above">
                                      <span class="checkmark"></span>
                                    </label>  
                                     <div class="form-buttons-w">
                                    <input type="hidden" name="question" value="question1">
                                    <button class="btn btn-primary" name="storeprogress" type="submit">Next</button>
                                    </div>
                               </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--------------------
                START - Sidebar
                -------------------->
                <div class="content-panel">
                    <?php $this->load->view('questions/list.php'); ?>
                </div>
                <!--------------------
                END - Sidebar
                -------------------->
