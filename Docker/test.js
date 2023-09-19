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

<script src="/ads.js" type="text/javascript"></script>
<script type="text/javascript">
if( document.getElementById('PR44EPxgRGrsoVe') ){
  alert('Es ist kein AdBlocker aktiv!');
} else {
  alert('AdBlocker ist aktiv und Werbung wird blockiert!');
}
</script>


ads.js:
var e=document.createElement('div');
e.id='PR44EPxgRGrsoVe';
e.style.display='none';
document.body.appendChild(e);
