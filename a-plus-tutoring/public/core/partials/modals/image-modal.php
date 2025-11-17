    <!-- IMAGE MODAL CONTAINER -->
    <div class="div-image-modal-container hide-image-modal">
        <div class="div-image-modal">
            <button class="btn-icon btn-primary btn-image-modal-toggle">
                <ion-icon src="<?php echo ICONS_PATH . '/x.svg' ?>"></ion-icon>
            </button>
            <div class="div-image-modal-data-container">
                <header class="header-image-modal">
                    <h2>Upload Your Profile Image URL</h2>
                    <p>Please provide your image <span>url</span> in the following field.</p>
                </header>
                <form class="form-image-modal" action="/api/profile/image" method="PUT">
                    <div class="div-input-container">
                        <input id="image" type="text" name="image" placeholder="Image URL">
                        <label for="image">
                            <ion-icon src="<?php echo ICONS_PATH . '/image.svg'; ?>"></ion-icon>
                        </label>
                    </div>
                    <button class="btn btn-primary btn-image-upload">
                        <ion-icon src="<?php echo ICONS_PATH . '/upload.svg' ?>"></ion-icon>
                        <span>Upload</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
