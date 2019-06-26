/*
    functions message
 */

function showMsg() {
    alert("Ma première fonction!");
}

let message = 'Ici la variable globale !';
function msg() {
    let message = 'Ici la variable locale !';
    alert(message);
}
msg();
alert(message);