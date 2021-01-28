FROM nginx:1.17.8-alpine

RUN mkdir /nginx
WORKDIR /nginx

## supprimer default  configs
RUN rm /etc/nginx/conf.d/default.conf

## Copier configs du local a  nginx container
COPY docker/nginx/nginx.conf /etc/nginx/conf.d

RUN ls /etc/nginx/conf.d
## supprimer nginx index page
RUN rm -rf /usr/share/nginx/html/*

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
EXPOSE 443
