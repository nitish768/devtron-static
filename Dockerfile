FROM nginx:alpine
COPY public/ /usr/share/nginx/html

# Make our shell script executable
RUN chmod +x env.sh
CMD ["/bin/bash", "-c", "nginx -g \"daemon off;\""]