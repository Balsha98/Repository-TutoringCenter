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
}

export default new RequestHandler();
