<?php
wp_enqueue_style('reservation', td() . '/css/reservation.css');
wp_enqueue_script('reservation', td() . '/js/reservation.js');

$m = in('m', date('m'));
$Y = in('Y', date('Y'));

$re = class_list_by_month($Y, $m);
if ( $re['code'] ) { // error from server
    // warning_e($re['message']);
    $re['data'] = [];
}


$books = $re['data'];
$data = $books ? prepare_books_by_date( $books ) : [];
//di($books);
include 'part/reservation-content1.php';
?>



<section class="reservation content-two">
    <div>
        <?php if ( is_user_logged_in() ) : ?>
            <?php if ( empty( $books ) ) : ?>
                <?php _e("You have no reservations", 'x5'); ?>
            <?php else : ?>
                <?php _e("No. of Reservations", 'x5'); ?> : <?php echo  count($books); ?>
            <?php endif; ?>
        <?php else : ?>
            <!--?php _e('Please login to see your reservation', 'x5'); ?-->
            <img class="reminder" src="<?php img_e() ?>reservation-content2-image1.png">
        <?php endif; ?>


        <h2><?php _e("Class Reservation", 'x5')?></h2>
        <?php include '/part/reservation-header.php'?>

        <div class="desc">
            <?php echo draw_calendar($m, $Y, $data); ?>
        </div>

        <nav>
            <i class="fa fa-th-large" aria-hidden="true"></i>
            <div class="calendar-view">CALENDAR VIEW</div>
            <div class="list-view">LIST VIEW</div>
        </nav>
    </div>
</section>

<script>
    jQuery(function($){
        $('.book').popover({
            html: true,
            placement: 'left'
        });
        $('.book')
            .mouseenter(function(){
                $(this).popover('show');
            })
            .mouseleave(function(){
                $(this).popover('hide');
            });
        var $book = $('.book[date="<?php echo date('Ymd')?>"]:eq(0)');
        if ( $book.length ) {
            $book.popover('show');
            $('.calendar').bind('mouseenter', on_calendar_mouseenter);
            function on_calendar_mouseenter() {
                $book.popover('hide');
                console.log('mouseenter: calendar');
                $('.calendar').unbind('mouseenter', on_calendar_mouseenter);
            }
        }
    });
</script>


