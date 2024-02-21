<?php
$myfile=fopen("example.txt","r") or die ("unable to open file");

echo fgets($myfile);

$myfile=fopen("example.txt","w") or die ("unable to open file");
$txt="hello, world!";
fwrite($myfile,$txt);

fclose($myfile);

if(file_exists("example.txt"))
{
	echo "the file exists.";
}
else
{
  echo "the file does not exist.";
}

$content=file_get_contents("example.txt");
echo $content;

$content="new content to write.";
file_put_contents("example.txt",$content);

$new_content="appended content.";
file_put_contents("example.txt",$new_content,FILE_APPEND);  


?>