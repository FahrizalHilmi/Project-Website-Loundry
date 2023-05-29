function Add() {
    AddRow($("#jenis").val(), $("#jumlah").val(), $('input[name="berat"]:checked').val());
    $("#jenis").val('');
    $("#jumlah").val('');
    $('input[name="berat"]').attr('checked', false);
};
  
function AddRow(jenis, jumlah, city) {

    let tBody = $("#tblCucian > TBODY")[0];

    let row = tBody.insertRow(0);
    let cell = $(row.insertCell(-1));
    cell.html(jenis);

    cell = $(row.insertCell(-1));
    cell.html(jumlah);

    cell = $(row.insertCell(-1));
    cell.html(city);

    cell = $(row.insertCell(-1));
    let btnRemove = $("<input class='btn btn-secondary' />");
    btnRemove.attr("type", "button");
    btnRemove.attr("onclick", "Remove(this);");
    btnRemove.val("Remove");


    cell.append(btnRemove);
};


function Remove(button) {

    let row = $(button).closest("TR");
    let jenis = $("TD", row).eq(0).html();
    console.log(row, jenis, row[0].rowIndex);
    if (confirm("Do you want to delete: " + jenis)) {

        let table = $("#tblCucian")[0];

        table.deleteRow(row[0].rowIndex);
    }
};
