async function getVeranstraltung(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_ausgabe/veranstaltungid.php?id="+id);
    const data = (await request.json())[0];

    document.getElementById("datum").innerHTML = data.datum;
    document.getElementById("ort").innerHTML = data.ort;
    document.getElementById("startzeit").innerHTML = data.startzeit;
    document.getElementById("endzeit").innerHTML = data.endzeit;
    document.getElementById("dauer").innerHTML = data.dauer;
    document.getElementById("spezialisierung").innerHTML = data.spezialisierung;
    document.getElementById("beschreibung").innerHTML = data.beschreibung;

    
}
async function buchen(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_eingabe/delveranstaltung.php?id="+id);
}
function delbuchen(){

}
getVeranstraltung()
async function delVer(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
const request = await fetch("../../php_eingabe/delveranstaltung.php?id="+id);
window.open("../Kalenderpage/kalender4.html", "_self")
const data = await request
}