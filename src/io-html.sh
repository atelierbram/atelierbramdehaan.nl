#!/bin/bash -x

# write to file
write_to_file()
{

  curl "http://localhost/~bram/atelierbramdehaan.nl/src/index.php" > "../build/html/index.html"
  curl "http://localhost/~bram/atelierbramdehaan.nl/src/contact/index.php" > "../build/html/contact/index.html"
  # curl "http://localhost/~bram/atelierbramdehaan.nl/src/webdesign/steunpunt-vluchtelingen-de-bilt/index.php" > "../build/html/webdesign/steunpunt-vluchtelingen-de-bilt/index.html"
  # curl "http://localhost/~bram/atelierbramdehaan.nl/src/webdesign/mediatheek-steunpunt-vluchtelingen-de-bilt/index.php" > "../build/html/webdesign/mediatheek-steunpunt-vluchtelingen-de-bilt/index.html"
  # curl "http://localhost/~bram/atelierbramdehaan.nl/src/webdesign/friends-of-light/index.php" > "../build/html/webdesign/friends-of-light/index.html"
  # curl "http://localhost/~bram/atelierbramdehaan.nl/src/webdesign/ancestral-health/index.php" > "../build/html/webdesign/ancestral-health/index.html"
}

# execute it
write_to_file

