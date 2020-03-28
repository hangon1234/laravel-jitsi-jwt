# laravel-jitsi-jwt
### Simple Laravel based Jitsi JWT token issuer ###
----
About:
- To show example usage of Jitsi instance. It has basic authentication feature, room and token management. I make it as simple as possible for my colleagues who don't understand token based authentication. Jitsi authentication is disabled by default, so I change it to token authentication, hence it could handle its users, authenticate and join the room.
----
Features:
1. Basic authentication
2. User and room management
3. Create and delete room
4. Issue token and redirect to a independent Jitsi instance
----
How to use:
- You should have running instance of Jitsi and configure it uses JWT token authentication.
- Copy env.example to .env.
- Modify .env file, set URL of your jitsi instance, and JWT token secret key.
- Put this project in your server which is configured for laravel environment. (I recommend laradock for easy installation if you know docker)
- Run `composer install` to install php dependencies.
- Run `php artisan config:clear` to apply changes in .env
- Run `php artisan route:cache` and `php artisan route:cache`
- Access to your laravel server, register and create room.
- Go to the main page and you should be able to join.
----
Example:
![1](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/1.png?raw=true)

Sign in page

![2](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/2.png?raw=true)

Register page

![3](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/3.png?raw=true)

Room creation

![4](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/4.png?raw=true)

Room manager

![5](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/5.png?raw=true)

Token issued and redirect to Jitsi server

![6](https://github.com/hangon1234/laravel-jitsi-jwt/blob/master/images/6.png?raw=true)

Joined room
