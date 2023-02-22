	PRACTICAL APPLICATION OF DATA AND INFORMATION PRESENTATION SKILLS


Purpose of this project is to create a web application where we can communicate 
with the database, records can be created (where Name, matric number 
and courses can be added to a table through the registration page) 
and records can be retrieved (through the log in page).
The project only spans through the faculty of science. 


Departments outside the faculty of science are not recognized.

This application helps users/students check courses for every semester 
in their departments and other departments. 

This application is connected through MySQL using a local host 
to a database called Project and a table called myproject.

Each tiple consists of 5 attributes, these are ID, First Name, Last Name, 
Department and Matric Number.

The scripts can be viewed using a text editor (Notepad, Visual Studio Code etc).
A back-up database file can be found in the root of the folder, named project.sql.
This database file is to be imported so that the database will be accessible.

Quick Guide To connect to the database

1. Downloading XAMPP or any open-source web server stack packages. 
	XAMPP comes with Apache HTTP which serves as an HTTP server, Interpreters 
	for scripts written in PHP which was used in this project and MySQL module 
	which will be used for the database creation.
	
	XAMPP download link - - https://www.apachefriends.org/download.html
	
	It comes with different versions along with PHP
	XAMPP version 8.1.5 with PHP 8.1.0 for windows was used in the development of the project.

	It can be installed on Windows, Linux and OS X (Mac Os X)
 	
	Minimum requirements
		
			Windows Server 2008 and later
			Windows Vista and later
			Mac OS X 10.6 and later
			CentOS, Ubuntu, Fedora, Gentoo, Arch, SUSE
		
		Available in x32 and x64 bits for windows and x64 bits for Linux and MacOS.
	Download the version suitable for your system. The system used for the development of this 
	project had Windows Server 2008 which met the requirements and it is a x64 bit machine.

2. 	Setting Up XAMPP
		Once you have downloaded the XAMPP setup file, run as administrator. 
   		Follow the installation process as provided by the developers.
   		Once installation is completed, open the XAMPP control panel. 
  		Click on the start action for Apache and MySQL. 
		Ensure that port numbers are visible and the background colour for 
		both Apache and MySQL module change colour to light green. 
		
		If it doesn't change colour, 
			Try restarting your system.
			Troubleshoot the error.
			Use the help button to discover possible causes. 
		
		Also check to see that PHP was well installed
			Click on the shell button on the XAMPP control panel. Once the shell application
			opens up, type 'php -v' and tap the enter button. If the version of PHP installled or an older 
			version appears, then installation was successful. If an error pops up, it means there was
			a problem with installation and it will have to be re-installed.

3. 	Creating the database
		Click on the Admin button for MySQL on the XAMPP control panel, 
		This should open up a page on your browser.
		Click on Database.
		If Database is not visible, click on the menu button at the top left of
		the screen (usually represented with three slashes in parallel) and select Database.
		In the field that says Database name, type Project. The next input bar 
		specifies how data is sorted and compared in the database. In the dropdown 
		menu select collation, then click create.

		If a database named Project already exists, an error will be recorded.
	
Note: Single quotes used here are merely for illustration and are not 
	part of the names/links.	

4. Import the table
	Click on the created database (Project).
	Click on Import.
	If Import is not visible, click on the menu button at the top left of 
	the screen (usually represented with three slashes in parallel) and select Import. 
	Click choose file, locate the 'project.sql' file and select it, leave
	everything as it is and click Go. If there is already a table named 'myproject' an error will occur, 
	the previous table named 'myproject' should be dropped.
	Once this is all done, the new table 'myproject' will be accessible in 
	the database 'Project'.


After this, open 'This PC' and go to C:/xampp/htdocs and paste the Project folder here.
If you installed Xampp in a different path, it is advised to re-install in the default 
path as some features might not work.

5. Connecting to the database from your browser
	Once all above steps have been completed, open a new tab in your browser and 
	type 'http://localhost/project/school project/index.php' 
	or 'http://localhost/project/school%20project/index.php' 
	in the search bar (Do not add the single quotes).
	This brings you to the home page of the web site where you can choose to 
	register or login.

6. If Register is clicked, it takes you to the registration page where the details of the 
   user will be required. 
		Rules
		No field can be left blank as this will prompt an error (in red text).
   		Matric Number must be 9 digits else this will prompt and error. Traditionally, matric numbers in LASU are 9 digits.
   		If the department entered is not a recognized department in the faculty of science for LASU, this will prompt an error. 
		If the department is misspelt, suggestions will be displayed in red texts.
   
   		Once the details have been correctly entered and the submit button is clicked, 
	   	a 'Registration successful' text appears at the top left of the screen. 
	   	The input is converted to uppercase and sent to the database.	
		If the matric Number has already been previously registered, an error will appear.

7. After the submit button is clicked, you will be redirected to the login page where you will 
   be required to re-enter the first name and matric number used for registration. 
   The details entered must be a match else an error will be generated. After this, click the submit button.

8. This redirects the user to the dashboard.
   The page contains a check course button which when clicked shows all courses available 
   for their department. The student can also choose to check courses available to other 
   departments in the faculty. There is a field available and the student will be required 
   to type the name of the department they wish to view.
	
9. A log out button is visible at the bottom right of this page. Student can easily use this to log out of the 
    page once they are done with their activities. When you do this, it takes you to the login page and you will have to login
    again to access your dashboard.

10. The basic Navbar contains links to the home page, Log In page, Registeration page and 
    Contact page.
	There are special Navbars for the dashboard and courses pages.
	The Dashboard and Log Out links are there as well as courses link in the Dashboard.


11. Contact page 
	It contains direct links to the school's:
			1. Website.
			2. Mail for complaints.
			3. Facebook page.
			4. Instagram page.
			5. Twitter Page.
			6. Linkedin account.
			7. Youtube channel.
	
