FROM ubuntu:latest

RUN apt-get update && apt-get install -y \
    sudo \
    vim \
    openssh-server

# Create a non-root user
RUN useradd -m -s /bin/bash ctf
RUN echo "ctf:ctf" | chpasswd
RUN adduser ctf sudo

# Set up the SSH server
RUN mkdir /var/run/sshd
RUN sed -i 's/PermitRootLogin prohibit-password/PermitRootLogin no/' /etc/ssh/sshd_config
RUN sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

# Set up the challenge
COPY flag.txt /root/flag
RUN chown root:root /root/flag && chmod 400 /root/flag

# Expose the SSH port
EXPOSE 22

# Start the SSH server
CMD ["/usr/sbin/sshd", "-D"]