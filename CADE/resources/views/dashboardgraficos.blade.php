<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/newstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Hind" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-inverse">
	 <div class="container-fluid">
	  <div class="navbar-header">
	   <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
	    <span class="sr-only">Toggle navigation</span>
	     <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	       <span class="icon-bar"></span>
	        </button>
	         <a href="#" class="navbar-brand">Cambiando Destinos</a>
	          </div>
	           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
	            <ul class="nav navbar-nav">
	             <li class="active"><a href="#">Home</a>
	             </li> <li><a href="#" style="margin-left:920px;">Cerrar sesion</a>
	             <span></span></li>
	              </ul>
	               </div>
	                </div>
	                 </nav>
	<div class="side">
		<div class="list-group">
 		 <a href="#" class="list-group-item">Inicio</a>
 		 <a href="#" class="list-group-item ">Usuarios</a>
  		<a href="#" class="list-group-item">Registros</a>
  		<a href="#" class="list-group-item active ">Graficos</a>

	</div>
	</div>

	<div class="lefted" style="background-image:url('./img/back.jpg');">

		<div class="ws1">
				<canvas id="line-chart" style="width:100%; height:100%"></canvas>
		</div>
		<div class="ws2">
				<canvas id="bar-chart" style="width:100%; height:100%"></canvas>
		</div>
		<div class="ws1">
				<canvas id="radar-chart" style="width:100%; height:100%"></canvas>
		</div>
		<div class="ws2">
				<canvas id="pie-chart" style="width:100%; height:100%"></canvas>
		</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script src="./js/jquery-3.3.1.js"></script>
<script src="./js/Chart.bundle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		Chart.defaults.global.defaultFontColor = 'black';

new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
    datasets: [{
        data: [86,114,106,106,107,111,133,221,783,2478],
        label: "Ejido1",
        borderColor: "#3e95cd",
        fill: false
      }, {
        data: [282,350,411,502,635,809,947,1402,3700,5267],
        label: "San Buenaventura",
        borderColor: "#8e5ea2",
        fill: false
      }, {
        data: [168,170,178,190,203,276,408,547,675,734],
        label: "Casas Grandes",
        borderColor: "#3cba9f",
        fill: false
      }, {
        data: [40,20,10,16,24,38,74,167,508,784],
        label: "N.C.G",
        borderColor: "#e8c3b9",
        fill: false
      }, {
        data: [6,3,2,2,7,26,82,172,312,433],
        label: "Benito Juarez",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Cantidad de medicamento donado'
    }
  }
});


	// Bar chart
	new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["ejido1", "San Buenaventura", "Casas Grandes", "N.C.G", "Benito Juarez"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Cantidad de beneficiarios'
      }
    }
});
		new Chart(document.getElementById("radar-chart"), {
    type: 'radar',
    data: {
      labels: ["Ejido1", "San Buenaventura", "Casas Grandes", "N.C.G", "Benito Juarez"],
      datasets: [
        {
          label: "2014",
          fill: true,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "rgba(179,181,198,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(179,181,198,1)",
          data: [8.77,55.61,21.69,6.62,6.82]
        }, {
          label: "2017",
          fill: true,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          data: [25.48,54.16,7.61,8.06,4.45]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Distribucion de las donaciones'
      }
    }
});
		new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
		});
	</script>
</html>
