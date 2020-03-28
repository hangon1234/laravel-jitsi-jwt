# laravel-jitsi-jwt
### Simple Laravel based Jitsi JWT token issuer ###
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
- Run 'composer update' to install php dependencies.
- Run 'php artisan config:clear' to apply changes.
- Access to your laravel server, register and create room.
- Go to the main page and you should be able to join.
----
Example:
