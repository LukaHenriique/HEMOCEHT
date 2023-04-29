
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cabeçalho{
	margin:0;
	height: 30px;
	line-height: 200%;
	width: 100%;
	padding:0;
	text-align: center;
	background-color: goldenrod;
}

.cabeçalho a{
    text-decoration: none;
}

*{
	margin:0;
	padding:0;
	color: azure;
	font-family:'Arial';
}


.doacaosangue{
	margin-top: -85px;
	height: 50px;
	color: #222;
	font-size: 30px;
	list-style: none;
	margin-left: 500px;
}

.menu{
	width:auto;
	height:50px;
	background-color: cadetblue;
	}

	.menu{
		border: 1px solid #222;
	}
	
.menu>ul{
	list-style:none;	
	position:relative;
	margin-left:50px;
	}
.menu ul li{
		width:150px;
		float:left;
	}

.menu a{
	padding:15px;
	display:block;
	text-decoration: none;
	background-color: cadetblue;
	text-align:center;
	}
.menu ul ul{
	list-style:none;
	position:absolute;
	visibility:hidden;
	
	}
.menu ul li:hover ul{
	visibility:visible;
	}
	
.menu a:hover{ /*cor do sensor do indicador do mouse  */
	background-color: black;
	}

.menu ul ul li{
	float:none;
	border-bottom: solid 1px #ccc;
	}
.menu ul ul li a{
	background-color:rgb(75, 194, 207);
	}
#bt_menu{
	display: none;
	}
label[for='bt_menu']{
	padding:5px;
	background-color:#222;
	color:#fff;
	font-family:'Arial';
	text-align:center;
	font-size:30px;
	cursor:pointer;
	display:none;
	width:50px;
	height:50px;
	}	
label[for='bt_menu']:hover{
	background-color:#f4f4f4;
	color:#aaa;
	}
@media (max-width: 800px) {

	.cabeçalho>ul{
		margin-left: 0;
	}

	.cabeçalho{
		margin-top: 5px;
	}

	.cabeçalho ul>li{
		width: 100%;
		float: 0;
	}
	.cabeçalho ul ul{
		position: static;
		overflow: hidden;
		max-height: 0;
		transition: all .4s;
	}

	.cabeçalho ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}

.menu{
	margin-left:-100%;
	transition:all .4s;
	}
label[for='bt_menu']{
	display:block;
	}
.menu>ul{
	margin-left:0;
	}
.menu{
	margin-top:5px;
	}
.menu ul li{
	width:100%;
	float:none;
	}
.menu ul ul{
	position:static;
	overflow:hidden;
	max-height:0;
	transition:all .4s;
	}
.menu ul li:hover ul{
	height:auto;
	max-height:200px;
	transition:all .4s;
	}
#bt_menu:checked ~ .menu{
	margin-left:0;
	}
}

.titulo{
	
	width: 100%;
	margin-left:auto;
	height: 140px;
	background-color: cadetblue;
}

h1{
	margin-left: 10%;
	line-height: 225%;

}


.button {
  margin-inline: 20px;
  width: 20%;
  text-align: 50%;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px 8px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-left: 150px;
}

.button a{
  text-decoration: none;
}

.button1  {
  background-color: white ; 
  color: black;
  border-left: 8px solid #4CAF50 ;
}

.button1:hover  {
  background-color:  #4CAF50 ;
  color: white  ;
  
  transition: all .4s;
}


.button2 {
  background-color: white; 
  color: black; 
  border-left: 8px solid #4CAF50;
}

.button2:hover {
  background-color:  #4CAF50;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border-left: 8px solid #4CAF50;
}

.button3:hover {
  background-color:  #4CAF50;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border-left: 8px solid #4CAF50;
}

