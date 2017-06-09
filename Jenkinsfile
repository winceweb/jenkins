pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
        sh '''touch .env && echo "
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:4xJXhqZWUMskFkHLCFIiaTpf0l9/BSBXkfRCum7Csxs=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
" >> .env'''
      }
    }
    stage('Test') {
      steps {
        sh './vendor/bin/phpunit'
      }
    }
    stage('Deploy') {
      steps {
        sh 'rocketeer deploy --host="192.168.32.10" --password="6fe7b5d4f79c9ddd94b4a8f7" --key="" --username="ubuntu" --branch="master" --repository="https://github.com/winceweb/jenkins.git"'
      }
    }
  }
  triggers {
    pollSCM('* * * * *')
  }
}