const filasSelect = 5000;
fillOpctionsSelect();
function fillOpctionsSelect(){
    var select = "";
    for(var i = 1; i<=filasSelect; i++){
        var node = document.createElement("option");
        var textNode = document.createTextNode([i]);
        node.appendChild(textNode);
        document.getElementById("selectorFilas").appendChild(node);
    }
}
function postData(){
    var selectValue = document.getElementById("selectorFilas").value;
    document.form-filas.submit();
}
function deleteRow(r){
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("branch-table").deleteRow(i);
}
