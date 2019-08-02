  function openSide() {
    document.getElementById("side").style.display = "block";
    document.getElementById("inspection").setAttribute('onclick', 'closeSide()');
    document.getElementById("side").setAttribute('id', 'notSide');
  }
  function closeSide() {
    document.getElementById("notSide").style.display = "none";
    document.getElementById("inspection").setAttribute('onclick', 'openSide()');
    document.getElementById("notSide").setAttribute('id', 'side');
  }