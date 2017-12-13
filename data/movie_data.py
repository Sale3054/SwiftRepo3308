#!/usr/bin/python3
from urllib.request import urlopen
import json 
from random import shuffle 

def api(title):
	"""
	The function takes a tile 
	pull info via api then return a json data of the ginve movie
	"""
	title = title.replace(" ", "+")
	response = urlopen("http://www.omdbapi.com/?apikey=cc47980e&t={}".format(title)).read().decode('utf8')
	data = json.loads(response)

	return data 

def picktitle(genre, n):
	"""
	The function reads the file and get the list of titles 
	Then, it returns the randomly picked n titles 
	"""
	movie_titles = []
	file_name = "{}.txt".format(genre) 

	with open(file_name, 'r') as f: 
		for title in f: 
			movie_titles.append(title.strip())


	shuffle(movie_titles) 
	
	# make sure n is less than the number of titles in the file 
	if n > len(movie_titles):
		n = len(movie_titles)

	return movie_titles[:n]


def main():
	num_movie = 5 
	genre = "comedy"
	movie_titles = picktitle(genre, num_movie)

	for title in movie_titles:
		print("title: {}".format(title))
		print(api(title)) 
		print()


if __name__ == '__main__':
	main()








