pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo "Building the project..."
                sh 'echo Hello from Jenkins Build Step'
            }
        }
        stage('Test') {
            steps {
                echo "Running tests..."
                sh 'echo Tests completed successfully'
            }
        }
        stage('Deploy') {
            steps {
                echo "Deploying project..."
                sh 'echo Deployment step executed'
            }
        }
    }
}

