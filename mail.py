import smtplib
s = smtplib.SMTP('smtp.gmail.com', 587)
s.starttls()
s.login("adityactms@gmail.com", "myselfaditya")
message = "Your Search Results Are Ready"
s.sendmail("adityactms@gmail.com", "adityay186@gmail.com", message)
s.quit()