    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/modals/logout-modal.php'; ?>

    <!-- TUTOR DASHBOARD VIEW CONTAINER -->
    <div class="div-tutor-dashboard-view-container">
        <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
        <?php $user = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
        <?php require_once LOCAL_PATH . '/core/partials/nav.php'; ?>
        <div class="div-tutor-dashboard-view-overview-container grid-2-columns">
            <div class="div-tutor-dashboard-view-overview-brand">
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted-traced.png'; ?>" alt="Inverted Website Logo Traced">
            </div>
            <?php require_once LOCAL_PATH . '/core/partials/views/dashboard/controls.php'; ?>
        </div>
    </div>
