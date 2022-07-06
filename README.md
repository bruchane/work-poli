# work-poli
Prueba tecnica Backend Laravel

## Paso 1
crear un archivo de configuracion `.env` en la raiz del proyecto con la siguiente estructura:

```sh
MYSQL_DATABASE=xyz
MYSQL_ROOT_PASSWORD=cualquiera
PORT= 3306
```

## Paso 2
crear un archivo de configuracion `.env` dentro de `src/` del proyecto con la siguiente estructura:

```sh
APP_NAME=poli-work
APP_ENV=local
APP_KEY=base64:G+W+pfORH30vlSnqlctAhCe8P4S2klT6GPw1B5raHAM=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=dbpoli
DB_PORT=3306
DB_DATABASE=xyz
DB_USERNAME=username
DB_PASSWORD=alguna_clave

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

## Paso 3
ejecutar el siguiente comando `docker-compose up -d`
