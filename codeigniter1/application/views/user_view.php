<!doctype html>
<html>
    <head>
        <title>How to upload Multiple Files and Images in CodeIgniter</title>
    </head>
    <body>
        <b><?php if(isset($filenames)) echo "Successfully uploaded ".count($filenames)." files"; ?></b>

        <form method='post' action='<?php echo base_url(); ?>' enctype='multipart/form-data'>

            <input type='file' name='files[]' multiple > <br/><br/>
            <input type='submit' value='Upload' name='upload' />
        </form>
        
    </body>
</html>