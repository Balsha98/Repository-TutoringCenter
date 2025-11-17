class ImageModalView {
    #imageModal = $(".div-image-modal-container");
    #imageModalToggleBtns = $(".btn-image-modal-toggle");

    handleToggleImageModal(handler) {
        this.#imageModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    getImageModal() {
        return this.#imageModal;
    }
}

export default new ImageModalView();
