<?php 
include('../simple_html_dom.php');


$html = file_get_html('https://matka.sattamatka.wiki/milan-morning-matka-panel-chart/');



$csv = [];
$head = [];
foreach ($html->find('tr[class="td_center strong"]') as $h)
 {
array_push($head, $h->text());
//echo $h->text();
 }

 $csv[] = $head;
// echo $html->find('tr',0);
foreach ($html->find('tr') as $row)
 {


     $td  = $row;
     //echo $td;
     $temp= [];

     for($i=0; $i<sizeof($td); $i++){

         $text = $td[$i]->text();
        //  if($i==1 || $i==2){

        //   $text= str_replace(",","",$text);
        //  }
         array_push($temp, $text);

     }


     if(sizeof($td)>0){

      $csv[]=$temp;
     }

 }
$file= fopen("data1.xlsx", "w");


foreach( $csv as $line ){

  fputcsv($file,$line );
}

fclose($file);


 //print_r($csv);

?>