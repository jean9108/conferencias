<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
<br/><br/><br/>
<?php  
include 'conexion.php';
$query = "SELECT * FROM conferencias INNER JOIN empresas ON conferencias.EmpresaIDFK = empresas.EmpresaID  WHERE EstadoConf=0 ORDER BY Orden ASC, Lugar ASC, HoraInicio ASC";
$result = mysql_query($query, $link); 
?>
<?php
      while($row =  mysql_fetch_array($result)){ 
?>
<div class="row" style="">
    <div class="col-sm-1 image"> 
        <img src="<?php echo $row['UrlLogo'];?>" alt="<?php echo $row['NombreEmpresa'];?>" > 
    </div>
   <div class="col-sm-2 empresa"> 
        <br/>
        <p  id = "title"> <b><?php echo $row['Lugar'];?></b></p>
        <p id = "fecha"><?php echo $row['FechaConferencia'];?></p>
        <p><?php echo $row['HoraInicio'];?> - <?php echo $row['HoraFin'];?></p>
   </div>

    <div class="col-sm-7 desc">
      <br/>
      <p id = "title"><?php echo $row['NombreConferencia'];?></p>
      <p><?php echo $row['Conferencista'];?> <br/>
        <span style="font-size:0.9em"><?php echo $row['CargoConferencista'];?></span>
      </p>
      <p id ="desc"><em><?php echo $row['DescripConferencia'];?></em></p>
   </div>
</div> 

<?php
}
?>
</body>
</html>