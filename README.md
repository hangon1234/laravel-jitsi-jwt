# laravel-jitsi-jwt
###Simple Laravel based Jitsi JWT token issuer###
----
Features:
1. Basic authentication
2. User and room management
3. Create and delete room
4. Issue token and redirect to a independent Jitsi instance
----
How to use:
1. You should have running instance of Jitsi and configure it uses JWT token authentication.
2. Modify .env file, set URL of your jitsi instance, and JWT token secret key.
3. Run _php artisan config:clear_ to apply changes.
4. Access to your laravel server, register and create room.
5. Go to the main page and you should be able to join.
----
Example:
