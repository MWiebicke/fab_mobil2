const TermineContainer = document.querySelector("#event");    

async function getDates(){
    const req = await fetch("../../php_ausgabe/AdminVeranstaltungData.php");
    const data = await req.json();


    for (const entry of data) {
        TermineContainer.innerHTML += 
        `
        <div class="box">
            <div class="column">
                <div id="location" class="location">${entry.ort}</div>
                <div id="workshop" class="workshop">${entry.spezialisierung} </div>
            </div>
            <div class="column">
                <div class="dateandtime" id="dateandtime">${entry.datum}, ${entry.startzeit}</div>
            </div>
        </div>
        <button onclick="deleteveranstaltung(${entry.veranstaltungs_id})" type="submit" value="submit">Veranstaltung Löschen</button>
        <button onclick="veranstaltungbearbeiten(${entry.veranstaltungs_id})" type="submit" value="submit">Veranstaltung bearbeiten</button>`;
    }
}

getDates();

async function deleteveranstaltung(veranstaltungs_id){
    const request = await fetch("../../php_eingabe/AdminVeranstaltungDelete.php?user_id="+veranstaltungs_id);
    location.reload(); 
}
async function veranstaltungbearbeiten(veranstaltungs_id){
  window.location.href = "./veranstaltungbearbeiten.html?user_id="+veranstaltungs_id;

}