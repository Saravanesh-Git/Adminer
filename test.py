from fastapi import FastAPI, Response, HTTPException, Request
from pydantic import BaseModel
from fastapi.responses import HTMLResponse
from fastapi.templating import Jinja2Templates
from fastapi.staticfiles import StaticFiles

app = FastAPI()

user_db = {}

app.mount("/static", StaticFiles(directory="static"), name="static")
templates = Jinja2Templates(directory="templates")

@app.get("/", response_class=HTMLResponse)
async def html(request: Request):
    return templates.TemplateResponse("index.html", {"request": request})

@app.get("/register", response_class=HTMLResponse)
async def signup_html(request: Request):
    return templates.TemplateResponse("register.html", {"request": request})

@app.get("/login", response_class=HTMLResponse)
async def login_html(request: Request):
    return templates.TemplateResponse("index.html", {"request": request})

@app.get("/home", response_class=HTMLResponse)
async def home_html(request: Request):
    return templates.TemplateResponse("home.html", {"request": request})


class Signup(BaseModel):
    username: str
    password: str
    email: str

class login(BaseModel):
    username: str
    password: str

@app.post("/register/signup")
async def signup(user: Signup):
    if user.username in user_db:
        raise HTTPException(status_code = 401, detail="Username already Exists")
    user_db[user.username] = { 
        "email": user.email,
        "password": user.password
        }

    return {"message": "Signup is Successful"}

@app.post("/login")
async def Login(user: login):
    Signup = user_db.get(user.username)
    if not Signup:
        raise HTTPException(status_code = 401, detail = "Username is wrong")
    if Signup["password"] != user.password:
        raise HTTPException(status_code = 401, detail = "Password is wrong" )
    return {"message": "The Login is Successful"}

print("hii")