// IMPORTED MODULES
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import * as logoutModalController from "../../partials/modals/logoutModalController.js";
import tutorModel from "../../../models/views/sessions/tutorModel.js";
import tutorView from "../../../views/sessions/tutorView.js";

const controlGenerateSessionsCalendarDates = function () {
    const year = tutorModel.get("dateObj").getFullYear();
    const month = tutorModel.get("dateObj").getMonth();
    const date = tutorModel.get("dateObj").getDate();

    tutorView.generateCalendarDates(year, month, date);
};

const initController = function () {
    controlGenerateSessionsCalendarDates();

    pageLoaderController.controlHidePageLoader(0.2);

    logoutModalController.initController();
};

initController();
