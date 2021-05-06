<div class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
         foreach($data['postByCat'] as $by) :
             $linkUrlLower = URLROOT . '/stories/show/' . $by->ps_slug . '/' . prettyUrl(cleanerUrl($by->ps_title));
             ?>
            <!-- Category list -->
            <div class="col-lg-3 offset-lg-0 col-sm-6 grid-item">
                <div class="category-block"><a class="" href="<?php echo $linkUrlLower; ?>">
                        <img src="<?php echo URLROOT . '/storyImg/feat/' . check_for_webp_version($by->ps_img); ?>">
                        <h3 class="lead"><?php echo $by->ps_cat_name; ?> <span class="badge badge-info pb-1"></h3>
                        <h5><?php echo $by->ps_title; ?></h5>
                        <div class="category-list">
                            <p class="text-black">
                                <?php
                                $cat_string = str_replace(' | ', '<span class="sep_color"> | </span>', $by->ps_sub_title);
                                echo $cat_string; ?>
                            </p>
                        </div>
                    </a>
                </div>

            </div> <!-- /Category List -->
        <?php
    endforeach; ?>
</div>
