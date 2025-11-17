// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import loginView from "../../../views/auth/loginView.js";

const controlUserLogin = function (e) {
    e.preventDefault();

    const url = loginView.getLoginForm().attr("action");
    const method = loginView.getLoginForm().attr("method");

    const requestData = {};
    requestData["email_address"] = $("#email_address").val();
    requestData["password"] = $("#password").val();

    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(url, method, requestData);
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(1);

    loginView.handleUserLogin(controlUserLogin);
};

initController();
