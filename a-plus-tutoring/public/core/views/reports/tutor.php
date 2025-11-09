`   <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
`   <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>

    <!-- TUTOR REPORTS VIEW CONTAINER -->
    <div class="div-tutor-reports-view-container">
        <header class="header-tutor-reports-view-container">
            <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
            <?php $tutor = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
            <p>Welcome, <span><?php echo $tutor->getFirstName(); ?></span>!</p>
            <nav class="nav-tutor-reports-view-container">
                <ul class="nav-tutor-reports-view-container-list">
                    <li class="nav-tutor-reports-view-container-list-item">
                        <a class="link link-icon" href="/dashboard">
                            <ion-icon src="<?php echo ICONS_PATH . '/grid.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-reports-view-container-list-item">
                        <a class="link link-icon active-link" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/book.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-reports-view-container-list-item">
                        <button class="btn btn-icon btn-logout-modal-toggle">
                            <ion-icon src="<?php echo ICONS_PATH . '/log-out.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="div-tutor-reports-view-overview-container grid-2-columns">
            <div class="div-tutor-reports-view-overview-brand">
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted-traced.png'; ?>" alt="Inverted Website Logo Traced">
            </div>
            <div class="div-tutor-reports-view-overview-controls">
                <p>What <span>report</span> are you looking for?</p>
                <nav class="nav-tutor-reports-view-overview-controls">
                    <ul class="nav-tutor-reports-view-overview-controls-list">
                        <li class="nav-tutor-reports-view-overview-controls-list-item">
                            <a class="link link-primary" href="/reports/majors/<?php echo $tutor->getID(); ?>">
                                <span>Majors</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-tutor-reports-view-overview-controls-list-item">
                            <a class="link link-primary" href="/reports/ratings/<?php echo $tutor->getID(); ?>">
                                <span>Ratings</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-tutor-reports-view-overview-controls-list-item">
                            <a class="link link-primary" href="/reports/years/<?php echo $tutor->getID(); ?>">
                                <span>Years</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
