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
    }else {
      return true;
    }
}

function erregistroaBalidatu(){
  var dur = document.forms["erregistratu"]["dur"].value;
  var ori = document.forms["erregistratu"]["ori"].value;
  var des = document.forms["erregistratu"]["des"].value;
  var p1 = document.forms["erregistratu"]["p1"].value;
  var p2 = document.forms["erregistratu"]["p2"].value;
  var tic = document.forms["erregistratu"]["tic"].value;
  var tic_s = document.forms["erregistratu"]["tics"].value;
  var date = document.forms["erregistratu"]["date"].value;
  var prc = document.forms["erregistratu"]["prc"].value;
}
