from wakeonlan import send_magic_packet
import sys

for arg in sys.argv:
    if arg != 'Wol.py':
        print (arg)
        send_magic_packet(arg)