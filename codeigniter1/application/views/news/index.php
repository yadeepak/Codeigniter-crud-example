<h2 class="text-center"><?php echo $title; ?></h2>
  <?php ?>
<table  cellpadding='4' class="table table-hover table-bordered">
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td>
                <a href="<?php echo base_url('news/view/'.$news_item['slug']); ?>">View</a> 
                
                <?php if ($this->session->userdata('is_logged_in')) { ?>
                | 
                <a href="<?php echo base_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo base_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                <?php } // end if ?>
                
            </td>
        </tr>
<?php endforeach; ?>
</table>
