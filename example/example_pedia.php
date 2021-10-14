
<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file


// // find all link
// foreach($html->find('a') as $e) 
//     echo $e->href . '<br>';

// // find all image
// foreach($html->find('img') as $e)
//     echo $e->src . '<br>';

// // find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// // find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// // find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// // find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// // extract text from HTML
// echo $html->plaintext;


// //$html = file_get_html('https://www.bigbasket.com/?utm_source=google&utm_medium=cpc&utm_campaign=Brand-IND&gclid=EAIaIQobChMIoOSAkpH58QIVSBwrCh2ndgh3EAAYASAAEgLT8fD_BwE/');
// $html = file_get_html('https://en.wikipedia.org/wiki/Main_Page/');
// $table = $html->find('table', 1);
// $rowData = array();

// foreach($table->find('tr') as $row) {
//     // initialize array to store the cell data from each row
//     $flight = array();
//     foreach($row->find('td') as $cell) {
//         // push the cell's text to the array
//         $flight[] = $cell->plaintext;
//     }
//     $rowData[] = $flight;
// }

// echo '<table>';
// foreach ($rowData as $row => $tr) {
//     echo '<tr>'; 
//     foreach ($tr as $td)
//         echo '<td>' . $td .'</td>';
       
        
//     echo '</tr>';
   
// }
// echo '</table>';

// $url = 'http://www.freelancer.com/jobs/Website-Design/1/';
// // Create DOM from URL
// $html = file_get_html($url);

// //Get all data inside the <tr> of <table id="project_table">
// foreach($html->find('table#project_table_static tbody tr') as $i=>$tr) {

// 	// Skip the first empty element
// 	if ($i==0) {
// 		continue;
// 	}
	
// 	echo "<br/>\$i=".$i;

// 	// get the first anchor
// 	$anchor = $tr->find('a', 0);
// 	echo " => ".$anchor->href;
// }

// // Clear dom object
// $html->clear(); 
// unset($html);


// $url = "https://en.wikipedia.org/wiki/Main_Page/";
// 	$content = file_get_contents($url);

// 	//Contructs a DOM from the $content
// 	$dom = new DOMDocument('1.0', 'UTF-8');
// 	$dom->loadHTML($content);

// 	//Extracts the title using #firstHeading
// 	$title = $dom->getElementById("mp-upper");
// 	echo $title->nodeValue . "<br>";

// 	//Extracts the first paragraph using #mw-content-text
// 	$textBlock = $dom->getElementById("mp-tfa");
// 	$paragraphs = $textBlock->getElementsByTagName("p");

// 	$paragraph = $paragraphs->item(0);

// 	echo $paragraph->nodeValue;

// $url = 'http://backpack.tf/pricelist/spreadsheet';

// $html = new simple_html_dom();
// $html->load_file($url);

// $data = $html->find('.table tr td[1]');  
// foreach($data as $result)
// {
//     echo $result->plaintext . '<br />';
// }


// $html = file_get_html('http://slashdot.org/');

// // Find all article blocks
// foreach($html->find('div.article') as $article) {
//     $item['title']     = $article->find('div.title', 0)->plaintext;
//     $item['intro']    = $article->find('div.intro', 0)->plaintext;
//     $item['details'] = $article->find('div.details', 0)->plaintext;
//     $articles[] = $item;
// }

// print_r($articles);








// //------------------------------------------------------------------------------------------------------------------
// $html = str_get_html('https://dpboss.net/milan-morning-panel-chart.php');
// $table = $html->find('table.panel-chart chart-table');

// $rowData = array();
// echo $table ;die;
// foreach($table->find('tr') as $row) {
//     // initialize array to store the cell data from each row
//     $flight = array();
//     foreach($row->find('td') as $cell) {
//         // push the cell's text to the array
//         $flight[] = $cell->plaintext;
//     }
//     $rowData[] = $flight;
// }

// echo '<table>';
// foreach ($rowData as $row => $tr) {
//     echo '<tr>'; 
//     foreach ($tr as $td)
//         echo '<td>' . $td .'</td>';
       
        
//     echo '</tr>';
   
// }
// echo '</table>';

// $dom = new DOMDocument();  

// //load the html  
// $html = $dom->loadHTMLFile("https://dpboss.net/milan-morning-panel-chart.php");  

 
//   //the table by its tag name  
// $tables = $dom->getElementsByTagName('table');   


//     //get all rows from the table  
// $rows = $tables->item(0)->getElementsByTagName('tr');   
//   // get each column by tag name  
// $cols = $rows->item(0)->getElementsByTagName('th');   
// $row_headers = NULL;
// foreach ($cols as $node) {
//     //print $node->nodeValue."\n";   
//     $row_headers[] = $node->nodeValue;
// }   

// $table = array();
//   //get all rows from the table  
// $rows = $tables->item(0)->getElementsByTagName('tr');   
// foreach ($rows as $row)   
// {   
//    // get each column by tag name  
//     $cols = $row->getElementsByTagName('td');   
//     $row = array();
//     $i=0;
//     foreach ($cols as $node) {
//         # code...
//         //print $node->nodeValue."\n";   
//         if($row_headers==NULL)
//             $row[] = $node->nodeValue;
//         else
//             $row[$row_headers[$i]] = $node->nodeValue;
//         $i++;
//     }   
//     $table[] = $row;
// }   

// var_dump($table);

// require "simple_html_dom.php";

