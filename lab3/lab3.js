//Ex 1
  function mySquare() {
      var number = prompt("Please enter a number");
      if (number != null) {
        var square=number*number;
            var cube=number*number*number;
        document.write("square: " + square + " "+"cube: " +cube);
      }
  }
//Ex 2
 function myRand() {
     var rand1=Number((Math.random()).toFixed(4));
     var rand2=Number((Math.random()).toFixed(4));
     var start = new Date().getTime();
     var ans=prompt("Please enter the sum of:"+" "+rand1+"+"+rand2);
      if (ans != null) {
        var end = new Date().getTime();
        if(ans==(rand1+rand2)){
          alert("Correct  Time: "+(end-start)+" "+"ms");
        }
        else{
          alert("Incorrect  Time: "+(end-start)+" "+"ms");
        }
      }
 }
//Ex 3
  function myCount(array){
    var pos=0,neg=0,zero=0;
    for (var i=0;i<array.length;i++){
      if(array[i]>0) pos++;
      else if (array[i]<0) neg++;
      else zero++;
    }
    return [pos,neg,zero];
  }

//Ex 4
var arrSend=[1,2,-3,-8,9,0,5,-6];
var arrayAns=myCount(arrSend);
document.getElementById("count").innerHTML = "Pos: " +arrayAns[0] +" "+"Neg: "+arrayAns[1]+" " +"Zero: "+arrayAns[2];

 function myAverage(arrayP) {
    var arr=[];
    var sum=0,av=0;
     for(var i=0;i<arrayP.length;i++){
         for(var j=0;j<arrayP[0].length;j++){
           sum+=arrayP[i][j];
         }
         av=sum/arrayP[0].length;
         arr[i]=av;
         sum=0;
         av=0;
     }
   return arr;
}
//Ex 5
 //Modify arraySend in order to obtain the average of a different matrix i*j
var arraySend=[[1,2,3],[4,5,6]];
document.getElementById("average").innerHTML = myAverage(arraySend);

function myInv() {
      var number = prompt("Please enter a number");
      if (number != null) {
        number =number + "";
        number= number.split("").reverse().join("");
        document.getElementById("inv").innerHTML = "Reverse number: "+number ;
      }
  }
//Ex 6
function Person(firstName,lastName,id,hour){
  this.firstName=firstName;
  this.lastName=lastName;
  this.id=id;
  this.hour=hour;
  this.fullName=function() {
       return this.firstName + " " + this.lastName;
    }
  this.changeID=function (newID) {
        this.id = newID;
    }
}
var person = {
    firstName: "Ciria",
    lastName : "Cardenas",
    id       : 212579366,
    age      : 22,
    hour     : Date(),
    fullData : function() {
       return this.firstName + " " + this.lastName+ " " +this.id+ " " +this.age+ " " +this.hour;
    },
    lastAccess: function(){
      return this.id+" "+this.hour;
    },
    isAdult: function(ageAdult){
      var ans;
      ans=ageAdult>18? true:false;
      return ans;
    }
};

document.getElementById("asvar").innerHTML = person.fullData()+" isAdult: "+person.isAdult(person.age);

var per1=new Person("Anne","Juar",212579358,Date());
document.getElementById("object").innerHTML = "Data: "+ per1.fullName()+" "+ per1.id+" "+per1.hour;
per1.changeID(212579369);
document.getElementById("object1").innerHTML = "Data: "+ per1.fullName()+" "+ per1.id+" "+per1.hour;
