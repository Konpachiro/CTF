# Stop and remove existing containers if any
docker-compose down

# Build and run the containers
docker-compose up -d

# Wait for the MySQL container to fully initialize
Write-Host "Waiting for MySQL to initialize..."
Start-Sleep -s 20

# Create the users table and insert a sample user
$initSql = @"
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('test', 'test123');
"@

$initSql | docker exec -i ctf_db mysql -u ctf_user -pctf_password ctf_challenge

# Output the status
Write-Host "CTF challenge is now accessible at http://localhost"