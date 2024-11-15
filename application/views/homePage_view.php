<!DOCTYPE html>
<html lang="en">
<head>

<!--    header    -->

<?php $this->load->view("incluir/headerOtro.php",$nombreOrganizacion);?>
    
</head>


<body>

<?php 

$string=array("19152977-4","19940449-0","8135176-7");



echo "<pre>";

for($i= 0;$i<3;$i++){



    $str=substr( str_replace("-","", $string[$i]),-4);

echo $str;
echo "<br>";

}
?>
<!--    content    -->

<?php $this->load->view("incluir/homeContenido.php",$nombreAutor);?>
    

<!--   footer     -->
<?php $this->load->view("incluir/footerOtro.php",$correo); ?>


<form action="">


    <input type="text" name="items[]">
    <input type="text" name="items[]">
    <input type="text" name="items[]">
    
</form>


</body>

</html>