// $html=file_get_html("https://dpboss.net/milan-morning-panel-chart.php");
// $html=new simple_html_dom($html);
// $result=$html->find('table.panel-chart chart-table thead tr tbody tr');
// echo $result;
// $rows = array();
// foreach($html->find('table.panel-chart chart-table thead tr tbody tr') as $tr){
//     $row = array();
//     foreach($tr->find('td.col-club,td.col-p,td.col-w,td.col-l,td.col-gf,td.col-ga,td.col-gd,td.col-pts') as $td){
//         $row[] = $td->innertext;
//     }
//     $rows[] = $row;
// }
// var_dump($rows);

//$html = file_get_html('https://www.bigbasket.com/');
 //$section = $html->find('carousel-only-image:nth-of-type(1) custom-component section-pad  col-lg-3 col-md-3 col-sm-4 col-xs-6 col ng-scope');
//foreach($html->find('carousel-only-image:nth-of-type(1) section.custom-component section.row section-pad ng-scope div a img') as $e)
  // echo $e->src . '<br>';
 
//foreach($html->find('div.owl-stage-outer div div div div product-template-in-container div div div a img') as $e)
  //  echo $e->src . '<br>';
// foreach($html->find('div.col-lg-3 col-md-3 col-sm-4 col-xs-6 col ng-scope') as $box){
//     foreach($row->find('div.img-txt') as $imgsection) {
//         foreach($row->find('div.img-placeholder') as $imgholder) {
        
//         }  
//     }
// }

//$section = $html->find('img.img-responsive ng-scope lazyautosizes lazyloaded');
//echo  $section;
//foreach($html->find('section.row section-pad ng-scope div div div a img') as $e)
  // echo $e->src . '<br>';

// //    $data = array();
// $html = str_get_html('https://dpboss.net/milan-morning-panel-chart.php');
// //$current_key = 0;

// $section= $html->find('div.panel-body');

// echo $section;


// $data = array();
// $html = str_get_html('https://www.bigbasket.com/');
// $current_key = 0;
// foreach ($html->find('div') as $div) {
//     if($div->class == 'img-placeholder') {
//         $current_key++;
//         $data[$current_key]['img-placeholder'] = $div->find('img', 0)->src;
//     }

//     if($div->class == 'sysMessage') {
//         $data[$current_key]['sysMessage'][] = $div->innertext;
//     }
// }

// echo '<pre>';
// print_r($data);



// $ch=curl_init('https://matka.sattamatka.wiki/milan-morning-matka-panel-chart/');
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0'
// ));
// curl_setopt($ch,CURLOPT_RETURNTRANSFER ,true);

// $result=curl_exec($ch);
// echo $result;
// curl_close($ch);




$html = file_get_html('https://matka.sattamatka.wiki/sridevi-day-matka-panel-chart/');



// $csv = [];
// $head = [];
// foreach ($html->find('tr[class="td_center strong"] td[colspan="3"]') as $h)
//  {
//   //$td1  = $h->find('td');
// array_push($head, $h->text());
// //echo $td1->text();
//  }

//  $csv[] = $head;
// echo $html->find('tr',0);
foreach ($html->find('tr ') as $row)
 {


     $td  = $row->find('td');
     //echo $td;
     $temp= [];

     for($i=0; $i<sizeof($td); $i++){

          $text = $td[$i]->text();
        //  if($i==1 || $i==2 || $i==3 || $i==4 || $i==5 || $i==6 || $i==7 || $i==8 || $i==9 || $i==10 || $i==11 || $i==12 || $i==13 || $i==14){

        //  $text= preg_replace('/[ ,]+/', '----', trim($text));
        //  }
         array_push($temp, $text);

     }


     if(sizeof($td)>0){

      $csv[]=$temp;
     }

 }
$file= fopen("sridevi-day.csv", "w");


foreach( $csv as $line ){

  fputcsv($file,$line );
}

fclose($file);

 var_dump($csv);

  //  echo '<table>';
// foreach ($tr as $row)
// {
//   echo '<tr class="td_center strong">';
//     foreach ($row->find('td') as $td)
//     {
      
        
//         echo '<td>' . $td .'</td>';
//         echo '</hr>';
//     }
//     echo '</tr>';
    
// }
//  echo '</table>';

// function scrape($url)
// {
//     $headers = Array(
//                 "Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5",
//                 "Cache-Control: max-age=0",
//                 "Connection: keep-alive",
//                 "Keep-Alive: 300",
//                 "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
//                 "Accept-Language: en-us,en;q=0.5",
//                 "Pragma: "
//             );
//   $options = array(
//   CURLOPT_RETURNTRANSFER => true,     // return web page
//   CURLOPT_HEADER         => false,    // don't return headers
//   CURLOPT_FOLLOWLOCATION => true,     // follow redirects
//   CURLOPT_ENCODING       => "",       // handle all encodings
//   CURLOPT_USERAGENT      => "cURL PHP", // who am i
//   CURLOPT_AUTOREFERER    => true,     // set referer on redirect
//   CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
//   CURLOPT_TIMEOUT        => 120,      // timeout on response
//   CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
//   CURLOPT_SSL_VERIFYPEER => true     // Disabled SSL Cert checks
// );
//     $handle = curl_init() ;
//     curl_setopt_array($handle,$options) ;
//     curl_setopt($handle,CURLOPT_HTTPHEADER,$headers) ;
//     $output->data = curl_exec($handle) ;

//     if(curl_exec($handle) === false) {
//         $output->error = 'Curl error: ' . curl_error($handle);
//     } else {
//         $output->error = 'Operation completed without any errors';
//     }

//     curl_close($handle) ;
//     return $output ;
// }

// $scrape = scrape("https://dpboss.net/milan-morning-panel-chart.php/") ;

// //echo $scrape->data;

// //uncomment for errors
// echo $scrape->error;



















?>