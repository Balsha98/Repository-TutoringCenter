class PasswordModalView {
    #passwordModal = $(".div-password-modal-container");
    #passwordModalToggleBtns = $(".btn-password-modal-toggle");
    #passwordModalForm = $(".form-password-modal");
    #btnPasswordConfirm = $(".btn-password-confirm");

    handleTogglePasswordModal(handler) {
        this.#passwordModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    handleConfirmPassword(handler) {
        this.#btnPasswordConfirm.click(handler);
    }

    getPasswordModal() {
        return this.#passwordModal;
    }

    getPasswordModalForm() {
        return this.#passwordModalForm;
    }
}

export default new PasswordModalView();
