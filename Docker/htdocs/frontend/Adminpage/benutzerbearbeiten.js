async function benutzerbearbeiten(){
let params = new URLSearchParams(document.location.search);
let user_id = params.get("user_id");
const request = await fetch("../../php_ausgabe/AdminUserUpdate.php?user_id="+user_id);
const data = (await request.json())[0];

document.querySelector("#anrede").value = data.anrede
document.querySelector("#lastname").value = data.lastname
document.querySelector("#firstname").value = data.firstname
document.querySelector("#unternehmen").value = data.unternehmen
document.querySelector("#stellenname").value = data.stellenname
document.querySelector("#email").value = data.email
document.querySelector("#tel_number").value = data.tel_number
document.querySelector("#beschreibung").value = data.beschreibung
}
benutzerbearbeiten();
