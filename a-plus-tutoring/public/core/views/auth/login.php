    <?php require_once LOCAL_PATH . '/core/partials/modals/alert-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>

    <!-- LOGIN VIEW CONTAINER -->
    <div class="div-login-view-container">
        <div class="div-login-view-logo-container">
            <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png' ?>" alt="Inverted Website Logo">
        </div>
        <header class="header-login-view-container">
            <h2>Welcome to A<sup>+</sup> Tutoring!</h2>
            <p>Provide your <span>credentials</span> in order to proceed.</p>
        </header>
        <form class="form-login-view" action="/api/auth/login" method="POST">
            <div class="div-input-container">
                <input id="email_address" type="email" name="email_address" placeholder="Email Address" autofocus>
                <label for="email_address">
                    <ion-icon src="<?php echo ICONS_PATH . '/mail.svg'; ?>"></ion-icon>
                </label>
            </div>
            <div class="div-input-container">
                <input id="password" type="password" name="password" placeholder="Password">
                <label for="password">
                    <ion-icon src="<?php echo ICONS_PATH . '/lock.svg'; ?>"></ion-icon>
                </label>
            </div>
            <div class="div-form-control-btns-container">
                <button class="btn btn-primary btn-login">
                    <span>Login</span>
                </button>
            </div>
        </form>
        <footer class="footer-login-view-container">
            <p>Don't have an account? <a href="/signup">Sign Up!</a></p>
        </footer>
    </div>
