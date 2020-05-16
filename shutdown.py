import os
import sys

str = "sudo sshpass -p '"+sys.argv[2]+"' ssh -t "+sys.argv[1]+"@"+sys.argv[3]+" sudo shutdown -h now"
os.system(str)
