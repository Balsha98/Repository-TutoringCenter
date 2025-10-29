// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import signupView from "../../../views/auth/signupView.js";

const handleFormSteps = function () {
    const btnStep = +$(this).data("step");

    if (btnStep === 2) {
        const requestData = {};
        requestData["first-name"] = $("#first-name").val();
        requestData["last-name"] = $("#last-name").val();
        requestData["major"] = $("#major").val();

        // Guard clause.
        if (requestHandler.checkForEmptyInputs(requestData)) return;
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
    requestData["first-name"] = $("#first-name").val();
    requestData["last-name"] = $("#last-name").val();
    requestData["major"] = $("#major").val();
    requestData["role"] = $("#role").val();
    requestData["email"] = $("#email").val();
    requestData["password"] = $("#password").val();

    // Guard clause.
    if (requestHandler.checkForEmptyInputs(requestData)) return;

    requestHandler.handleRequest(url, method, requestData);
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(0.1);

    signupView.handleFormSteps(handleFormSteps);
    signupView.handleUserSignup(handleUserSignup);
};

initController();
