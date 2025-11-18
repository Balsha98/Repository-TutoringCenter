// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import * as logoutModalController from "../../partials/modals/logoutModalController.js";
import * as passwordModalController from "../../partials/modals/passwordModalController.js";
import * as deleteImageModalController from "../../partials/modals/deleteImageModalController.js";
import * as uploadImageModalController from "../../partials/modals/uploadImageModalController.js";
import tutorView from "../../../views/profile/tutorView.js";

const controlProfileUpdate = function () {
    const url = tutorView.getProfileForm().attr("action");
    const method = tutorView.getProfileForm().attr("method");

    const requestData = {};
    requestData["first_name"] = $("#first_name").val();
    requestData["last_name"] = $("#last_name").val();
    requestData["email_address"] = $("#email_address").val();
    requestData["phone"] = $("#phone").val() || "NULL";
    requestData["status"] = $("#status").val();

    // Guard clause.
    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(url, method, requestData);
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(0.2);

    logoutModalController.initController();
    passwordModalController.initController();
    deleteImageModalController.initController();
    uploadImageModalController.initController();

    tutorView.handleProfileUpdate(controlProfileUpdate);
};

initController();
