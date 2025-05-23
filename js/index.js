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
let password = document.getElementById("password");
let toggle = document.getElementById("toggle");
toggle.addEventListener("click", function () {
  if (password.type === "password") {
    password.type = "text";
    password.classList.add("big-text");

  }
  else {
    password.type = "password"
    password.classList.remove("big-text");
  }
})

document.getElementById("loginvalidation").addEventListener("submit", function (event) {
  event.preventDefault();
  
  let username = document.getElementById("username").value.trim();
  let password = document.getElementById("password").value.trim();
  let valid = true; 
  if (username == "") {
    document.getElementById("user").innerText = "*username required"
    valid = false;
  }
  else {
    document.getElementById("user").innerText = ""
  }
  if (password == "") {
    document.getElementById("pass").innerText = "*password required"
    valid = false;
  }
  else {
    document.getElementById("pass").innerText = ""
  }
  if (valid) {
    loginform(username, password);
  }
  
})

async function loginform(user, pass) {
  try {
    const response = await fetch('/api/login/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username: user, password: pass })
    });

    if (!response.ok) {
      const res = await response.json();
      throw new Error(res.detail);

    }

    const result = await response.json();
    alert(result.message);

  } catch (error) {
    if (error.message == "Username is wrong") {
      document.getElementById("user").innerText = error.message;
    }
    if (error.message == "Password is wrong") {
      document.getElementById("pass").innerText = error.message;
    }
  }
}