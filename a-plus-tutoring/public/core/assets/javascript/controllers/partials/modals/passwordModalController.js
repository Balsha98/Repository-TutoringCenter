// IMPORTED MODULE
import passwordModalView from "../../../views/partials/modals/passwordModalView.js";

const controlToggleImageModal = function () {
    passwordModalView.getPasswordModal().toggleClass("hide-password-modal");
};

export const initController = function () {
    passwordModalView.handleTogglePasswordModal(controlToggleImageModal);
};
