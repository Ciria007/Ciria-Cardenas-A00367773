function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
     var passw = /[A-Za-z]\w{7,14}$/;
    //Store the Confimation Message Object ...
    var confpass=document.getElementById('confirmPass');
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var corr = "#66cc66";      //green
    var incorr = "#ff6666";    //red
    //Compare the values in the password field
    //and the confirmation field
    if(!pass1.value.match(passw)){
      confirmPass.innerHTML = 'Password does not match criteria!';
      pass1.style.backgroundColor = incorr;
      confirmPass.style.color = incorr;
    }
    else{
      pass1.style.backgroundColor = corr;
      confirmPass.style.color = corr;
      confirmPass.innerHTML = "Valid password!";
      if(pass1.value == pass2.value){
          //The passwords match.
          //Set the color to the good color and inform
          //the user that they have entered the correct password
          pass2.style.backgroundColor = corr;
          message.style.color = corr;
          message.innerHTML = "Passwords Match!"
      }else{
          //The passwords do not match.
          //Set the color to the bad color and
          //notify the user.
          pass2.style.backgroundColor = incorr;
          message.style.color = incorr;
          message.innerHTML = "Passwords Do Not Match!"
      }
  }
}
