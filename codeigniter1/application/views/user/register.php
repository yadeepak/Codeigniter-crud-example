
<p>
    <?php echo $this->session->flashdata('verify_msg'); ?>
</p>
 <div class="row">
       <div class=" col-md-4 mx-auto ">
<h4 class="text-center">User Regtion Form</h4>
 
<?php $butes = array("name" => "regtionform");
echo form_open("user/register", $butes);?>

   
       <label for="name">First Name</label>
       <input name="firstname" class="form-control" placeholder="First Name" type="text" value="<?php echo set_value('fname'); ?>" /> <span style="color:red"><?php echo form_error('firstname'); ?></span>
        
   
       <label for="name">Last Name</label><input name="lastname" class="form-control" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" /> <span style="color:red"><?php echo form_error('lastname'); ?></span>
        
       
       <label for="email">Email ID</label><input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" /> <span style="color:red"><?php echo form_error('email'); ?></span>
        
       
       <label for="subject">Password</label><input class="form-control" name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span>
        
       
       <label for="subject">Confirm Password</label><input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" /> <span style="color:red"><?php echo form_error('cpassword'); ?></span>
        
       
       <br>

       <button name="submit" class=" btn btn-secondary btn-block" type="submit">Signup</button>        
    

    
<?php echo form_close(); ?>
 </div>
</div>
<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
