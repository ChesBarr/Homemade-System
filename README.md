Made by Dapatnapo, Chester Barry A.

************************************** HOW TO RUN THIS PROGRAM *************************************************************
1. Put the project in the root htdocs folder in Xampp, do not change the name folder, if you did, rename the $rootLocation in config/names.php to the same name
2. Start Apache and MySQL in Xampp
3. Import hospital_db.sql into Phpmyadmin
4. Change Database Configurations in .env file
5. In Every update released, update .env


************************************** HOW TO DEVELOP THIS PROGRAM *************************************************************
1. Log in Page is in app/auth/login.php
2. app/modules/ is where you put all the modules
3. app/views is where the reusable system components in pages are located and can be edited
4. Configure names in config/names.php
5. Log in with doritos with the password 123 to try and explore the system
6. There are more development tutorials in app/modules/sample/sample.php


************************************** NEW UPDATE LOG *************************************************************

Newly Added Router, easier routing through pages

Sample Page is now accessible and ready for tutorial
Fixed Home Page
Fixed Users Module
Most Contents are now Accessible

BASE_URL and $rootLocation are actually the same, proceed to use BASE_URL instead

We are now Ready for Collaborative Development


************************************** OLD LOGS *************************************************************


************************************** 10th Commit: 7/7/2025 **************************************

Changed Folder Structure, see struct.txt
Planning to add a Lightweight Router for easy Routing
Added .env for database and other sensitive configurations to be added later
Most content is still not loadable as file/folder structure is still in development


************************************** 9th Commit: 5/19/2025 **************************************
Now Added All Modules with some Basic Frontend for each, separated views by respective roles
Added bootstrap icons link into home/components/head.inc.php, which made things prettier
Added RBAC(Role-Based Access Control) where users with certain roles cannot access a page
Added home/components/restricted.inc.php restricted users see this page when restricted


************************************** 8th Commit: 5/19/2025 **************************************
Added temporary dashboard with modules of our Hospital with modals
New User Management UI, now listed in Tables, fully functional
Replaced all user Profile Pictures into single one
Session expired page now looks better

Next Commit: Ready to begin modules simple backend code


************************************** 7th Commit: 4/16/2025 **************************************
forgot to update config-names lmao

************************************** 6th Commit: 4/16/2025 **************************************
Adding new Login Page, now functional(bugs might appear, pls report)
Added Logo in Login Page and icon in every page(home/components/header.inc.php)

Removed unneeded files: home/components/nav-bar-old.inc.php, home/courses, home/css/bubble.css, home/css/forms.css, indexy.php(old login)
Removed unneeded images
Also removed: package.json, package-lock.json
Dropped all Tables in Database except for: user_tbl

Added Styling to Registration Page, functionality still Experimental(pls report for bugs)
Added function sanitizeInput() in database/crud.php, which is used in register-account.php
Also when Registering an Account, it will automatically be a Patient
If you want an Admin Account except for doritos 123, just create another using the page home/users/create-account.php

BETA: Added home/dashboard/main-dashboard.php, soon this will be the main page for activity


************************************** 5th Commit: 3/30/2025 **************************************
Trying to integrate Bootstrap, installed manually for Collaborators
Added vendor/bootstrap folders for Bootstrap, so frontend is available offline
Added link into /home/components/head.inc.php and nav-bar.inc.php to link Bootstrap
Added a new Nav-bar, still in development but functional except for the search bar
Added 5rem top margin on body (home/css/global.css) because the nav-bar is not taking space
Added function: visible in main.js
Cleaned code in main.js

Thinking of removing unneeded files: home/components/nav-bar-old.inc.php, home/courses, home/css/bubble.css, home/css/forms.css


************************************** 4th Commit: 3/12/2025 **************************************
Fixed create-account.php, now usable
Fixed Hashing Passwords algorithm
Added more to create-account.php backend

Added more details to sampletemp.php
Fixed some line of codes
Added comments in crud.php and sampletemp.php

Cleaned code of manage-account.php

Added register-account.php fully functional, will always be patient account
Added Register Button in login page
Added 2 new Accounts

Added missing HTML tags: html, body


************************************** 3rd Commit: 3/5/2025 **************************************
Root Location Added in config-names.php
Fixed sidebar location Buttons


Added util/hasher.php for hashing passwords, use this only ONCE, ISSUE: This will also hash the other hashed passwords, leading to bugs
Cleaned code of manage-account.php. ready for viewing
Cleaned code of manage-course.php, still in development

Added Sample Template for easy Development: home/sample/samplepage.php
Added Routing variables for easy accessing of files in config-names.txt
Added some helpful comments


************************************** 2nd Commit: 2/27/2025 **************************************
Added Database(forgot)


************************************** 1st Commit: 2/27/2025 **************************************
Added Dynamic User Roles in Sidebar Buttons

Built in flexible query functions for easy CRUD functions throughout the whole System