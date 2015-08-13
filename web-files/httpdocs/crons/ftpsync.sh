cd /var/www/vhosts/flight001.com/httpdocs/crons
lftp -f sync.lftp
cd /var/www/vhosts/flight001.com/httpdocs/html/export
chown apache * 
chgrp apache *
