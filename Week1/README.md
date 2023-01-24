# Week 1 - Cloud in Context and Virtual Machines + Linux practical

# 6130COMP Cloud Computing - Week 1a - Lab Activity 

In order to create a VM machine on virtual machine you need an ubuntu ISO from - https://ubuntu.com/download/server 

1. Follow - https://canvas.ljmu.ac.uk/courses/73883/pages/week-1-cloud-in-context-and-virtual-machines-+-linux-practical?module_item_id=1489303

2. Once you have reached the two virtual network cards you need to take note of the IP addresses. You will notice that the installer has detected the two virtual nics that we attached to the VM. Enp0s3 and Enp0s8. The first nic will be out connection to the internet and the second will be the on a virtual network with the host pc. Take a note of the enp0s8 IP addresses as we will use this later.

3. After following everything from No1) The VM will restart and you will need to enter you log in details. Normally sysadmin / password1

4. Check the ip address using `ip addr` - Whatever the ip address for enp0s8 is the virtual machine. They are http://10.2.97.245:22

5. Now you can use PUTTY from the start menu and type the ip address noted earlier into the host name (or IP address) text box. Set the port to 22. 

6. Once logged in enter `sudo apt install apache2 git php` if the VM if new.

7. cd into `cd /var/www/html/` (This must be in the root directory for the web server in order to work)

8. clone whichever repo you want (For instance this one)

9. Then case the URL from the directory `http://10.2.97.245/6130comp/Week1/test.php`
(Note: URL is case sensitive. Lookout for miss typo)


