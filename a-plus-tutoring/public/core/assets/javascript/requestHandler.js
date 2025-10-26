class RequestHandler {
    handleRequest(url, method, data) {
        $.ajax({
            url: url,
            method: method,
            data: JSON.stringify(data),
            success: function (response) {
                console.log(response);
            },
        });
    }
}

export default new RequestHandler();
