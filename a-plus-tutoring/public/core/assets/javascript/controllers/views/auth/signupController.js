// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import signupView from "../../../views/auth/signupView.js";

const handleFormSteps = function () {
    const btnStep = +$(this).data("step");

    if (btnStep === 2) {
        const requestData = {};
        requestData["first_name"] = $("#first_name").val();
        requestData["last_name"] = $("#last_name").val();
        requestData["role"] = $("#role").val();

        // Guard clause.
        if (requestHandler.traverseForInvalidInputs(requestData)) return;
    }

    signupView.getSignupFormStepItems().each((_, item) => {
        const itemStep = +$(item).data("step");

        if (itemStep === btnStep) $(item).removeClass("display-none");
        else $(item).addClass("display-none");
    });
};

const handleUserSignup = function (e) {
    e.preventDefault();

    const url = signupView.getSignupForm().attr("action");
    const method = signupView.getSignupForm().attr("method");

    const requestData = {};
    requestData["first_name"] = $("#first_name").val();
    requestData["last_name"] = $("#last_name").val();
    requestData["role"] = $("#role").val();
    requestData["email_address"] = $("#email_address").val();
    requestData["password"] = $("#password").val();
    requestData["phone"] = $("#phone").val() || "NULL";

    // Guard clause.
    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(url, method, requestData);
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(2);

    signupView.handleFormSteps(handleFormSteps);
    signupView.handleUserSignup(handleUserSignup);
};

initController();
