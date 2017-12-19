<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<title>Home Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>


<body>

<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href= "index.php">Login / Sign Up</a>
   <a href= "about.html">About Us</a>
  <div class="search-container">
    <form name="searchBar" action="javascript:myFunction(search.value)">
      <input type="text" placeholder="Search.." name="search" id = "search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<div class="picturebox">
      <h3><b><p class = "textclass" id="title">Movie title</p></b></h3>
      <h5><p class = "textclass" id="rating"/10>Movie rating</p> 
      <p id="year">Movie year</p></h5>
      <p id="plot">Movie Path</p>

    <img class = "imageclass" id="myImg" src="https://www.karicosolutions.com/wp-content/uploads/Movie-Reel.jpg" alt="The Pulpit Rock">
</div>


</body>

<script type="text/javascript">
	
	function shuffle(a) {
	    for (let i = a.length - 1; i > 0; i--) {
	        const j = Math.floor(Math.random() * (i + 1));
	        [a[i], a[j]] = [a[j], a[i]];
	    }
    	return a;
	}
	var comedy = ['Coco', 'Lady Bird', 'The Disaster Artist', "Daddy's Home 2", 'Logan Lucky', 'American Made', "National Lampoon's Christmas Vacation", 'The Big Sick', 'The Man Who Invented Christmas']
	shuffle(comedy)
	function replaceAll(str, find, replace) {
    	return str.replace(new RegExp(find, 'g'), replace);
	}
	var t = replaceAll(comedy[1], ' ', "+")
	console.log(t)
	function myFunction(title) {
		title = replaceAll(title, ' ', '+')
		var searc_url = 'https://www.omdbapi.com/?apikey=cc47980e&t='.concat(title)
		$.getJSON(searc_url,
    	function(data, textStatus, jqXHR) {
    		console.log(data)
    		console.log(data["Title"])
    		console.log(data["Year"])
    		console.log(data["imdbRating"])
    		console.log(data["Poster"])
    		console.log(data["Plot"])
    		document.getElementById("title").innerHTML = data["Title"]
    		document.getElementById("year").innerHTML = data["Year"]
    		document.getElementById("rating").innerHTML = data["imdbRating"]
    		document.getElementById("myImg").src = data["Poster"]
    		document.getElementById("plot").innerHTML = data["Plot"]


    	}
		)
	}
	myFunction(t)
	
</script>
</html>