// IMPORTED MODULES
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import * as logoutModalController from "../../partials/modals/logoutModalController.js";

const initController = function () {
    pageLoaderController.controlHidePageLoader(0.2);

    logoutModalController.initController();
};

initController();
