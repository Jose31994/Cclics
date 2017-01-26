//window.onload = onReady;
		
		var can;
		var ctx;		
		var img;
		//alert(division);
		var divimagen;
		var times =1;//1= 2 piezas que se rebvelven
		var tamano =250;
		var blockSize;
		var aleatorio1;
		var aleatorio2;
		var clickX;
		var clickY;
		var selected1;
		var selected2;
		var piecesArray = new Array();
		var correctOrder = new Array();
		var timeSet;
		var tiempo;
		var tiempo2;
		var ruta;
		var edad2;
	var experiencia;
		//alert(division);
		
		
		function onReady()
		{
			terminado = 0;
		 blockSize = tamano/divimagen;
			
			can = document.getElementById('myCanvas');
			ctx = can.getContext('2d');
			
            img = new Image();
			img.onload = onImage1Load;
			img.src = ruta;		
		}
		
		
		
		function onImage1Load()
		{
			var r;
			for(var i = 0; i < divimagen; i++)
			{
				for(var j = 0; j < divimagen; j++)
				{
					r = new Rectangle(i * blockSize, j * blockSize, i*blockSize + blockSize, j * blockSize + blockSize);
					piecesArray.push(r);
					correctOrder.push(r);
				}				
			}
			
			scrambleArray(piecesArray);//---------------------
			drawImage();
		}
	
	
	
	
		function onCanvasClick(evt)
		{
			if (terminado==0)
			{
			clickX = evt.offsetX;
			clickY = evt.offsetY;
			
			var drawX = Math.floor(clickX / blockSize);
			var drawY = Math.floor(clickY / blockSize);
			
			var index = drawX * divimagen + drawY;//-------------

			//alert (index);


			//if(index==aleatorio1 || index==aleatorio2)
			//{


			var targetRect = piecesArray[index];
			var drawHighlight = true;
			
			drawX *= blockSize;
			drawY *= blockSize;
			
			ctx.clearRect(0, 0, tamano, tamano);
			
			if(selected1 != undefined && selected2 != undefined)
			{
				selected1 = selected2 = undefined;
			}
			
			if(selected1 == undefined)
			{
				selected1 = targetRect;
			}
			else
			{
				selected2 = targetRect;
				//aqui se valida si los seleccionados son los correctos
				swapRects(selected1, selected2);
				drawHighlight = false;
			}
			
			drawImage();
			
			if(drawHighlight)	
				highlightRect(drawX, drawY);
				
			//}

			}//if de comprobacion de piezas correctas

		}
		
		function highlightRect(drawX, drawY)
		{
			console.log(drawX, drawY);
			ctx.beginPath();
			ctx.moveTo(drawX, drawY);
			ctx.lineTo(drawX + blockSize, drawY);
			ctx.lineTo(drawX + blockSize, drawY + blockSize);
			ctx.lineTo(drawX, drawY + blockSize);
			ctx.lineTo(drawX, drawY);

                        ctx.lineWidth = 2;

			// set line color
			ctx.strokeStyle = "#ff0000";
			ctx.stroke();
		}
		
		function swapRects(r1, r2)
		{
			var index1;
			var index2;
			var temp = r1;
			
			index1 = piecesArray.indexOf(r1);
			index2 = piecesArray.indexOf(r2);
			
			piecesArray[index1] = r2;
			piecesArray[index2] = temp;			
			
			checkWinner();
		}
		
		function checkWinner()
		{
			var match = true;
			
			for(var i = 0; i < piecesArray.length; i++)
			{
				if(piecesArray[i] != correctOrder[i])
				{
					match = false;
				}
			}
			
			if(match)
			{
				//console.log('complete');
				Example1.Timer.stop();

				//alert("detengo");
				concluir();
			}
			else
			{
				cargar('#clics','Clics.php');
//				console.log('not complete');

			}
		}


