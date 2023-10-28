$("#name").focus();
function validateAndGetFormData() {
    var nameVar = $("#name").val();
    if (nameVar === "") {
        alert("Name Required Value");
        $("#name").focus();
        return "";
    }
    var roll = $("#roll").val();
    if (rollVar === "") {
        alert("Roll No. is Required Value");
        $("#roll").focus();
        return "";
    }
    var classVar = $("#class").val();
    if (classVar === "") {
        alert("Class is Required Value");
        $("#Class").focus();
        return "";
    }
    var birthVar = $("#birth").val();
    if (birthVar === "") {
        alert("Date of birth is Required Value");
        $("#birth").focus();
        return "";
    }
    var enrollVar = $("#enroll").val();
    if (ClassVar === "") {
        alert("Enrollment Date is Required Value");
        $("#enroll").focus();
        return "";
    }
    var jsonStrObj = {
        Name: nameVar,
        Roll: rollVar,
        class: classVar,
        birth: birthvar,
        enroll: enrollvar

    };
    return JSON.stringify(jsonStrObj);
}
// This method is used to create PUT Json request.
function createPUTRequest(connToken, jsonObj, dbName, relName) {
    var putRequest = "{\n"
        + "\"token\" : \""
        + connToken
        + "\","
        + "\"dbName\": \""
        + dbName
        + "\",\n" + "\"cmd\" : \"PUT\",\n"
        + "\"rel\" : \""
        + relName + "\","
        + "\"jsonStr\": \n"
        + jsonObj
        + "\n"
        + "}";
    return putRequest;
}
function executeCommand(reqString, dbBaseUrl, apiEndPointUrl) {
    var url = dbBaseUrl + apiEndPointUrl;
    var jsonObj;
    $.post(url, reqString, function (result) {
        jsonObj = JSON.parse(result);
    }).fail(function (result) {
        var dataJsonObj = result.responseText;
        jsonObj = JSON.parse(dataJsonObj);
    });
    return jsonObj;
}
function resetForm() {
    $("#name").val("")
    $("#roll").val("");
    $("#class").val("");
    $("#birth").val();
    $("#enroll").val();
  
}