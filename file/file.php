<?php 

$path = '/dir/myfile.php'; 
$file = 'hello.txt' ;

//myfile.php

//return file name ; 

// echo basename($path);
// echo '<br>';

//reutrs the file name without extenstion 

// echo basename('path','.php');
//myfile only no .php(file xtenstion)

//return the dir name from path 
// echo dirname($path); 
// echo '<br>';



// echo file_exists('hello.txt'); //return true or false 


// get a path abs 

// echo realpath($file); 
//returns file location 

//checks to see if file 
// echo is_file($file); //doesnot returns folders 
// echo file_exists('test'); //returns folders 



// check if writeable 
// echo is_writable($file); 
// echo is_readable($file);

//get the file size 

// echo filesize($file); 


// create a directory 

// mkdir('testing');

// rmdir('testing'); 

// /copy file 

// echo copy('hello.txt','files.txt');

// rename('files.txt','changes.txt');

// unlink('files.txt');


//write ffrom file to string 

// echo file_get_contents($file);

// write a sting to file 
// echo file_put_contents($file,'good by world ');

$current = file_get_contents($file); 
$current .= ' new ly added '; 
file_put_contents($file,$current); 

//open file for reading 

$handle = fopen($file,'r'); 
$data = fread($handle , filesize($file));
echo $data; 

//open file for writing 

$handle = fopen($file,'w'); 
$txt = 'Jhone doe ';
fwrite($handle,$txt);
fclose($handle); 




