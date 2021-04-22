import mysql.connector
import time
import subprocess
def sendmessage(message):
    subprocess.Popen(['notify-send', message])
    return
val=None
while True:
    mydb = mysql.connector.connect(
    host="localhost",
    user="aditya",
    password="password123",
    database="test"
    )
    time.sleep(1)
    mycursor = mydb.cursor()

    mycursor.execute("SELECT val FROM c")
    
    myresult = mycursor.fetchall()
    x=myresult[0][0]
    c=0
    if x!=val:
        val=x
        c=c+1
        sendmessage("Your search results are ready")
        print("Database Changed")
    else:
        print("No Change")