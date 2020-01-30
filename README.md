# YOUTUBE API DEMO (Youtube API)

### Controllers:

1. IndexController.php

### Models:

1. IndexModel.php

### Views:

1. views/app/index.blade.php
2. views/app/search-list.blade.php

### Additional Files:

1. public/js/youtube-api.js
2. public/css/index.css
3. resources/lang/gb/messages.php
4. App/Services/Youtube.php


### MySQL Database:

None

## Installation

1. Clone the project: git clone
2. cd <project-root-directory> (the folder containing the /app/ directory)
3. Clone laradock: git clone https://github.com/Laradock/laradock.git
4. Follow overview/instructions here: https://laradock.io/ - rename "laradock/env-example" to "laradock/.env"
5. Spin up the project containers: docker-compose up -d nginx mysql workspace
6. Composer update
7. Rename file "<project-root>/env-example" to ".env"
8. php artisan key:generate
9. Replace the YOUTUBE API KEY in /app/config with your own key (or feel free to use my key during testing)
10. Open project directory /public/images/tesing to see screenshots from my testing process
11. Run the project in your browser: http://localhost/index

## API Reference

Not required

## Contributors

Donal Lynch <donal.lynch.msc@gmail.com>

## License

© 2020 Donal Lynch Software, Inc.