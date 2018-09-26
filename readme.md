# Unit Testing Learn

Hi, Folks!

In this project we gonna learn unit testing in PHP, especially using laravel 5.7 frameworks.

Hopefully we got something to learn with this project. Here's some notes.

To create new unit test we can do with using command 
```
$ php artisan make:test TestNameWeWantToWrite
```

After we create the test file, the class generated will be located on this directory 
```
/your-project-path/test/Features/
```

the test file is a PHP class that extends class `TestCase`, you can add method inside the class using prefix `test`

Here's some example of test method :
1. `function testUserRegistration() { /* your test code*/ }`
2. `function testDatabaseCreatedAfterMigration { /* your test code */}`

as a reference we can use the official documentation for unit test in laravel in this following link  [https://laravel.com/docs/5.7/testing](https://laravel.com/docs/5.7/testing)
