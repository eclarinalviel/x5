<?php
wp_enqueue_style('curriculum-content1', td() . '/css/curriculum-content1.css');
?>
<section class="curriculum content-one">
    <div>
        <div class="img1 banner">
            <img src="<?php img_e() ?>curriculum-banner-image1.png">
        </div>
        <div class="text banner">
            <h2><?php _text('Cur:B1:Curricumlum')?></h2>
            <div class="desc">
                <?php _text('Cur:B1:Banner Description will be place here')?>
            </div>
        </div>
        <div class="img2">
            <img src="<?php img_e() ?>curriculum-banner-image2.png">
        </div>
    </div>
</section>