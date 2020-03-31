

## About Shop Project

Simple Shop Project for LaravelDaily team. 

- Products as in video
- Add Show method in ProductsController, show photos on front end
- Banners crud
- Ratings crud, only user can set rating in product show
- Average Rating value is shown on the front
- Only admin can see/control Products, Banners, Categories, but cannot rate products

## Start project

- Download or clone repository
- composer install
- .env DB settings according to your working machine
- php artisan key:generate
- php artisan storage:link
- php artisan migrate:fresh --seed
- admin@admin.com, password
- user@user.com, password

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
