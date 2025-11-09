// IMPORTED MODULE
import logoutModalView from "../../../views/partials/modals/logoutModalView.js";

const controlToggleLogoutModal = function () {
    logoutModalView.getLogoutModal().toggleClass("hide-logout-modal");
};

export const initController = function () {
    logoutModalView.handleToggleLogoutModal(controlToggleLogoutModal);
};
