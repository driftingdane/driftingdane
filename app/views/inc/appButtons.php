<!-- APP BUTTONS -->
<?php if (userAut()): ?>
<div class="tag text-center mb-0">
    <div class="userPosition pl-4 pr-4"><span>Hello <?php echo nameToUpper(); ?></span></div>
</div>
<?php endif; ?>
<div class="d-flex flex-column flex-md-row align-items-center">
    <div class="mx-auto pl-3 pr-3">
        <?php if (!isLoggedIn() and userAut() == false) : ?>
              <div class="tag text-center">
                  <div class="userPosition pl-4 pr-4"><span>Hello <?php echo nameToUpper(); ?></span></div>
                  <div class="tag-experience pl-4 pr-4"><span>You have not created a CV. Get on with it!</span></div>
                  <a href="<?php echo URLROOT; ?>/clients/addPersonal" class="btn btn-sm color-orange mt-2 mb-2"><i
                              class="fas fa-circle"></i> Add Resume</a>
              </div>
        <?php endif; ?>
        <?php if (isLoggedIn() and userAut() == true) : ?>
        <div class="btn-group btn-block">
        <a href="<?php echo URLROOT; ?>/clients/addLanguage/<?php echo $_SESSION['skSlug']; ?>" class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Languages</span> <i class="fas fa-circle color-dark-blue-text"></i> </a>
        <a href="<?php echo URLROOT; ?>/clients/addSkill/<?php echo $_SESSION['skSlug']; ?>" class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Skills</span> <i class="fas fa-circle color-light-green-text"></i></a>
        </div>
        <div class="btn-group btn-block">
        <a href="<?php echo URLROOT; ?>/clients/addExperience/<?php echo $_SESSION['skSlug']; ?>" class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Experiences</span> <i class="fas fa-circle color-red-text"></i></a>
        <a href="<?php echo URLROOT; ?>/clients/addCertificate/<?php echo $_SESSION['skSlug']; ?>" class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Certificates</span> <i class="fas fa-circle color-turkish-text"></i></a>
        </div>
        <div class="btn-group btn-block">
        <a href="<?php echo URLROOT; ?>/clients/addEducation/<?php echo $_SESSION['skSlug']; ?>" class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Educations</span> <i class="fas fa-circle color-orange-text"></i></a>
            <a href="<?php echo URLROOT; ?>/clients/addJobInterest/<?php echo $_SESSION['skSlug']; ?>"
               class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Jobs i like</span>
                <i class="fas fa-circle color-blue-text"></i></a>
        </div>
            <a href="<?php echo URLROOT; ?>/clients/editPersonal/<?php echo $_SESSION['skSlug']; ?>"
               class="btn btn-block btn-sm btn-outline-primary mt-2 mb-2"><span class="inline-span">Edit Profile</span>
                <i class="far fa-edit color-yellow-text"></i></a>
        <?php endif;
        if (isLoggedIn() and adminAut() == true) : ?>
         <a href="<?php echo URLROOT; ?>/admins" class="btn btn-sm btn-outline-secondary mt-2 mb-2 btn-block">Admins</a>
        <?php endif; ?>
    </div>

</div>
