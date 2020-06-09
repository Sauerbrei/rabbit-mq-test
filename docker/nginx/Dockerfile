FROM nginx:alpine
WORKDIR /srv/api
COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./sites/* /etc/nginx/sites-available/
COPY ./conf.d/* /etc/nginx/conf.d/
CMD ["nginx"]
EXPOSE 80 443
