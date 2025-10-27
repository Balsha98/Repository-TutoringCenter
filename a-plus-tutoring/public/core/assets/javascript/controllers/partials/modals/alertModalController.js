// IMPORTED MODULES
import alertModalView from "../../../views/partials/modals/alertModalView.js";

const controlToggleAlertModal = function () {
    alertModalView.getAlertModal().toggleClass("hide-alert-modal");
};

export const controlShowAlertModal = function (response) {
    alertModalView.handleShowAlertModal(response);

    controlToggleAlertModal();
};

// INITIALIZER
const initController = function () {
    alertModalView.handleHideAlertModal(controlToggleAlertModal);
};

initController();
