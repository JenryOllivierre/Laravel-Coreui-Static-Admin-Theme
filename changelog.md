Version 1.0.1 - Version 1.1.0

- Updated published tag names that are accessible through `php artisan vendor:publish --tag={name}`
- Refactored the main layout file : the admin.blade.php file
- Changed the @section('header-css') to @section('header-stylesheets')
- Added a @yield('custom-styles') section within the head section
- Updated the @yield('header-vars') to be @yield('header-js') in the head section
- Updated the @yield('footer-vars') to be @yield('footer-js') in the foot section
- Updated dependency versioning in composer.json file

Version 1.0.0 - Version 1.0.1

- Updated published tag names that are accessible through `php artisan vendor:publish --tag={name}`
- Updated dependency versioning in composer.json file