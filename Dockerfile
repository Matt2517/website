FROM php:7.4.3
RUN apt-get update -y

COPY . /website
WORKDIR /website

EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080"]