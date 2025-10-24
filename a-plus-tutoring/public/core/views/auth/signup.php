    <div class="div-signup-view-container">
        <div class="div-signup-view-logo-container">
            <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png' ?>" alt="Website Logo">
        </div>
        <header class="header-signup-view-container">
            <h2>Welcome to A<sup>+</sup> Tutoring!</h2>
            <p>Fill out the form fields with <span>valid</span> credentials.</p>
        </header>
        <form class="form-signup-view" action="/api/signup" method="POST">
            <div class="div-form-signup-view-carousel-item-container" data-step="1">
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <input id="first-name" type="first-name" name="first-name" placeholder="First Name">
                        <label for="first-name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="last-name" type="last-name" name="last-name" placeholder="Last Name">
                        <label for="last-name">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <div class="div-input-container">
                    <input id="major" type="major" name="major" placeholder="Major">
                    <label for="major">
                        <ion-icon src="<?php echo ICONS_PATH . '/book.svg'; ?>"></ion-icon>
                    </label>
                </div>
                <div class="div-form-control-btns-container">
                    <button class="btn btn-primary" type="button" data-step="2">
                        <span>Next</span>
                    </button>
                </div>
            </div>
            <div class="div-form-signup-view-carousel-item-container" data-step="2">
                <div class="div-multi-input-containers grid-2-columns">
                    <div class="div-input-container">
                        <select id="role" name="role">
                            <option value="default">Role</option>
                            <option value="student">Student</option>
                            <option value="tutor">Tutor</option>
                        </select>
                        <label for="role">
                            <ion-icon src="<?php echo ICONS_PATH . '/users.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <div class="div-input-container">
                        <input id="email" type="email" name="email" placeholder="Email Address">
                        <label for="email">
                            <ion-icon src="<?php echo ICONS_PATH . '/mail.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                </div>
                <div class="div-input-container">
                    <input id="password" type="password" name="password" placeholder="Password">
                    <label for="password">
                        <ion-icon src="<?php echo ICONS_PATH . '/lock.svg'; ?>"></ion-icon>
                    </label>
                </div>
                <div class="div-form-control-btns-container grid-2-columns">
                    <button class="btn btn-secondary" type="button" data-step="1">
                        <span>Previous</span>
                    </button>
                    <button class="btn btn-primary" type="button">
                        <span>Signup</span>
                    </button>
                </div>
            </div>
        </form>
        <footer class="footer-signup-view-container">
            <p>Already have an account? <a class="link link-primary" href="/login">Log In!</a></p>
        </footer>
    </div>
