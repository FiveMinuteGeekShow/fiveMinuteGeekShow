#!/bin/bash

# Replace "sculpin generate" with "php sculpin.phar generate" if sculpin.phar
# was downloaded and placed in this directory instead of sculpin having been
# installed globally.

sculpin generate --env=prod
if [ $? -ne 0 ]; then echo "Could not generate the site"; exit 1; fi

# rsync -avze 'ssh -p 4668' output_prod/ username@yoursculpinsite:public_html

# todo: wipe
cp -r output_prod/* ../fiveMinuteGeekShowPublic/
cd ../fiveMinuteGeekShowPublic
git add .
git commit -m "Build."
git push origin master
