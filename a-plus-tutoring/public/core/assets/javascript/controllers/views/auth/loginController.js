// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import loginView from "../../../views/auth/loginView.js";

const handleUserLogin = function (e) {
    e.preventDefault();

    const url = loginView.getLoginForm().attr("action");
    const method = loginView.getLoginForm().attr("method");

    const requestData = {};
    requestData["email"] = $("#email").val();
    requestData["password"] = $("#password").val();

    requestHandler.handleRequest(url, method, requestData);
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(2);

    loginView.handleUserLogin(handleUserLogin);
};

initController();
