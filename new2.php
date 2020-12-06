<html>
	<head>
<title>Vashx</title>

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<style>



@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Handlee);
@font-face {
  font-family: my;
  src: url(/avs.ttf);
}
div {
  font-family: my;
}
:root{
   --fontfp: 'my';
    --ver: -24px;
    --ink: #16035c;
    --fontsz: 18px;
}

.console1{

			background: #4CAF50;
  border:solid 0px #009B1C;
			background: #4CAF50;
     text-align: center;
   display: inline-block;
  
       
}
.console2{

		width: 15%;
  padding: 5px 4px;
  margin: 2px 0;
  border-radius:50px;
  box-sizing: border-box;
  text-align: center;
  border: none;
  background-color: #CC3399;
  color: white;
  
       
}
.console3{

		width: 15%;
  padding: 5px 4px;
  margin: 2px 0;
  border-radius:50px;
  box-sizing: border-box;
  text-align: center;
  border: none;
  background-color: #ff6600;
  color: white;
  
       
}
body {
    margin: 40px 0 10;
    background: #91D1D3;
  
      /*Variables*/
  
   
    
    
}



.paper {
    position: relative;
    width: 90%;
    max-width: 770px;
    min-width: 770px;
    height: calc(11.7 * 770px / 8.3); /* A4 Ratio */
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    
   
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    width: 75px;

    background-size: 30px 30px;
    border-right: 2.5px solid #DB7093;
    box-sizing: border-box;
}
  .paper:after {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    width: 100%;
    top: 6.2%;
  

    background-size: 30px 30px;
    border-top: 2.5px solid #DB7093;
    box-sizing: border-box;
  
}

  

.paper-content {
    position: absolute;
    top: 40px; right: 0; bottom: 30px; left: 0px;
 
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}


  

.paper-content div {
 
  
  right: 0px; bottom: 30px; left:0px;
 
    
    
     
    line-height: 30px;
    padding: 0 8px;                               

    background: transparent;
  
    color: var(--ink); /*Ink color*/
  
    font-family: var(--fontfp); /*Font*/
  
    font-size: var(--fontsz); /*Font Size*/
  
    box-sizing: border-box;
    z-index: 1;
}

footer {
    margin-top: 30px;
    text-align: center;
    font-size: 12px;
    color: rgba(0,0,0,.6);
}
footer a {
    color: rgba(255,255,255,.8);
}

.editor
        {
       border: 0px inset grey;
      height: 100px;
      width: 720px;
      margin: var(--ver); 
         margin-left: 64px;
     
     
   
     
    
			border:solid 0px #ccc;
		
        }

        .sample-toolbar
        {
			border:solid 1px #009B1C;
			background: #4CAF50;
     text-align: center;
   display: inline-block;
  
      display: block;
       margin-left: auto;
       margin-right: auto;
           margin-top: 5%;
       
       width: 46%;
			padding: 5px;
          margin-bottom: 1.8%;
			border-radius:7px;
        }

        .sample-toolbar > span
        {
			cursor:pointer;
		}

        .sample-toolbar > span:hover
        {
			text-decoration:underline;
		}


/*Tooltip poup on hover*/
.tooltip {
  position: relative;

}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #2196F3;
  color: #fff;
  text-align: center;
  border-radius: 31px;
  padding: 6px 0;
  margin-bottom: 7px;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -60px;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}


</style>
<body>




<div class="sample-toolbar">
		<a href="javascript:void(0)" onclick="format('bold')"><span class="fa fa-bold fa-fw"></span></a>
  
		<a href="javascript:void(0)" onclick="format('italic')"><span class="fa fa-italic fa-fw "></span></a>
		<a href="javascript:void(0)" onclick="format('insertunorderedlist')"><span class="fa fa-list fa-fw"></span></a>
 <a class="tooltip"> <span class="tooltiptext">Text Color</span>
  <input class="console1" type="color" id="pen" value="#16035c">
  <a class="tooltip"> <span class="tooltiptext">Vertical Position</span>
   <input class="console2" type="float" id="verp" value="-24px">
    <a class="tooltip"> <span class="tooltiptext">Font Size</span>
   <input class="console3" type="float" id="fonts" value="28px">
	
</div>


<div class="paper">
      <div class="paper-content">
          
      <div class="editor"  contenteditable="true" id="sampleeditor">
	</div>
      
    </div>
</div>
    
<footer>
    Ins
</footer>
	
	
	
<script>
	
		window.addEventListener('load', function(){
			document.getElementById('sampleeditor').setAttribute('contenteditable', 'true');
			
        });

		function format(command, value) {
			document.execCommand(command, false, value);
		}

	
let pencolor = 
    document.getElementById('pen')
pencolor.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--ink',e.target.value)
})


let verpos = 
    document.getElementById('verp')
verpos.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--ver',e.target.value)
})

let fontz = 
    document.getElementById('fonts')
fontz.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--fontsz',e.target.value)
})

</script>	
