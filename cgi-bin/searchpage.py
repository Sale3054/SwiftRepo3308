#!/usr/bin/python3
import json
import unicodedata
import sys
import cgi
from urllib.request import urlopen

print('content-type: text/html')
print()

print( '''
Hello World!

<body>
<form name="search" action="/cgi-bin/searchpage.py" method="get">
Search for your movie: <input type="text" name="searchbox">
<input type="submit" value="Submit">
</form> 

<a href="http://localhost:8000/cgi-bin/login.py">login</a>
''')

print ('''
<script>
$(document).ready(function()
{
''')
form = cgi.FieldStorage()
title = form.getvalue('searchbox')
title = title.replace(" ", "+")
response = urlopen("http://www.omdbapi.com/?apikey=cc47980e&t={}".format(title)).read().decode('utf8')
data = json.loads(response)

print ('''
});
</script>
''')
print(json.dump(data, sys.stdout))
print ('''
</body>
</html>
''')