// IMPORTED MODULES
import * as alertModalController from "./controllers/partials/modals/alertModalController.js";

class RequestHandler {
    async handleRequest(url, method, data) {
        const response = await $.ajax({
            url: url,
            method: method,
            data: JSON.stringify(data),
        });

        console.log(response);

        if (response["input-id"]) this.#highlightInvalidInput(response);

        alertModalController.controlShowAlertModal(response);
    }

    traverseForInvalidInputs(data) {
        const validations = [];

        for (const [key, value] of Object.entries(data)) {
            const parent = $(`#${key}`).closest("div");
            if (!value) validations.push(parent.addClass("div-invalid-input-container"));
            else parent.removeClass("div-invalid-input-container");
        }

        return validations.length;
    }

    #highlightInvalidInput(response) {
        const parent = $(`#${response["input-id"]}`).closest("div");
        $(parent).addClass("div-invalid-input-container");
    }
}

export default new RequestHandler();
