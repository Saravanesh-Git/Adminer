from fastapi import FastAPI, Response, HTTPException, Request
from pydantic import BaseModel
import mysql.connector
import hashlib

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
    print("Received:",user)
    password = hashlib.md5(user.password.encode('utf-8'))
    user.password = password.hexdigest()
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

@app.post("/login/login")
async def Login(user: login):
    password = hashlib.md5(user.password.encode('utf-8'))
    user.password = password.hexdigest()

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
        conn.commit()

        return {"message": "The Login is Successful"}

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"MySQl Error : {error}")

    finally:
        cursor.close()
        conn.close()

        
class database(BaseModel):
    username: str
    password: str

@app.post("/mysql/submit")
async def MySQL(user: database):
    print("Received:", user)
    conn = db_connection()
    cursor = conn.cursor()
    try:
        cursor.execute("SELECT * FROM MySQL WHERE name = %s", (user.username,))
        existing = cursor.fetchone()
        if existing:
            raise HTTPException(status_code = 401, detail = "Username already exists")

        cursor.execute("INSERT INTO MySQL (name, passwd) VALUES (%s, %s)", (user.username, user.password))
        conn.commit()
        return {"message": "User Added Successfully",
            "username": user.username,
            "password": user.password
            }

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"MySQl Error : {error}")

    finally:
        cursor.close()
        conn.close()\

@app.post("/mariadb/submit")
async def MySQL(user: database):
    print("Received:", user)
    conn = db_connection()
    cursor = conn.cursor()
    try:
        cursor.execute("SELECT * FROM Mariadb WHERE name = %s", (user.username,))
        existing = cursor.fetchone()
        if existing:
            raise HTTPException(status_code = 401, detail = "Username already exists")

        cursor.execute("INSERT INTO Mariadb (name, passwd) VALUES (%s, %s)", (user.username, user.password))
        conn.commit()
        return {"message": "User Added Successfully",
            "username": user.username,
            "password": user.password
            }

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"Mariadb Error : {error}")

    finally:
        cursor.close()
        conn.close()

@app.post("/mongodb/submit")
async def MySQL(user: database):
    print("Received:", user)
    conn = db_connection()
    cursor = conn.cursor()
    try:
        cursor.execute("SELECT * FROM Mongodb WHERE name = %s", (user.username,))
        existing = cursor.fetchone()
        if existing:
            raise HTTPException(status_code = 401, detail = "Username already exists")

        cursor.execute("INSERT INTO Mongodb (name, passwd) VALUES (%s, %s)", (user.username, user.password))
        conn.commit()
        return {"message": "User Added Successfully",
            "username": user.username,
            "password": user.password
            }

    except mysql.connector.Error as error:
        raise HTTPException(status_code = 500, detail = f"Mongodb Error : {error}")

    finally:
        cursor.close()
        conn.close()