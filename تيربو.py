import requests
from telethon import TelegramClient, functions, events, sync
import re,os
from time import sleep
from telethon.sync import TelegramClient, events
from telethon import functions,types
tele_bot = "6632833796:AAHlchQT6h6G4GiETgSAtvsgJkcA07Lb0qk"
own_id = "1397042354"
o = input("EnTeR UsEr : ")
app =  TelegramClient("ACCC",api_id=26388151,api_hash="8a40b86257d5faa488538b77b4c8ecb8")
app.start()
qq = 0
result = app(functions.channels.CreateChannelRequest(
    title="Hayder turbo",
    about="@HvvHH ."
))
ch = result.updates[1].channel_id
print(ch)
def fucker(o):
    global qq
    if 7==7:
    	qq+=1
    	url = f"https://t.me/{o}"
    	req = requests.get(url)
    	if req.text.find('If you have <strong>Telegram</strong>, you can contact <a class="tgme_username_link"') >= 0:
    		sj = app(functions.channels.UpdateUsernameRequest(
    channel=ch, username=o
))
    		if sj == True:
    			y = requests.post(f"""https://api.telegram.org/bot{tele_bot}/sendmessage?chat_id={own_id}&text=« We are the strongest »
« UserName » : « @{o} »
« ClickS » : « {qq} »
« Save » : « Channel »
« ThE KiNg » : « @hvvhh »""")
while True:
		if 8==8:
			print(str(f"[ {qq} ] @{o}"))
			fucker(o)	
app.run()
