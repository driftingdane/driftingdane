<div id="lightgallery" class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
    foreach ($data['images'] as $img) :
      $info = ucfirst($img->gl_desc);
      $sep_title = str_replace("|", "<span class='sep_color'> | </span>", $img->gl_title);
      if(empty($img->gl_desc)) { $info = $img->gl_title; }
     ?>
    <!-- Category list -->
    <div class="col-sm-3 grid-item" data-responsive="<?php echo URLROOT . '/photoImg/mobile/' .  get_webp($img->gl_img); ?> 600" data-src="<?php echo URLROOT . '/photoImg/' . remove_white($img->gl_folder) . '/' .  remove_white(get_webp($img->gl_img)); ?>"
         data-sub-html="<p><small class='text-black sep_color'><?php if (isLoggedIn() and adminAut): ?><i class='fas fa-user-shield'></i><a title='Edit image' target='_new' href='<?php echo URLROOT . '/admins/editImage/' . $img->gl_id; ?>'> Edit</a>
                        <?php endif; ?></small></p><h4 class='font-s'><?php echo ucfirst($sep_title); ?></h4><p class='font-s'><?php echo ucfirst($img->gl_desc); ?></p>">
       <div class="category-block p-1 pt-2">
        <a href="#" data-toggle="tooltip" title="<?php echo $info; ?>"><span class="tooltip-qm"></span>
         <img class="lazyload" src="<?php echo URLROOT . '/photoImg/thumbs/' . get_webp($img->gl_img); ?>" data-original="<?php echo URLROOT . '/photoImg/' . remove_white($img->gl_folder) . '/' .  remove_white(get_webp($img->gl_img)); ?>" alt="<?php echo $info; ?>">
          <div class="category-list mb-3">
              <p class="text-black-50 smaller-font">
                  <?php echo $sep_title; ?>
              </p>
                  <p class="text-black pt-1 pr-4 pl-4"><?php echo ucfirst($img->gl_desc); ?></p>
          </div>
        </a>
      </div>
    </div>
<?php endforeach; ?>
</div>
