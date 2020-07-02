 <div id="page-content"><!-- Needed for sticky footer-->
        <main role="main">
            <section>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card card-body bg-light">
                            <h2><span class="text-info">Create</span> an account</h2>
                            <?php echo flash_error('resume_errors'); ?>
                            <?php flash_error('token_error'); ?>
                            <p>Please fill in all fields with <sub>*</sub></p>
                            <form class="icon-form" action="<?php echo URLROOT; ?>/users/register" method="post">
                                <input type="hidden" name="token" value="<?php echo createToken(); ?>">
                             <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="first"><i class="fas fa-signature"></i> First name: <sub>*</sub></label>
                                    <input type="text" name="first"
                                           class="form-control form-control-lg <?php echo (!empty($data['first_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['first']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['first_err']; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="last"><i class="fas fa-signature"></i> Last name: <sub>*</sub></label>
                                    <input type="text" name="last"
                                           class="form-control form-control-lg <?php echo (!empty($data['last_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['last']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['last_err']; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="email"><i class="far fa-envelope-open"></i> Email: <sub>*</sub></label>
                                    <input type="email" name="email"
                                           class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['email']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="country"><i class="far fa-flag formIcons"></i> Nationality: <sub>*</sub></label>
                                    <select name="country" class="custom-select custom-select-lg mb-3 <?php echo (!empty($data['country_err'])) ? 'is-invalid' : ''; ?>" required>
                                        <option value="" selected>Select nationality</option>
                                        <?php
                                        if(is_array($data['nation'])) :
                                            foreach ($data['nation'] as $country) : ?>
                                                <option value="<?php echo $country->num_code; ?>"><?php echo utf8_encode($country->nationality); ?></option>
                                            <?php endforeach;
                                        endif;
                                        ?>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $data['country_err']; ?></span>
                                </div>

                                <?php if(isLoggedIn() and adminAut()) : ?>
                                <div class="col-md-12 mb-3">
                                    <label for="hasAccess">Client <i class="fas fa-graduation-cap formIcons"></i> or Admin? <i class="fas fa-user-graduate formIcons"></i> <sub>*</sub></label>
                                    <select name="hasAccess" class="custom-select custom-select-lg mb-3 <?php echo (!empty($data['studTeach_err'])) ? 'is-invalid' : ''; ?>" required>
                                        <option value="" selected>Select Admin or Client (Client is default)</option>
                                         <option value="is_admin">Admin</option>
                                         <option value="is_client">Client</option>
                                    </select>
                                    <span class="invalid-feedback"><?php echo $data['studTeach_err']; ?></span>
                                </div>
                                <?php endif; ?>

                                <div class="col-md-6 mb-3">
                                    <label for="password"><i class="fas fa-lock"></i> Password:
                                        <sub>*</sub></label>
                                    <input type="password" name="password"
                                           class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['password']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="confirm_password"><i class="fas fa-lock"></i> Confirm password:
                                        <sub>*</sub></label>
                                    <input type="password" name="confirm_password"
                                           class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>"
                                           value="<?php echo $data['confirm_password']; ?>" required>
                                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                                </div>

                                <div class="row p-2">
                                    <div class="col">
                                        <button type="submit" class="btn btn-outline-success btn-block"><i class="far fa-share-square"></i> Create</button>
                                    </div>

                                    <div class="col">
                                        <a href="<?php echo URLROOT; ?>/users/login" class="btn color-grey btn-block">Have
                                            an account? Login</a>
                                    </div>
                                </div>
                             </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>
    </div><!-- Page id ends sticky footer-->

