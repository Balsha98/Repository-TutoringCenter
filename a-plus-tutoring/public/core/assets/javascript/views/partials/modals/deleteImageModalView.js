class DeleteImageModalView {
    #deleteImageModal = $(".div-delete-image-modal-container");
    #deleteImageModalToggleBtns = $(".btn-delete-image-modal-toggle");
    #deleteImageModalForm = $(".form-delete-image-modal");
    #btnImageDelete = $(".btn-image-delete");

    handleToggleDeleteImageModal(handler) {
        this.#deleteImageModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    handleDeleteImage(handler) {
        this.#btnImageDelete.click(handler);
    }

    getDeleteImageModal() {
        return this.#deleteImageModal;
    }

    getDeleteImageModalForm() {
        return this.#deleteImageModalForm;
    }
}

export default new DeleteImageModalView();
