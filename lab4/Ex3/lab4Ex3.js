function updateTextInput(val) {
  document.getElementById('textInput').value=val;
}

function promo(){
  document.getElementById('rand').innerHTML=(Math.random()*10000000000).toFixed(0) ;
  document.getElementById("promot").style.display = "inline";
  document.getElementById("survey").style.display = "none";
}

document.getElementById("promot").style.display = "none";
