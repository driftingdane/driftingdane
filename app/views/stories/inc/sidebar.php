<aside class="layout-blog__sidebar">
        <!-- widget-text__widget -->
        <section class="widget-text__widget widget-text__style-02 widget">
            <?php
            require APPROOT . '/views/stories/inc/emailSignup.php';
            ?>
            <h3 class="widget-title text-black-50"><span class="color-orange-text">Cate</span>gories</h3>
            <div class="widget-text__content">
                    <?php foreach ($data['categories'] as $category) :

                        // URLROOT . '/categories/' . $category->ps_cat_slug . '/' . cleanerUrl($category->ps_cat_name);
                        ?>
                        <p style="padding-left:15px;">
                            <i class="fab fa-slack-hash"></i> <?php echo $category->ps_cat_name; ?><span class="badge"> (<?php echo $category->post_count; ?>)</span>
                        <br/><small class="btn-link text-black-50" style="text-decoration: none;"><?php echo $category->ps_cat_desc; ?></small>
                        </p>
                    <?php endforeach; ?>
            </div>
        </section><!-- End / widget-text__widget -->

    <!-- widget-text__widget -->
    <section class="widget-text__widget widget-text__style-02 widget">
        <h3 class="widget-title text-black-50">Gall<span class="color-orange-text">eries</span></h3>
        <div class="widget-text__content">
            <ul>
                <?php foreach ($data['galleries'] as $gal) :
                if($gal->gl_cat_id != 16) :
                    $sep_title = str_replace(' | ', '<span class="sep_color"> | </span>', $gal->gl_cat_desc);
                    ?>
                    <li><a class="eppMe"
                           href="<?php echo URLROOT . '/galleries/show/' . $gal->gl_cat_id . '/' . cleanerUrl($gal->gl_cat_title); ?>"><i
                                    class="fas fa-chevron-right text-dark"></i> <?php echo $gal->gl_cat_title; ?><span class="badge"> (<?php echo $gal->img_count; ?>)</span>
                        </a>
                        <a href="<?php echo URLROOT . '/galleries/show/' . $gal->gl_cat_id . '/' . cleanerUrl($gal->gl_cat_title); ?>">
                            <small class="btn-link text-black-50" style="text-decoration: none;"><?php echo $sep_title; ?></small>
                        </a>
                    </li>

                <?php
                endif;
                endforeach; ?>
            </ul>
        </div>
    </section><!-- End / widget-text__widget -->

</aside>