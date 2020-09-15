# Demo on Heroku
See the demo on Heroku [Here](https://glacial-sierra-75393.herokuapp.com/)

# The challenge
[Here is the link to see the challenge](https://gist.github.com/GRardB/7e2990bbea8c2e50e2b501b712d8c169)

# To run locally
1. Adjust the `.env` file to match your local database
1. Run the migrations with `php artisan migrate`
1. Seed the sample questions with `php artisan db:seed`. *Optionnally*, change or add sample questions in the `run()` method in this file: `database\seeders\DatabaseSeeder.php`

# Future adjustments ideas
1. Add upvotes to questions and answers
1. Add front-end validation for the forms
1. Add search lookup suggestion while the user is typing a question