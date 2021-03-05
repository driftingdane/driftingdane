<div class="col-md-9 col-sm-12 profileCard mb-5">
    <form action="<?php echo URLROOT; ?>/admins/deleteCategory" method="post">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered reports">

                <thead class="thead-dark mb-2">
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th scope="col" class="w-20">Category</th>
                    <th class="text-center w-25" scope="col">Img</th>
                    <th class="text-center w-25" scope="col">Description</th>
                    <th class="text-center" scope="col">Created</th>
                    <th class="text-center" scope="col"></th>

                </tr>
                </thead>
                <thead class="thead-light">
                <tbody>
                <button type="submit" name="bulk_delete" title="Delete files" class="btn btn-sm btn-danger delete_with_icon btn-block-xs"><i class="far fa-trash-alt"></i></button>
                <p class="inline-span">Select all:</br>
                    <input type="checkbox" id="gallery_all"></p>
                <?php
                if(is_array($data['categories'])) :
                    foreach($data['categories'] as $gl_cat) : ?>
                        <tr class="smaller-font">
                            <th class=""><input type="checkbox" name="files[]" id="delete_image" class="checkbox" value="<?php echo $gl_cat->gl_cat_id; ?>"><p class="hide_date small"><?php echo $gl_cat->gl_cat_id; ?></p></th>
                            <th class="text-center text-md-left w-20" scope="col"><?php echo $gl_cat->gl_cat_title; ?></th>
                            <th class="text-center text-md-left w-25" scope="col"><img class="img-fluid lazyload" data-src="<?php echo URLROOT . '/catImg/' . $gl_cat->gl_cat_img; ?>" alt="<?php echo $gl_cat->gl_cat_img; ?>"></th>
                            <th class="text-center text-md-left w-25" scope="col"><?php echo $gl_cat->gl_cat_desc; ?></th>
                            <th class="text-center text-md-left" scope="col"><?php echo infoDate($gl_cat->gl_cat_created); ?></th>
                            <th class="text-center p-1" scope="col"><a href="<?php echo URLROOT . '/admins/editCategory/' . $gl_cat->gl_cat_id; ?>" class="btn btn-block btn-light btn-sm btn-block-xs"><i class="far fa-edit"></i></a></th>
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