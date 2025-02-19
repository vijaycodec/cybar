<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# CYBARWIND-CRM
CybarWind admin management CMS

## Steps and Commands to be used:

1. Always use development branch for the work. (for backend)
2. Always use development branch for the work. (for frontend)

3. Once checkout is done use following commands:
    - composer install  // to install vendor dependencies or composer update
    - cp .env.example .env  // to copy env file once copied update DB credentials to match yours
    - php artisan migrate  // to migrate all the DB changes
    - php artisan db:seed  // to run seeder
    - php artisan key:generate  // to generate key for laravel
    - php artisan serve  // to run project
    - login credential to be used (email: admin@example.com, password: password)

4. Please use git [Conventional commits](https://www.conventionalcommits.org/en/v1.0.0/) with proper message to push your changes to your branch.

5. Once changes are done please follow below points to work with git:
    - Always use development branch to take pull and work with it.
    - Create your branch by the use of [Conventional commits](https://www.conventionalcommits.org/en/v1.0.0/). No random branch names are allowed.
    - Once code is done, please push into your branch with proper commit message as per [Conventional commits](https://www.conventionalcommits.org/en/v1.0.0/) and write down proper commit description.
    - Once commit description is done, please open a PR for development branch and assign it to your lead for review purpose.
    - Once review is done. Merging can only be done by lead side, no other person is allowed to perform code merge.


## Notes for release on staging and live server:

1. Once code arrives in development branch and updates are ready to be deploy. Merge code in staging branch for staging server deployment.

2. Once deployment is done please update a release for the same branch by using `npm run release` to generate release from command line and push release for respective branch by using `git push --follow-tags origin development` where development is the branch for which release is deployed.

3. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit and release guidelines.




Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
