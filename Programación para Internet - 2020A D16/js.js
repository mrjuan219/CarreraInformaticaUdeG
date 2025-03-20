
function deleteRow(r){
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("branch-table").deleteRow(i);
}
