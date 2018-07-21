## 21 July 2018 - 1.1.0

- Refactored the main layout file : the admin.blade.php file
- Changed the @section('header-css') to @section('header-stylesheets')
- Added a @yield('custom-styles') section within the head section
- Updated the @yield('header-vars') to be @yield('header-js') in the head section
- Updated the @yield('footer-vars') to be @yield('footer-js') in the foot section
- Updated laravel/framework dependency versioning in composer.json file

## 9 July 2018 - 1.0.1

- Updated published tag names that are accessible through `php artisan vendor:publish --tag={name}`
- Updated laravel/framework dependency versioning in composer.json file