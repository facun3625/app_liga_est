<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
			<title>Posiciones</title>	
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>		


  <!--fin agregado-->
<link rel="stylesheet" href="css/styleRes.css" />
<!--<link rel="stylesheet" href="../css/cssRes.css" />-->

<style type="text/css">
	#box-resultados-competicion {
	font-size:14px;
	color:#434a54;
	font-family:'Open Sans',sans-serif;
	font-weight:300;
	line-height:1.4;
	background-color:whitesmoke;
	background-size:cover;
	overflow-x:hidden
}
#box-resultados-competicion2 .item {padding: 5px;}
#box-resultados-competicion2 {
	width:100%;
	float:left
}

#box-resultados-competicion2 .partido {
	position:relative;
	min-height:30px;
	width:100%;
	font-size:14px;
	line-height:30px
}
#box-resultados-competicion2 .partido.linea_par {
	background:#ECF0F1
}
#box-resultados-competicion2 .partido .link-partido {
	padding:0 2%;
	text-decoration:none;
	color:#434a54;
	box-sizing:border-box;
	display:block;
	float:left;
	width:100%
}
#box-resultados-competicion2 .partido .link-partido:hover {
	cursor:pointer;
	background:#BDC3C7
}
#box-resultados-competicion2 .partido .link-partido.por-determinar:hover {
	cursor:default;
	background:none
}
#box-resultados-competicion3 .partido .fecha {
	float:left;
	width:25%;
	text-align:right;
	display:block;
	min-height:5px
}
#box-resultados-competicion3 .partido .fecha span {
	display:block;
	float:left
}
#box-resultados-competicion3 .partido .fecha .letra {
	font-weight:bold;
	width:12px;
	font-size:12px;
	text-align:center
}
#box-resultados-competicion3 .partido .fecha .dia {
	width:80px;
	text-align:right
}
#box-resultados-competicion3 .partido .fecha .hora {
	font-weight:bold;
	width:50px;
	text-align:right
}
#box-resultados-competicion3 .partido .equipos-resultados {
	float:left;
	position:relative;
	width:50%
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo {
	float:left;
	min-width:140px;
	box-sizing:border-box;
	width:50%
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.local {
	padding-right:25px
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.local .escudo_comun,#box-resultados-competicion .partido .equipos-resultados .equipo.local img {
	float:right;
	margin:2px 5px 0 5px;
	box-sizing:border-box
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.local span {
	float:right
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.local .team {
	margin-right:2px;
	max-width:142px;
	overflow:hidden;
	text-overflow:ellipsis;
	white-space:nowrap
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.visitante {
	padding-left:25px
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.visitante .escudo_comun,#box-resultados-competicion .partido .equipos-resultados .equipo.visitante img {
	float:left;
	margin:2px 5px 0 5px;
	box-sizing:border-box
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.visitante span {
	float:left
}
#box-resultados-competicion3 .partido .equipos-resultados .equipo.visitante .team {
	margin-left:2px;
	max-width:142px;
	overflow:hidden;
	text-overflow:ellipsis;
	white-space:nowrap
}
#box-resultados-competicion3 .partido .equipos-resultados .hora-resultado {
	position:absolute;
	left:50%;
	margin-left:-25px;
	display:block;
	width:50px;
	text-align:center
}
#box-resultados-competicion3 .partido .equipos-resultados .hora-resultado .horario-partido {
	font-size:16px;
	letter-spacing:2px
}
#box-resultados-competicion3 .partido .equipos-resultados .hora-resultado .horario-partido.enjuego {
	color:#00AB00
}
#box-resultados-competicion3 .partido .otros {
	width:25%;
	display:block;
	float:right;
	position:relative
}
#box-resultados-competicion3 .partido .otros .tv {
	position:relative;
	width:100%;
	text-align:left;
	font-size:13px;
	box-sizing:border-box;
	display:block;
	overflow:hidden;
	white-space:nowrap;
	text-overflow:ellipsis
}
#box-resultados-competicion3 .partido .otros .tv .pixel-webtv {
	float:left;
	display:block;
	width:35px;
	height:25px;
	margin-right:5px
}
#box-resultados-competicion3 .partido .player-laligatv {
	display:block;
	position:absolute;
	width:35px;
	height:25px;
	right:27%;
	margin-right:-35px
}
#box-resultados-competicion3 .partido .tooltip-jornada {
	right:5px;
	top:3px;
	position:absolute;
	color:#dc0000;
	height:auto;
	width:auto
}
.sprite-escudos-xs {
	position:relative;
	top:5px;
	float:none;
	display:inline-block
}
</style>


	</head>
	
	<body>

