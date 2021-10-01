#!/shell sh

# 1. Initialize containers:
docker compose up -d

# 2. Connect to container:
sh docker-container.sh

# 3. Install composer dependencies:
composer install

exit;