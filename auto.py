import os
import subprocess

commit_message = ""
print("######################### Automated Script Created by Stefan - All rights Reserved #########################")
purpose = input("What was the change made to it? Please be as descriptive as possible as it helps others know what you were working on:    ")
commit_message += purpose

auth = input("Please input your credentials or ID (This will be visible to everybody):    ")
commit_message += " - " + auth

# Navigate to the directory of the current script
os.chdir(os.path.dirname(os.path.realpath(__file__)))

# Pull the latest changes from the production branch
print("######################### Retrieving the latest resources #########################")
output = subprocess.check_output(['git', 'add', '.']).decode() # Adding changes
print(output)
output = subprocess.check_output(['git', 'commit', '-am', commit_message]).decode()  # Committing changes
print(output)

output = subprocess.check_output(['git', 'checkout', 'production']).decode()
print(output)

output = subprocess.check_output(['git', 'pull']).decode()
print(output)

choice = input("Would you like to push it to the server? The default branch is main. If you would like to change it, type 'production': Y/N ").lower()

if choice == 'y':
    print("######################### Your GitHub is now pushing to the main. There might be merge conflicts and errors that could fail the tests, so make sure you are ready to handle them or revert back #########################")
    output = subprocess.check_output(['git', 'push']).decode()
    print(output)
elif choice == 'production':
    print("######################### WARNING! You are pushing to the production server. Be careful since it might be deployed to Azure. Erroneous files will not be deployed but will be committed to the branch, so please revert them if necessary #########################")
    output = subprocess.check_output(['git', 'push']).decode()
    print(output)
