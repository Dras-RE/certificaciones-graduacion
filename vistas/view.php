<html>
	<head>
	  <link href="https://fonts.googleapis.com/css?family=Neuton&display=swap" rel="stylesheet">
	  
	  <link href="http://allfont.es/allfont.css?fonts=neuton-bold" rel="stylesheet" type="text/css" />
	  
	  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
	      
		<title>CERTIFICADO N° <?php echo $titulos->Num_Acta."-".$titulos->Anio?></title>
		<style>
			html,body{
			   
            font-family: 'Neuton', serif;
         font-size: 17px;
       
				padding: 2.5cm 3cm;
				margin: 0;
			
			}
			.p2 {
			    line-height: 80%;
			    
			}
			.pderecho {
                    padding-right: 40px;
                }
			
			.negrita{
			     font-family: 'Neuton Bold', arial;
			     font-size: 17px;
			}
				.encabezado{
			     font-family: 'Neuton Bold', arial;
			     font-size: 19px;
			     line-height: 80%;
			}
			.usuario{
			    font-family: 'Courgette', cursive;
			     font-size: 12px;
			}
			
			.texto-centrado{
				text-align: center;
			}
			.texto-justificado{
				text-align: justify;
			}
			.texto-izquierdo{
				text-align: left;
			}
			.texto-derecho{
				text-align: right;
			}
			xd{
			    
			}
			.espacio{
			   padding-left: 3.5cm;
			}
			.espacioD{
			   padding-left: 1cm;
			}
			


			
		</style>
	</head>


	<body>
		<br>
		<br>
		<p class="texto-centrado"><strong>No. <?php echo $numero;?>-<?php echo $year;?></strong></p>
		<br>
	
		<p class="texto-centrado encabezado">CERTIFICACIÓN DE  ACTA DE GRADUACIÓN <br>
	(NIVEL TÉCNICO) </p>
		
	
		 <?php date_default_timezone_set('America/Guatemala');?>

		<?php $meses = ['','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];?>
		<?php $fechaArray = explode("-", $titulos->FechaGraduacion);?>

		<p class="texto-justificado" style="text-indent:30">La infrascrita Coordinadora Académica del Centro Universitario de Sur Oriente de la Universidad de San Carlos de Guatemala,  <xd class="negrita">CERTIFICA:</xd>  tener a la vista el <xd class="negrita">Acta número <?php echo convertir($titulos->Num_Acta);?> guión <?php echo convertir($titulos->Anio);?> (<?php echo $titulos->Num_Acta."-".$titulos->Anio?>)</xd>,  folio número <?php echo convertir($titulos->NumeroFolio);?>, del Libro de Actas de Graduación número <?php echo convertir($titulos->LibroActaGrad);?>, en donde consta que (el/la) <?php echo $titulos->profesi;?> <xd class="negrita"><?php echo $titulos->nombre;?></xd>, sostuvo su examen de graduación, <xd class="negrita">el <?php echo convertir($fechaArray[2]);?> de <?php echo $meses[(int)$fechaArray[1]];?> de <?php echo convertir($fechaArray[0]);?> (<?php echo $fechaArray[2];?>/<?php echo $fechaArray[1];?>/<?php echo $fechaArray[0];?>)</xd>, habiéndosele conferido el Título Universitario a Nivel Intermedio de: <xd class="negrita"><?php echo  mb_strtoupper($titulos->carrera);?></xd>.
		 	</p>

		   <p style="text-indent:30" class="texto-justificado">  Se extiende la presente certificación, en Jalapa, a <?php echo convertir(date("d")) . " días del mes de " . $meses[(int)date("m")] . " del año " . convertir(date("Y"));?>.
	  	</p>
			<p class="texto-centrado">“Id y enseñad a todos”</p>
<br>

		<p class="texto-derecho p2">f) ___________________________________ <br>
		
		 <xd class="espacioD"> M.A. Hilda Gissela Ortiz Cruz </xd>  <br>
	  <xd class="espacio">       Coordinadora Académica a.i. </xd>  </p>
<br>
	<p class="texto-izquierdo p2">
			Vo.Bo. <br>
			<xd class="espacioD"> 
			f)___________________________________</xd> <br>
		<xd class="espacioD"> Lic. Edwin Wilfredo Contreras Cardona</xd> <br>
        <xd class="espacio"> Director</xd> </p>

<br>

	<p class= "usuario"> /<?php echo $this->session->userdata("NombreUsuario")?></p>
</body>
</html>
