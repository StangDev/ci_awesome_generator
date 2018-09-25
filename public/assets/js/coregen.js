////////////////////////// Service Frame //////////////////////////////////
function window_open(frameSrc) {
    $(this).parents('body').addClass('overflow-fix');
    $('#myframe').addClass('iframe-visible');
    $('#myframe').attr('src', frameSrc);
    //return false;
}

function window_close() {
    $(window.frameElement).removeClass('iframe-visible');
    $(window.frameElement).parents('body').removeClass('overflow-fix');
    $(window.frameElement).attr('src', '');
    //return false;
}

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

////////////////////////// Alert Functions //////////////////////////////////
function AlertSuccess(msg) {
    var defaultMsg = "Indicates a successful or positive action.";
    var pnl = $("#pnlAlertSuccess");
    AlertShow(pnl, msg, defaultMsg);
}
function AlertInfo(msg) {
    var defaultMsg = "This alert needs your attention, but it's not super important.";
    var pnl = $("#pnlAlertInfo");
    AlertShow(pnl, msg, defaultMsg);
}
function AlertWarning(msg) {
    var defaultMsg = "Better Check yourself, you're not looking too good.";
    var pnl = $("#pnlAlertWarning");
    AlertShow(pnl, msg, defaultMsg);
}
function AlertDanger(msg) {
    var defaultMsg = "This alert box could indicate a dangerous or potentially negative action.";
    var pnl = $("#pnlAlertDanger");
    AlertShow(pnl, msg, defaultMsg);
}
function AlertShow(pnl, msg, defaultMsg) {
    if (typeof msg == 'undefined' || msg == '')
        msg = defaultMsg;

    pnl.find("span").html(msg);

    pnl.show();
    setTimeout(function () {
        pnl.hide();
    }, 20000)
}

////////////////////////// AJAX Functions //////////////////////////////////
function AjaxGetRequest(path, successFunc, failFunc) {
    $.ajax({
        url: GetUnix(path),
        type: 'GET',
        //headers: { 'Authorization': "Bearer " + token },
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: successFunc,
        error: failFunc
    });
}
function AjaxPostRequest(path, jData, successFunc, failFunc) {
    console.log(jData);
    $.ajax({
        url: path,
        type: 'POST',
        //headers: { 'Authorization': "Bearer " + token },
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(jData),
        success: successFunc,
        error: failFunc
    });
}
function AjaxPutRequest(path, jData, successFunc, failFunc) {
    $.ajax({
        url: path,
        type: 'PUT',
        //headers: { 'Authorization': "Bearer " + token },
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(jData),
        success: successFunc,
        error: failFunc
    });
}
function AjaxDeleteRequest(path, jData, successFunc, failFunc) {
    $.ajax({
        url: path,
        type: 'DELETE',
        //headers: { 'Authorization': "Bearer " + token },
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(jData),
        success: successFunc,
        error: failFunc
    });
}

function AjaxUploadRequest(path, formData, successFunc, failFunc) {
    $.ajax({
        url: path,
        type: 'POST',
        processData: false, // important
        contentType: false, // important
        dataType: 'json',
        data: formData,
        success: successFunc,
        error: failFunc
    });
}

function GetUnix(path) {
    if (path != "") {
        if (path.indexOf("?") > -1)
            path += "&"
        else
            path += "?";
        path += "_=" + moment().unix();
        //console.log(path);
    }
    return path;
}

function DropDownClearForm(d, path) {
    $(d).html('');
    var successFunc = function (result) {
        $(d).append($("<option></option>")
            .attr("value", "")
            .text("กรุณาเลือก"));
        $.each(result, function (key, value) {
            $(d).append($("<option></option>")
                .attr("value", value.id_guid)
                .text(value.name));
        });
    };
    AjaxGetRequest(path, successFunc, AlertDanger)
}

function CheckBoxFeedDataToForm(d, v) {
    if (v == true) {
        $(d).prop('checked', true);
    } else {
        $(d).prop('checked', false);
    }
}

function CheckBoxGetFromForm(d) {
    if ($(d).is(':checked')) {
        return true;
    } else {
        return false;
    }
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

String.format = function () {
    // The string containing the format items (e.g. "{0}")
    // will and always has to be the first argument.
    var theString = arguments[0];

    // start with the second argument (i = 1)
    for (var i = 1; i < arguments.length; i++) {
        // "gm" = RegEx options for Global search (more than one instance)
        // and for Multiline search
        var regEx = new RegExp("\\{" + (i - 1) + "\\}", "gm");
        theString = theString.replace(regEx, arguments[i]);
    }

    return theString;
}

// ================= File Upload ========================
function UploadImage(file, hid_uploadurl, downloadurl) {
    var file_data = file.prop("files")[0];
    var myFormData = new FormData();
    myFormData.append('files', file_data);
    var successFunc = function (response) {
        hid_uploadurl.val(response.filesUploaded[0]);
        if (downloadurl) { 
        downloadurl.attr("href", apisite + "/" + response.filesUploaded[0]);
    }
    }

    AjaxUploadRequest(apisite + "/api/Attachment/UploadMultipleFiles", myFormData, successFunc, AlertDanger);
}

function readURL(input, image) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
} 

function setupUploadEvent() {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }

    });
}

function hasExtension(inputID, exts) {
    var fileName = document.getElementById(inputID).value;
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}


