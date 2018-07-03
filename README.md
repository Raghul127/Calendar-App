# Calendar-App
Delta Webdev Task 3

## Features 

* App with secure login and sign up options. Each user has their own calendar and appointments.
* Each appointment consists of a title, description, start, and end time.
* Clicking on a date shows the appointments for that date (a timeline of events for the day).
* Users can schedule meetings with others. (Needs further work)
* Sign up process with real time indication of usernames availability and a Captcha.

----

**Framework used : PHP on Apache**  
**Database 	 : MySQL**  
**Server	 : Apache** 

----

**Connections to database**
* Enter your username and password of mySQL database in connect.php
```html
define ('DB_USER','Your-Username');
```
```html
define ('DB_PASSWORD','Your-Password');
```
replace the string "Your-Username" and "Your-Password" with your own username and password of mySQL database.

----

**Captcha System**

* The signup/register page uses Google reCaptcha to prevent bot users.
* Go to [this link](https://www.google.com/recaptcha/intro/index.html). Click on *get reCaptcha* button in top right corner.
* Sign in through your Gmail account.(If you are already signed up, then ignore this step).
* In the *Register a new site* box, type in a label(say localhost) and your domain name(say localhost). 
* Click on *Register*.
* You will get two keys, a public key and a private key.
* Copy the private key. 
* Paste this private key in register.php on the initialization line. ($privateKey)
* Copy the public key. Open register.php. You will see a line 
```html
<div class="g-recaptcha" data-sitekey="Your-public-key"></div>
```
Paste this public key in the 'data-sitekey' attribute,replacing "Your-public-key".


----

#### How to run :

* Clone/download this repository.
* Copy the folder Calendar to your localhost directory.
* Start your XAMPP/WAMP or any apache distribution software.
* Start your apache server and mySQL modules.
* Open up your browser. Type http://localhost/calendar/ as the URL.
* Click on *welcome.html*

----

## Built With

* [PHP](http://php.net/)
* [Vanilla JS](http://vanilla-js.com/)
* [AJAX](https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX)
* [HTML](https://www.w3.org/html/)
* [CSS](https://www.w3.org/Style/CSS/)
* [reCaptcha API](https://www.google.com/recaptcha/)
