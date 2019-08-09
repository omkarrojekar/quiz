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
                                  <label class="labeltext">Q13. The Naming of the Rooms in AZ office are on the basis of:</label>      
                                  <label class="customradio"><span class="radiotextsty">Lakes </span>
                                    <input type="radio" name="q13" value="Lakes">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Ponds</span>
                                    <input type="radio" name="q13" value="Ponds">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Rivers </span>
                                    <input type="radio" name="q13" value="Rivers">
                                    <span class="checkmark"></span>
                                  </label>
                                  <label class="customradio"><span class="radiotextsty">Sea</span>
                                    <input type="radio" name="q13" value="Sea">
                                    <span class="checkmark"></span>
                                  </label>
                                  <div class="form-buttons-w">
                                        <input type="hidden" name="question" value="question13">
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
