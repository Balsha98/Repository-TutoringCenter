// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import uploadImageModalView from "../../../views/partials/modals/uploadImageModalView.js";

const controlToggleUploadImageModal = function () {
    uploadImageModalView.getUploadImageModal().toggleClass("hide-upload-image-modal");
};

const controlUploadImage = function (e) {
    e.preventDefault();

    const url = uploadImageModalView.getUploadImageModalForm().attr("action");
    const targetUrl = `${url}/${$("#role").val()}/${$("#id").val()}`;

    const method = uploadImageModalView.getUploadImageModalForm().attr("method");

    const requestData = { image: $("#image").val() };

    // Guard clause.
    if (requestHandler.traverseForInvalidInputs(requestData)) return;

    requestHandler.handleRequest(targetUrl, method, requestData);

    controlToggleUploadImageModal();
};

export const initController = function () {
    uploadImageModalView.handleToggleUploadImageModal(controlToggleUploadImageModal);
    uploadImageModalView.handleUploadImage(controlUploadImage);
};
