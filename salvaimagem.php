<?php
include("conexaoBD.php");
$stmt = $pdo->prepare("select imagem  from user where idUser=6");
 $stmt->execute();
 $a = $stmt->fetch(PDO::FETCH_ASSOC);

 $image_src = $a['imagem'];
 
?>
<div style="width: 250px; height: 250px;">
<img style="width: 250px; height: 250px;" src='<?php echo $image_src; ?>' >
</div>
