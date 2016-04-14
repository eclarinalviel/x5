<?php
get_header();
?>
    <h2>Forum EDIT</h2>


    <script>
        var url_endpoint = "<?php echo home_url("category/forum")?>";
        var max_upload_size = <?php echo wp_max_upload_size();?>;
    </script>


    <section id="post-new">
        <form action="<?php echo home_url("category/forum")?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="do" value="post_create">
            <input type="hidden" name="category_id" value="<?php echo $category_id?>">
            <label for="title">Title</label>
            <div class="text">
                <input type="text" id="title" name="title">
            </div>

            <label for="content">Content</label>
            <div class="text">

                <?php
                $content = '';
                $editor_id = 'content';
                $settings = array( 'media_buttons' => false, 'textarea_rows' => 20,
                    'quicktags' => false
                );
                wp_editor( $content, $editor_id, $settings );

                ?>

            </div>

            <div class="photos"></div>
            <div class="files"></div>

            <div class="file-upload">
                <span class="dashicons dashicons-camera"></span>
                <span class="text">Choose File</span>
                <input type="file" name="file" onchange="forum.on_change_file_upload(this);" style="opacity: .001;">
            </div>
            <div class="loader">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/forum/img/loader14.gif">
                File upload is in progress. Please wait.
            </div>

            <label for="post-submit-button"><input id="post-submit-button" type="submit"></label>
            <label for="post-cancel-button"><div id="post-cancel-button">Cancel</div></label>

        </form>
    </section>





<?php
get_footer();
?>