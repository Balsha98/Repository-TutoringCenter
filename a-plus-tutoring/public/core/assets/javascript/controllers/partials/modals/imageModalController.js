// IMPORTED MODULE
import imageModalView from "../../../views/partials/modals/imageModalView.js";

const controlToggleImageModal = function () {
    imageModalView.getImageModal().toggleClass("hide-image-modal");
};

export const initController = function () {
    imageModalView.handleToggleImageModal(controlToggleImageModal);
};
