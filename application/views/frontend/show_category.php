<ul class="nav nav-pills nav-stacked">
    <?php foreach($ct_list as $ct){ ?>
        <li><a href="<?php echo base_url()?>post/get_all_post_id/<?php echo $ct['ct_id'];?>"><?php echo $ct['ct_name']?></a></li>
    <?php } ?>
</ul>