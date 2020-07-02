<div id="lightgallery" class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
    foreach ($data['images'] as $img) :
    ?>
    <!-- Category list -->
    <div class="col-sm-3 grid-item" data-responsive="<?php echo URLROOT . '/photoImg/mobile/' .  $img->gl_img; ?> 600" data-src="<?php echo URLROOT . '/photoImg/' . $img->gl_folder . '/' .  $img->gl_img; ?>"
         data-sub-html="<h4 id='font-s'><?php echo utf8_encode(ucfirst($img->gl_title)); ?></h4><p><?php echo utf8_encode(ucfirst($img->gl_desc)); ?></p>">
       <div class="category-block p-1 pt-2">
        <a href="#">
         <img src="<?php echo URLROOT . '/photoImg/thumbs/' . $img->gl_img; ?>" data-original="<?php echo URLROOT . '/photoImg/' . $img->gl_folder . '/' .  $img->gl_img; ?>" title="<?php echo $img->gl_title; ?>" alt="<?php echo $img->gl_title; ?>">
          <div class="category-list mb-3">
            <small class="text-black-50">
                <?php echo utf8_encode($img->gl_title); ?>
            </small>
          </div>
        </a>
      </div>
    </div>
<?php endforeach; ?>
</div>
