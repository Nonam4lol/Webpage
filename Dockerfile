# Use a base image
FROM nginx:latest
 
# Set environment variables
ENV PORT=8080
 
# Set working directory
WORKDIR /usr/share/nginx/html
 
# Copy the index.html file to the working directory
COPY index.html .
 
# Expose the specified port
EXPOSE $PORT
 
# Set labels
LABEL maintainer="Your Name <your.email@example.com>"
LABEL description="Dockerfile for running index.html on port 8080"
 
# Start the nginx server
CMD ["nginx", "-g", "daemon off;"]