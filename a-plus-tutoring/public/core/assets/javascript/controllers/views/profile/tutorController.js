// IMPORTED MODULES
import * as pageLoaderController from "../../partials/loaders/pageLoaderController.js";
import * as logoutModalController from "../../partials/modals/logoutModalController.js";
import * as imageModalController from "../../partials/modals/imageModalController.js";

const initController = function () {
    pageLoaderController.controlHidePageLoader(0.2);

    logoutModalController.initController();
    imageModalController.initController();
};

initController();
