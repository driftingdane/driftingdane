<div class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
    foreach ($data['categories'] as $cat) :
        $linkUrlLower = URLROOT . '/videos/show/' . $cat->vd_cat_id . '/' . prettyUrl(cleanerUrl($cat->vd_cat_title));
        ?>
        <!-- Category list -->
        <div class="col-lg-3 offset-lg-0 col-sm-6 grid-item <?php echo $cat->vd_cat_class; ?>">
            <div class="category-block"><a class="" href="<?php echo $linkUrlLower; ?>">
                    <img src="<?php echo URLROOT . '/catImg/' . $cat->vd_cat_img; ?>">
                    <h3 class="lead"><?php echo $cat->vd_cat_title; ?> <span class="badge badge-info"><small>(<?php echo $cat->vid_count; ?>)</small></span></h3>
                    <div class="category-list">
                        <small class="text-black-50">
                            <?php echo $cat->vd_cat_desc; ?>
                        </small>
                    </div>
                </a>

            </div>

        </div> <!-- /Category List -->

    <?php endforeach; ?>
</div>
