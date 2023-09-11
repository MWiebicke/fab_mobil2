async function benutzerbearbeiten(){
    let params = new URLSearchParams(document.location.search);
    let veranstaltungs_id = params.get("veranstaltungs_id");
    const request = await fetch("../../php_ausgabe/AdminVeranstaltungUpdateData.php?veranstaltungs_id="+veranstaltungs_id);
    const data = (await request.json())[0];
    
    document.querySelector("#datum").value = data.datum
    document.querySelector("#ort").value = data.ort
    document.querySelector("#startzeit").value = data.startzeit.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
    document.querySelector("#endzeit").value = data.endzeit
    document.querySelector("#workshop").value = data.workshop_id
    document.querySelector("#spezialisierung").value = data.spezialisierung
    }
    benutzerbearbeiten();