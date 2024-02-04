WINDOWS OS - 

Open XAMPP and start MySQL and APACHE server.
COPY the code files provided and paste it in the given location - C:\xampp\htdocs\XSS
Open Web browser --> type http://localhost/phpmyadmin/ in your search bar and check the database user created inside the test container.
Open Web browser --> Type in localhost/(path of the folder where the files are) --> (MAKE SURE YOU ADD FILES INSIDE XAMPP/htdocs FOLDER (C:\xampp\htdocs))
Select the login page to perform attack.
Add your credentials to login. (credentials photo provided in the pdf)
If you dont have credentials you can create by clicking on signup page. A new entry will be added to database.
After creating your credentials login into your account.
username - testing , password - 12345  - Will login and give you an alert prompt.
username - testing2 , password - 12345 - Normal Login credentials.
username - testing4 , password - 12345 - whenever you login with this account it will redirct to a youtube video page.
This performs an CSRF attack.