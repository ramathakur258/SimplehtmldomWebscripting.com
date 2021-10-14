
<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
$html=file_get_html("https://dpboss.net/milan-morning-panel-chart.php");

echo $html->find('<a>')->plaintext.'<br><hr>';
 ?>