zera = document.getElementsByClassName("cleaning");
for (var i = 0; i < zera.length; i++) {
  if (zera[i].innerHTML == "0000-00-00") {
    zera[i].innerHTML = "";
  }
}
