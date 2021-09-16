#https://github.com/mathertel/LiquidCrystal_PCF8574/blob/master/src/LiquidCrystal_PCF8574.cpp

PCF_RS = 0x01
PCF_RW = 0x02
PCF_EN = 0x04

f = open("pinpossible.csv", "r")
content = f.read()
f.close()

packets = [int(x, 16) for x in content.split(',')]
#print (packets)
data = []
for p in packets:
    if (p &PCF_RS) and (p & PCF_EN):
        data.append(p)
pair = [data[i:i+2] for i in range(0, len(data), 2)]

password = ''
for x, y in pair:
    val = ((x&0xF0) | (y>>4))
    password += chr(val)

print (password.replace(" Enter Password", "").replace("*",""))