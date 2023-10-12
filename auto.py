import os
import subprocess

from anyio import sleep

commit_message = ""
print("######################### Automated Script Created by Stefan - All rights Reserved #########################")
purpose = str(input("What was the change made to it, Please be as descriptive as possible as it helps others know what you were working on :    "))
commit_message +=purpose
auth = str(input("Please input your credentials or ID, This will be visible to everybody :    "))
# Navigate to the directory of the current script
commit_message += " - " + auth
os.chdir(os.path.dirname(os.path.realpath(__file__)))
# Add all changes
print("######################### You are retrieving the latest resources #########################")
# Add all changes
output = subprocess.check_output(['git', 'checkout', 'production']).decode()
output = subprocess.check_output(['git', 'add', '.']).decode()
print(output)
# Commit changes
output = subprocess.check_output(['git', 'commit', '-m', commit_message]).decode()
print(output)

output = subprocess.check_output(['git', 'pull']).decode()
print(output)
choice = str(input("Would you like to push it to the main or the production branch :  Y/N "))
# Commit changes
if (choice == "main"):
  print("######################### Your GitHub is now pushing to the main. There might be merge conflicts and errors that could fail the tests so make sure you are ready to handle them or revert back #########################")
  output = subprocess.check_output(['git', 'push']).decode()
  print(output)
elif ((choice).lower()=="production") :
   output = subprocess.check_output(['git', 'checkout', 'production']).decode()
   print("######################### WARNING ! You are pushing to the production server. Be careful since it might be deployed to azure. Errorneous files will not be deployed but will be committed to the branch so please revert them #########################")
   output = subprocess.check_output(['git', 'push']).decode()
   print(output)