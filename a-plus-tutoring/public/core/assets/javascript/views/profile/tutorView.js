class TutorView {
    #profileForm = $(".form-tutor-profile-view-detailed-bio");
    #btnProfileUpdate = $(".btn-profile-update");

    handleProfileUpdate(handler) {
        this.#btnProfileUpdate.click(handler);
    }

    getProfileForm() {
        return this.#profileForm;
    }
}

export default new TutorView();
