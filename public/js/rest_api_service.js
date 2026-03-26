function sendAjaxRequest(url, method, data, successCallback, errorCallback) {
    $.ajax({
        url: url,
        type: method, // 'POST', 'GET', 'PUT', 'DELETE'
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF tokenni yuborish
        },
        success: function(response) {
            if (typeof successCallback === "function") {
                successCallback(response);
            }
        },
        error: function(xhr, status, error) {
            if (typeof errorCallback === "function") {
                errorCallback(xhr, status, error);
            }
        }
    });
}
