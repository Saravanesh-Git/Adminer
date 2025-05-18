from fastapi import FastAPI, Response, HTTPException, Request
from pydantic import BaseModel

app = FastAPI()

user_db = {}

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

@app.post("/index/login")
async def Login(user: login):
    Signup = user_db.get(user.username)
    if not Signup:
        raise HTTPException(status_code = 401, detail = "Username is wrong")
    if Signup["password"] != user.password:
        raise HTTPException(status_code = 401, detail = "Password is wrong" )
    return {"message": "The Login is Successful"}

print("hii")