async function getVeranstraltung(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_ausgabe/veranstaltungid.php?veranstaltungs_id="+id);
    const data = (await request.json())[0];

    document.getElementById("datum").innerHTML = data.datum;
    document.getElementById("ort").innerHTML = data.ort;
    document.getElementById("startzeit").innerHTML = isEmpty(data.startzeit);
    document.getElementById("endzeit").innerHTML = data.endzeit;
    document.getElementById("dauer").innerHTML = data.dauer;
    document.getElementById("spezialisierung").innerHTML = isEmpty(data.spezialisierung);
    document.getElementById("beschreibung").innerHTML = data.beschreibung;
} 
getVeranstraltung()

async function getTeilnehmer(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_ausgabe/teilnehmerget.php?veranstaltungs_id="+id);
    const data = (await request.json())[0];
    const request2 = await fetch("../../php_ausgabe/teilnehmerget.php?veranstaltungs_id="+id);
    const data2 = (await request2.json())[1];
    document.getElementById("teilnehmer1").innerHTML = data.firstname + " " + data.lastname;
    document.getElementById("teilnehmer2").innerHTML = data2.firstname + " " + data2.lastname;
     
}
getTeilnehmer()

async function buchen(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_eingabe/Teilnehmerinsert.php?veranstaltungs_id="+id);
}

async function delbuchen(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
    const request = await fetch("../../php_eingabe/Teilnehmerdel.php?veranstaltungs_id="+id);
}

async function delVer(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
const request = await fetch("../../php_eingabe/delveranstaltung.php?veranstaltungs_id="+id);
window.open("../Kalenderpage/kalender4.html", "_self")
const data = await request
}

function isEmpty(nullvalue) {
    if(nullvalue !== null){
        return nullvalue
    }else {
        nullvalue = "0"
    }
  }
