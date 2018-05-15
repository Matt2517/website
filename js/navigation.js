
function switchElement(id){
  for (var i = 0; i < 3; i++) {
    hideElement(i);
  }
  showElement(id);
}

function showElement(id) {
  getElement(id).classList.remove("hidden");
  getButton(id).classList.add("active");
}

function hideElement(id) {
  getElement(id).classList.add("hidden");
  getButton(id).classList.remove("active");
}

function getElement(id){
  if (id == 0){
    return document.getElementById("landing-page");
  } else if (id == 1){
    return document.getElementById("features");
  } else if (id == 2){
    return document.getElementById("downloads");
  }
}

function getButton(id){
  if (id == 0){
    return document.getElementById("bHome");
  } else if (id == 1){
    return document.getElementById("bFeatrues");
  } else if (id == 2){
    return document.getElementById("bDownloads");
  }
}
