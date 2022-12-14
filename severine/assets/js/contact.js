

const apiKey = '1aaeedd3f2a2197486d49b052c21cef2';
const secretKey = '1704e7e64813be0f36d3f638d211d146';

function sendMail() {
    console.log('here');
    const myHeaders = new Headers();
    console.log('KEY', btoa(apiKey+":"+secretKey));
    myHeaders.append("Content-Type", "application/json");
    myHeaders.set('Authorization', 'Basic ' + btoa(apiKey+":"+secretKey));

    const data = JSON.stringify({
        "Messages": [{
        "From": {"Email": "webdesignort@gmail.com", "Name": "Web Design"},
        "To": [{"Email": 'cdiazalvarino@gmail.com', "Name": 'Claudia'}],
        "Subject": 'subject',
        "TextPart": 'message'
        }]
    });

    const requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: data,
    };

    fetch("https://api.mailjet.com/v3.1/send", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));

}

// $('form').submit(function (e) {
//     e.preventDefault();
//     sendMail();
// });