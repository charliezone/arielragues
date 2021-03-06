<div class="eg-each-item <?php echo $animation_class; ?> <?php echo isset($gallery_item_details[ 'filters' ]) ? implode(' ', array_map('esc_attr', $gallery_item_details[ 'filters' ])) : ''; ?>" data-eg-item-key="<?php echo $gallery_item_key; ?>">
    <?php
    global $eg_settings;
    $image_source_type = esc_attr($gallery_details[ 'layout' ][ 'image_source_type' ]);
    if ( isset($gallery_item_details[ 'audio_preview_image_id' ]) && $gallery_item_details[ 'audio_preview_image_id' ] != '' ) {
        $gallery_attachment_id = esc_attr($gallery_item_details[ 'audio_preview_image_id' ]);
        $gallery_attachment_array = wp_get_attachment_image_src($gallery_attachment_id, $image_source_type);
        $preview_image_url = $gallery_attachment_array[ 0 ];
        $attachment_full_src = wp_get_attachment_image_src($gallery_attachment_id, 'full');
    } else {
        $default_preview_image = EG_IMG_DIR . 'no-preview.jpg';
        $preview_image_url = ($eg_settings[ 'audio_preview_image_url' ] != '') ? esc_url($eg_settings[ 'audio_preview_image_url' ]) : $default_preview_image;
    }
    if ( $gallery_item_details[ 'audio_type' ] == 'soundcloud' && $gallery_item_details[ 'audio_type' ] != '' ) {
        $audio_url = esc_url($gallery_item_details[ 'audio_url' ]);

        $client_id = isset($eg_settings[ 'soundcloud_client_id' ]) ? esc_attr($eg_settings[ 'soundcloud_client_id' ]) : '';
        $get = wp_remote_get("https://api.soundcloud.com/resolve.json?url=$audio_url&client_id=$client_id");
        $retrieve = wp_remote_retrieve_body($get);
        $result = json_decode($retrieve, true);
        if ( preg_match("/(errors)+/", $retrieve) ) {
            return false;
        }

        $track_id = $result[ 'id' ];
        $audio_url = "https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/$track_id&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;visual=true";
    } else {
        $audio_url = esc_url($gallery_item_details[ 'self_audio_url' ]);
    }
    $hover_animation_components = isset($gallery_details[ 'hover' ][ 'hover_animation_components' ]) ? array_map('esc_attr', $gallery_details[ 'hover' ][ 'hover_animation_components' ]) : array();
    $read_more_label = (isset($gallery_details[ 'layout' ][ 'blog' ][ 'read_more_label' ]) && $gallery_details[ 'layout' ][ 'blog' ][ 'read_more_label' ] != '') ? esc_attr($gallery_details[ 'layout' ][ 'blog' ][ 'read_more_label' ]) : __('Read More', 'everest-gallery');

    //  $gallery_attachment_id = esc_attr($gallery_item_details[ 'attachment_id' ]);
    ?>


    <?php
    if ( $gallery_details[ 'layout' ][ 'layout_type' ] == 'blog' ) {
        $item_counter_flag = ($item_counter % 2 != 0) ? $item_counter + 1 : $item_counter;
        $layout_extra_class = (($item_counter_flag / 2) % 2 == 0) ? 'eg-blog-image-right' : 'eg-blog-image-left';
        ?>
        <!---Blog Layout -->
        <div class="eg-blog-item-inner-wrap clearfix <?php echo $layout_extra_class; ?>">
            <div class="eg-overlay-wrapper clearfix">
                <div class="blog-header" style="display:none">
                    <span><?php echo esc_attr($gallery_item_details[ 'item_title' ]); ?></span>
                </div>
                <div class="blog-image-holer">
                    <a href="<?php echo $audio_url; ?>"
                       data-lightbox-type="<?php echo esc_attr($gallery_details[ 'lightbox' ][ 'lightbox_type' ]); ?>"
                       rel="prettyPhoto[gallery_<?php echo $gallery_row[ 'gallery_id' ]; ?>]"
                       title="<?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?>"
                       data-item-type="<?php echo $gallery_item_type; ?>"
                       data-index="<?php echo $item_counter; ?>"
                       data-total-items="<?php echo $total_items; ?>"
                       data-audio-type="<?php echo esc_attr($gallery_item_details[ 'audio_type' ]); ?>"
                       data-audio-url="<?php echo $audio_url; ?>"
                       data-self-audio-url="<?php echo esc_attr($gallery_item_details[ 'self_audio_url' ]) ?>"
                       >
                        <img src="<?php echo $preview_image_url; ?>" alt="<?php echo $gallery_item_details[ 'item_title' ]; ?>"/>
                    </a>
                    <div class="eg-mask">
                        <div class="eg-inner-wrapper">
                            <?php include(EG_PATH . 'includes/views/frontend/gallery-item-types/blog-content-holder.php'); ?>
                        </div>
                    </div>
                    <?php if ( isset($gallery_details[ 'layout' ][ 'item_icon' ]) ) {
                            ?>
                            <div class="eg-item-type-icon"><i class="fa fa-music" aria-hidden="true"></i></div>
                            <?php
                        }
                        ?>
                </div>
                <?php if ( in_array('title', $hover_animation_components) || in_array('caption', $hover_animation_components) ) { ?>
                    <div class="eg-blog-caption">
                        <?php if ( in_array('title', $hover_animation_components) ) { ?>
                            <span class="eg-title"><?php echo esc_attr($gallery_item_details[ 'item_title' ]); ?></span>
                        <?php } ?>
                        <?php if ( in_array('title', $hover_animation_components) ) { ?>
                            <p><?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?>
                                <a href="<?php echo esc_url($gallery_item_details[ 'item_link' ]); ?>" class="read-more" target="<?php echo $link_target;?>"><?php echo $read_more_label; ?></a>
                            </p>
                        <?php } ?>
                        <a href="<?php echo esc_url($gallery_item_details[ 'item_link' ]); ?>" class="read-more" target="<?php echo $link_target;?>"><?php echo $read_more_label; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else {
        ?>
        <div class="eg-masonary-padding">
            <div class="eg-overlay-wrapper">
                <a href="<?php echo $audio_url; ?>"
                   data-lightbox-type="<?php echo esc_attr($gallery_details[ 'lightbox' ][ 'lightbox_type' ]); ?>"
                   rel="prettyPhoto[gallery_<?php echo $gallery_row[ 'gallery_id' ]; ?>]"
                   title="<?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?>"
                   data-item-type="<?php echo $gallery_item_type; ?>"
                   data-index="<?php echo $item_counter; ?>"
                   data-total-items="<?php echo $total_items; ?>"
                   data-audio-type="<?php echo esc_attr($gallery_item_details[ 'audio_type' ]); ?>"
                   data-audio-url="<?php echo $audio_url; ?>"
                   data-self-audio-url="<?php echo esc_attr($gallery_item_details[ 'self_audio_url' ]) ?>"
                   >
                    <img src="<?php echo $preview_image_url; ?>" alt="<?php echo $gallery_item_details[ 'item_title' ]; ?>"/>
                </a>
                <div class="eg-mask">
                    <div class="eg-inner-wrapper">
                        <?php include(EG_PATH . 'includes/views/frontend/gallery-item-types/content-holder.php'); ?>
                    </div>
                    <span class="add" style="display: none">
                        <i class="fa fa-plus"></i>
                    </span>
                    <?php if ( in_array('title', $hover_animation_components) || in_array('caption', $hover_animation_components) ) { ?>
                        <div class="eg-caption-holder" style="display: none">
                            <?php if ( in_array('title', $hover_animation_components) ) { ?>
                                <span class="eg-title"><?php echo esc_attr($gallery_item_details[ 'item_title' ]); ?></span>
                            <?php } ?>
                            <?php if ( in_array('caption', $hover_animation_components) ) { ?>
                                <p><?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?></p>
                            <?php } ?>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="slider-overlay"></div>
                <?php if ( isset($gallery_details[ 'layout' ][ 'item_icon' ]) ) {
                    ?>
                    <div class="eg-item-type-icon"><i class="fa fa-music" aria-hidden="true"></i></div>
                    <?php
                }
                ?>
            </div>
            <?php if ( $gallery_details[ 'layout' ][ 'layout_type' ] == 'filmstrip' && in_array('title', $hover_animation_components) || in_array('caption', $hover_animation_components) ) { ?>
                <div class="eg-slider-caption eg-filmstrip-caption">
                    <?php if ( in_array('title', $hover_animation_components) ) { ?>
                        <span class="eg-title" style="display:none"><?php echo esc_attr($gallery_item_details[ 'item_title' ]); ?></span>
                        <?php
                    }
                    if ( in_array('caption', $hover_animation_components) ) {
                        ?>
                        <p><?php echo esc_attr($gallery_item_details[ 'item_caption' ]); ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php }
    ?>
</div>