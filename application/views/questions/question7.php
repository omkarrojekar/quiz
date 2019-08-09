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
                                  <label class="labeltext">7. Which of the following best describes cancer as a disease?</label>      
                                  <label class="customradio"><span class="radiotextsty">Transmitted by Insects</span>
                                    <input type="radio" name="q7" value="Transmitted by Insects">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Caused by Infected Water</span>
                                    <input type="radio" name="q7" value="Caused by Infected Water">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Uncontrolled Cell Growth</span>
                                    <input type="radio" name="q7" value="Uncontrolled Cell Growth">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Treated With Antibiotics</span>
                                    <input type="radio" name="q7" value="Treated With Antibiotics">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Transmitted Through The Air</span>
                                    <input type="radio" name="q7" value="Transmitted Through The Air">
                                    <span class="checkmark"></span>
                                  </label>
                                  <div class="form-buttons-w">
                                        <input type="hidden" name="question" value="question7">
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
