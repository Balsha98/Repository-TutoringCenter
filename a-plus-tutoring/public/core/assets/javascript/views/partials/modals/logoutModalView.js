class LogoutModalView {
    #logoutModal = $(".div-logout-modal-container");
    #logoutModalToggleBtns = $(".btn-logout-modal-toggle");

    handleToggleLogoutModal(handler) {
        this.#logoutModalToggleBtns.each((_, btn) => $(btn).click(handler));
    }

    getLogoutModal() {
        return this.#logoutModal;
    }
}

export default new LogoutModalView();
