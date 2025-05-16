
document.addEventListener('mousemove', (hii) => {
  const xPercent = hii.clientX / window.innerWidth * 20;
  const yPercent = hii.clientY / window.innerHeight * 20;
  document.body.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
});
let popup = document.querySelector(".loginbox");
let box = document.querySelector(".body")
popup.addEventListener("click", function () {
  box.classList.add("active-pop");
})
let closebutton = document.querySelector(".close");
closebutton.addEventListener("click", function () {
  box.classList.remove("active-pop");
})
document.getElementById("validation").addEventListener("submit", function (event) {
  event.preventDefault();
  let valid = true;
  let username = document.getElementById("username").value.trim();
  let email = document.getElementById("email").value.trim();
  let password = document.getElementById("password").value.trim();
  let confirmpassword = document.getElementById("confirmpassword").value.trim();
  let unamepattern = /^[a-zA-Z]{3,16}$/
  let passpattern = /^[A-Za-z0-9]{6,}$/
  let emailpattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]{2,}\.com$/;

  if (username === "") {
    document.getElementById("user").innerText = "*Name is Required";
    valid = false;
  }
  else if (username.length < 3 || username.length > 20) {
    document.getElementById("user").innerText = "*Name should be between 3 to 20 characters";
    valid = false;
  }
  else if (!username.match(unamepattern)) {
    document.getElementById("user").innerText = "*Name should contain only alphabets";
    valid = false;
  }
  else {
    document.getElementById("user").innerText = "";

  }

  if (email === "") {
    document.getElementById("emailid").innerText = "*Email is Required";
    valid = false;
  }
  else if (!email.match(emailpattern)) {
    document.getElementById("emailid").innerText = "Email should be in the format";
    valid = false;
  }
  else {
    document.getElementById("emailid").innerText = "";
    
  }
  if (password === "") {
    document.getElementById("pass").innerText = "*password is Required";
    valid = false;
  }
  else if (!password.match(passpattern)) {
    document.getElementById("pass").innerText = "*password should be of mininum 6 characeters";
    valid = false;
  }
  else {
    document.getElementById("pass").innerText = "";
    
  }

  if (confirmpassword === "") {
    document.getElementById("confirm").innerText = "*confirm password is Required";
    valid = false;
  }
  else if (confirmpassword !== password) {
    document.getElementById("confirm").innerText = "*password and confirm password must be same";
    valid = false;
  }
  else {
    document.getElementById("confirm").innerText = "";
    
  } if (valid) {
    postdata(username, password, email);
  }


})
let hidepassword = document.getElementById("password");
let toggle = document.getElementById("toggle");
toggle.addEventListener("click", function () {
  if (hidepassword.type === "password") {
    hidepassword.type = "text";
    hidepassword.classList.add("big-text");

  }
  else {
    hidepassword.type = "password"
    hidepassword.classList.remove("big-text");
  }
})
let nextpassword = document.getElementById("confirmpassword");
let nexttoggle = document.getElementById("confirmtoggle");
nexttoggle.addEventListener("click", function () {
  if (nextpassword.type === "password") {
    nextpassword.type = "text";
    nextpassword.classList.add("big-text");

  }
  else {
    nextpassword.type = "password"
    nextpassword.classList.remove("big-text");
  }
})

async function postdata(user, pass, mail) {
  try {
    const response = await fetch('http://127.0.0.1:8000/register/signup', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username: user, password: pass, email: mail })
    });

    if (!response.ok) {
      const invalid = await response.json();
      throw new Error(invalid.detail);
    }

    const result = await response.json();
    alert(result.message);

  } catch (error) {
    document.getElementById("user").innerText = error.message;
    console.log(error.message);
  }
}

