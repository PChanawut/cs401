CS402 project
├───asset
│   └───config
├───component
├───css
├───database
├───file
├───js
│   └───jquery.Thailand.js
│       ├───database
│       │   ├───raw_database
│       │   └───tools
│       ├───dependencies
│       │   └───zip.js
│       ├───dist
│       └───src
├───php
│   └───config
├───phpmailer
│   ├───.github
│   ├───examples
│   │   ├───images
│   │   ├───scripts
│   │   └───styles
│   ├───extras
│   └───language
└───stylesheet


Git repository:

	https://github.com/PChanawut/cs401.git

Program develop:

	- Xampp Version 3.2.4*

Environment :

	- Apache 2.4.41
	- MariaDB 10.4.11
	- PHP 7.4.2 (VC15 X86 64bit thread safe) + PEAR
	- phpMyAdmin 5.0.1
	- OpenSSL 1.1.0g
  	- ADOdb 518a
   	- Mercury Mail Transport System v4.63 (not included in the portable version)
   	- FileZilla FTP Server 0.9.41 (not included in the portable version)
   	- Webalizer 2.23-04 (not included in the portable version)
   	- Strawberry Perl 5.16.3.1 Portable
   	- Tomcat 7.0.99
   	- XAMPP Control Panel Version 3.2.4.
   	- XAMPP mailToDisk 1.0 (write emails via PHP on local disk in <xampp>\mailoutput. Activated in the php.ini as mail default.)

System Requirements:

  	- 64 MB RAM (RECOMMENDED)
  	- 750 MB free fixed disk
  	- Windows 7, Windows 8, Windows 10

Set up:
	- Install Xampp Version 3.2.4*
	- Clone project in directory ../xampp/htdocs
		- git repository https://github.com/PChanawut/cs401.git
		- zip file
	- Start Apache and MySQL in XAMPP Control Panel
	  	*can't start port https://stackoverflow.com/questions/11294812/how-to-change-xampp-apache-server-port
	- Install database http://localhost/phpmyadmin
		User: root
   		Password:
   		(means no password!)
		file .sql in CS401/database/CS402.sql
	- MyProject♥ http://localhost/cs401
	





