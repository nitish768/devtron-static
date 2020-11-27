FROM nginx:alpine
COPY public/ /usr/share/nginx/html
CMD ["/bin/bash", "-c", "nginx -g \"daemon off;\""]