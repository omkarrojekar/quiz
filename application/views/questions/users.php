<div class="col-sm-12">
      <div class="element-wrapper">
            <h6 class="element-header">Users Status</h6>
            <div class="element-content">
              <div class="row">
                  <div class="col-sm-4 col-xxxl-4">
                      <a class="element-box el-tablo" href="#">
                          <div class="label">Connected User</div>
                          <div class="value" id="total"></div>
                      </a>
                  </div>
                  <div class="col-sm-4 col-xxxl-4">
                      <a class="element-box el-tablo" href="#">
                          <div class="label">Attempting User</div>
                          <div class="value" id="attempting"></div>
                      </a>
                  </div>
                  <div class="col-sm-4 col-xxxl-4">
                      <a class="element-box el-tablo" href="#">
                          <div class="label">Completed User</div>
                          <div class="value" id="attempted"></div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setInterval(function(){
        $('#total').load("<?php echo base_url();?>totalusers")
        $('#attempting').load("<?php echo base_url();?>attempting")
        $('#attempted').load("<?php echo base_url();?>attempted")

  },2);
  });
</script>
