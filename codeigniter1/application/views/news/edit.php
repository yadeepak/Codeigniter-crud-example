
<h2 class="text-center"><?php echo $title; ?></h2>
 
 <div class="row">
       <div class="col-md-4  mx-auto">
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
 
           
       
            <label for="title">Title</label> 
            <input type="input" class="form-control" name="title" size="50" value="<?php echo $news_item['title'] ?>" /> 
        
       
            <label for="text">Text</label> 
            <textarea name="text" class="form-control" rows="5" cols="40"><?php echo $news_item['text'] ?></textarea> 
                
       
            <br>
            <input type="submit" class="btn btn-secondary btn-block" name="submit" value="Create news item" /> 
        
    
    
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />    
</form>
</div>
</div>