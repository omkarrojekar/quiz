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
      <label class="labeltext">Q4. Which of the following brand of AZ is indicated in prostate cancer?</label>      
      <label class="customradio"><span class="radiotextsty">Lynparza</span>
        <input type="radio" name="q4" value="Lynparza">
        <span class="checkmark"></span>
      </label>
      <label class="customradio"><span class="radiotextsty">Tagrisso</span>
        <input type="radio" name="q4" value="Tagrisso">
        <span class="checkmark"></span>
      </label>
      <label class="customradio"><span class="radiotextsty">Zoladex</span>
        <input type="radio" name="q4" value="Zoladex">
        <span class="checkmark"></span>
      </label>
      <label class="customradio"><span class="radiotextsty">Imfinzi</span>
        <input type="radio" name="q4" value="Imfinzi">
        <span class="checkmark"></span>
      </label>
      <div class="form-buttons-w">
            <input type="hidden" name="question" value="question4">
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
