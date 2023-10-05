const TermineContainer = document.querySelector("#event");    

async function getDates(){
    const req = await fetch("../../php_ausgabe/AdminWorkshopData.php");
    const data = await req.json();


    for (const entry of data) {
        TermineContainer.innerHTML += 
        `
        <div class="box">
            <div class="column">
                <div id="location" class="location">${entry.titel}</div>
                <div id="workshop" class="workshop">${entry.beschreibung} </div>
            </div>
            <div class="column">
                <div class="dateandtime" id="dateandtime">Dauer: ${entry.dauer}h</div>
            </div>
        </div>
        <button onclick="deleteworkshop(${entry.workshop_id})" type="submit" value="submit">Workshop Löschen</button>
        <button onclick="workshopbearbeiten(${entry.workshop_id})" type="submit" value="submit">Workshop bearbeiten</button>`;
    }
}

getDates();

async function deleteworkshop(workshop_id){
    const request = await fetch("../../php_eingabe/AdminWorkshopDelete.php?workshop_id="+workshop_id);
    location.reload(); 
}
async function workshopbearbeiten(workshop_id){
  window.location.href = "./workshopbearbeiten.html?workshop_id="+workshop_id;

}