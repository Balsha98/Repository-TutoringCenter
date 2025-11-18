// IMPORTED MODULES
import requestHandler from "../../../requestHandler.js";
import deleteImageModalView from "../../../views/partials/modals/deleteImageModalView.js";

const controlToggleDeleteImageModal = function () {
    deleteImageModalView.getDeleteImageModal().toggleClass("hide-delete-image-modal");
};

const controlDeleteImage = function (e) {
    e.preventDefault();

    const url = deleteImageModalView.getDeleteImageModalForm().attr("action");
    const targetUrl = `${url}/${$("#role").val()}/${$("#id").val()}`;

    const method = deleteImageModalView.getDeleteImageModalForm().attr("method");

    requestHandler.handleRequest(targetUrl, method);

    controlToggleDeleteImageModal();
};

export const initController = function () {
    deleteImageModalView.handleToggleDeleteImageModal(controlToggleDeleteImageModal);
    deleteImageModalView.handleDeleteImage(controlDeleteImage);
};
