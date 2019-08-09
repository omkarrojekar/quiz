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
      <label class="labeltext">Q2. What is the leading cause of cancer death worldwide?</label>      
         <label class="customradio"><span class="radiotextsty">Lung Cancer</span>
                                      <input type="radio" name="q2" value="Lung Cancer">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Liver Cancer</span>
                                      <input type="radio" name="q2" value="Liver Cancer">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Stomach Cancer</span>
                                      <input type="radio" name="q2" value="Stomach Cancer">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Colorectal Cancer</span>
                                      <input type="radio" name="q2" value="Colorectal Cancer">
                                      <span class="checkmark"></span>
                                    </label>
                                    <label class="customradio"><span class="radiotextsty">Breast Cancer</span>
                                      <input type="radio" name="q2" value="Breast Cancer">
                                      <span class="checkmark"></span>
                                    </label>
      <div class="form-buttons-w">
            <input type="hidden" name="question" value="question2">
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
</body>