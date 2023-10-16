import os
import subprocess

from anyio import sleep
commit_message = ""
print("######################### Automated Script Created by Stefan - All rights Reserved #########################")
purpose = input("What was the change made to it? Please be as descriptive as possible as it helps others know what you were working on:    ")
commit_message += purpose
auth = input("Please input your credentials or ID (This will be visible to everybody):    ")
commit_message += " - " + auth

 # Navigate to the directory of the current script
os.chdir(os.path.dirname(os.path.realpath(__file__)))

# Add all changes
print("######################### You are retrieving the latest resources #########################")
subprocess.run(['git', 'add', '.'])
subprocess.run(['git', 'commit', '-m', commit_message])
subprocess.run(['git', 'checkout', 'production'])
subprocess.run(['git', 'pull'])

choice = input("Would you like to continue further (Y/N)? ").lower()
if choice == "y":
    branch_choice = input("Would you like to push it to the main server? (default branch is main, type 'production' to change to production): ").lower()
    if branch_choice in ['y', 'yes']:
        print("######################### Your GitHub is now pushing to the main. There might be merge conflicts and errors that could fail the tests so make sure you are ready to handle them or revert back #########################")
        subprocess.run(['git', 'push'])
    elif branch_choice == "production":
        subprocess.run(['git', 'checkout', 'production'])
        print("######################### WARNING ! You are pushing to the production server. Be careful since it might be deployed to azure. Erroneous files will not be deployed but will be committed to the branch so please revert them #########################")
        subprocess.run(['git', 'push'])
