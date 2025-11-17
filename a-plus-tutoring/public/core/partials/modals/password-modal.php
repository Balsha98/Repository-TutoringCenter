    <!-- IMAGE MODAL CONTAINER -->
    <div class="div-password-modal-container hide-password-modal">
        <div class="div-password-modal">
            <button class="btn-icon btn-primary btn-password-modal-toggle">
                <ion-icon src="<?php echo ICONS_PATH . '/x.svg' ?>"></ion-icon>
            </button>
            <div class="div-password-modal-data-container">
                <header class="header-password-modal">
                    <h2>Change Your Profile Password</h2>
                    <p>Please provide a <span>valid</span> password.</p>
                </header>
                <form class="form-password-modal" action="/api/profile/password/tutor" method="PUT">
                    <div class="div-input-container">
                        <input id="password" type="password" name="password" placeholder="Password">
                        <label for="password">
                            <ion-icon src="<?php echo ICONS_PATH . '/lock.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <button class="btn btn-primary btn-password-confirm">
                        <ion-icon src="<?php echo ICONS_PATH . '/check.svg' ?>"></ion-icon>
                        <span>Confirm</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
