document.addEventListener('mousemove', (hii) => {
  const xPercent = hii.clientX / window.innerWidth * 20;
  const yPercent = hii.clientY / window.innerHeight * 20;
  document.body.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
});
let popup = document.querySelector(".adduser");
let form = document.querySelector(".form")
popup.addEventListener("click", function () {
  form.classList.add("active-pop");
})
//   let closebutton = document.querySelector(".adduser");
//   closebutton.addEventListener("doubleclick", function () {
//     form.classList.remove("active-pop");
//   })



document.getElementById("validation").addEventListener("submit", function (event) {
  event.preventDefault();

  let username = document.getElementById("usernames").value.trim();
  let password = document.getElementById("password").value.trim();
  let confirmpassword = document.getElementById("confirmpassword").value.trim();
  let unamepattern = /^[a-zA-Z]{3,20}$/;
  let passpattern = /^[A-Za-z0-9]{6,}$/
  
  if (username === "") {
    document.getElementById("user").innerText = "*Name is Required";
  
  } else if (username.length < 3 || username.length > 20) {
    document.getElementById("user").innerText = "*Name should be between 3 to 20 characters";
  
  } else if (!username.match(unamepattern)) {
    document.getElementById("user").innerText = "*Name should contain only alphabets";
    
  } else {
    document.getElementById("user").innerText = "";
  }
  if (password === "") {
    document.getElementById("pass").innerText = "*password is Required";
    
  }
  else if (!password.match(passpattern)) {
    document.getElementById("pass").innerText = "*password should be of mininum 6 characeters";
    
  }
  else {
    document.getElementById("pass").innerText = "";

  }

  if (confirmpassword === "") {
    document.getElementById("confirm").innerText = "*confirm password is Required";
    
  }
  else if (confirmpassword !== password) {
    document.getElementById("confirm").innerText = "*password  must be same";
    
  }
  else {
    document.getElementById("confirm").innerText = "";

  }

    putdata(username, password);
  
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










