#!/bin/bash
sudo mysql -e "CREATE DATABASE leduino;"
sudo mysql leduino < leduino.sql
