document.addEventListener('mousemove', (hii) => {
  const xPercent = hii.clientX / window.innerWidth * 20;
  const yPercent = hii.clientY / window.innerHeight * 20;
  document.body.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
});
let popup = document.querySelector(".adduser");
let loginform = document.querySelector(".loginform")
popup.addEventListener("click", function () {
  loginform.classList.add("active-pop");
})
let close = document.querySelector(".close");
close.addEventListener("click", function (){
  loginform.classList.remove("active-pop")
})



document.querySelector(".confirm").addEventListener("click", function (event) {
  event.preventDefault();
  let valid=true;
  let username = document.getElementById("usernames").value.trim();
  let password = document.getElementById("password").value.trim();
  let confirmpassword = document.getElementById("confirmpassword").value.trim();
  let unamepattern = /^[a-zA-Z]{3,20}$/;
  let passpattern = /^[A-Za-z0-9]{6,}$/
  
  if (username === "") {
    document.getElementById("user").innerText = "*Name is Required";
    valid=false;
  
  } else if (username.length < 3 || username.length > 20) {
    document.getElementById("user").innerText = "*Name should be between 3 to 20 characters";
    valid=false;
  
  } else if (!username.match(unamepattern)) {
    document.getElementById("user").innerText = "*Name should contain only alphabets";
    valid=false;
    
  } else {
    document.getElementById("user").innerText = "";
  }
  if (password === "") {
    document.getElementById("pass").innerText = "*password is Required";
    valid=true;
    
  }
  else if (!password.match(passpattern)) {
    document.getElementById("pass").innerText = "*password should be of mininum 6 characeters";
    valid=true;
    
  }
  else {
    document.getElementById("pass").innerText = "";

  }

  if (confirmpassword === "") {
    document.getElementById("confirm").innerText = "*confirm password is Required";
    valid=false;
    
  }
  else if (confirmpassword !== password) {
    document.getElementById("confirm").innerText = "*password  must be same";
    valid=false;
    
  }
  else {
    document.getElementById("confirm").innerText = "";

  }
  if(valid){
      putdata(username, password);
  }
    
  
});
async function putdata(user, pass) {
  try {
    const response = await fetch('/api/mysql/submit', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username: user, password: pass})
    });

    if (!response.ok) {
      const invalid = await response.json();
      throw new Error(invalid.detail);
    }
    const result = await response.json();
    alert(result.message);
    console.log(result.username);
    console.log(result.password);
  } catch (error) {
    document.getElementById("user").innerText = error.message;
  }
}










