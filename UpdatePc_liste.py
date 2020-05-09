import os
import nmap
import sys
import mysql.connector
nm = nmap.PortScanner()

def scanReseaux():
    mon_fichier = open("fichier.txt", "w")
    print (nm.scan(hosts='192.168.1.0/24',arguments='-O'), file=mon_fichier)
    mon_fichier.close()


def base():
    val = []
    mydb = mysql.connector.connect(
        host="192.168.1.36",
        user="user",
        password="1234",
        database="house_super",
    )   
    mycursor = mydb.cursor()

    sql = "UPDATE pc_list SET ip = %s WHERE mac = %s"

    for h in nm.all_hosts():
        if 'mac' in nm[h]['addresses']:
            print(nm[h]['addresses']['ipv4'], ' --> ', nm[h]['addresses']['mac'])
            val.append(
                [ nm[h]['addresses']['ipv4'] , nm[h]['addresses']['mac'] ]
            )
  
    mycursor.executemany(sql,val)
    mydb.commit()

    mycursor.close()
    mydb.close()

scanReseaux()
base()
"""POUBELLE""""""
def getIpFromMac(vmac): 
    for h in nm.all_hosts():
        if 'mac' in nm[h]['addresses']:
            try:
                print(nm[h]['addresses']['ipv4'], ' --> ', nm[h]['addresses']['mac'], ' --> ', nm[h]['status']['state'], ' --> ', nm[h]['vendor'][nm[h]['addresses']['mac']])
            except KeyError:
                print(nm[h]['addresses']['ipv4'], ' --> ', nm[h]['addresses']['mac'], ' --> ', nm[h]['status']['state'], ' --> NC')
scanReseaux()
print (getIpFromMac(sys.argv[1]))
"""