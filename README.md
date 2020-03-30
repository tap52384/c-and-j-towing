# c-and-j-towing

Website for C&amp;J Towing and Recovery

```bash
# You can build the image without having to clone the repository locally
# Uses the "master" branch for building the image
mkdir -p ~/code
cd ~/code
docker build --pull https://github.com/tap52384/ubi8-php-73.git -t tap52384/ubi8-php-73:latest

# Next, "re-build" the app using s2i (source-to-image)
# Specify the /public/ folder as the Apache documentroot as needed for Laravel
git clone -q https://github.com/tap52384/c-and-j-towing.git
s2i build -e DOCUMENTROOT=/public/ ~/code/c-and-j-towing/ tap52384/ubi8-php-73:latest tap52384:c-and-j-towing

# Stop and delete any containers based on the RedHat image
docker rm -f $(docker ps -aq --filter ancestor=registry.access.redhat.com/ubi8/php-73 --format="{{.ID}}") || true

# Create the container "towing" with the code folder mounted
docker run \
--name towing \
-e USER=$(whoami) \
--hostname $(hostname) \
-d \
-p 8081:8080 \
-v ~/code/c-and-j-towing:/opt/app-root/src/ \
tap52384:c-and-j-towing
```

## Available Towing Services + Laravel 6.x

The list of services provided are in an array in the `AppServiceProvider` class.
This allows the data to be shared with all views and updated everywhere on the
site at once. This technique is outlined in [the documentation](https://laravel.com/docs/6.x/views#sharing-data-with-all-views).

## Adding a foreign key constrain to MySQL in a single statement

```sql
-- https://stackoverflow.com/a/1545264/1620794
ALTER TABLE employments
ADD COLUMN position_id INT,
ADD FOREIGN KEY fk_employments_positions_position_id(position_id)
REFERENCES positions(ID) ON DELETE CASCADE;

ALTER TABLE employments
ADD COLUMN state_id INT,
ADD FOREIGN KEY fk_employments_states_state_id(state_id)
REFERENCES states(ID) ON DELETE CASCADE;
```

## How to update site on GoDaddy with latest code

```bash
# SSH into GoDaddy's servers
# Reference URL: https://blog.netgloo.com/2015/08/06/configuring-godaddys-shared-hosting-for-laravel-and-git/
ssh username@candjtowingservices.com

# Clone the code repo then rename the folder
git clone https://github.com/tap52384/c-and-j-towing.git
mv ~/c-and-j-towing/ ~/code/

# Delete the public_html folder
rm -r ~/public_html
# Create a symbolic link to the ~/code/public folder
ln -s ~/code/public public_html

# Download Composer and install packages
cd ~/code
curl -sS https://getcomposer.org/installer | php
composer install
# Generate application key for Laravel
# https://laravel.com/docs/6.x/installation#configuration
php artisan key:generate

# See if node.js is already installed on the system first
which node
which npm

# Use Node Version Manager (nvm) to install NPM without root access
# https://ferugi.com/blog/nodejs-on-godaddy-shared-cpanel/
# https://github.com/nvm-sh/nvm
cd ~
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash
# Reload the PATH
source ~/.bash_profile
# Verify the installation
nvm --version
# Use nvm to install Node.js (npm, node)
# Due to missing requirements (like GLIBCXX_3.4.14), you have to install
# an older version of node, but hopefully not too old:
# https://stackoverflow.com/a/57798787/1620794
# https://nodejs.org/en/download/releases/
nvm install 8.17.0
# Verify node and npm are installed
node -v
npm -v
# Install Laravel packages via npm, update site CSS and JavaScript
cd ~/code
npm install
npm run production

# Update the code by pulling the latest changes
cd ~/code
git checkout master
git pull --rebase
npm run production
```

## Environment Variables

Please see `.env.example` for a list of environment variables that had to be
set in order for everything to work, including a few that were added, such as:

- `APP_TIMEZONE`
- `MAIL_BCC_RECIPIENTS`

`MAIL_DRIVER` had to be changed to `sendmail` in order for mail to be sent from
__GoDaddy__.

## Logo

Font: [Avenir Next Bold (Wikipedia)](https://en.wikipedia.org/wiki/Avenir_(typeface)#Avenir_Next)

At a resolution of 300 pixels/inch and a square canvas size of 1500 pixels:

- __C__ is `248.5pt` (773px); `51.53%` of the square canvas size
- __J__ is `248.5pt` (773px); `22.48%` to the right of __C__
- __Ampersand__ is `19.37%` the size of __C__ (150px), which is `48.2pt`
- __TOWING__ is `39.53%` the size of __C__ (305.56px), which is `98.22pt`; space
  between __J__ and __TOWING__ is `6.976%` of __C__, which is `53.92px`

## References

- <https://laravel.com/api/6.x/Illuminate/Http/UploadedFile.html>
- [US States in JSON form](https://gist.github.com/mshafrir/2646763)
- <https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file#accept>
- <https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types>
- <https://stackoverflow.com/a/1545264/1620794>
