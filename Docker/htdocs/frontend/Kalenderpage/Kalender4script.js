const TermineContainer = document.querySelector("#event");    

async function getDates(){
    const req = await fetch("../../php_ausgabe/KalenderVeranstaltungData.php");
    const data = await req.json();


    for (const entry of data) {
        TermineContainer.innerHTML += 
        `<a href="../Veranstaltungpage/Veranstaltung.html?id=${entry.veranstaltungs_id}">
            <div class="box">
                <div class="column">
                    <div id="location" class="location">${entry.ort}</div>
                    <div id="workshop" class="workshop">${entry.spezialisierung} </div>
                </div>
                <div class="column">
                    <div class="dateandtime" id="dateandtime">${entry.datum}, ${entry.startzeit}</div>
                </div>
            </div>
        </a>`;
    }
}

getDates();

