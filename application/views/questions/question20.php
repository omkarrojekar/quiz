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
                                <label class="labeltext">Q20. Cancer is represented as</label>      
                                <label class="customradio"><span class="radiotextsty">Horse </span>
                                  <input type="radio" name="q20" value="Horse">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="customradio"><span class="radiotextsty">Scorpion </span>
                                  <input type="radio" name="q20" value="Scorpion">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="customradio"><span class="radiotextsty">Crab</span>
                                  <input type="radio" name="q20" value="Crab">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="customradio"><span class="radiotextsty">Spider</span>
                                  <input type="radio" name="q20" value="Spider">
                                  <span class="checkmark"></span>
                                </label>
                                <div class="form-buttons-w">
                                      <input type="hidden" name="question" value="question20">
                                      <button class="btn btn-primary" name="storeprogress" type="submit"> Submit</button>
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
