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