const TermineContainer = document.querySelector("#event");    

async function getKontacts(){
    const req = await fetch("../../php_ausgabe/Nutzerdaten.php");
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
            <summary>${entry.anrede} ${entry.firstname}  ${entry.lastname}
            <button onclick="deleteuser(${entry.user_id})" type="submit" value="submit">Nutzer Löschen</button>
            <button onclick="benutzerbearbeiten(${entry.user_id})" type="submit" value="submit">Nutzer bearbeiten</button></summary>
            <table>
            <tr>
                <td>Email</td>
                <td>${entry.email}</td>
                <td>Tel.</td>
                <td>${entry.tel_number}</td>
            </tr>
            <tr>
                <td>Stelle</td>
                <td>${entry.stellenname}</td>
                <td>Unternehmen</td>
                <td>${entry.unternehmen}</td>
            </tr>
            <tr>
                <td>Beschreibung</td>
                <td colspan="3"${entry.beschreibung}></td>
            </tr>
        </table>
          </details>
        </div>
      </div>`;
    }
}

getKontacts();

async function deleteuser(user_id){
    const request = await fetch("../../php_eingabe/deleteuser.php?user_id="+user_id);
    location.reload(); 
}
async function benutzerbearbeiten(user_id){
  window.location.href = "./benutzerbearbeiten.html?user_id="+user_id;

}

