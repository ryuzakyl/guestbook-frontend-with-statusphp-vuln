FROM gcr.io/google-samples/gb-frontend:v4

# overwriting with the 'updated' code files
COPY index.html /var/www/html/index.html
COPY guestbook.php /var/www/html/guestbook.php
COPY status.php /var/www/html/status.php
COPY controllers.js /var/www/html/controllers.js

# adding the existing 'easter egg' already existing on that image
COPY FLAG.txt /var/www/html/FLAG.txt
