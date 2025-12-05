    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>

    <!-- TUTOR SESSIONS VIEW CONTAINER -->
    <div class="div-tutor-sessions-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $user = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
        <?php require_once LOCAL_PATH . '/core/partials/nav.php'; ?>
        <div class="div-tutor-sessions-view-overview-container">
            <div class="div-tutor-sessions-view-calendar-container">
                <header class="header-tutor-sessions-view-calendar-container">
                    <button class="btn btn-icon">
                        <ion-icon src="<?php echo ICONS_PATH; ?>/chevron-left.svg"></ion-icon>
                    </button>
                    <div class="div-tutor-sessions-view-calendar-days-container">
                        <p>SUN</p>
                        <p>MON</p>
                        <p>TUE</p>
                        <p>WED</p>
                        <p>THU</p>
                        <p>FRI</p>
                        <p>SAT</p>
                    </div>
                    <button class="btn btn-icon">
                        <ion-icon src="<?php echo ICONS_PATH; ?>/chevron-right.svg"></ion-icon>
                    </button>
                </header>
                <div class="div-tutor-sessions-view-calendar-dates-container">
                    <!-- DYNAMICALLY GENERATED VIA JS -->
                </div>
            </div>
            <div class="div-tutor-sessions-view-participants-container">
                <header class="header-tutor-sessions-view-participants-container">
                    <p><?php echo date('l, F jS'); ?></p>
                    <button class="btn btn-icon btn-primary">
                        <ion-icon src="<?php echo ICONS_PATH; ?>/plus.svg"></ion-icon>
                    </button>
                </header>
                <div class="div-tutor-sessions-view-participants-overview-container">
                    <p>&mdash; Participants</p>
                    <ul class="tutor-sessions-view-participants-overview-list">
                        <li class="tutor-sessions-view-participants-overview-list-item">
                            <div class="div-tutor-sessions-view-participants-overview-image-container">
                                <img src="<?php echo $user->getImage(); ?>" alt="User Profile Image">
                            </div>
                            <div class="div-tutor-sessions-view-participants-overview-content-container">
                                <p>Student Name</p>
                                <span>Student</span>
                            </div>
                            <a class="link link-icon link-primary" href="/profile/<?php echo $user->getID(); ?>" target="_blank">
                                <ion-icon src="<?php echo ICONS_PATH; ?>/external-link.svg"></ion-icon>
                            </a>
                        </li>
                        <li class="tutor-sessions-view-participants-overview-list-item">
                            <div class="div-tutor-sessions-view-participants-overview-image-container">
                                <img src="<?php echo $user->getImage(); ?>" alt="User Profile Image">
                            </div>
                            <div class="div-tutor-sessions-view-participants-overview-content-container">
                                <p>Tutor Name</p>
                                <span>Tutor</span>
                            </div>
                            <a class="link link-icon link-primary" href="/profile/<?php echo $user->getID(); ?>" target="_blank">
                                <ion-icon src="<?php echo ICONS_PATH; ?>/external-link.svg"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
                <footer class="footer-tutor-sessions-view-participants-container">
                    <p>Total Participants:</p>
                    <span>2</span>
                </footer>
            </div>
        </div>
        <?php $dateObj = date_create($user->getDateHired()); ?>
        <footer class="footer-tutor-sessions-view-container">
            <p>Member since <?php echo $dateObj->format('j F, Y'); ?>.</p>
            <p><?php echo $user->getFirstName(); ?>, you have <span>15</span> sessions.</p>
        </footer>
    </div>
