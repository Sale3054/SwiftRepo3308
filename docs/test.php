<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


	<p id="title">Movie title</p>
	<p id="year">Movie year</p>
	<p id="rating">Movie rating</p>

	<img id="myImg" src="http://www.karicosolutions.com/wp-content/uploads/Movie-Reel.jpg" alt="The Pulpit Rock">
	<!-- <button onclick="">Click me</button> -->

	<!-- <p id="pic">Movie pic</p> -->
</body>

<script type="text/javascript">
	
	function shuffle(a) {
	    for (let i = a.length - 1; i > 0; i--) {
	        const j = Math.floor(Math.random() * (i + 1));
	        [a[i], a[j]] = [a[j], a[i]];
	    }
    	return a;
	}
	var comedy = ['Coco', 'Lady Bird', 'The Disaster Artist', "Daddy's Home 2", 'Logan Lucky', 'American Made', 'A Bad Moms Christmas', "National Lampoon's Christmas Vacation", 'The Big Sick', 'The Man Who Invented Christmas']
	shuffle(comedy)
	function replaceAll(str, find, replace) {
    	return str.replace(new RegExp(find, 'g'), replace);
	}
	var t = replaceAll(comedy[1], ' ', "+")
	console.log(t)
	function myFunction(title) {
		var searc_url = 'http://www.omdbapi.com/?apikey=cc47980e&t='.concat(title)
		$.getJSON(searc_url,
    	function(data, textStatus, jqXHR) {
    		console.log(data)
    		console.log(data["Title"])
    		console.log(data["Year"])
    		console.log(data["imdbRating"])
    		console.log(data["Poster"])
    		document.getElementById("title").innerHTML = data["Title"]
    		document.getElementById("year").innerHTML = data["Year"]
    		document.getElementById("rating").innerHTML = data["imdbRating"]
    		document.getElementById("myImg").src = data["Poster"]
    	}
		)
	}
	myFunction(t)
	
</script>
</html>