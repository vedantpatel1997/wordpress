#!/bin/bash

# Check if Nginx config exists
echo "Checking Nginx configuration..."
if [ ! -f "/etc/nginx/sites-enabled/default" ]; then
    echo "Nginx config not found!"
    exit 1
fi

# Add client_max_body_size if not present
echo "Modifying Nginx configuration to set client_max_body_size to 50M..."
grep -q "client_max_body_size" /etc/nginx/sites-enabled/default || \
    sed -i '/server {/a\    client_max_body_size 50M;' /etc/nginx/sites-enabled/default

# Test Nginx config and reload if valid
echo "Testing Nginx configuration..."
nginx -t && nginx -s reload && echo "Nginx reloaded successfully." || { echo "Nginx config error."; exit 1; }