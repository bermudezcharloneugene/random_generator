# Random Generator API

Developed using laravel 8.0 and mysql. (Use XAMPP to test the project. Please use the latest xampp version and PHP version to test this application)

## Things to do first before testing the random generator API

- Create a database and name it as generate
- run `composer i`
- run `php artisan key:generate`
- edit the .env file (see Section Environment Setup)
- run `php artisan migrate`
- run `php artisan db:seed --class=NumbersSeeder`
- to run the whole the application in your local machine run `php artisan serve` (http://127.0.0.1:8000/api/generate)

## Routes Available for testing

#### /api/generate (Generate a random number)

Sample response:

    {"data":[{"id":35,"generated_hash":"c3391bc673","generated_number":"2076735535"}]}

#### /api/generate/all (Show all generated numbers)

Sample response:

    data: [{id: 1, generated_hash: "fbead450fe", generated_number: "1128705324"},…]
    0: {id: 1, generated_hash: "fbead450fe", generated_number: "1128705324"}
    1: {id: 2, generated_hash: "46db74ba17", generated_number: "1824072697"}
    2: {id: 3, generated_hash: "1353a2ab12", generated_number: "1085744671"}
    3: {id: 4, generated_hash: "5adb16bffc", generated_number: "1242893121"}
    4: {id: 5, generated_hash: "3dbd513f28", generated_number: "92666484"}

#### /api/retrieve/{id} (Retrieve a random generated number using its unique id)

Sample response: 

    [{"id":1,"generated_hash":"fbead450fe","generated_number":"1128705324"}]
    
## ENVIRONMENT SETUP

#### In your laravel .env file look for this constants and change their values to this. If you have a different username and password in your type it here also.

    DB_DATABASE=numbers
    DB_USERNAME=root
    DB_PASSWORD=

