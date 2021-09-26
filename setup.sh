#!/shell sh

# Make static folder
mkdir -p public/static

# Make Symlinks for Assets
ln -s $(pwd)/app/Sites $(pwd)/public/static/appSites
ln -s $(pwd)/core $(pwd)/public/static/
ln -s $(pwd)/community $(pwd)/public/static/

# Copy Local Config
cp app/Sites/Portal/config/sites.local.yml.sample app/Sites/Portal/config/sites.local.yml
cp app/Sites/Portal/config/database.local.yml.sample app/Sites/Portal/config/database.local.yml

# Clear Cache!
php roducks cache:clear

# Setup
php roducks setup