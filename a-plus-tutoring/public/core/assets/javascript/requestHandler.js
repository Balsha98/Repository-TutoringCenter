// IMPORTED MODULES
import * as alertModalController from "./controllers/partials/modals/alertModalController.js";

class RequestHandler {
    handleRequest(url, method, data) {
        $.ajax({
            url: url,
            method: method,
            data: JSON.stringify(data),
            success: function (response) {
                alertModalController.controlShowAlertModal(response);
            },
        });
    }

    checkForEmptyInputs(data) {
        const validations = [];

        for (const [key, value] of Object.entries(data)) {
            if (!value) {
                $(`#${key}`).closest("div").addClass("div-invalid-input-container");

                validations.push(key);
            }
        }

        return validations.length;
    }
}

export default new RequestHandler();
