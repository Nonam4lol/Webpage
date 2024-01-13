# Use the latest Nginx image as the base
FROM nginx:latest

# Set the working directory to Nginx's serve directory
WORKDIR /usr/share/nginx/html

# Copy the contents of the current directory to the working directory
COPY . .

# Expose the default port for Nginx
EXPOSE 80

# Start Nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
