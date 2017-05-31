function validateForm() {   
  var x = document.forms["loginform"]["userid"].value;   
  var z = document.forms["loginform"]["passwd"].value;   
  if (x == "" && z == "") {      
    alert("Zeure datuak sartu, mezedez");       
    return false;   
  } else if (x == "") {   
    alert("Zeure IDa sartu, mezedez");
    return false;   
  } else if (z == "") {   
    alert('Zeure pasahitza idatzi, mezedez');
    return false;   
  } else {   
    return true;   
  }
}

function erregistroaBalidatu() {
  var dni = document.forms["reg"]["dni"].value;
  var izena = document.forms["reg"]["izena"].value;
  var abi = document.forms["reg"]["abi"].value;
  var data = document.forms["reg"]["data"].value;
  var hel = document.forms["reg"]["hel"].value;
  var tlf = document.forms["reg"]["tlf"].value;
  var username = document.forms["reg"]["username"].value;
  var passwd = document.forms["reg"]["passwd"].value;
  var passwd2 = document.forms["reg"]["passwd2"].value;
  var email = document.forms["reg"]["email"].value;
  if (isNaN(tlf)) {
    alert("Telefonoa zenbaki bat izan behar da")
    return false;
  } else if (passwd == passwd2) {
    alert("Pasahitzak ez dira berdinak")
    return false;
  } else if (dni.length != 9) {
    alert("DNI zenbakia 9 karaktere eduki behar ditu")
    return false;
  }

}

function bidaiaBalidatu() {
  var dur = document.forms["erregistratu"]["dur"].value;
  var ori = document.forms["erregistratu"]["ori"].value;
  var des = document.forms["erregistratu"]["des"].value;
  var p1 = document.forms["erregistratu"]["p1"].value;
  var p2 = document.forms["erregistratu"]["p2"].value;
  var tic = document.forms["erregistratu"]["tic"].value;
  var tic_s = document.forms["erregistratu"]["tics"].value;
  var date = document.forms["erregistratu"]["date"].value;
  var prc = document.forms["erregistratu"]["prc"].value;

  if (dur == "" || isNaN(dur)) {
    alert("Iraupena txarto dago.")
    return false;
  } else if (!isNaN(ori)) {
    alert(".")

  } else if
}
