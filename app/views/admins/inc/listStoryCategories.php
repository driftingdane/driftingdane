<div class="col-sm-10 profileCard mb-5">
    <form action="<?php echo URLROOT; ?>/admins/deleteStoryCategory" method="post">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered reports">

                <thead class="thead-dark mb-2">
                <tr>
                    <th class="text-center" scope="col"><span class="inline-span">ID:<input type="checkbox" id="gallery_all" /></span></th>
                    <th scope="col">Category</th>
                    <th class="text-center" scope="col">Description</th>
                    <th class="text-center" scope="col">Img</th>
                    <th class="text-center" scope="col">Created</th>
                    <th class="text-center" scope="col"><button type="submit" name="bulk_delete" class="btn btn-sm btn-danger delete_with_icon btn-block btn-block-xs"><i class="far fa-trash-alt"></i></button></th>

                </tr>
                </thead>
                <thead class="thead-light">
                <tbody>

                <?php
                if(is_array($data['categories'])) :
                    foreach($data['categories'] as $ps_cat) : ?>
                        <tr class="smaller-font">
                            <th class=""><input type="checkbox" name="files[]" id="delete_image" class="checkbox" value="<?php echo $ps_cat->ps_cat_id; ?>"></th>
                            <th class="text-center text-md-left" scope="col"><?php echo $ps_cat->ps_cat_name; ?></th>
                            <th class="text-center text-md-left" scope="col"><?php echo $ps_cat->ps_cat_desc; ?></th>
                            <th class="text-center text-md-left" scope="col"><img width="130" class="lazyload" data-src="<?php echo URLROOT . '/catImg/' . $ps_cat->ps_cat_img; ?>" alt="<?php echo $ps_cat->ps_cat_img; ?>"></th>
                            <th class="text-center text-md-left" scope="col"><?php echo infoDate($ps_cat->cat_created); ?></th>
                            <th class="text-center p-1" scope="col"><a href="<?php echo URLROOT . '/admins/editStoryCategory/' . $ps_cat->ps_cat_id; ?>" class="btn btn-block btn-light btn-sm btn-block-xs"><i class="far fa-edit"></i></a></th>
                        </tr>

                    <?php endforeach;
                endif;
                ?>
                </tbody>
                </thead>

            </table>
        </div>
    </form>
</div>