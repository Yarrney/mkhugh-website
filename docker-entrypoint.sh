#!/bin/bash

sed -i "s/define('AUTH_KEY', '')/define('AUTH_KEY', '${AUTH_KEY}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('SECURE_AUTH_KEY', '')/define('SECURE_AUTH_KEY', '${SECURE_AUTH_KEY}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('LOGGED_IN_KEY', '')/define('LOGGED_IN_KEY', '${LOGGED_IN_KEY}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('NONCE_KEY', '')/define('NONCE_KEY', '${NONCE_KEY}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('AUTH_SALT', '')/define('AUTH_SALT', '${AUTH_SALT}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('SECURE_AUTH_SALT', '')/define('SECURE_AUTH_SALT', '${SECURE_AUTH_SALT}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('LOGGED_IN_SALT', '')/define('LOGGED_IN_SALT', '${LOGGED_IN_SALT}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('NONCE_SALT', '')/define('NONCE_SALT', '${NONCE_SALT}')/g" /data/mkhugh/wp-config.php

sed -i "s/define('DB_NAME', '')/define('DB_NAME', '${DB_NAME}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_USER', '')/define('DB_USER', '${DB_USER}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_PASSWORD', '')/define('DB_PASSWORD', '${DB_PASSWORD}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_HOST', '')/define('DB_HOST', '${DB_HOST}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_CHARSET', '')/define('DB_CHARSET', '${DB_CHARSET}')/g" /data/mkhugh/wp-config.php
sed -i "s/define('DB_COLLATE', '')/define('DB_COLLATE', '${DB_COLLATE}')/g" /data/mkhugh/wp-config.php
