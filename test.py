from fastapi import FastAPI, Response, HTTPException, Request
from pydantic import BaseModel
import mysql.connector

app = FastAPI()

def db_connection():
    return mysql.connector.connect(
        host = "127.0.0.1",
        user = "testing",
        password = "962006",
        database = "user"
    )


class Signup(BaseModel):
    username: str
    password: str
    email: str

class login(BaseModel):
    username: str
    password: str

@app.post("/register/signup")
async def signup(user: Signup):
    conn = db_connection()
    cursor = conn.cursor()
    try:
        cursor.execute("SELECT * FROM auth WHERE name = %s", (user.username,))
        existing = cursor.fetchone()
        if existing:
            raise HTTPException(status_code = 401, detail = "Username already exists")

        cursor.execute("INSERT INTO auth (name, email_id, passwd) VALUES (%s, %s, %s)", (user.username, user.email, user.password))
        conn.commit()
        return {"message": "Signup is Successful"}

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"MySQl Error : {error}")

    finally:
        cursor.close()
        conn.close()

@app.post("/index/login")
async def Login(user: login):
    conn = db_connection()
    cursor = conn.cursor()
    try:
        cursor.execute("SELECT passwd FROM auth WHERE name = %s", (user.username,))
        existing = cursor.fetchone()
        if not existing:
            raise HTTPException(status_code = 404, detail = "Username is wrong")

        user_pass = existing[0]
        if user_pass != user.password:
            raise HTTPException(status_code = 404, detail = "Password is wrong")
        

        return {"message": "The Login is Successful"}

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"MySQl Error : {error}")

    finally:
        cursor.close()
        conn.close()

print("hii")