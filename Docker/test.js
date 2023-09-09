let printObj = function (obj) {
    let string = '';
 
    for (let prop in obj) {
        if (typeof obj[prop] == 'string') {
            string += prop + ': ' + obj[prop] + '; \n';
        }
        else {
            string += prop + ': { \n' + print(obj[prop]) + '}';
        }
    }
 
    return string;
}

async function delVer(){
    let params = new URLSearchParams(document.location.search);
    let id = params.get("id");
const request = await fetch("../../php_eingabe/AdminVeranstaltungDelete.php?veranstaltungs_id="+id);
window.open("../Kalenderpage/kalender4.html", "_self")
const data = await request
}