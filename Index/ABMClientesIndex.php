<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.6">
    <script src="jquery-3.5.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <title>ABM de clientes</title>
    
    <style>
        body{
            background-color: #f7f6f6;
        }
        table{
           border-collapse: collapse;
            background-color: #0a4f70;
            color: white;
        }
        tr{
          color:white;
      }
      .nav.nav-pills li:last-child{float:right} 
    </style>

  </head>
  <body>
  <a class="navbar-brand btn btn-outline-primary" style="float: right; background-color: #e3f2fd;"href="index.php">Inicio</a>

  <a class="navbar-brand btn btn-outline-primary" style="float: right; background-color: #e3f2fd;" href="ABMClientesIndex.php">Refrescar</a> </div>
</nav>

 
<h1 class="page-header text-center  shadow-lg" style="background-color:#0a4f70; color:white; ">CARGA DE CLIENTES</h1>
<div class = "Contenedor mt-4 shadow-lg p-3 mb-5 bg-body rounded">
<table id="tablaArticulos" class= "table mt-2 table-bordered table-stripped">
        <thead>
                <th>ID</th>
                <th>Nombre de cliente</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Modificación</th>
        </thead>
        
        </div> 
<tbody>
     <a id= "btnAgregar" class="btnAgregar btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar</a>
<?php


$conn = mysqli_connect("127.0.0.1:3307", "root", "", "udi2021");
$com = "select * from clientes";
$result = $conn->query($com);


try{

    while($row = $result->Fetch_assoc()){


?>

<center>
        <tr>
            <td id="idclirow"><?php echo $row["id_cliente"];?></td>
            <td id="nomclirow"><?php echo $row["razon_social_cliente"]; ?></td>
            <td id="direclirow"><?php echo $row["direccion"]; ?></td>
            <td id="telclirow"><?php echo $row["telefono"]; ?> </td>
            <td>
            <style>
                .btn-space {
    margin-right: 5px;
}               
.btn-spacio {
    margin-left: 30px;
}
            </style>
            <button type="button" class="btnEditar btn btn-primary btn-space" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
            
            <button type="button" class="btnBorrar btn btn-danger btn-spacio" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Borrar </a>

            </td>
        </tr>
</center>
<?php
    }
    }catch(PDOException $e){
        echo "Hubo un problema en la conexión: " . $e->getMessage();
    }

?>

</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

<?php include('modalAgregarC.php'); ?>
<?php include('modalModificarC.php'); ?>
<?php include('modalBorrarC.php'); ?>

<script type="text/javascript">
modalModif = new bootstrap.Modal(document.getElementById('modalModificar'));
modalArt = new bootstrap.Modal(document.getElementById('modalArticulo'));
modalBor = new bootstrap.Modal(document.getElementById('modalBorrar'));

$(".btnEditar").click(function() {
    var $row = $(this).closest("tr");
    var $id = $row.find("#idclirow").text();
    var $nombre = $row.find("#nomclirow").text();
    var $direccion=$row.find("#direclirow").text();
    var $telefono =$row.find("#telclirow").text();
    

    document.getElementById('ache').value = $id;

    let nombremodal = document.getElementById('nomcliax')
    let direccionmodal = document.getElementById('direcliax')
    let telefonomodal = document.getElementById('telcliax')
    
    nombremodal.value = $nombre
    direccionmodal.value = $direccion
    telefonomodal.value = $telefono
    modalModif.show();
});

$(".btnAgregar").click(function() {

    modalArt.show();
});

$(".btnBorrar").click(function() {
var $rows = $(this).closest("tr");
var $ids = $rows.find("#idclirow").text();
document.getElementById('achex').value = $ids;
modalBor.show();

});


function crearArt() {
    nombremodal.value = ""
    direccionmodal.value = ""
    telefonomodal.value = ""
    modalArticulos.show()
}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>
<?php



$conn->close();
?>
