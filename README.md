# Welcome To PHP Workshop

Hope you have a good time with this workshop.

<br>
<br>

# Fun Facts About PHP

<br>

> Since 1995 By Rasmus Lerdorf

<br>

> เป็น Open Source

<br>

> PHP เริ่มแรกย่อมาจาก `Personal Home Page` แต่ปัจจุบันเปลี่ยนมาเป็น `PHP: Hypertext Preprocessor`

<br>

> นิยมใช้เขียนเว็บ (ทำอย่างอื่นก็ได้นะ)

<br>

> เป็น Serverside Language

<br>

> นามสกุลไฟล์เป็น `.php`

<br>

> ต้องลงท้ายด้วย semicolon `;` เสมอ

<br>

> สามารถใส่ข้อความหรือ HTML ในไฟล์ได้

<br>

> รูป Logo เป็นรูปช้าง (ElePHPant)

<br>

<img src="https://assets.php.earth/docs/php/community/elephpantblue.png" class="center">

<br><br>

# Setup Development

<br>

### XAMPP

ใช้ [XAMPP](https://www.apachefriends.org/) (ง่ายที่สุด) _ ห้ามใช้ในงาน Production _

<br>

### Docker

ติดตั้ง [Docker](https://docs.docker.com/get-docker/) และใช้ Docker Compose (แนะนำที่สุด)

```
# docker.compose.yml
version: '3.4'

services:
  php:
    image: php:7.4.29-apache
    ports:
      - 80:80
    volumes:
      - ./:/var/www/html/
    networks:
      - dev_network

  database:
    image: mysql
    command: --default-authentication-plugin=mysql_native_password
    volumes:
      - dev_database_storage:/var/lib/mysql
    networks:
      - dev_network
    expose:
      - 3306
    ports:
      - 3306:3306
    environment:
      MYSQL_ROOT_PASSWORD: example

  phpmyadmin:
    image: phpmyadmin:5.1.1
    ports:
      - 8080:80
    networks:
      - dev_network
    environment:
      PMA_HOST: database

networks:
  dev_network:

volumes:
  dev_database_storage:
```

<br>
<br>

# Thanks to

[www.w3schools.com](https://www.w3schools.com/)
