class SignupView {
    #signupForm = $(".form-signup-view");
    #signupFormStepItems = $(".div-form-signup-view-step-item-container");
    #formStepBtns = $(".btn-form-step");
    #btnSignup = $(".btn-signup");

    handleFormSteps(handler) {
        this.#formStepBtns.each((_, btn) => $(btn).click(handler));
    }

    handleUserSignup(handler) {
        this.#btnSignup.click(handler);
    }

    getSignupForm() {
        return this.#signupForm;
    }

    getSignupFormStepItems() {
        return this.#signupFormStepItems;
    }
}

export default new SignupView();
