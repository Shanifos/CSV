<!-- Write PHP code that can read data from a large CSV file. The CSV file has headers with two
columns: "label", and "value." Then each row has a label (string) and a value (float). The csv could
have multiple instances of the same label. The script should read from the CSV file and aggregate
the value per label, ie. it should output a CSV with one row per label showing the sum of the values. -->


<?php
function readCSV($fileName){
    
      $data = array_map('str_getcsv', file($fileName));
      $header = array_shift($data);
      $returnData = duplCSV($data);
  $writeData = (writeCSV($returnData, $header));
 

    return  $writeData;
}
function duplCSV($data){

  $dataAssoc = array();
  
      foreach($data as $item){
      
        if(array_key_exists($item[0],$dataAssoc)){
            $dataAssoc[$item[0]] = $dataAssoc[$item[0]]+ floatval($item[1]);   
          }else {
            $dataAssoc[$item[0]] = floatval($item[1]);
          }
      }
   return $dataAssoc;
  
   
}
function writeCSV($array, $header){
  $out = fopen('php://output', 'w');
  $finalArray = array();
  $count = 0;
  fputcsv($out, $header);
  foreach($array as $key =>$value){  
      $finalArray[] = array($key, $value);
      fputcsv($out, $finalArray[$count]);
      $count++; 
  }

  
}

    
