<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">

                        <?php require APPROOT . '/views/admins/inc/editImg.php'; ?>

                        <div class="card card-body bg-light mb-5">
                            <?php echo flash('resume_message'); ?>
                            <h2>Edit post</h2>
                            <?php echo flash_error('resume_errors'); ?>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form action="<?php echo URLROOT . '/admins/editPost/' . $data['postById']->ps_slug; ?>" class="icon-form process" enctype="multipart/form-data" method="post" novalidate>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <input type="hidden" name="psId" value="<?php echo $data['postById']->ps_id; ?>">
                                <input type="hidden" name="returnUrl" value="<?php echo basename($_SERVER['REQUEST_URI']) ?>">

                                <div class="col-md-12 mb-3">
                                    <label for="catId"><i class="far fa-flag formIcons"></i> Category: <sub>*</sub></label>
                                    <select id="catId" name="catId" class="custom-select custom-select-lg mb-3 <?php echo (!empty($data['cat_err'])) ? 'is-invalid' : ''; ?>" required>
                                        <option value="<?php echo $data['postById']->ps_cat_id; ?>" selected><?php echo $data['postById']->ps_cat_name; ?></option>
                                        <?php
                                        if(is_array($data['categories'])) :
                                            foreach ($data['categories'] as $cat) : ?>
                                                <option value="<?php echo $cat->ps_cat_id; ?>"><?php echo $cat->ps_cat_name; ?></option>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $data['cat_err']; ?></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="psTitle"><i class="fas fa-signature formIcons"></i>
                                        <span class="inline-span"> Title: <sub>*</sub></span></label>
                                    <input id="name" maxlength="100"
                                           class="form-control form-control-lg <?php echo (!empty($data['psTitle_err'])) ? 'is-invalid' : ''; ?>"
                                           name="psTitle"
                                           required
                                           type="text" value="<?php echo $data['postById']->ps_title; ?>">
                                    <span class="invalid-feedback"><?php echo $data['psTitle_err']; ?></span>
                                </div>


                                <div class="col-md-12 mb-3">
                                    <label for="psSubTitle"><i class="fas fa-signature formIcons"></i>
                                        <span class="inline-span"> Sub Title: </span></label>
                                    <input id="psSubTitle" maxlength="100"
                                           class="form-control form-control-lg"
                                           name="psSubTitle"
                                           type="text" value="<?php echo $data['postById']->ps_sub_title; ?>">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="psPost"><i class="fas fa-user-secret formIcons"></i>
                                        <span class="inline-span eppMe"> Bio: (Minimum 100) <sub>*</sub></span></label>
                                    <textarea id="psPost" name="psPost"
                                              class="form-control form-control-lg profile_form_bio addTinymce <?php echo (!empty($data['psPost_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['postById']->ps_entry; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $data['psPost_err']; ?></span>
                                </div>

                                <div class="form-control border-0 mt-4 mb-3">
                                    <input type="submit" value="Update" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . '/views/admins/inc/listPosts.php'; ?>
            </div>
        </section>

    </main>
</div><!-- Page id ends sticky footer-->

