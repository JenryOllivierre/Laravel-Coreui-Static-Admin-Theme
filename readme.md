## Laravel Coreui Static Admin Theme

A laravel admin theme made from the coreui static theme for bootstrap 4.

## How To Install

Run the composer command `composer require "jenryollivierre/laravel-coreui-static-admin-theme":"1.*"`

## Configuration

(1) Use the `php artisan vendor:publish` command to publish the views, config and assets file. You can configure where you want the coreui-static assets (css/js/images etc) to be published from the config file (config/coreui-static.php). By default, it will publish to public/admin/coreui-static. The views, config and assets are all tagged as 'views', 'config' and 'public' respectively so you can specifically publish them with `php artisan vendor:publish --tag={name}`.

(2) Go to the published views in views/vendor/coreui-static folder and edit the admin.blade.php template to suit your needs. the views/vendor/coreui-static/partials folder contains all the sub views to make it easier for you to find your way around the files to edit to your heart's content.

The `@yield('content')` tag is already set to accept page content, however, it's the only of it's kind that's preset. You can edit the html header, html footer, admin bar, sidebar, aside, main content and footer files from it's own file.

Note:: Please update the header and footer file to correctly reference all css and js files correctly.

Alternatively, you can build out your own view template by including the partial views around your own markup.

See [here](https://coreui.io/docs/getting-started/introduction/#html5-static-version) for documentation of the coreui static theme.

Go [here](https://coreui.io/demo/Static_Demo/) to see a demo version. 

Tip 1: Use the developer tools and inspect the demo page to get an idea of mark up you can use to get some of the functionality that you desire, if the documentations haven't made it clear.

Tip 2: The classes given to the body html element influences the theme behaviour greatly so it's a good place to start.

It's all that simple!!!

## Security Vulnerabilities

If you discover any security vulnerability within the code, please send an e-mail to Jenry Ollivierre via [jenry@jenryollivierre.com](mailto:jenry@jenryollivierre.com).

## License

Laravel Coreui Static Admin Theme is open-sourced and licensed under the [MIT license](https://opensource.org/licenses/MIT).
