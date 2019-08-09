<div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>


                    <div class="element-wrapper">
                        <h6 class="element-header">Live Updates</h6>
                        <div class="element-box" id="list">
    
                        </div>
                    </div>
                    <!--------------------
                END - Team Members
                -------------------->

                <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function(){
        $('#list').load("<?php echo base_url();?>top")

  },1500);
  });
</script>
