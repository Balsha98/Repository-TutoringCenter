class PageLoaderView {
    #divPageLoader = $(".div-page-loader-container");

    handleHidePageLoader(seconds) {
        setTimeout(() => this.#divPageLoader.addClass("hide-page-loader"), seconds * 1000);
    }
}

export default new PageLoaderView();
