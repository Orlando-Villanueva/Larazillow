
<h1>Project setup</h1>

Run Laravel
```
php artisan serve
```
Run Vue
```
php artisan serve
```
Run docker
```
docker-compose up
```
Login to Adminer (see docker.compose.yml)
```
http://localhost:8080/
```
And create your database

<h1>Issues</h1>
If you run into a PDOException error when running database

```
php artisan db:show
```
Then you need to uncomment the following line in your php.ini file ( For file path, see phpinfo() in tinker  )
```
extension=pdo_mysql
```




