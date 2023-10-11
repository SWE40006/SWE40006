import os
import subprocess

commit_message = ""
purpose = str(input("What was the change made to it : "))
commit_message +=purpose
auth = str(input("Please input your credentials or ID : "))
# Navigate to the directory of the current script
commit_message += " - " + auth
os.chdir(os.path.dirname(os.path.realpath(__file__)))
# Add all changes
print("You are retrieving the latest resources")
output = subprocess.check_output(['git', 'pull']).decode()
print(output)
# Add all changes
output = subprocess.check_output(['git', 'add', '.']).decode()
print(output)

# Commit changes
output = subprocess.check_output(['git', 'commit', '-m', commit_message]).decode()
print(output)
choice = str(input("Would you like to push it to the main server?  Y/N"))
# Commit changes
if (choice == "Y" or choice =="y"):
  print("Your GitHub is now pushing. There might be merge conflicts so make sure you are ready to handle them")
  output = subprocess.check_output(['git', 'push']).decode()
  print(output)
