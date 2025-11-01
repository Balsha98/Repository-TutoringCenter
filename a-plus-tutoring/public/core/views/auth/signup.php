    <?php require_once LOCAL_PATH . '/core/partials/modals/alert-modal.php'; ?>
    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>

    <!-- SIGNUP VIEW CONTAINER -->
    <div class="div-signup-view-container">
        <div class="div-signup-view-logo-container">
            <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png' ?>" alt="Website Logo">
        </div>
        <header class="header-signup-view-container">
            <h2>Welcome to A<sup>+</sup> Tutoring!</h2>
            <p>Fill out the form fields with <span>valid</span> credentials.</p>
        </header>
        <form class="form-signup-view" action="/api/auth/signup" method="POST">
            <div class="div-form-signup-view-step-item-container" data-step="1">
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="first_name" type="text" name="first_name" placeholder="First Name" autofocus>
                        <label for="first_name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="last_name" type="text" name="last_name" placeholder="Last Name">
                        <label for="last_name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <div class="div-input-container">
                    <select id="role" name="role">
                        <option value="">Role</option>
                        <option value="student">Student</option>
                        <option value="tutor">Tutor</option>
                    </select>
                    <label for="role">
                        <ion-icon src="<?php echo ICONS_PATH . '/users.svg'; ?>"></ion-icon>
                    </label>
                </div>
                <div class="div-form-control-btns-container">
                    <button class="btn btn-primary btn-form-step" type="button" data-step="2">
                        <span>Next</span>
                    </button>
                </div>
            </div>
            <div class="div-form-signup-view-step-item-container" data-step="2">
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="email_address" type="email" name="email_address" placeholder="Email Address">
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
                </div>
                <div class="div-input-container">
                    <input id="phone" type="password" name="phone" placeholder="Phone Number">
                    <label for="phone">
                        <ion-icon src="<?php echo ICONS_PATH . '/phone.svg'; ?>"></ion-icon>
                    </label>
                </div>
                <div class="div-form-control-btns-container grid-2-columns">
                    <button class="btn btn-secondary btn-form-step" type="button" data-step="1">
                        <span>Previous</span>
                    </button>
                    <button class="btn btn-primary btn-signup">
                        <span>Signup</span>
                    </button>
                </div>
            </div>
        </form>
        <footer class="footer-signup-view-container">
            <p>Already have an account? <a href="/login">Log In!</a></p>
        </footer>
    </div>
