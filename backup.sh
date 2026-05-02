#!/bin/bash
DATE=$(date +%F-%H%M)
cp -r /var/www/html/idc /var/www/html/idc/storage/backups/backup-$DATE
echo "Backup Complete"
