class PasswordModalView {
    #passwordModal = $(".div-password-modal-container");
    #passwordModalToggleBtns = $(".btn-password-modal-toggle");

    handleTogglePasswordModal(handler) {
        this.#passwordModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    getPasswordModal() {
        return this.#passwordModal;
    }
}

export default new PasswordModalView();
