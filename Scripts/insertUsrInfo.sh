#!/bin/bash

sudo mysql -e "USE leduino; INSERT INTO usrInfo (‘id’, ‘login’, ‘password’, ‘email’) values ($1, $2, $3, $4);"

