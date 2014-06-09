<?php
class JConfig {

   /*Site Settings*/
   var $offline = 0;
   var $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
   var $sitename = 'Anahita';
   var $editor = 'tinymce';

   /*Database Settings*/
   var $dbtype = 'mysqli';
   var $host = 'localhost:3306';
   var $user = 'root';
   var $password = 'nitin123';
   var $db = 'anahita';
   var $dbprefix = 'jos_';

   /*Server Settings*/
   var $secret = 'UhXBnrk97v7iDF3KyFSspBYD9PiBYWy0';
   var $error_reporting = 0;
   var $tmp_path = '/var/www/html/myproject/www/tmp';
   var $log_path = '/var/www/html/myproject/www/log';
   var $force_ssl = 0;

   /*Session Settings*/
   var $lifetime = 1440;
   var $session_handler = 'database';

   /*Mail Settings*/
   var $mailer = 'mail';
   var $mailfrom = '';
   var $fromname = '';
   var $sendmail = '/usr/sbin/sendmail';
   var $smtpauth = 0;
   var $smtpuser = '';
   var $smtppass = '';
   var $smtphost = 'localhost';

   /*Cache Settings*/
   var $caching = 1;
   var $cachetime = 60;
   var $cache_handler = 'file';

   /*Debug Settings*/
   var $debug = 0;
   var $debug_db = 0;
   var $debug_lang = 0;

   /*Route Settings*/
   var $sef_rewrite = 0;

   /*Legacy. Will be removed*/
   var $list_limit = 20;
   var $gzip = 0;
   var $xmlrpc_server = '';
   var $ftp_enable = 0;
   var $offset = 0;
   var $MetaAuthor = '';
   var $MetaTitle = '';
   var $sef = '';
   var $sef_suffix = '';
   var $feed_limit = 10;

}