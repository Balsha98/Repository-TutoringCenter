class ImageModalView {
    #imageModal = $(".div-image-modal-container");
    #imageModalToggleBtns = $(".btn-image-modal-toggle");

    handleToggleLogoutModal(handler) {
        this.#imageModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    getLogoutModal() {
        return this.#imageModal;
    }
}

export default new ImageModalView();
