pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                echo 'Cloning Laravel project from GitHub...'
            }
        }

        stage('Install Dependencies') {
            steps {
                echo 'Running composer install...'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Building Docker image...'
                bat 'docker build -t simple-devops-app .'
            }
        }

        stage('Run Container') {
            steps {
                echo 'Running Laravel app container...'
                bat 'docker run -d -p 8080:8000 simple-devops-app'
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                echo 'Deploying application to Kubernetes...'
                bat 'kubectl apply -f deployment.yaml'
                bat 'kubectl apply -f service.yaml'
            }
        }
    }
}