function concluir()
{

	Example1.Timer.stop();
	tiempo = min.toString() + ":" + sec.toString() + ":" + hundredths.toString();

	tiempo3= ('0:06:00');
	//alert (tiempo3);
  //if (tiempo < tiempo3)
//	{
//		alert (tiempo);
//	}
	CompararHoras(tiempo, tiempo3)


}


function CompararHoras(sHora1, sHora2) {

	var arHora1 = sHora1.split(":");
	var arHora2 = sHora2.split(":");

	// Obtener horas y minutos (hora 1)
	var hh1 = parseInt(arHora1[0],10);
	var mm1 = parseInt(arHora1[1],10);

	// Obtener horas y minutos (hora 2)
	var hh2 = parseInt(arHora2[0],10);
	var mm2 = parseInt(arHora2[1],10);

	// Comparar
	if (hh1<hh2 || (hh1==hh2 && mm1<mm2))
	{
		//alert("se resolvio en menor");
		terminado=1;

		document.getElementById('segundo').style.display = 'none';
		$('#enviar2').fadeIn("slow");
		//$('#obtain').fadeIn("slow");



		//$('#segundo').fadeout("slow");
		//document.getElementById('obtain').style.display = 'block';


		//return "sHora1 MENOR sHora2";
	}
	else if (hh1>hh2 || (hh1==hh2 && mm1>mm2))
	{

		cargar('#clics','Clics.php');
				//return "sHora1 MAYOR sHora2";
	//alert("se paso");
	}
	else
		cargar('#clics','Clics.php');
	//alert("algo anda mal");
		//return "sHora1 IGUAL sHora2";
}




function reinicia()
{


	for ( var i = 0, l = correctOrder.length, piecesArray = []; i < l; i++ ) {
		piecesArray[ i ] = correctOrder[ i ];
	}

	can = undefined;
	ctx = undefined;
	img = undefined;
	divimagen = undefined;

	//times =1;
	blockSize = undefined;
	clickX = undefined;
	clickY = undefined;
	selected1 = undefined;
	selected2 = undefined;
	timeSet = undefined;
	terminado = undefined;

	delete times;

	delete aleatorio1;
	delete aleatorio2;
	aleatorio1 = undefined;
	aleatorio2=undefined;


}

function cargar(div, desde)
{

reinicia();

//	piecesArray = correctOrder;
	AltoSet();
	// reinicia();
	$(div).load(desde);
}

function AltoSet(){
	clearInterval(timeSet);
}





		function redireccionar(){
  			//window.location=             "http://www.tizimin.uady.mx/";
			Example1.Timer.toggle();
			Example1.Timer.stop();
			terminado=1;
			ocultar();
            mostrar3();
			document.getElementById('enviar2').disabled=false;
			//AltoSet();
		} 
		
		
		function drawImage()
		{
			for(var k = 0; k < divimagen; k++)
			{
				for(var l = 0; l < divimagen; l++)
				{
					r = piecesArray[k*divimagen+l];		//-------------------			
					ctx.drawImage(img, r.left, r.top, r.width, r.height, k*blockSize, l*blockSize, blockSize, blockSize);
				       //se dibujan las lineas divisiorias
                            ctx.strokeRect(k*blockSize, l*blockSize, blockSize,blockSize);
                        }
			}
		}
		
		function scrambleArray(ar)
		{
			var count = 0;
			var temp;


			if (aleatorio1 == null)
			{
			while(count < 1)
			{
				aleatorio1 = Math.floor(Math.random()*piecesArray.length);
				do{
				aleatorio2 = Math.floor(Math.random()*piecesArray.length);
				}while(aleatorio1===aleatorio2);
				
				//alert(aleatorio1);
				//alert(aleatorio2);

				temp = piecesArray[aleatorio1];
				piecesArray[aleatorio1] = piecesArray[aleatorio2];
				piecesArray[aleatorio2] = temp;
				
				count++;
			}
			}
		}
		
		function Rectangle(left, top, right, bottom)
		{
			this.left = left;
			this.top  = top;
			this.right = right;
			this.bottom = bottom;
			
			this.width = right - left;
			this.height = bottom - top;
		}
		
		function isCanvasSupported()
		{
		  var elem = document.createElement('canvas');
		  return (elem.getContext && elem.getContext('2d'));
		}
		
		
		function verificar()
		{
			if(terminado==1)
			{
				terminado=3;

								//Example1.Timer.toggle();
								Example1.Timer.stop();
								//alert("Metodo De autentificacion Resuelto correctamente");
                                //muestrapretercero();
								tiempo = min.toString() + ":" + sec.toString() + ":" + hundredths.toString();
								//AltoSet();
								//alert(min);
								//alert(edad2);
								document.getElementById("edad2").value=edad2;
								document.getElementById("experiencia").value=experiencia;
								document.getElementById("divisiones").value=divimagen;
								document.getElementById("tiempoOCR").value=tiempo;
								
			}
                        else
                        {
                            //alert("La autentificacion es incorrecta.");
                            //mostrar2();
                            //ocultar();
                            //AltoSet();
                            //cargar('#divtest', 'CAPTCHA.php')  
							 window.location.reload();  
                    }
		}
		
		
