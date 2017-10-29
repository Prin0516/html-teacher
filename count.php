<meta charset="UTF-8">
<?php $(function() {
    $.get('update.php?id=1',{r:Math.random()},function(num) {
        $('#hit').html(num);    
    });
});
//$action=$_GET['action']; 
//echo '<p>Hello World</p>';
//$datei = fopen("countlog.txt","r");
//$count = fgets($datei,1000);
//fclose($datei);
//$count=$count + 1 ;
//echo "$count" ;
//echo " hits" ;
//echo "\n" ;
//$datei = fopen("countlog.txt","w");
//fwrite($datei, $count);
//fclose($datei);
?>