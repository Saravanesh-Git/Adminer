
<style>
    .container{
        display: flex;
        width: 100%;
        height: auto;
        margin-left: 250px;
        padding: 1rem;
        overflow-y: auto;
        background-color: transparent;
        height: 100vh;
        width: calc(100% - 250px);
        box-sizing: border-box;
    }
    .sql{
        border-radius: 10px;
        margin-top: 75px;
        width: 100%;
        height: 250px;
        padding-left: 35px;
        padding-top: 15px;
        backdrop-filter: blur(32px);
        background-color: rgba(0, 0, 0, 0.65) !important;
        position: relative;
    }
    .imagebox{
        position: absolute;
        width: 70px;
        height: 70px;
        background-color: white;
        border-radius:5px;
        left:30px;
        top: 45px;
        display: flex;
        justify-content:center;
        /* border-radius:50px; */

    }
    .sql img{
    width: 60px;
    height: 33px;
    position: relative;
    top: 15px;
    size: 2px;
    z-index: 20;
    }
    .content{
        
        width:1100px;
        position: absolute;
        top: 10px;
        left:130px;
        color:white;
    }
    .content h4{
        font-size:21px;
    }
    .content p  {
        padding-top:8px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size:16px;
    }
    button{
        position: absolute;
        top: 190px;
        left: 135px;
        width: 90px;
        height: 30px;
        padding: 5px;
        background-color: #55b16e;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }
    .loginform{
        overflow: hidden;
        transform: scale(0);
         transition: opacity 0.3s ease, transform 0.3s ease;
         pointer-events: none;
        position:absolute;
        top:420px;
        left:350px;
        width:380px;
        height:250px;
        backdrop-filter: blur(32px);
        background-color: rgba(0, 0, 0, 0.68);
        border-radius:10px;
    
     
    }
    .loginform.active-pop{
    transform:scale(1) ;
    opacity: 1;
      pointer-events: all;
    
}
    form{
        display:flex;
        flex-direction:column;
        /* position: relative;
        top:30px;
        width:280px;
        height:200px; */
    
    }
    label{
        position:relative;
        top:27px;
        margin-top:25px;
        margin-left:20px;
    }
    
    input{
        border:none;
        margin-left:20px;
        border-radius:5px;
        backdrop-filter: blur(32px);
        background-color: rgba(0,0,0,0.45);
        border:none;
        width:180px;
        height:30px;
        position:relative;
        color:white;
        padding-left:10px;
        left:160px;
        
    }
    input::placeholder{
        position:relative;
        left:10px;
        
    }
    .loginform{
        width: 450px;
        left:600px;
        height:350px;
        position:absolute;
        top:250px;
        backdrop-filter: blur(32px);
        background-color: rgba(0,0,0,0.85);
        border-radius:10px;
        border: 2.5px solid rgb(244, 127, 41);
    }
    .loginform h4{
        position:relative;
        left:30px;
        top:20px;
    }
    .tag{
        position:absolute;
        left:150px;
        font-size:12px;
        top:103px;
        margin-left:32px;
    }
    </style>