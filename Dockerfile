FROM nginx:alpine
COPY public/ /usr/share/nginx/html
CMD ["/bin/sh", "-c", "nginx -g \"daemon off;\""]