import mysql.connector
import time
import subprocess
import smtplib
def mailer():
    s = smtplib.SMTP('smtp.gmail.com', 587)
    message = "Your Search Results Are Ready"
    s.starttls()
    s.login("adityactms@gmail.com", "myselfaditya")
    s.sendmail("adityactms@gmail.com", "adityay186@gmail.com", message)
    s.quit()
    print("Mail Sent")
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
    if x!=val:
        val=x
        mailer()
        sendmessage("Your search results are ready")
        print("Database Changed")
    else:
        print("No Change")