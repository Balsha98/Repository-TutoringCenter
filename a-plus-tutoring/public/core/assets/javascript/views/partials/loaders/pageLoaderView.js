class PageLoaderView {
    #pageLoader = $(".div-page-loader-container");

    handleHidePageLoader(seconds) {
        setTimeout(() => this.#pageLoader.addClass("hide-page-loader"), seconds * 1000);
    }
}

export default new PageLoaderView();
