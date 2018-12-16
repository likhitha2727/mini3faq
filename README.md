
# Final Assignment

To run the faq project:

1. git clone https://github.com/likhitha2727/mini3faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/7.2/database)
5. Run: php artisan migrate
6. Run: unit tests: phpunit
7. Run: seeds php artisan migrate:refresh --seed

To install Laravel Dusk and run the tests.

1. Install laravel dusk to do end to end testing of all the functions included in the project in ubuntu.
2. Run: sudo apt-get update 
3. Run: sudo apt-get -y install libxpm4 libxrender1 libgtk2.0-0 libnss3 libgconf-2-4 
4. Run: sudo apt-get install chromium-browser
5. Run: sudo apt-get -y install xvfb gtk2-engines-pixbuf 
6. Run: sudo apt-get -y install xfonts-cyrillic xfonts-100dpi xfonts-75dpi xfonts-base xfonts-scalable
7. Run: sudo apt-get -y install imagemagick x11-apps
8. Run: composer require --dev laravel/dusk
9. Run: sudo apt-get install php5-curl
10. Run: php artisan dusk:install
11. After these steps of installation I included "use Laravel\Dusk\DuskServiceProvider;" in AppServiceProvider and under the function register include "$this->app->register(DuskServiceProvider::class);" in it.
12. To run the test Run: php artisan dusk
13. Reference1 for installation: https://cmpalce.com/blog/running-laravel-dusk-in-non-desktop-environment
14. Reference2 for installation: https://laravel.com/docs/5.7/dusk

Epics and User Stories:

Epics:

As a developer I want to test whether all the features in the FAQ project are running perfectly or not. To do this I installed Laravel Dusk where I can test all the features using different test cases.

UserStories:
1. As a User, I should be able to register and login into the website.
2. As a User, I should be able to write questions and I should be able to edit, delete and create new questions.
3. As a User, I should be able to write answers and I should be able to edit, delete and create new answers.
4. As a User, I should be able to create and edit my profile.
5. As a Developer, I should be able to test whether the welcome page is displaying ‘Laravel’, in order for this to happen I wrote dusk test for homepage where it displays ‘Laravel’ on the Welcome page whether it is actually working or not when the user runs the project.
6. As a Developer, I should be able to test whether the website is navigating the user to Register Page where it displays the user credentials details list page when the user clicks on Register link present at the top right corner of the Welcome Page.
7. As a Developer, I should be able to test whether the website is navigating the user to Login Page where it displays user credential details list page when user clicks on the Login link mentioned to the top-right  corner of the welcome page beside Register link.
8. As a Developer, I should be able to test whether the website is navigating user to the Register Page where if the user fills the registration details it should navigate the page to the Questions page.
9. As a Developer, I should be able to test when the user login with his/her details user should be able to navigate to the Questions Page and where it displays the questions list on the screen.
10. As a Developer, I should be able to test when the user logs in the user should be able to create,edit and delete questions and when the user fills the details for add question the user should be able to see “Saved” tag, when the user edits the question user should be able to see “IT WORKS! “ and when the user deletes the question user should be able to see “Deleted” and I should be able to write a test whether all this process works or not.
11. As a Developer, I should be able to test when the user logs in the user should be able to create,edit and delete answers after filling the questions list and when the user  fill I should be able to test for add answers where the user should be able to see “Saved” tag, when the user edits the question the user should be able to see “Updated“ and when the user deletes the question the user should be able to see “Delete” and I should be able to write a test whether all this process works or not.
12. As a Developer, I should be able to test when user clicks on My Profile link on the top-right corner of the page after the user logs in the user should be able to see My Profile.

I have written dusk tests 9 functions of the project and everything is running perfectly without any errors or interruptions. I have learnt a lot through this from this process, the reference I took while coding is https://scotch.io/tutorials/introduction-to-laravel-dusk and thanks to Professor Keith Williams who has really made explore a lot in programming and also helping me solve my errors in all cases, Screenshots of success tests are sent as mail to Professor Keith Williams.


