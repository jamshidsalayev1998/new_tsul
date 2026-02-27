#!/bin/bash

# Exit immediately if a command exits with a non-zero status.
set -e

# Define the project directory
PROJECT_DIR="/var/www/test_tsul_uz"

# Navigate to the project directory
echo "Navigating to project directory: $PROJECT_DIR"
cd "$PROJECT_DIR"

# Fetch and pull the latest changes from the repository
echo "Pulling latest changes from Git..."
git pull origin main

# Rebuild the Docker containers and start them in detached mode
echo "Rebuilding and starting Docker containers..."
docker-compose down
docker-compose up -d --build

# Optional: You can also choose to only do the build process without restarting everything if needed
# docker-compose build
# docker-compose up -d

echo "Deployment completed successfully!"
