<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  config/config.php
//
//  Purpose: Database definitions, cookies, & email setups.
//           More detailed comments in code.
//
////////////////////////////////////////////////////////////////////////////////
/**
 * Configuration for: Database Connection
 * This is the place where your database login constants are saved
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 *          by the way, it's bad style to use "root", but for development it will work.
 * DB_PASS: the password of the above user
 */

//  CARINA - Credentials for Launch on godaddy.com and development
//  Very nice we can use the same SQL definitions!!

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "carina");
define("DB_USER", "carinaADM");
define("DB_PASS", "carina#AA!");
/**
 * Configuration for: Cookies
 * Please note: The COOKIE_DOMAIN needs the domain where your app is,
 * in a format like this: .mydomain.com
 * Note the . in front of the domain. No www, no http, no slash here!
 * For local development .127.0.0.1 or .localhost is fine, but when deploying you should
 * change this to your real domain, like '.mydomain.com' ! The leading dot makes the cookie available for
 * sub-domains too.
 * @see http://stackoverflow.com/q/9618217/1114320
 * @see http://www.php.net/manual/en/function.setcookie.php
 *
 * COOKIE_RUNTIME: How long should a cookie be valid ? 1209600 seconds = 2 weeks
 * COOKIE_DOMAIN: The domain where the cookie is valid for, like '.mydomain.com'
 * COOKIE_SECRET_KEY: Put a random value here to make your app more secure. When changed, all cookies are reset.
 */
define("COOKIE_RUNTIME", 1209600);
// CARINA - Test if Local or Hosted and Define Cookies
if ($_SERVER['HTTP_HOST'] != "localhost") {
// Define hosted cookie definition
  define("COOKIE_DOMAIN", $_SERVER['HTTP_HOST']);
}
else {
  // Define local development cookie
  define("COOKIE_DOMAIN", ".127.0.0.1");
}  
define("COOKIE_SECRET_KEY", "1gp@TMPS{+$78sfpMJFe-92s-carina-rules!");

/**
 * Configuration for: Email server credentials
 *
 * Here you can define how you want to send emails.
 * If you have successfully set up a mail server on your linux server and you know
 * what you do, then you can skip this section. Otherwise please set EMAIL_USE_SMTP to true
 * and fill in your SMTP provider account data.
 *
 * An example setup for using gmail.com [Google Mail] as email sending service,
 * works perfectly in August 2013. Change the "xxx" to your needs.
 * Please note that there are several issues with gmail, like gmail will block your server
 * for "spam" reasons or you'll have a daily sending limit. See the readme.md for more info.
 *
 * define("EMAIL_USE_SMTP", true);
 * define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
 * define("EMAIL_SMTP_AUTH", true);
 * define("EMAIL_SMTP_USERNAME", "xxxxxxxxxx@gmail.com");
 * define("EMAIL_SMTP_PASSWORD", "xxxxxxxxxxxxxxxxxxxx");
 * define("EMAIL_SMTP_PORT", 465);
 * define("EMAIL_SMTP_ENCRYPTION", "ssl");
 *
 * It's really recommended to use SMTP!
 *
 */

// CARINA - Hosted or Local Development SMTP settings
// Logic will read current HTTP_HOST global make settings. 


if ($_SERVER['HTTP_HOST'] != "localhost") {
  //  SMTP Setting for hosted site GoDaddy.com e-mail.
  define("EMAIL_USE_SMTP", true);
  define("EMAIL_SMTP_HOST", "localhost");
  define("EMAIL_SMTP_AUTH", false);
  define("EMAIL_SMTP_PORT", 25);
}
else {
  // Define local development smtp e-mail
  define("EMAIL_USE_SMTP", true);
  define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
  define("EMAIL_SMTP_AUTH", true);
  define("EMAIL_SMTP_USERNAME", "carinaUNM2015@gmail.com");
  define("EMAIL_SMTP_PASSWORD", "carina#00!");
  define("EMAIL_SMTP_PORT", 465);
  define("EMAIL_SMTP_ENCRYPTION", "ssl");
}

/**
 * Configuration for: password reset email data
 * Set the absolute URL to password_reset.php, necessary for email password reset links
 */

// CARINA - Test if Local or Hosted and Password Reset URL 
// Should work for any hosted domain
if ($_SERVER['HTTP_HOST'] != "localhost") {
// Define hosted URL
  define("EMAIL_PASSWORDRESET_URL", "http://" . $_SERVER['HTTP_HOST'] . "/CARINA/password_reset.php");;
}
else {
// Define Local URL
  define("EMAIL_PASSWORDRESET_URL", "http://127.0.0.1/CARINA/password_reset.php");
}
define("EMAIL_PASSWORDRESET_FROM", "no-reply@example.com");
define("EMAIL_PASSWORDRESET_FROM_NAME", "My Project");
define("EMAIL_PASSWORDRESET_SUBJECT", "Password reset for PROJECT CARINA");
define("EMAIL_PASSWORDRESET_CONTENT", "Please click on this link to reset your password:");

/**
 * Configuration for: verification email data
 * Set the absolute URL to register.php, necessary for email verification links
 */

// CARINA - Test and set Verification e-mail setting
if ($_SERVER['HTTP_HOST'] != "localhost") {
// Define hosted Verification URL
  define("EMAIL_VERIFICATION_URL", "http://" . $_SERVER['HTTP_HOST'] . "/CARINA/register.php");
}
else {
// Define Local Verification URL
  define("EMAIL_VERIFICATION_URL", "http://127.0.0.1/CARINA/register.php");
}
define("EMAIL_VERIFICATION_FROM", "no-reply@example.com");
define("EMAIL_VERIFICATION_FROM_NAME", "My Project");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for PROJECT CARINA");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

/**
 * Configuration for: Hashing strength
 * This is the place where you define the strength of your password hashing/salting
 *
 * To make password encryption very safe and future-proof, the PHP 5.5 hashing/salting functions
 * come with a clever so called COST FACTOR. This number defines the base-2 logarithm of the rounds of hashing,
 * something like 2^12 if your cost factor is 12. By the way, 2^12 would be 4096 rounds of hashing, doubling the
 * round with each increase of the cost factor and therefore doubling the CPU power it needs.
 * Currently, in 2013, the developers of this functions have chosen a cost factor of 10, which fits most standard
 * server setups. When time goes by and server power becomes much more powerful, it might be useful to increase
 * the cost factor, to make the password hashing one step more secure. Have a look here
 * (@see https://github.com/panique/php-login/wiki/Which-hashing-&-salting-algorithm-should-be-used-%3F)
 * in the BLOWFISH benchmark table to get an idea how this factor behaves. For most people this is irrelevant,
 * but after some years this might be very very useful to keep the encryption of your database up to date.
 *
 * Remember: Every time a user registers or tries to log in (!) this calculation will be done.
 * Don't change this if you don't know what you do.
 *
 * To get more information about the best cost factor please have a look here
 * @see http://stackoverflow.com/q/4443476/1114320
 *
 * This constant will be used in the login and the registration class.
 */
define("HASH_COST_FACTOR", "10");
