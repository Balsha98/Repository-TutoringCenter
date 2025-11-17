    <?php require_once LOCAL_PATH . '/core/partials/modals/alert-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/password-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/image-modal.php'; ?>

    <!-- STUDENT PROFILE VIEW CONTAINER -->
    <div class="div-student-profile-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $user = new Source\Handlers\Core\Models\Student($dbInstance); ?>
        <?php require_once LOCAL_PATH . '/core/partials/nav.php'; ?>
        <div class="div-student-profile-view-overview-container">
            <div class="div-student-profile-view-brief-bio-container">
                <div class="div-student-profile-view-brief-bio-image-data-container">
                    <button class="btn btn-icon btn-primary btn-image-modal-toggle">
                        <ion-icon src="<?php echo ICONS_PATH . '/upload.svg'; ?>"></ion-icon>
                    </button>
                    <img src="<?php echo $user->getImage(); ?>" alt="Student Profile Image">
                </div>
                <div class="div-student-profile-view-brief-bio-data-container">
                    <p><?php echo $user->getFirstName(); ?> <?php echo $user->getLastName(); ?></p>
                    <span><?php echo $user->getEmail(); ?></span>
                </div>
            </div>
            <form class="form-student-profile-view-detailed-bio" action="/api/profile/student" method="PUT">
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="first_name" type="text" name="first_name" value="<?php echo $user->getFirstName(); ?>" placeholder="First Name">
                        <label for="first_name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="last_name" type="text" name="last_name" value="<?php echo $user->getLastName(); ?>" placeholder="Last Name">
                        <label for="last_name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="email_address" type="email" name="email_address" value="<?php echo $user->getEmail(); ?>" placeholder="Email Address">
                        <label for="email_address">
                            <ion-icon src="<?php echo ICONS_PATH . '/mail.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="phone" type="text" name="phone" value="<?php echo $user->getPhone(); ?>" placeholder="Phone Number">
                        <label for="phone">
                            <ion-icon src="<?php echo ICONS_PATH . '/phone.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="grade" type="text" name="grade" value="<?php echo $user->getGradeLabel(); ?>" placeholder="Grade Level">
                        <label for="grade">
                            <ion-icon src="<?php echo ICONS_PATH . '/activity.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="major" type="text" name="major" value="<?php echo $user->getMajor(); ?>" placeholder="Major">
                        <label for="major">
                            <ion-icon src="<?php echo ICONS_PATH . '/book-open.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <input id="id" type="hidden" value="<?php echo $user->getID(); ?>">
                <input id="role" type="hidden" value="<?php echo $user->getRole(); ?>">
            </form>
        </div>
        <?php $dateObj = date_create($user->getDateEnrolled()); ?>
        <footer class="footer-student-profile-view-container">
            <p>Enrolled on <?php echo $dateObj->format('j F, Y'); ?>.</p>
            <div class="div-footer-student-profile-view-form-controls-container">
                <button class="btn btn-secondary btn-password-modal-toggle">Change Password?</button>
                <button class="btn btn-primary btn-profile-update">Update Profile</button>
            </div>
        </footer>
    </div>
