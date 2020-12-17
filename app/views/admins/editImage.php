<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">

                        <?php require APPROOT . '/views/admins/inc/editGalleryimage.php'; ?>

                        <div class="card card-body bg-light mb-5">
                            <?php echo flash('resume_message'); ?>
                            <h2>Edit image</h2>
                            <?php echo flash_error('resume_errors'); ?>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form action="<?php echo URLROOT . '/admins/editImage/' . $data['imageById']->gl_id; ?>" class="icon-form process" enctype="multipart/form-data" method="post" novalidate>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ; ?>">
                                <div class="col-md-12 mb-3">
                                    <label for="glCat"><i class="far fa-flag formIcons"></i> Category: <sub>*</sub></label>
                                    <select id="glCat" name="glCat" class="custom-select custom-select-lg mb-3 <?php echo (!empty($data['glCat_err'])) ? 'is-invalid' : ''; ?>" required>
                                        <option value="" selected><?php echo $data['imageById']->gl_cat_title; ?></option>
                                        <?php
                                        if(is_array($data['categories'])) :
                                            foreach ($data['categories'] as $cat) : ?>
                                                <option value="<?php echo $cat->gl_cat_id; ?>"><?php echo $cat->gl_cat_title; ?></option>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $data['glCat_err']; ?></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="glTitle"><i class="fas fa-signature formIcons"></i>
                                        <span class="inline-span"> Title: <sub>*</sub></span></label>
                                    <input id="glTitle" maxlength="100"
                                           class="form-control form-control-lg <?php echo (!empty($data['glTitle_err'])) ? 'is-invalid' : ''; ?>"
                                           name="glTitle"
                                           required
                                           type="text" value="<?php echo $data['imageById']->gl_title; ?>">
                                    <span class="invalid-feedback"><?php echo $data['glTitle_err']; ?></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="glDesc"><i class="fas fa-user-secret formIcons"></i>
                                        <span class="inline-span eppMe"> Description: </span></label>
                                    <textarea id="glDesc" name="glDesc"
                                              class="form-control form-control-lg profile_form_bio"><?php echo $data['imageById']->gl_desc; ?></textarea>
                                </div>

                                    <div class="form-group mt-4 mb-3">
                                        <input type="submit" value="Update" class="btn btn-primary btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listImages.php'; ?>
            </div>
        </section>

    </main>
</div><!-- Page id ends sticky footer-->

