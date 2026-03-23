#!/bin/bash
echo "--- TESTANDO O QUARTETO ---"
docker exec node18 node /app/teste.js
echo "---------------------------"
docker exec py-script python /app/teste.py
echo "---------------------------"
docker exec php82 php /var/www/html/index.php