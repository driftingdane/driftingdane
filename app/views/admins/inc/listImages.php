<div class="col-md-9 col-sm-12 profileCard mb-5">
    <div class="profileCard-heading text-center mn-3">Photo list
        <?php
        foreach ($data['countImages'] as $count) : ?>
        <span class="text-primary">(<?php echo $count->im; ?>)</span>
        <?php
         endforeach;
        ?>
    </div>

<form action="<?php echo URLROOT; ?>/admins/deleteImage" method="post">
  <div class="table-responsive">
    <table class="table table-sm table-striped table-bordered reports">
        <thead class="thead-dark mb-2">
        <tr>
            <th class="text-center" scope="col"><span class="inline-span">ID:</th>
            <th scope="col" class="w-20">Title</th>
            <th class="text-center w-25" scope="col">Img</th>
            <th class="text-center w-25" scope="col">Description</th>
            <th scope="col" class="text-center w-20">Category</th>
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
        if(is_array($data['images'])) :
            foreach($data['images'] as $gl) : ?>
                <tr class="smaller-font">
                    <th><input type="checkbox" name="files[]" id="delete_image" class="checkbox" value="<?php echo $gl->gl_id; ?>"><p class="hide_date small"><?php echo $gl->gl_id; ?></p></th>
                    <th class="text-center text-md-left w-20" scope="col"><?php echo $gl->gl_title; ?></th>
                    <th class="text-center text-md-left w-25" scope="col"><img class="img-fluid lazyload" data-src="<?php echo URLROOT . '/photoImg/thumbs/' . $gl->gl_img; ?>" alt="<?php echo $gl->gl_img; ?>">
                        <!-- Trigger -->
                        <a href="#" class="border-0 photoLink" data-clipboard-action="copy" data-toggle="tooltip" title="Link copied" data-clipboard-text="<?php echo URLROOT . '/photoImg/mobile/' . $gl->gl_img; ?>">
                            Copy
                        </a>
                    </th>
                    <th class="text-center text-md-left w-25" scope="col"><?php echo $gl->gl_desc; ?></th>
                    <th class="text-center text-md-left w-20" scope="col"><?php echo $gl->gl_cat_title; ?></th>
                    <th class="text-center text-md-left hide_date" scope="col"><?php echo infoDate($gl->gl_created); ?></th>
                    <th class="text-center p-1" scope="col"><a href="<?php echo URLROOT . '/admins/editImage/' . $gl->gl_id; ?>" class="btn btn-block btn-light btn-sm btn-block-xs"><i class="far fa-edit"></i></a></th>
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