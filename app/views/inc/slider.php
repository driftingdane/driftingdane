<!-- Slider HTML markup -->
<div id="slider" style="width:100%;height:550px;margin:0 auto;margin-bottom: 0px;">
<?php
foreach ($data['slider'] as $slide) :
?>
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:9000; transition2d:104; kenburnsscale:1.00;">
        <img src="<?php echo URLROOT . '/sliderImg/' . $slide->sl_img; ?>" class="ls-bg ls-hide-on-phone" alt="" />
        <img src="<?php echo URLROOT . '/sliderImg/mobile/' . $slide->sl_img; ?>" class="ls-bg ls-hide-on-tablet ls-hide-on-desktop" alt="" />
        <?php if(!empty($slide->sl_title) or !empty($slide->sl_desc)) : ?>
        <div style="width:300px; height:120px; background:#ffffff; top:100%; left:0%;" class="ls-l" data-ls="scalexin:0; durationout:400; scalexout:0; scaleyout:0; parallaxlevel:0;"></div>
        <p style="width:260px; white-space:normal;letter-spacing:1px; font-family: Lato, HelveticaNeue, Helvetica, Arial; font-size:18px; color:#363636; top:85%; left:20px; text-align: left;" class="ls-l" data-ls="offsetyin:100%; durationin:1500; delayin:400; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;"><?php echo ucwords($slide->sl_title); ?></p>
        <p style="width:260px; white-space:pre-line;font-family: Lato, HelveticaNeue, Helvetica, Arial; font-size:15px; color:#878787; top:90%; left:20px; text-align: left;" class="ls-l" data-ls="offsetyin:-100%; durationin:900; delayin:100; clipin:100% 0 0 0; durationout:400; parallaxlevel:0;"><?php echo $slide->sl_desc; ?></p>
        <?php endif; ?>
        <?php echo $slide->sl_data; ?>
    </div>
 <?php endforeach; ?>
</div>

