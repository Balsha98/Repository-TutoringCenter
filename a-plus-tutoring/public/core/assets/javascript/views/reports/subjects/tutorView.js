class TutorView {
    #btnPrintReport = $(".btn-print-report");

    handleReportPrinting(handler) {
        this.#btnPrintReport.click(handler);
    }
}

export default new TutorView();
