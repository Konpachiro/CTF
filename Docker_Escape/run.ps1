# Build the Docker image
Write-Host "Building the Docker image..." -ForegroundColor Yellow
docker build -t ctf_challenge_ssh .

# Run the container with the --privileged flag and expose the SSH port
Write-Host "Running the CTF challenge container with SSH access..." -ForegroundColor Yellow
docker run -it --privileged -p 2222:22 --rm --name ctf_challenge_ssh ctf_challenge_ssh