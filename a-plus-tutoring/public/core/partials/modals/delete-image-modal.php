    <!-- DELETE IMAGE MODAL CONTAINER -->
    <div class="div-delete-image-modal-container hide-delete-image-modal">
        <div class="div-delete-image-modal">
            <button class="btn-icon btn-primary btn-delete-image-modal-toggle">
                <ion-icon src="<?php echo ICONS_PATH . '/x.svg' ?>"></ion-icon>
            </button>
            <div class="div-delete-image-modal-data-container">
                <header class="header-delete-image-modal">
                    <h2>Sure about deleting your image?</h2>
                </header>
                <form class="form-delete-image-modal" action="/api/profile/image" method="DELETE">
                    <div class="div-modal-control-btns-container grid-2-columns">
                        <button class="btn btn-failure btn-delete-image-modal-toggle" type="button">
                            <ion-icon src="<?php echo ICONS_PATH . '/x.svg'; ?>"></ion-icon>
                            <span>Cancel</span>
                        </button>
                        <button class="btn btn-success btn-image-delete">
                            <ion-icon src="<?php echo ICONS_PATH . '/check.svg'; ?>"></ion-icon>
                            <span>Confirm</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
