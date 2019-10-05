<html><head><title>srvensim-lamp</title></head></html>
<?php
echo "<center><hr><a href=http://e-srvlamp/phpmyadmin/ style='background-color:blue;color:white;font-weight:bold;' target='_blank'><font color=green><blink>=>></blink></font>";
echo "Acc&eacute;der &agrave; phpMyAdmin <font color=green><blink><<=</blink></font></a></center><hr><br><br>";
?>
<pre style='font-size:small;'>
;
; Error Level Constants:
; E_ALL             - All errors and warnings (includes E_STRICT as of PHP 6.0.0)
; E_ERROR           - fatal run-time errors
; E_RECOVERABLE_ERROR  - almost fatal run-time errors
; E_WARNING         - run-time warnings (non-fatal errors)
; E_PARSE           - compile-time parse errors
; E_NOTICE          - run-time notices (these are warnings which often result from a bug in your code, but it's possible that it was  
;                     intentional (e.g., using an uninitialized variable and relying on the fact it's automatically initialized to an empty string)
; E_STRICT          - run-time notices, enable to have PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code
; E_CORE_ERROR      - fatal errors that occur during PHP's initial startup
; E_CORE_WARNING    - warnings (non-fatal errors) that occur during PHP's initial startup
; E_COMPILE_ERROR   - fatal compile-time errors
; E_COMPILE_WARNING - compile-time warnings (non-fatal errors)
; E_USER_ERROR      - user-generated error message  
; E_USER_WARNING    - user-generated warning message
; E_USER_NOTICE     - user-generated notice message
; E_DEPRECATED      - warn about code that will not work in future versions of PHP
; E_USER_DEPRECATED - user-generated deprecation warnings
;
; Common Values:
;   E_ALL & ~E_NOTICE  (Show all errors, except for notices and coding standards warnings.)
;   E_ALL & ~E_NOTICE | E_STRICT  (Show all errors, except for notices)
;   E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR  (Show only errors)
;   E_ALL | E_STRICT  (Show all errors, warnings and notices including coding standards.)
; Default Value: E_ALL & ~E_NOTICE   
; Development Value: E_ALL | E_STRICT
; Production Value: E_ALL & ~E_DEPRECATED
; http://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
</pre><br><center><table>
<tr ><td><pre>config générale :</pre></td><td><pre>pour cacher les messages d'erreurs :</pre></td><td><pre>pour modifier les messages d'erreurs :</pre></td></tr>
<tr><td><pre>error_reporting = E_ALL & ~E_DEPRECATED
display_errors = On</pre></td><td><pre>ini_set ( 'display_errors' , 0 );</pre></td><td><pre>error_reporting = E_ALL & ~E_DEPRECATED</pre></td></tr>
</table></center>
</pre><br>
<?php
ini_set ( 'display_errors' , 0 );

phpinfo();
?>