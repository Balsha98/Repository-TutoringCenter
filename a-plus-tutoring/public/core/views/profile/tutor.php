`   <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>

    <!-- TUTOR PROFILE VIEW CONTAINER -->
    <div class="div-tutor-profile-view-container">
        <header class="header-tutor-profile-view-container">
            <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
            <?php $tutor = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
            <p>Welcome, <span><?php echo $tutor->getFirstName(); ?></span>!</p>
            <nav class="nav-tutor-profile-view-container">
                <ul class="nav-tutor-profile-view-container-list">
                    <li class="nav-tutor-profile-view-container-list-item">
                        <a class="link link-icon" href="/dashboard">
                            <ion-icon src="<?php echo ICONS_PATH . '/grid.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-profile-view-container-list-item">
                        <a class="link link-icon" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/book.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-profile-view-container-list-item">
                        <a class="link link-icon" href="/sessions">
                            <ion-icon src="<?php echo ICONS_PATH . '/calendar.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-profile-view-container-list-item">
                        <a class="link link-icon active-link" href="/profile/<?php echo $tutor->getID(); ?>">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-profile-view-container-list-item">
                        <button class="btn btn-icon btn-logout-modal-toggle">
                            <ion-icon src="<?php echo ICONS_PATH . '/log-out.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="div-tutor-profile-view-overview-container">
            <!-- TODO: Here we go... -->
        </div>
    </div>
