<div class="row grid" style="margin: 0 auto;">
    <!-- width of .grid-sizer used for columnWidth -->
    <div class="grid-sizer"></div>
    <?php
    foreach ($data['videos'] as $vid) :
        ?>
        <!-- Category list -->
        <div class="col-sm-4 grid-item">
            <div class="category-block p-1 pt-2 fitvids">
                <div class="category-list mb-3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $vid->vd_embed; ?>?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="youtube_layer trigger" src="https://www.youtube.com/embed/<?php echo $vid->vd_embed; ?>?rel=0" frameborder="0"  data-target="#videoModal" data-toggle="modal"></div>
                    <p class="text-black">
                        <?php echo utf8_encode($vid->vd_title); ?>
                    <p/>
                    <p class="text-black-50">
                        <?php echo utf8_encode($vid->vd_desc); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
