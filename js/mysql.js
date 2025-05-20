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
  let username= document.getElementById("username").value.trim();
  let password= document.getElementById("password").value.trim();
  let confirmpassword = document.getElementById("confirmpassword").valur.trim();
  
})