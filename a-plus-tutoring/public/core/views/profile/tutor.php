    <?php require_once LOCAL_PATH . '/core/partials/modals/alert-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/password-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/image-modal.php'; ?>

    <!-- TUTOR PROFILE VIEW CONTAINER -->
    <div class="div-tutor-profile-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $user = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
        <?php require_once LOCAL_PATH . '/core/partials/nav.php'; ?>
        <?php $status = $user->getStatus(); ?>
        <div class="div-tutor-profile-view-overview-container">
            <div class="div-tutor-profile-view-brief-bio-container">
                <?php $icon = $status === 'active' ? 'check' : 'x'; ?>
                <div class="div-tutor-profile-view-brief-bio-image-data-container">
                    <button class="btn btn-icon btn-primary btn-image-modal-toggle">
                        <ion-icon src="<?php echo ICONS_PATH . '/upload.svg'; ?>"></ion-icon>
                    </button>
                    <div class="div-tutor-profile-view-brief-bio-image-container">
                        <img src="<?php echo $user->getImage(); ?>" alt="Tutor Profile Image">
                        <div class="div-tutor-profile-view-brief-bio-status-container <?php echo $status; ?>">
                            <ion-icon src="<?php echo ICONS_PATH . '/' . $icon . '.svg'; ?>"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="div-tutor-profile-view-brief-bio-data-container">
                    <p><?php echo $user->getFirstName(); ?> <?php echo $user->getLastName(); ?></p>
                    <span><?php echo $user->getEmail(); ?></span>
                </div>
            </div>
            <form class="form-tutor-profile-view-detailed-bio" action="/api/profile/tutor/<?php echo $user->getID(); ?>" method="PUT">
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
                <div class="div-input-container">
                    <select id="status" name="status" value="<?php echo $status; ?>">
                        <option value="">Status</option>
                        <option value="inactive" <?php echo $status === 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                        <option value="active" <?php echo $status === 'active' ? 'selected' : ''; ?>>Active</option>
                    </select>
                    <label for="status">
                        <ion-icon src="<?php echo ICONS_PATH . '/activity.svg'; ?>"></ion-icon>
                    </label>
                </div>
                <input id="id" type="hidden" value="<?php echo $user->getID(); ?>">
                <input id="role" type="hidden" value="<?php echo $user->getRole(); ?>">
            </form>
        </div>
        <?php $dateObj = date_create($user->getDateHired()); ?>
        <footer class="footer-tutor-profile-view-container">
            <p>Member since <?php echo $dateObj->format('j F, Y'); ?>.</p>
            <div class="div-footer-student-profile-view-form-controls-container">
                <button class="btn btn-secondary btn-password-modal-toggle">Change Password?</button>
                <button class="btn btn-primary btn-profile-update">Update Profile</button>
            </div>
        </footer>
    </div>
