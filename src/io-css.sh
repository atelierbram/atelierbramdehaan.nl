#!/bin/bash -x

# write to file
write_to_file()
{

  curl "http://localhost:8000/docs/assets/css/critical.min.css" > "inc/critical.css.inc"

}

# execute it
write_to_file

