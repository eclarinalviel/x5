<?php
wp_enqueue_style('enrollment-content2', td() . '/css/enrollment-content2.css');
?>


<section class="enrollment content-two">
    <div>
        <form action="">
            <h2><?php _text('Enr:B2:Title')?></h2>
            <div class="content row">
                <div class="col-sm-4">
                    <div class="cover">
                        <div class="picture">
                            <img src="<?php img_e() ?>enrollment-icon1.png">
                        </div>
                        <div class="desc">
                            <?php _text('Minutes')?>
                        </div>
                        <div class="radio">
                            <div class="text"><input type="radio" name="min" value="20" checked> <?php _text('20mins')?></div>
                            <div class="text"><input type="radio" name="min" value="30"> <?php _text('30mins (5% discount)')?></div>

                            <div class="text"><input type="checkbox" name="min" value="40"> <?php _text('40mins (10% discount)')?></div>
                            <div class="text"><input type="checkbox" name="min" value="50"> <?php _text('50mins (15% discount)')?></div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cover">
                        <div class="picture">
                            <img src="<?php img_e() ?>enrollment-icon2.png">
                        </div>
                        <div class="desc">
                            <?php _text('Months')?>
                        </div>
                        <div class="radio">
                            <div class="text"><input type="radio" name="month" value="1" checked> <?php _text('1month')?></div>
                            <div class="text"><input type="radio" name="month" value="2"> <?php _text('2months (5% discount)')?></div>
                            <div class="text"><input type="radio" name="month" value="3"> <?php _text('3months (10% discount)')?></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cover">
                        <div class="picture">
                            <img src="<?php img_e() ?>enrollment-icon3.png">
                        </div>
                        <div class="desc">
                            <?php _text('Days')?>
                        </div>
                        <div class="radio">
                            <div class="text"><input type="radio" name="day" value="Monday - Friday" checked> <?php _text('Monday - Friday')?></div>
                            <div class="text"><input type="radio" name="day" value="Mon Wed Fri only"> <?php _text('Mon Wed Fri only')?></div>
                            <div class="text"><input type="radio" name="day" value="Tue Thu only"> <?php _text('Tue Thu only')?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summary">
                <div class="row">
                    <div class="result time col-sm-4">
			time select result and price
                    </div>
                    <div class="result month col-sm-4">
                        <label><?php _text('Enr:B2:Selected Month')?></label>
                        <label><?php _text('1month')?></label>
                    </div>
                    <div class="result day col-sm-4">
                        <label><?php _text('Enr:B2:Selected Day')?></label>
                        <label><?php _text('Monday-Friday')?></label>
                    </div>
                </div>
            </div>
            <nav>
                <div class="total"><?php _text('Total: 1,188,000')?></div>
                <div class="submit"><?php _text('Enr:B2:ENROLL NOW')?></div>
            </nav>
        </form>
    </div>
</section>
