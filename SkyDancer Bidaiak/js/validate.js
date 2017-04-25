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
