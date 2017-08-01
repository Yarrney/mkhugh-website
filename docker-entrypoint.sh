#!/bin/bash

echo "define('AUTH_KEY', '${AUTH_KEY}');" >> /data/mkhugh/wp-config.php
echo "define('SECURE_AUTH_KEY', '${SECURE_AUTH_KEY}');" >> /data/mkhugh/wp-config.php
echo "define('LOGGED_IN_KEY', '${LOGGED_IN_KEY}');" >> /data/mkhugh/wp-config.php
echo "define('NONCE_KEY', '${NONCE_KEY}');" >> /data/mkhugh/wp-config.php
echo "define('AUTH_SALT', '${AUTH_SALT}');" >> /data/mkhugh/wp-config.php
echo "define('SECURE_AUTH_SALT', '${SECURE_AUTH_SALT}');" >> /data/mkhugh/wp-config.php
echo "define('LOGGED_IN_SALT', '${LOGGED_IN_SALT}');" >> /data/mkhugh/wp-config.php
echo "define('NONCE_SALT', '${NONCE_SALT}');" >> /data/mkhugh/wp-config.php

sed -i "s/define('DB_NAME', '')/define('DB_NAME', '${DB_NAME}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_USER', '')/define('DB_USER', '${DB_USER}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_PASSWORD', '')/define('DB_PASSWORD', '${DB_PASSWORD}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_HOST', '')/define('DB_HOST', '${DB_HOST}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_CHARSET', '')/define('DB_CHARSET', '${DB_CHARSET}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_COLLATE', '')/define('DB_COLLATE', '${DB_COLLATE}')/g" /data/mkhugh/wp-config.php
