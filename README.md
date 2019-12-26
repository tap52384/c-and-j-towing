# c-and-j-towing

Website for C&amp;J Towing and Recovery

```bash
# You can build the image without having to clone the repository locally
# Uses the "master" branch for building the image
mkdir -p ~/code
cd ~/code
docker build --pull https://github.com/tap52384/ubi8-php-73.git -t tap52384:ubi8-php-73

# Next, "re-build" the app using s2i (source-to-image)
# Specify the /public/ folder as the Apache documentroot as needed for Laravel
git clone -q https://github.com/tap52384/c-and-j-towing.git
s2i build -e DOCUMENTROOT=/public/ ~/code/c-and-j-towing/ tap52384:ubi8-php-73 tap52384:c-and-j-towing

# Stop and delete any containers based on the RedHat image
docker rm -f $(docker ps -aq --filter ancestor=registry.access.redhat.com/ubi8/php-73 --format="{{.ID}}") || true

# Create the container "towing" with the code folder mounted
docker run \
--name towing \
-e USER=$(whoami) \
--hostname $(hostname) \
-d \
-p 8080:8080 \
-v ~/code/c-and-j-towing:/opt/app-root/src/ \
tap52384:c-and-j-towing
```

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
ssh username@candjtowingservices.com

# Go to the public_html folder (DocumentRoot)
cd ~/www
# Reverts the current folder to the state of the repo to HEAD
# Warning: any local changes (should be none) to the files will be lost
git reset --hard HEAD
```

## How to clone to existing repository

- <https://stackoverflow.com/a/16811212/1620794>
- <https://stackoverflow.com/a/18999726/1620794>

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
