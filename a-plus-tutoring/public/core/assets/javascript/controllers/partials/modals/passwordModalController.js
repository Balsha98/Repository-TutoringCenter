// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import passwordModalView from "../../../views/partials/modals/passwordModalView.js";

const controlTogglePasswordModal = function () {
    passwordModalView.getPasswordModal().toggleClass("hide-password-modal");
};

const controlConfirmPassword = function (e) {
    e.preventDefault();

    const url = passwordModalView.getPasswordModalForm().attr("action");
    const targetUrl = `${url}/${$("#role").val()}/${$("#id").val()}`;

    const method = passwordModalView.getPasswordModalForm().attr("method");

    const requestData = { password: $("#password").val() };

    // Guard clause.
    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(targetUrl, method, requestData);

    controlTogglePasswordModal();
};

export const initController = function () {
    passwordModalView.handleTogglePasswordModal(controlTogglePasswordModal);
    passwordModalView.handleConfirmPassword(controlConfirmPassword);
};
