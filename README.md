# Recommends a Spotify playlist according to the weather

This website uses the OpenWeatherAPI to fetch the weather and display it in multiple ways. This was the final group project for CPS 530. I was in charge of creating the 'daily' and 'playlist' tabs for the website. The playlist tab adds a twist to the website, using the Spotify API to recommend playlists for users according to searched weather. The pages are responsive too

All API calls are made in the front-end using AJAX - since using an API wasn't a requirement of the project, we had to self-learn calls and didn't know better. If I were to do it again I'd use node.js. I might update that and some other functionality in the future.

This repo is my fork of the main project at:

Since this was for a private project, the URL hasn't been formatted for public display:

Home Page: https://cps530arbenson.000webhostapp.com

'Daily Weather' Page: https://cps530arbenson.000webhostapp.com/daily.php

'Playlist Recommendation' Page: (requires spotify account) https://cps530arbenson.000webhostapp.com/spotify.php
  - The playlist is recommended according to the temperature and description (sunny, rainy...). Since the goal was functionality, the playlist recommendations are selected for demo purposes and can be significantly improved.
