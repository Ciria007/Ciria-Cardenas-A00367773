var priceMen=950;
var priceWomen= 999.99;
var priceKid=550;
var tax=0.16;

function loadFun(){
  dataMen();
  dataKid();
  dataWomen();
}
function dataMen(){
var tableKid= document.getElementById('numMen');
tableKid.innerHTML = document.getElementById('orderMen').value;
document.getElementById('taxMen').innerHTML=(priceMen*tax*document.getElementById('orderMen').value).toFixed(2);
document.getElementById('costMen').innerHTML=(priceMen*document.getElementById('orderMen').value).toFixed(2);
dataTotal();
}

function dataKid(){
var tableKid= document.getElementById('numKid');
tableKid.innerHTML = document.getElementById('orderKid').value;
document.getElementById('taxKid').innerHTML=(priceKid*tax*document.getElementById('orderKid').value).toFixed(2);
document.getElementById('costKid').innerHTML=(priceKid*document.getElementById('orderKid').value).toFixed(2);
dataTotal();
}

function dataWomen(){
var tableKid= document.getElementById('numWomen');
tableKid.innerHTML = document.getElementById('orderWomen').value;
document.getElementById('taxWomen').innerHTML=(priceWomen*tax*document.getElementById('orderWomen').value).toFixed(2);
document.getElementById('costWomen').innerHTML=(priceWomen*document.getElementById('orderWomen').value).toFixed(2);
dataTotal();
}

var total;
function dataTotal(){
  var tableTotal= document.getElementById('numTotal');
  var pairMen= document.getElementById('orderMen').value;
  var pairWomen=document.getElementById('orderWomen').value;
  var pairKid=document.getElementById('orderKid').value;
  total=Number(pairKid)+Number(pairMen)+Number(pairWomen);
  tableTotal.innerHTML = total;
  console.log(total);
  document.getElementById('taxTotal').innerHTML=(priceWomen*tax*pairWomen+priceMen*tax*pairMen+priceKid*tax*pairKid).toFixed(2);
  document.getElementById('costTotal').innerHTML=(priceWomen*pairWomen+priceMen*pairMen+priceKid*pairKid).toFixed(2);
}

function endProcess(){
   var dir=document.getElementById('direction').value;
   var arrSize=['sizeMen','sizeWomen','sizeKid'];
   var arrName=['orderMen','orderWomen','orderKid'];
   var arrRes=[3,3,3];
   for (var i=0;i<3;i++){
     if(document.getElementById(arrName[i]).value>=1){
       if (document.getElementById(arrSize[i]).value>=10){
         arrRes[i]=1;
       }
       else{ arrRes[i]=0};
     }
   }
   console.log(arrRes);
   var failed=0;
   var norm=0;
   for (i=0;i<3;i++){
       if (arrRes[i]==0){
         alert("Size of shoes is missing");
         failed++;
       }
       if(arrRes[i]==3){norm++;console.log(norm);}
   }
    if(dir!="" && total!=0 && failed==0 && norm!=3){
      alert("We have received your order. Your are expected to receive your products in the next 5 days. THANKS AND COME BACK SOON!: ");
    }else if ( total==0){
        alert("You have not chose any pair of shoes, please fullfil and try later");
    } else if ( dir==""){
      alert("Direction info is missing, please fullfil and try later");
    }
}
