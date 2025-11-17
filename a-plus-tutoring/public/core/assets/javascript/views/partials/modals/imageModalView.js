class ImageModalView {
    #imageModal = $(".div-image-modal-container");
    #imageModalToggleBtns = $(".btn-image-modal-toggle");
    #imageModalForm = $(".form-image-modal");
    #btnImageUpload = $(".btn-image-upload");

    handleToggleImageModal(handler) {
        this.#imageModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    handleUploadImage(handler) {
        this.#btnImageUpload.click(handler);
    }

    getImageModal() {
        return this.#imageModal;
    }

    getImageModalForm() {
        return this.#imageModalForm;
    }
}

export default new ImageModalView();
