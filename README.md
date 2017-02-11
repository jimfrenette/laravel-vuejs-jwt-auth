# laravel-vuejs-jwt-auth
Using Laravel to build JSON Web Token based authentication with a Vue.js 2.x user interface

http://jimfrenette.com/2016/11/laravel-vuejs2-jwt-auth/

Versions used for this build

* Laravel 5.2
* JWT Auth v0.5.9
* Nodejs v6.9.4
* NPM v3.10.10
* Vue v2.1.1
* Vue-cli v2.8.1
* Vue-resource v1.2.0
* Vue-router v2.1.0
* Webpack v2.2.0

Refer to the resources/package.json for more info

## TODO

### Refresh Tokens

The current user's access token is refreshed. This case can happen in the following conditions:

* The access token expires: this is a common situation. The refresh token is used to get a new valid set of tokens.
* The user changes his password: Server issues new refresh tokens and renders the old tokens expired.
* The user re-authenticates: some actions require that the user's credentials are recently issued; such actions include deleting an account, setting a primary email address, and changing a password. Instead of signing out the user and then signing in the user again, get new credentials from the     user, and pass the new credentials to the reauthenticate method of the User object.
