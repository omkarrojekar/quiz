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
                                  <label class="labeltext">Q8. Which of the following cancers is a cancer of the blood that often starts in the bone marrow?</label>      
                                  <label class="customradio"><span class="radiotextsty">Breast Cancer </span>
                                    <input type="radio" name="q8" value="Breast Cancer">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Leukemia</span>
                                    <input type="radio" name="q8" value="Leukemia">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Lung Cancer</span>
                                    <input type="radio" name="q8" value="Lung Cancer">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Melanoma</span>
                                    <input type="radio" name="q8" value="Melanoma">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Prostate Cancer</span>
                                    <input type="radio" name="q8" value="Prostate Cancer">
                                    <span class="checkmark"></span>
                                  </label>
                                  
                                  <div class="form-buttons-w">
                                        <input type="hidden" name="question" value="question8">
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
