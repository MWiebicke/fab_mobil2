const TermineContainer = document.querySelector("#event");    

async function getKontacts(){
    const req = await fetch("../../php_ausgabe/KontakteData.php");
    const data = await req.json();


    for (const entry of data) {
        TermineContainer.innerHTML += 
        `<div class="kontakt">
        <div class="bild">
          <img class="kontaktbild"
            src="">
        </div>
        <div class="text">
          <details>
            <summary>${entry.firstname}  ${entry.lastname}</summary>
            <p>Telefonnummer:${entry.tel_number}</p>
            <p>Email:${entry.email}</p>
            <p>Unternehmen:${entry.unternehmen}</p>
            <p>Job:${entry.stellenname}</p>
          </details>
        </div>
      </div>`;
    }
}

getKontacts();