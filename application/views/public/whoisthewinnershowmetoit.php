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
                                <h6 class="element-header">Winnner of Quiz</h6>
                                <div class="element-wrapper">
    <div class="element-box-tp">
        <div class="element-box-tp">
            <!--------------------
START - Table with actions
------------------  -->
            <div class="table-responsive" id="winner">
               
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


  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
             <script type="text/javascript">
  $(document).ready(function() {
    setInterval(function(){
        $('#winner').load("<?php echo base_url();?>winner")

  },2000);
  });
</script>