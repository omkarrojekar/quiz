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
                                  <label class="labeltext">Q11. This abbreviation represents a test for a protein that is produced by the prostate gland. The higher a man’s level, the more likely it is that he has prostate cancer.</label>      
                                  <label class="customradio"><span class="radiotextsty">CA- 125 </span>
                                    <input type="radio" name="q11" value="CA- 125">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">PPD </span>
                                    <input type="radio" name="q11" value="PPD">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">BRCA 1 </span>
                                    <input type="radio" name="q11" value="BRCA 1">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">PSA</span>
                                    <input type="radio" name="q11" value="PSA">
                                    <span class="checkmark"></span>
                                  </label>
                                  <div class="form-buttons-w">
                                        <input type="hidden" name="question" value="question11">
                                        <button class="btn btn-primary" name="storeprogress" type="submit"> Next</button>
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
