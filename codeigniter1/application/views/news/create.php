<h2 class="text-center"><?php echo $title; ?></h2>
 
 <div class="row">
    <?php if($this->session->flashdata('added')){ 

echo "<h4 class='alert alert-info alert-dismissible offset-2 col-md-8'> <button type='button' class='close' data-dismiss='alert'>&times;</button>".$this->session->flashdata('added')."</h4>";
 }?>
 
       <div class="col-md-4  mx-auto ">
<?php echo validation_errors(); ?>
 
<?php echo form_open_multipart('news/create'); ?>    
 
           
       
            <label for="title">Title</label> 
            <input type="input" class="form-control" name="title" size="50" /> 
        
       
            <label for="text">Text</label> 
            <textarea name="text" class="form-control" rows="5" cols="40"></textarea> 
                
       
            <br>
            <input type="submit" class="btn btn-secondary btn-block" name="submit" value="Create news item" /> 
        
    
    
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />    
</form>
</div>
</div>