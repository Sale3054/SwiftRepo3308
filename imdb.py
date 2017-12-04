#!/usr/bin/python3
from urllib.request import urlopen
import json 


title = "The Internship"
title = title.replace(" ", "+")
response = urlopen("http://www.omdbapi.com/?apikey=cc47980e&t={}".format(title))

data = json.load(response)
print(data)