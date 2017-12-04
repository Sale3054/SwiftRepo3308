#!/usr/bin/python3

# login page


import json
import unicodedata
import sys
import cgi
from urllib.request import urlopen

print('content-type: text/html')

print('''
<body>
<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

</body>
</html>
''')

#<a href="url">link text</a>

