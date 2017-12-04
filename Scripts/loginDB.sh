#!/bin/bash
sudo mysql -e "CREATE DATABASE accounts;"
sudo mysql accounts < login.sql
