$(document).ready(function () {
    const urlBase = `${environment.API_URL}`;
    const urlApi = `${urlBase}/companies`;
    getData(urlApi);
});

function getData(url) {
    $.ajax({
        url,
        method: "GET",
    }).done(function (data) {
        loadDataIntoTable(data);
    });
}

function loadDataIntoTable(data) {
    $("#companies tbody").html("");
    $.map(data.data, function (line) {
        var tblRow = `<tr><td>${line.id}</td>
            <td>${line.name}</td>
            <td>
                ${line.address.address}, ${line.address.number} <br />
                ${line.address.neighborhood} <br />
                ${line.address.city} - ${line.address.state} <br />
                CEP: ${line.address.zip_code}
            </td>
            </tr>`;

        $("#companies tbody").append(tblRow);
    });
}
