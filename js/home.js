document.addEventListener('mousemove', (hii) => {
    const xPercent = hii.clientX / window.innerWidth * 20;
    const yPercent = hii.clientY / window.innerHeight * 20;
    document.body.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
  });
let livechat=document.querySelector(".livechat")
let chatbox=document.querySelector(".chatbox")
document.querySelector(".chatbox").addEventListener("click",()=>{
  livechat.style.display=(livechat.style.display === "block") ? "none" : "block"
})
