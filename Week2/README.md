# Week 2 - Anatomy of Cloud Applications and Cloud services

## Lab Activity Week 2 - Azure version

### Access cloud azure VM through Ubuntu

In order to access the cloud network Azure from Ubuntu. You will need to generate a new SSH key from ubuntu.

Type the command “ssh-keygen” this will create a public private key pair. 
Press enter to accept the default file location and leave the passphrase empty, you will need 
to hit enter twice (usually you would set a strong password to protect your private key from 
theft). 

1) If you type “ls -la” you can see the .ssh directory. If you type “ls -la .ssh/” you should see the 
private and public key files (public ends in .pub). You can reuse the same key when accessing from different desktops.

2) Type “cat .ssh/id_rsa.pub”. Your public key should be printed to the console. Highlight from ssh-rsa to your username. Open a notepad file and paste the key in, checking it has both 
ends of the copied string on single line. 

3) To replace the Azure existing SSH key you will need to go onto Azure VM Connect > Click on "Provide a path to your SSH private key file. Replace/reset your SSH private key."

4. Paste in the SSH key including desired username you will be using to log into the cloud VM using ubuntu.

5. Open Unbuntu or other distro and enter your username from number 4) For instance username@AzureVMPublicIPAddress = `ssh xjlt@20.90.89.91`

6. This should then log you into the VM of Azure. 

### How to open and deploy the website using distro.

1. `cd /var/www/html/` 

2. `ls` to view all of the repo. You may `git clone` projects into the repo. this should include "6130comp".

3. Open distro when logged into the azure cloud and type 

` printf "GET / HTTP/1.0\r\n\r\n" | nc 127.0.0.1 3000 `

This sends a http request to local machine port 3000 (If you are using another port you will need to add a firewall rule in VM azure settings). If you try to test using the public IP from a web browser it will fail as a firewall rule is required. Again, this port will need to be approved in the inbound and outbound secuirty in VM azure.

Server URL : http://20.90.89.91:80

Index URL : http://20.90.89.91:3000