<style type="text/css">
	li div{
  float: left;
  margin: 0 20px;
}
.dere {
float: right;
  
}
</style>



<?php include('panel/includes/conn.php');  
$tabla_posiciones = "posiciones";
$tabla_fixture = "fixture";
$zona='2b';
?>

<style type="text/css">
.box1 {
  display: inline-block;
  width: 30%;  
  font-size: 12px;
  font-family: 'Open Sans',sans-serif
}
.box1 p{
  text-align: left;
  font-size: 11px;
  color: #434a54;
}
.box2 {
	text-align: center;
  display: inline-block;
  width: 30%;  
  font-size: 30px;
  font-family: 'Open Sans',sans-serif;
}
.box2 p{
  text-align: center;
  font-size: 11px;
  color: #434a54;
}
.box3 {
  display: inline-block;
  text-align: right;
  width: 30%;  
    font-size: 12px;
    font-family: 'Open Sans',sans-serif
}
.box3 p{
  text-align: right;
  font-size: 11px;
  color: #434a54;
}
</style>

<div class="col-md-4 list-group">

	<div class="list-group-item">
		<div class="box1"><p>16/03/2017</p>Sanjustino</div>
		<div class="box2"><img src="http://www.ligasantafesinadefutbol.com/imagenes/escudos/e_Colon.jpg" width="25px"/> 5-3 <img src="http://www.ligasantafesinadefutbol.com/imagenes/escudos/e_Union.jpg" width="25px"/></div>
		<div class="box3"><p>22.30hs</p>Union</div>
	</div>

<div class=" list-group-item">
	<div class="box1">Equipo</div>
	<div class="box2">Resultado</div>
	<div class="box3">Equipo</div>
</div>
</div>
</div> 



  <div class="col-md-6">
	<table class="table table-hover table-condensed table-striped ">
		<thead>
		  <th>#</th>
		  <th></th>
		  <th>Equipo</th>
		  <th>Pts</th>
		  <th>PJ</th>
		  <th>PG </th>
		  <th>PE </th>
		  <th>PP </th>
		  <th>Gf</th>
		  <th>Gc</th>
		  <th>Dif</th>
		</thead>
		<tbody>
		<?php 


		$i=1;
		$sql= sprintf("SELECT * FROM $tabla_posiciones WHERE zona = '%s' ORDER BY pts DESC", $zona);
		if(!$resultado = $mysqli->query($sql)){
		    die('There was an error running the query: ver pos [' . $mysqli->error . ']');
		}
		while($row = $resultado->fetch_assoc()){

		  echo "<tr class='small'><td>".$i."</td><td><img src='".$row['equipo_escudo']."' width='15px'/></td><td>".utf8_encode($row['equipos'])."</td><td>". $row['pts'] ."</td><td>". $row['j'] ."</td><td>". $row['g'] ."</td><td>". $row['e'] ."</td><td>". $row['p'] ."</td><td>". $row['gf'] ."</td><td>". $row['gc'] ."</td><td>". $row['dif'] ."</td></td></tr>";
		  $i++;
		}

		?>
		</tbody>
	</table>

  </div>


<div class="col-md-4">


        <!--<div class="cabecera-seccion"><span class="titulo">Resultados</span>
    		<div id="fecha_jornada" class="box_fecha_jornada_bbva ">
                <span>Jornada 27</span>
            </div>
        </div>    
        -->
        <div>Resultados Fecha 1</div>
        

 <div class="list-group">
<?php 
$sql2= sprintf("SELECT * FROM $tabla_fixture WHERE res_zona = '%s' AND res_fecha = 1 ORDER BY res_p_nro ASC", $zona);
		if(!$resultado2 = $mysqli->query($sql2)){
		    die('There was an error running the query: ver res [' . $mysqli->error . ']');
		}
		while($row2 = $resultado2->fetch_assoc()){

?>

	<div class="list-group-item">
		<div class="box1"><p><?php echo $row2['res_dia'];?></p><?php echo $row2['res_equ_1'];?></div>
		<div class="box2"><img src="<?php echo 'imagenes/escudos/e_'.$row2['res_equ_1'].'.jpg';?>" width="25px"/> 5-3 <img src="<?php echo 'imagenes/escudos/e_'.$row2['res_equ_2'].'.jpg';?>" width="25px"/></div>
		<div class="box3"><p><?php echo $row2['res_hora'];?>hs</p><?php echo $row2['res_equ_2'];?></div>
	</div>



      
   <?php }
   ?>     
  </div>  




</div>









	</body>
</html>