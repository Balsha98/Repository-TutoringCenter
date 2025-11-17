// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import imageModalView from "../../../views/partials/modals/imageModalView.js";

const controlToggleImageModal = function () {
    imageModalView.getImageModal().toggleClass("hide-image-modal");
};

const controlUploadImage = function (e) {
    e.preventDefault();

    const url = imageModalView.getImageModalForm().attr("action");
    const targetUrl = `${url}/${$("#role").val()}/${$("#id").val()}`;

    const method = imageModalView.getImageModalForm().attr("method");

    const requestData = { image: $("#image").val() };

    // Guard clause.
    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(targetUrl, method, requestData);

    controlToggleImageModal();
};

export const initController = function () {
    imageModalView.handleToggleImageModal(controlToggleImageModal);
    imageModalView.handleUploadImage(controlUploadImage);
};
