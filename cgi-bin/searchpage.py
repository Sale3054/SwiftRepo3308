#!/usr/bin/python3
import json
import unicodedata
import sys
from urllib.request import urlopen

print 'content-type: text/html'
print

print '''
Hello World!


<input type="text" name="search" placeholder="Search..">
<head>
	<title>Movie matching utility</title>
	<link rel="stylesheet" type="text/css" href="./style.css">.
</head>

For the login page:

Select a Genre!
<label class="container"> Action
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>

<label class="container"> Comedy
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container"> Horror
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container"> Romance
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

'''

print ('''
<script>
$(document).ready(function()
{
''')

title = "The Internship"
title = title.replace(" ", "+")
response = urlopen("http://www.omdbapi.com/?apikey=cc47980e&t={}".format(title)).read().decode('utf8')
data = json.loads(response)
print('Printing: ', data)

print ('''
});
</script>
''')

print ('''
</body>
</html>
''')