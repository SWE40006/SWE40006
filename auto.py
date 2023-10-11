import os
import subprocess

commit_message = "New Changes made by Stefan Ralph Kumarasinghe"

# Navigate to the directory of the current script
os.chdir(os.path.dirname(os.path.realpath(__file__)))

# Add all changes
output = subprocess.check_output(['git', 'add', '.']).decode()
print(output)

# Commit changes
output = subprocess.check_output(['git', 'commit', '-m', commit_message]).decode()
print(output)
