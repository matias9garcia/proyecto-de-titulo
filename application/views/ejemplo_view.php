<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $this->load->view("componentes/jQuery_view");?>


    <title>Document</title>
</head>
<body>
<div id="div1">

a

</div>


<div id="div2">

b

</div>

<script>
$("#div1").click(function(){
  $(this).hide();
});


</script>
    
</body>
</html>