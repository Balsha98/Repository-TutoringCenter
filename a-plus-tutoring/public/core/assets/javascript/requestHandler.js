// IMPORTED MODULES
import * as alertModalController from "./controllers/partials/modals/alertModalController.js";

class RequestHandler {
    async handleRequest(url, method, data) {
        const response = await $.ajax({
            url: url,
            method: method,
            data: JSON.stringify(data),
        });

        if (response["input-id"]) this.#highlightInvalidInput(response);

        alertModalController.controlShowAlertModal(response);
    }

    traverseForInvalidInputs(data) {
        for (const [key, value] of Object.entries(data)) {
            if (!value) $(`#${key}`).closest("div").addClass("div-invalid-input-container");
        }

        return $(".div-invalid-input-container").length;
    }

    #highlightInvalidInput(response) {
        const parent = $(`#${response["input-id"]}`).closest("div");
        $(parent).addClass("div-invalid-input-container");
    }
}

export default new RequestHandler();
