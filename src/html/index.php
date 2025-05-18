<?php
if (! function_exists('getenv_docker')) {
    function getenv_docker($env, $default)
    {
        if (($val = getenv($env)) !== false) {
            return $val;
        }
        return $default;
    }
}
#error_reporting(E_ALL);
#ini_set('display_errors', 1);

define('TZ',getenv_docker('TZ','Europe/Amsterdam'));
$date = new DateTimeImmutable("now", new DateTimeZone(TZ));
$dateString = date_format($date,"Y-m-d H:i:s");

?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
 echo '<p>Hello World</p><br>' . $dateString ;
?>
 </body>
</html>
