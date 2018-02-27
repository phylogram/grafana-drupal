# grafana-drupal

## oauth2_server & Grafana Test
### Stack & Co
- Grafana v4.6.3 (commit: 7a06a47)  → https
- Drupal 7 (https://github.com/drupal-composer/drupal-project)
- (apache2)
- oauth2 server https://www.drupal.org/project/oauth2_server/releases/7.x-1.7 [composer]
- oauth2-server-php version v1.8.0
### Grafana-Einstellungen
**(Aus der grafana.ini-kopiert, Grafana auf https://localhost:3000/)**
 
> #################################### Server ####################################
> [server]
> # Protocol (http, https, socket)
> protocol = https

**[...]**

> #################################### Generic OAuth ##########################
> [auth.generic_oauth]
> 
> enabled = true
> name = drupal						# Anzeige-Name bei https://localhost:3000/login
> allow_sign_up = true
> client_id = grafana
> client_secret = grafana
> scopes = openid email
> auth_url = https://drupal.local/oauth2/authorize/
> token_url = https://drupal.local/oauth2/token/
> api_url = https://drupal.local/oauth2/userinfo/
> ;team_ids =
> ;allowed_organizations =

### Drupal oauth2_Einstellungen
**(https://drupal.local, virtual host)**
- Server:
  - Label = drupal
  - Settings:
    - Allow the implicit flow 
    - Use OpenID Connect
    - Enabled grant types
        - Authorization code 
        - Client credentials
        - Refresh token
        - User credentials
        - Unset (delete) the refresh token after it has been used
- Scopes (of server drupal):
  - grafana_drupal [default]
- Client:
  - Label = grafana
  - client_id = grafana
  - Require a client secret
  - client_secret = grafana
  - Redirect URIs: https://localhost:3000/login/generic_oauth
  - Automatically authorize this client

#### Drupal oauth2_server permissions (Home » Administration » People)
Use OAuth2 Server : Anonym, Authenticated, Admin
