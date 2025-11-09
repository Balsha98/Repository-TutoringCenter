    <!-- LOGOUT MODAL CONTAINER -->
    <div class="div-logout-modal-container hide-logout-modal">
        <div class="div-logout-modal">
            <button class="btn-icon btn-primary btn-logout-modal-toggle">
                <ion-icon src="<?php echo ICONS_PATH . '/x.svg' ?>"></ion-icon>
            </button>
            <div class="div-logout-modal-data-container">
                <header class="header-logout-modal">
                    <h2 class="heading-logout-modal">Sure about logging out?</h2>
                </header>
                <div class="div-modal-control-btns-container grid-2-columns">
                    <button class="btn btn-failure btn-logout-modal-toggle">
                        <ion-icon src="<?php echo ICONS_PATH . '/x.svg'; ?>"></ion-icon>
                        <span>Cancel</span>
                    </button>
                    <a class="link link-success" href="/logout">
                        <ion-icon src="<?php echo ICONS_PATH . '/log-out.svg'; ?>"></ion-icon>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
