This is a Laravel phonebook app. It allows the user to create, retrieve, update, and delete contacts into a database.
Future versions will have a search functionality, as well as authentication methods so more than one user can use the app.

Files relevant to making this app work:
PhonebookController.php
Phonebook.php (model)
2014_10_12_000000_create_phonebooks_table
index.blade.php (view)
create.blade.php
edit.blade.php
footer.blade.php
env

To run the app:
rename env to .env
change the database information in .env to match your database's.
In the main directory of the app go to command line and type "php artisan migrate"
To start the server use the command "php artisan serve"
use your browser to go to whatever url "php artisan serve" gives you. It will look something like "localhost:8000"


Developed by Tawanda Mutasa: tawacodes@gmail.com