function mostrar1(){
document.getElementById('oculto1').style.display = 'block';
alert("ya muestra");
}

function ocultar(){
document.getElementById('oculto').style.display = 'none';
}

function ocultar2(){
document.getElementById('oculto2').style.display = 'none';
}

function mostrar2(){
document.getElementById('oculto2').style.display = 'block';
}

function mostrar3(){
document.getElementById('oculto3').style.display = 'block';
}


function InciaTime(){
  timeSet = setInterval("cargar('#divtest', 'CAPTCHA.php')" ,6000);
}





function campolleno1(rutaphp)
{
	ruta =rutaphp;
	//alert(ruta);
	

			
			//muestrapresegundo();
	muestrasegundo()

}

function muestrapresegundo(){
document.getElementById('presegundo').style.display = 'block';
document.getElementById('segundo2').style.display = 'block';
document.getElementById('primero').style.display ='none';
document.getElementById('enviar2').disabled=true;

}


function muestrasegundo(){
document.getElementById('presegundo').style.display = 'none';
document.getElementById('segundo').style.display = 'block';

captchaOCR();
}


function muestrapretercero(){
document.getElementById('pretercero').style.display = 'block';
document.getElementById('tercero2').style.display = 'block';
//document.getElementById('segundo').style.display ='none';
//document.getElementById('segundo2').style.display ='none';
document.getElementById('enviar3').disabled=true;
	
}


function muestratercero(){
	
document.getElementById('pretercero').style.display = 'none';
document.getElementById('tercero').style.display = 'block';
Example2();
//captchaNoOCR();
}




function aleatorio(inferior,superior){ 
       var resAleatorio = Math.floor((Math.random() * (superior - inferior + 1)) + inferior);
      return resAleatorio;
}



function captchaOCR(){
	
	//divimagen = aleatorio(4,5);
	divimagen=5;
	onReady();
	Example1();
	//InciaTime()
	}
	
	
	
	function verificar2()
	{
		
		Example2.Timer.stop();
		tiempo2 = min.toString() + ":" + sec.toString() + ":" + hundredths.toString();
		document.getElementById("tiempoNOOCR").value=tiempo2;
		
	}
	
	function finalizar()
	{
		//window.location="Prueba_terminada.php";
		
		//window.location='Prueba_terminada.php?tiempoNOOCR=" <?php echo $tiempoNOOCR; ?>"';
		//document.FinalF.submit(); 
		alert("felicidades");
		document.getElementById('pretercero').style.display = 'none';
		document.getElementById('tercero2').style.display = 'none';
		document.getElementById('tercero').style.display = 'none';
	    document.getElementById('finalizacion').style.display = 'block';
	}
	
	
	function listop()
	{
	  alert("listo");
		document.getElementById('pretercero').style.display = 'none';
		document.getElementById('tercero2').style.display = 'none';
		document.getElementById('tercero').style.display = 'none';
	}