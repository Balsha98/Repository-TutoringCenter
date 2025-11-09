class AlertModalView {
    // ATTRIBUTES
    #alertModal = $(".div-alert-modal-container");
    #alertModalBtns = $(".div-alert-modal-container button");
    #alertModalData = $(".div-alert-modal-data-container");
    #alertModalHeading = $(".heading-alert-modal");
    #alertModalText = $(".message-alert-modal");
    #btnConfirmAlertModal = $(".btn-alert-modal-confirm");

    // HANDLER METHODS
    handleShowAlertModal(response, seconds = 3) {
        const isResponseValid = response["status"] === "success";
        const responseData = response["response"];

        this.#alertModalData.removeClass(`alert-modal-${isResponseValid ? "failure" : "success"}`);
        this.#alertModalData.addClass(`alert-modal-${isResponseValid ? "success" : "failure"}`);

        this.#alertModalHeading.text(responseData["title"]);
        this.#alertModalText.text(responseData["message"]);

        this.#btnConfirmAlertModal.text(isResponseValid ? "Confirm" : "Close");
        this.#btnConfirmAlertModal.removeClass(`btn-${isResponseValid ? "failure" : "success"}`);
        this.#btnConfirmAlertModal.addClass(`btn-${isResponseValid ? "success" : "failure"}`);

        setTimeout(() => this.#redirectUserToView(response["route"]), seconds * 1000);
    }

    handleHideAlertModal(handler) {
        this.#alertModalBtns.each((_, btn) => $(btn).click(handler));
    }

    // GETTER METHODS
    getAlertModal() {
        return this.#alertModal;
    }

    // HELPER METHODS
    #redirectUserToView(route) {
        if (route === "wait") return;
        else if (route === "reload") location.reload();
        else window.open(route, "_self");
    }
}

export default new AlertModalView();