.button4:hover {background-color:  #4CAF50;}

.button5 {
  background-color: white;
  color: black;
  border-left: 8px solid #4CAF50;
}

.button5:hover {
  background-color:  #4CAF50;
  color: white;
}

.button6{
  background-color: white; 
  color: black; 
  border-left: 8px solid #4CAF50;

}
.button7{
  background-color: white; 
  color: black; 
  border-left: 8px solid #4CAF50;

}
.button8{
  background-color: white; 
  color: black;
  border-left: 8px solid #4CAF50;
 
}
.button9{
  background-color: white; 
  color: black; 
  border-left: 8px solid #4CAF50;

}

.button6:hover{
	background-color:  #4CAF50;
  color: white;
}
.button7:hover{
	background-color:  #4CAF50;
  color: white;
}
.button8:hover{
	background-color:  #4CAF50;
  color: white;

}
.button9:hover{
	background-color:  #4CAF50;
  color: white;
}

h4{	
	padding: 8px 20px;
	text-align: left;
	
	background-color: white; 
    color: black;
    border-left: 8px solid #4CAF50;
	transition-duration: 0.4s;

	margin-left: 150px;
}

h5{
	padding: 8px 32px;
	text-align: left;
	background-color: white; 
    color: black;
    border-left: 8px solid #4CAF50;
	transition-duration: 0.4s;
	margin-left: 150px;
}



.salvavidas{
	padding: 2% 32px;
	text-align: left;
	margin-left: 120px;
}

.doarseguro{
	padding: 2% 32px;
	text-align: left;
	margin-left: 120px;
}

.titulo h6{
	width: 100%;
	height: 2px;
	background-color:#4CAF50;
}

.rodape{
	width: 100%;
	margin-top: 50px;
	
}

.rodape>ul{
	list-style: none;
	position: relative;
	margin-left: 150px;
	margin-right: 50px;
}
.rodape ul li{
	width: 250px;
	float: left;
}
.rodape a{
	text-decoration: none;
	text-transform: uppercase;
	color: rgb(94, 92, 92);
	text-align: center;
}
.rodape ul ul{
	list-style: none;
	position: absolute;	
}

.rodape ul ul li{
	float:none;
	color: #222;
}

.sede p{
	margin-top: 5px;
	color: #222;
}

.horarios p{
	margin-top: 5px;
	color: #222;
}

.imagem img{
	width: 100% ;
	height:400px;
	margin-top: 40px;
	
}

.videodoador iframe{
	width: 50%;
	height: 400px;
	margin-left: 10%;
	
	
	
}
</style>
</head>
<body>
    <input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>
<nav class="cabeçalho">
	<ul>
		<a href="https://www.hemocentro.unicamp.br/noticias/ministerio-divulga-nota-tecnica-com-mudancas-para-doadores-relacionadas-ao-covid/">
			CRITERIOS PARA DOADORES - <span style="color:red;font-weight:bold">COVID-19</span></a> <br>
	 </ul>
 </nav>

<nav class="menu">
	<ul>
    	<li> <a href="cadastro.php">cadastro</a></li>
          <li><a href="#">hemocentro</a>
        	<ul>
            	<li><a href="https://www.hemocentro.unicamp.br/">hemocentro Unicamp</a>
                <li><a href="https://www.boldrini.org.br/">hemocentro boldrini</a>
            </ul>
        </li>
        <li><a href="#">mais sites</a>
        	<ul class="submenu">
            	<li><a href="#">Doacoes</a>
                <li><a href="https://www.todamateria.com.br/">cultura</a>
            </ul>
        </li>
      
        <li><a href="loginTemplete.php">Doador</a></li>
    </ul>
 </nav>
<nav class="titulo">
<h1  style="font-size:60px; color: #222; font-family:Arial;" ><a style = "text-decoration:none;" href="index.php">HOMECE</a></h1>
 <ul>
	 <li class="doacaosangue">Doação de sangue</li>
</ul>
 <div class="imagem">
	<img src="https://www.hospitaldecruzilia.com.br/site/images/DOACAO%20DE%20SANGUE.jpg">
</div>

    <button class="button button1"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="criterios.html">
		CRITERIOS PARA DOAR</a></button>

	<button class="button button2"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="passo.html">
		PASSO PARA DOACAO</a></button>

	<button class="button button3"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="termo.html">
		TERMO PARA MENORES</a></button>




	


	<button class="button button4"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="locais.html">LOCAIS E HORARIOS PARA DOAR</a></button>
	<button class="button button5"><a style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold; " href="cuidados.html">CUIDADOS POS DOACAO DE SANGUE</a></button>
	<button class="button button6"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="">CALENDARIO DE COLETAS EXTERNAS</a></button>
	<button class="button button7"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="">POLITICA DE CAPTACAO DE DOADORES</a></button>
	<button class="button button8"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="">PROGRAMA DE FIDELIDADE DO HEMOCE</a></button>
	<button class="button button9"><a  style="font-size: 15px; color: rgb(90, 72, 72); font-weight: bold;" href="">DOADOR DE SANGUE RARO</a></button>

	<h4 style="font-size:35px; font-weight: lighter; color: rgb(77, 77, 77); font-family:Helvetica;" >Sua doação salva vidas</h4>
	<p class="salvavidas" style="font-size:15px; color: rgb(92, 92, 92); font-family:Helvetica;" >
		O sangue doado no Hemoce garante atendimento em cerca de 500 unidades de saúde na capital e no interior do Ceará, oferecendo serviço de qualidade e seguro para quem <br> 
		precisa de transfusão de sangue. A solidariedade da população cearense é essencial para ajudar a salvar vidas já que o sangue não tem nenhum substituto. A única forma de se <br> 
		conseguir sangue para uma transfusão é através da doação de pessoas que procuram o hemocentro espontaneamente. <br>
	    De acordo com dados do Ministério da Saúde, apenas 1,8% da população brasileira doa sangue. O ideal seria que esse índice subisse para pelo menos 3%. Com apenas uma <br>
		doação de sangue é possível beneficiar de três até quatro pessoas já que o sangue doado é dividido em diferentes componentes. <br>
        A doação de sangue deve ser voluntária, altruísta, anônima e não remunerada. Quem recebe pode ser um parente, um amigo ou um desconhecido, seja para quem for a atitude <br>
        solidária, o mais importante é que vidas são salvas com o gesto de amor ao próximo.

	<h5  style="font-size:35px ; font-weight: lighter; color: rgb(77, 77, 77); font-family:Helvetica;" >Doar sangue é seguro</h5>
	<P class="doarseguro" style="font-size:15px; color: rgb(93, 93, 93); font-family:Helvetica;">
		O HEMOCE zela pela saúde de seus doadores. A coleta é feita em ambiente limpo e todo o material utilizado é descartável, evitando qualquer possibilidade de contaminação. A <br>
		coleta é feita por uma equipe especializada e com acompanhamento médico. Antes da doação é feita uma avaliação clínica com exame físico, verificação do peso e realização de <br>
	    teste para anemia. <br>
		A doação não traz danos para o doador, já que o sangue doado é rapidamente reposto pelo próprio organismo. A quantidade de sangue coletada é de aproximadamente 460ml, <br>
	    ou seja, menos de 10% do volume em circulação no corpo. Logo após a doação o organismo começa a trabalhar para compensar a quantidade retirada, em 24 horas o volume <br>
	    será o mesmo e outros fatores e células do sangue estarão em níveis anteriores à doação em alguns dias.
	</P>
	</p> 
	<div class="videodoador" >
		<iframe  src="https://www.youtube.com/embed/97Sx0KiExZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<br><br>
	</div>

	<h6></h6>
	<nav class="rodape">
		<ul>
			<li><a style="font-size: 15px; font-weight: bold;" href="#">HEMOCE.SP.GOV.BR</a></li>
			  <li class="sede" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">SEDE DO HEMOCE</a>
				<ul>
                    <p style="font-size: 12px; font-family:Helvetica; " >AV. JOSÉ BASTOS <br> 3390 - RODOLFO TEÓFILO <br>CAMPINAS, SP <br>CEP: 13386663 <br>CONTATO: (19) 98987-7077</p><br><br><br>
				</ul>
			</li>
			<li class="horarios" ><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">HORARIOS DE ATENDIMENTO</a>
				<ul class="subrodape">
					<p style="font-size: 12px; font-family:Helvetica; " >07H AS 18:30 DE SEGUNDA A SEXTA<br>07H AS 17:30 AOS SABADOS</p>
				</ul>
			</li>	
			<li><a style="font-size: 12px; font-weight: bold; font-family: Helvetica;" href="#">NOSSOS CANAIS</a></li>
		</ul>
	 </nav>
 </nav> 
</body>
</html>