
function selectVersion(version){
  document.getElementById("drop-selection").value = version;
}

function toggleDrop() {
  var element = document.getElementById("drop-down");
  if (element.classList.contains("hidden")){
    element.classList.remove("hidden");
  } else {
    element.classList.add("hidden");
  }
}
