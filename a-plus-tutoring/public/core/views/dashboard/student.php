    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>
    
    <!-- STUDENT DASHBOARD VIEW CONTAINER -->
    <div class="div-student-dashboard-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $user = new Source\Handlers\Core\Models\Student($dbInstance); ?>
        <?php require_once LOCAL_PATH . '/core/partials/nav.php'; ?>
        <div class="div-student-dashboard-view-overview-container grid-2-columns">
            <div class="div-student-dashboard-view-overview-brand">
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted-traced.png'; ?>" alt="Inverted Website Logo Traced">
            </div>
            <?php require_once LOCAL_PATH . '/core/partials/views/dashboard/controls.php'; ?>
        </div>
    </div>
