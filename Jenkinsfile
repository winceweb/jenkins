pipeline {
    agent any 

    stages {
        stage('Build') { 
            steps { 
                sh 'composer install'
            }
        }
        stage('Test'){
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
}
