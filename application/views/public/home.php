<body id="register-back" class="menu-position-side menu-side-left  with-content-panel">

<div class="auth-box-w wider">
           <div class="logo-w"></div>
           <h4 class="auth-header">Register Here</h4>
           <form action="<?php echo base_url(); ?>home/storeuserdetails" method="POST">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="form-group"><label for=""> First Name</label><input class="form-control" placeholder="First Name" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>">
                         <div class="pre-icon os-icon os-icon-user"></div>
                     </div>
                 </div>
                 <div><?php echo form_error('firstName', '<div class="error" style="color:white;">', '</div>'); ?></div>
                 <div class="col-sm-12">
                     <div class="form-group"><label for="">Last Name</label><input class="form-control" placeholder="Last Name" type="text" 
                      name="lastName" value="<?php echo set_value('lastName'); ?>">
                       <div class="pre-icon os-icon os-icon-user"></div></div>
                 </div>
                 <?php echo form_error('lastName', '<div class="error" style="color:white;">', '</div>'); ?>
             </div>
               <div class="form-group"><label for=""> Email address</label><input class="form-control" placeholder="Enter email" type="email" name="email" value="<?php echo set_value('email'); ?>">
                   <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                   <?php echo form_error('email', '<div class="error" style="color:white;">', '</div>'); ?>
               </div>

               <div class="buttons-w">
                <input type="submit" value="Start Quiz" name="submit details" class="btn btn-success">
               </div>
           </form>
       </div>
  