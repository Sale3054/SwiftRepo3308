#!/bin/bash
sudo mysql -e "USE leduino; INSERT INTO colorInfo (‘id’, ‘colorSchemes’, ‘numschemes’) values ($1, $2, $3);"

