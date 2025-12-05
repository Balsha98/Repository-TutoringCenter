class TutorView {
    #sessionsCalendarDatesContainer = $(".div-tutor-sessions-view-calendar-dates-container");

    generateCalendarDates(year, month, date) {
        let lastDateOfPrevMonth = new Date(year, month, 0).getDate();
        let firstDayOfCurrMonth = new Date(year, month, 1).getDay();
        let lastDateOfCurrMonth = new Date(year, month + 1, 0).getDate();
        let lastDayOfCurrMonth = new Date(year, month, lastDateOfCurrMonth).getDay();

        for (let i = firstDayOfCurrMonth; i > 0; i--) {
            this.#sessionsCalendarDatesContainer.append(`
                <div class="div-inactive-date-container">
                    <span>${lastDateOfPrevMonth - i + 1}</span>
                </div>
            `);
        }

        for (let i = 1; i <= lastDateOfCurrMonth; i++) {
            this.#sessionsCalendarDatesContainer.append(`
                <div class="${date === i && "div-todays-date-container active"}">
                    <span>${i}</span>
                </div>
            `);
        }

        for (let i = lastDayOfCurrMonth; i < 6; i++) {
            this.#sessionsCalendarDatesContainer.append(`
                <div class="div-inactive-date-container">
                    <span>${i - lastDayOfCurrMonth + 1}</span>
                </div>
            `);
        }
    }
}

export default new TutorView();
