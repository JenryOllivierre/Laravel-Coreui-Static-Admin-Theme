# Laravel Coreui Static Admin Theme

## Introduction

Laravel Coreui Static Admin Theme is a bootstrap 4 theme made by [coreui](https://coreui.io) that has been re-packaged to work as an admin theme for your laravel application.

## How To Install

Run the composer command `composer require jenryollivierre/laravel-coreui-static-admin-theme`

## Getting Started

### 1 - Publish Files

- Use the `php artisan vendor:publish` command to publish the necessary files. The assets, views and config files are tagged as 'lcsat-public', 'lcsat-views', 'lcsat-config' respectively so you can publish specifically with command `php artisan vendor:publish --tag={name}`. It is recommended that you publish the config file first in the case that you may require a different path to publish the package assets than what is set as the default. By default the assets is published to public/admin. The views file will publish to views/vendor/coreui-static.

### 2 - Configure Files

- Go to the published views in views/vendor/coreui-static folder and edit the admin.blade.php template to suit your needs. the views/vendor/coreui-static/partials folder contains all the sub views to make it easier for you to find your way around the files to edit to your heart's content.

### 3 - Create Your Layout

- In your main layout file, include the views/vendor/coreui-static/admin.blade.php file and you'll be up and running. Then as usual, in your pages, extend you main layout and get to work.

## Available Section & Yield tags

#### Header Section & Yield Tags

- @yield('browser-title') : Dynamically change browser title
- @section('fonts') : add more fonts
- @section('header-stylesheets') : add more stylesheets
- @yield('custom-styles') : add custom css to head section
- @yield('header-js') : add javascript code to head section
- @yield('header-scripts') : add javascript files to head section

#### Body Yield Tags

- @yield('content') : add content to the page

#### Footer Section & Yield Tags

- @yield('footer-js') : add javascript code to foot section
- @section('footer-scripts') : add more javascript files to foot

Keep in mind that in order to keep what was already predifined in a @section, call the `@parent` code within the tags so that you don't over ride stuff that you want to keep.

## Important Information

- Please update the header.blade.php and footer.blade.php files to correctly reference the css & js files. The files are located in the partials directory.
- You can build out your own template by including all the sub files in the partials folder around your own markup.
- See [here](https://coreui.io/docs/getting-started/introduction/#html5-static-version) for documentation of the coreui static theme.
- Go [here](https://coreui.io/demo/Static_Demo/) to see a demo version.

## Hint & Tips

- Use the developer tools and inspect the demo page to get an idea of mark up you can use to get some of the functionality that you desire, if the documentations haven't made it clear.
- The classes given to the body html element influences the theme behaviour greatly so it's a good place to start. The file is found in the views/vendor/coreui-static/partials/header.blade.php file.

## Changelog

See our [changelog](https://github.com/JenryOllivierre/Laravel-Coreui-Static-Admin-Theme/blob/master/changelog.md) to keep abreast of any worthy changes we have made, before issuing any issues.

## Security Vulnerabilities

If you discover any security vulnerability within the code, please send an e-mail to Jenry Ollivierre via [jenry@jenryollivierre.com](mailto:jenry@jenryollivierre.com).

## License

Laravel Coreui Static Admin Theme is open-sourced and licensed under the [MIT license](https://opensource.org/licenses/MIT).
