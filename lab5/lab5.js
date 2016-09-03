//Function to change header font style
function changeFont(){
  var max=5, min=0;
  var rand=Number((Math.random() * (max - min) + min).toFixed(0));
  console.log(rand);
  switch (rand) {
      case 0:
        document.getElementById("header").style.color="red";
        document.getElementById("header").style.textAlign= "left";
        document.getElementById("header").style.textDecoration="overline";
        document.getElementById("header").style.textTransform="uppercase";
        break;
    case 1:
        document.getElementById("header").style.color="blue";
        document.getElementById("header").style.textAlign="right";
        document.getElementById("header").style.textDecoration="overline";
        document.getElementById("header").style.textTransform="lowercase";
        break;
    case 2:
        document.getElementById("header").style.color="pink";
        document.getElementById("header").style.textAlign="left";
        document.getElementById("header").style.textDecoration="underline";
        document.getElementById("header").style.textTransform="lowercase";
        break;
    case 3:
        document.getElementById("header").style.color="green";
        document.getElementById("header").style.textAlign="center";
        document.getElementById("header").style.textDecoration="line-through";
        document.getElementById("header").style.textTransform="uppercase";
        break;
    case 4:
        document.getElementById("header").style.color="yellow";
        document.getElementById("header").style.textAlign="left";
        document.getElementById("header").style.textDecoration="underline";
        document.getElementById("header").style.textTransform="capitalize";
        break;
    case 5:
        document.getElementById("header").style.color="orange";
        document.getElementById("header").style.textAlign="right";
        document.getElementById("header").style.textDecoration="line-through";
        document.getElementById("header").style.textTransform="capitalize";
        break;
    default:
      console.log("none")
      break;
  }
}

//Function to show range input value
function updateTextInput(val) {
  document.getElementById('textInput').value=val;
}

//setInterval function implementation
var myVar = setInterval(myTimer, 1000);
var count=0;
function myTimer() {
      var arr=["W","E","L","C","O","M","e","!"];
      document.getElementById("welcome").innerHTML = arr[count];
      if (count>6){
        count=0;
      }
      else {
        count++;
      }
}

//Drag and drop elements
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}


//Toogle between hiding and showing questions
//initalize value
document.getElementById('questions').style.display="none";

function toogle(){
  var e=document.getElementById('questions');
  if(e.style.display=='block'){
    document.getElementById('questions').style.display="none";
    num=1;
  }else{
    document.getElementById('questions').style.display="block";
    num=0;
  }
}
