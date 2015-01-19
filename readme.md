# Laravel Multi Domain Setup

This is a simple Laravel 4.2 project that demonstrates accessing an **admin** and **client** domain of a site where each domain needs to have separate **routes**, **views**, **controllers**, etc.

## REQUIREMENTS

The requirements outside of the regular Laravel setup are:

1. **vhost** entries for **admin.multi-domain.dev** and **multi-domain.dev**, both pointing to Laravel's **public** folder
2. Your webserver should provide the necessary **environment** variables, **APP_ENV** and **APP_DOMAIN**

**Apache vhost**:

```SetEnv varname varvalue```

**Nginx vhost** as a **fastcgi_param** in the PHP location block:

```fastcgi_param varname varvalue;```

The required variables are:

```APP_ENV local/production```
```APP_DOMAIN admin/client```

## Checking It Out

After setup, you should be able to access the root of each domain in the browser. They should each display a domain-specific view and greeting from the domain-specific controller.

## Technical Notes

**Config**

Configuration in ```bootstrap/start.php``` and throughout the app can be handled through a combination of ```getenv('APP_ENV')``` and ```getenv('APP_DOMAIN')``` for:

- console
- console-local
- console-production
- local
- production
- admin
- admin-local
- admin-production
- client
- client-local
- client-production

**Routes**

```Route::group()``` is used in **routes.php** to separate domain routing.

**Controllers**

```app/Acme/controllers``` are **psr-4** auto-loaded under the **Acme** namespace. Presumably, **Acme** would be replaced by your project's actual name.

**Views**

```app/config/view.php``` uses **getenv('APP_DOMAIN')** to separate views into their respective folders.

## Contributing

This is a first stab at this idea. Ideas and Pull Requests are certainly welcome! :)
