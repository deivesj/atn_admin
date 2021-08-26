# atn_admin
PHP system for managing several functions on a Linux server such as Squid Proxy with several pre-configured functions, DHCP Server, Firewall (Shorewall), Port Redirection (Rinetd) and others.

--- CONF
There is a folder "confs" where you can find template files already properly configured for most situations, rename the file index.php1 to index.php (this file that denies access must be used in the html root if there is no default page).
If you choose to replace sudoers use "chmod 0444 /etc/sudoers" and "chown root:root /etc/sudoers".
Give rw rw rw 666 (chmod 666 /etc/dhcpd.conf) permission to the /etc/dhcpd.conf file.

--- SCRIPTS
give a+x permission to
squid/script/squid-cleaner, service_restart, service, squida and squidf
manut/script/limpaiptables, clean-log.sh and clean-logback.sh
status_services/services
link to /usr/bin/ from these files

--- SETTINGS
Edit all config.inc.php files setting the parameters according to the system.
use chown -R apache atn-admin and chmod 777 -R atn-admin

--- SUDOERS
Comment out the line that disables requiretty:
# Defaults required

Add the following lines, check which user Apache is running as:
# ps -aux | grep httpd

Option 01
##ATN-ADMIN
apache ALL=(ALL) NOPASSWD: ALL

OPTION 02
# standard syntax
# computer user = NOPASSWD: command
# apache ALL = NOPASSWD: /bin/halt
# I indicate that the apache user runs the /bin/halt command without password "NOPASSWD" from any
computer "ALL"

#To shutdown/restart
apache ALL=(ALL) NOPASSWD: /sbin/halt
apache ALL=(ALL) NOPASSWD: /sbin/reboot

#To read the logs -- This part is not important, only if you want to read the logs, make sure of the path, and that you have set the output of iptables logs to a separate file.
apache ALL=(ALL) NOPASSWD: /var/log/messages
apache ALL=(ALL) NOPASSWD: /var/log/shorewall-init.log

#To read services
apache ALL=(ALL) NOPASSWD: /bin/netstat
apache ALL=(ALL) NOPASSWD: /usr/bin/services

#Nmap plus dhcp service
apache ALL=(ALL) NOPASSWD: /usr/bin/nmap
apache ALL=(ALL) NOPASSWD: /etc/init.d/dhcpd

#Squid
apache ALL=(ALL) NOPASSWD: /usr/sbin/squid
apache ALL=(ALL) NOPASSWD: /usr/bin/htpasswd
apache ALL=(ALL) NOPASSWD: /etc/init.d/squid
apache ALL=(ALL) NOPASSWD: /usr/bin/restart_service
apache ALL=(ALL) NOPASSWD: /usr/bin/cleanup
apache ALL=(ALL) NOPASSWD: /bin/cp
apache ALL=(ALL) NOPASSWD: /usr/bin/squida
apache ALL=(ALL) NOPASSWD: /usr/bin/squidf
apache ALL=(ALL) NOPASSWD: /bin/mv

#Others
apache ALL=(ALL) NOPASSWD: /usr/bin/clean-log.sh
apache ALL=(ALL) NOPASSWD: /usr/bin/cleaner-squid
apache ALL=(ALL) NOPASSWD: /usr/bin/limpaiptables
apache ALL=(ALL) NOPASSWD: /etc/init.d/shorewall
apache ALL=(ALL) NOPASSWD: /etc/init.d/iptables restart
apache ALL=(ALL) NOPASSWD: /etc/init.d/smb restart
apache ALL=(ALL) NOPASSWD: /sbin/iptables
apache ALL=(ALL) NOPASSWD: /sbin/shorewall
apache ALL=(ALL) NOPASSWD: /usr/sbin/smbd


or ALL = NOPASSWD: /
