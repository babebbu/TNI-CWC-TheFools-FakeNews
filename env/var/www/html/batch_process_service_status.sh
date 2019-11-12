#!/bin/bash

# These script below are automatically execute every minute.

# Check status of services
service nginx status | grep active
service php7.2-fpm status | grep active
service mysql status | grep active

# Some more processing.

