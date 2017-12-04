#!/usr/bin/python3
from urllib.request import urlopen
import json 


title = "The Internship"
title = title.replace(" ", "+")
response = urlopen("http://www.omdbapi.com/?apikey=cc47980e&t={}".format(title)).read().decode('utf8')
data = json.loads(response)
#json.dump(data, ',')
#str jsonVar = data
#str jsonVar = JSON.stringify(jsonVar)
print(data)