class LoginView {
    #loginForm = $(".form-login-view");
    #btnLogin = $(".form-login-view button");

    handleUserLogin(handler) {
        this.#btnLogin.click(handler);
    }

    getLoginForm() {
        return this.#loginForm;
    }
}

export default new LoginView();
