## About Projects
<p>This is digital library app. Got this project from school. There are two options... digital books and physical books. In this project i choose digital</p>
<ul>
    <li>Name  : Naufal Azka Fadhlillah</li>
    <li>No    : 26</li>
    <li>Class : XII RPL C</li>
</ul>

## How to Run
<p>If you are curious about this project, you can clone it for yourself.</p>
<p>First, clone this project</p>

```bash
git clone https://github.com/Lovrenski/digital-library.git
```
<p>Open it, then run this in commad</p>

```bash
php artisan storage:link
```

<p>Don't forget to create the database and configure the ".env" file, then migrate it</p>

```bash
php artisan migrate
```

```bash
php artisan storage:link
```

<p>Finally, start your local db and run this to start server locally</p>

```bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
