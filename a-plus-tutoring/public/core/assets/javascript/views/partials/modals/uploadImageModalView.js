class UploadImageModalView {
    #uploadImageModal = $(".div-upload-image-modal-container");
    #uploadImageModalToggleBtns = $(".btn-upload-image-modal-toggle");
    #uploadImageModalForm = $(".form-upload-image-modal");
    #btnImageUpload = $(".btn-image-upload");

    handleToggleUploadImageModal(handler) {
        this.#uploadImageModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    handleUploadImage(handler) {
        this.#btnImageUpload.click(handler);
    }

    getUploadImageModal() {
        return this.#uploadImageModal;
    }

    getUploadImageModalForm() {
        return this.#uploadImageModalForm;
    }
}

export default new UploadImageModalView();
