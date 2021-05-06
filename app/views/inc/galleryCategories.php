<div class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php

    foreach ($data['galleries'] as $cat) :
        //$exclude = array('16');
    if($cat->gl_cat_id != 16) :
        $linkUrlLower = URLROOT . '/galleries/show/' . $cat->gl_cat_id . '/' . prettyUrl(cleanerUrl($cat->gl_cat_title));
        ?>
        <!-- Category list -->
        <div class="col-lg-3 offset-lg-0 col-sm-6 grid-item <?php echo $cat->gl_cat_class; ?>">
            <div class="category-block"><a class="" href="<?php echo $linkUrlLower; ?>">
                    <img src="<?php echo URLROOT . '/catImg/' . check_for_webp_version($cat->gl_cat_img); ?>">
                    <h3 class="lead"><?php echo $cat->gl_cat_title; ?> <span class="badge badge-info pb-1">
                            <small>(<?php echo $cat->img_count; ?>)</small></span></h3>
                <div class="category-list">
                    <p class="text-black">
                        <?php
                        $cat_string = str_replace(' | ', '<span class="sep_color"> | </span>', $cat->gl_cat_desc);
                        echo $cat_string; ?>
                    </p>
                </div>
                </a>
            </div>

        </div> <!-- /Category List -->

    <?php
    endif;
    endforeach; ?>
</div>
