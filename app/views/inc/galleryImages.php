<div id="lightgallery" class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
    foreach ($data['images'] as $img) :
      $info = utf8_encode(ucfirst($img->gl_desc));
      if(empty($img->gl_desc)) { $info = $img->gl_title; }
      $img->gl_folder = str_replace(" ", "", trim($img->gl_folder));

        if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false || strpos($_SERVER['HTTP_USER_AGENT'], ' Chrome/') !== false) {
            //echo "webp is supported!";
            $pic = str_replace(".jpg", ".webp", $img->gl_img);
        }
        else {
            /// do nothing
        }

        ?>
    <!-- Category list -->
    <div class="col-sm-3 grid-item" data-responsive="<?php echo URLROOT . '/photoImg/mobile/' .  $pic; ?> 600" data-src="<?php echo URLROOT . '/photoImg/' . $img->gl_folder . '/' .  str_replace(" ", "", $pic);; ?>"
         data-sub-html="<p><small class='text-black sep_color'><?php if (isLoggedIn() and adminAut): ?>
                        <i class='fas fa-user-shield'></i><a title='Edit image' target='_new' href='<?php echo URLROOT . '/admins/editImage/' . $img->gl_id; ?>'> Edit</a>
                        <?php endif; ?></small></p><h4 class='font-s'><?php echo utf8_encode(ucfirst($img->gl_title)); ?></h4><p class='font-s'><?php echo utf8_encode(ucfirst($img->gl_desc)); ?></p>">
       <div class="category-block p-1 pt-2">
        <a href="#" data-toggle="tooltip" title="<?php echo $info; ?>"><span class="tooltip-qm"></span>
         <img class="lazyload" src="<?php echo URLROOT . '/photoImg/thumbs/' . $pic; ?>" data-original="<?php echo URLROOT . '/photoImg/' . $img->gl_folder . '/' .  $pic; ?>" alt="<?php echo $info; ?>">
          <div class="category-list mb-3">
              <small class="text-black-50 smaller-font">
                  <?php echo utf8_encode($img->gl_title); ?>
              </small>
              <small class="text-black">
                  <p><?php echo utf8_encode(ucfirst($img->gl_desc)); ?></p>
              </small>
          </div>
        </a>
      </div>
    </div>
<?php endforeach; ?>
</div>
