// IMPORTED MODULES
import * as pageLoaderController from "../../../partials/loaders/pageLoaderController.js";
import tutorView from "../../../../views/reports/ratings/tutorView.js";

const controlReportPrinting = function () {
    window.print();
};

const initController = function () {
    pageLoaderController.controlHidePageLoader(0.2);

    tutorView.handleReportPrinting(controlReportPrinting);
};

initController();
