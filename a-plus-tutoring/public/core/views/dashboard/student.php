    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>
    
    <!-- STUDENT DASHBOARD VIEW CONTAINER -->
    <div class="div-student-dashboard-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $student = new Source\Handlers\Core\Models\Student($dbInstance); ?>
        <header class="header-student-dashboard-view-container">
            <p>Welcome, <span><?php echo $student->getFirstName(); ?></span>!</p>
            <nav class="nav-student-dashboard-view-container">
                <ul class="nav-student-dashboard-view-container-list">
                    <li class="nav-student-dashboard-view-container-list-item active">
                        <a class="link link-icon" href="/dashboard">
                            <ion-icon src="<?php echo ICONS_PATH . '/grid.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-student-dashboard-view-container-list-item">
                        <a class="link link-icon" href="/sessions">
                            <ion-icon src="<?php echo ICONS_PATH . '/calendar.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-student-dashboard-view-container-list-item">
                        <a class="link link-icon" href="/profile/<?php echo $student->getID(); ?>">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-student-dashboard-view-container-list-item">
                        <button class="btn btn-icon btn-logout-modal-toggle">
                            <ion-icon src="<?php echo ICONS_PATH . '/log-out.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="div-student-dashboard-view-overview-container grid-2-columns">
            <div class="div-student-dashboard-view-overview-brand">
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted-traced.png'; ?>" alt="Inverted Website Logo Traced">
            </div>
            <div class="div-student-dashboard-view-overview-controls">
                <p>What would you like to <span>view</span> today?</p>
                <nav class="nav-student-dashboard-view-overview-controls">
                    <ul class="nav-student-dashboard-view-overview-controls-list">
                        <li class="nav-student-dashboard-view-overview-controls-list-item">
                            <a class="link link-primary" href="/sessions">
                                <span>Sessions</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-student-dashboard-view-overview-controls-list-item">
                            <a class="link link-primary" href="/profile/{id}">
                                <span>Profile</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
