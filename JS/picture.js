

function getPicture() {

  /* Inisialize variable and object */
  const requestURL = 'https://v1.nocodeapi.com/noway19/instagram/jTWDCoPAteKUQGbB?';
  var request = new XMLHttpRequest();

  /* Get JSON file */
  request.open('GET', requestURL);
  request.responseType = 'json';
  request.send();

  request.onload = function() {
    const jsonpicture = request.response;
    document.getElementById("feedinsta").src = jsonpicture['data']['0']['media_url'];
  }
}
