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

function dataTotal(){
  var tableTotal= document.getElementById('numTotal');
  var pairMen= document.getElementById('orderMen').value;
  var pairWomen=document.getElementById('orderWomen').value;
  var pairKid=document.getElementById('orderKid').value;
  tableTotal.innerHTML = Number(pairKid)+Number(pairMen)+Number(pairWomen);
  document.getElementById('taxTotal').innerHTML=(priceWomen*tax*pairWomen+priceMen*tax*pairMen+priceKid*tax*pairKid).toFixed(2);
  document.getElementById('costTotal').innerHTML=(priceWomen*pairWomen+priceMen*pairMen+priceKid*pairKid).toFixed(2);
}
