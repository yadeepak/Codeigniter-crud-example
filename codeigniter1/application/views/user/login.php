<p>
    <?php echo $this->session->flashdata('verify_msg'); ?>
</p>
 
 
<?php $butes = array("name" => "loginform"); ?>
<div class="row">
       <div class="col-md-4  offset-4 ">
        <h4 class="text-center">User Login Form</h4>

     <?php  echo form_open("user/login", $butes);?>

       <label for="email">Email</label><input class="form-control" name="email" placeholder="Email-ID" type="text" /> <span style="color:red"><?php echo form_error('email'); ?></span>
        
       
       <label for="subject">Password</label><input class="form-control" name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span>
            <br>
       
       
       <button class="btn btn-secondary btn-block" name="submit" type="submit">Login</button>        
    
<?php echo form_close(); ?>
 </div>
</div>
<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
