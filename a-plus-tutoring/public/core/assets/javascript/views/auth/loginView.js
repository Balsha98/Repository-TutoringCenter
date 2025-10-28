class LoginView {
    #loginForm = $(".form-login-view");
    #btnLogin = $(".btn-login");

    handleUserLogin(handler) {
        this.#btnLogin.click(handler);
    }

    getLoginForm() {
        return this.#loginForm;
    }
}

export default new LoginView();
