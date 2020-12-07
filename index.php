<html>
<head><title>Vashx</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
   --fontfp: my;
    --ver: -24px;
    --ink: #16035c;
    --fontsz: 18px;
    --spac: 0px;
   --lspac: 0px;
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
.console4{

		width: 15%;
  padding: 5px 4px;
  margin: 2px 0;
  border-radius:50px;
  box-sizing: border-box;
  text-align: center;
  border: none;
  background-color: #00bfff;
  color: white;
}
.console5{

		width: 15%;
  padding: 5px 4px;
  margin: 2px 0;
  border-radius:50px;
  box-sizing: border-box;
  text-align: center;
  border: none;
  background-color: #d92626;
  color: white;
}
.console6{

		
  padding: 5px 52px;
  margin: 0px 40x;
  margin-top: -65px;
  height : 52px;
  float: right;
  
 
 
  color: white;
}









body {
    margin: 40px 0 10;
    background: #91D1D3;
  
      /*Variables*/ 
    
}

.space {
  word-spacing: var(--spac);
  letter-spacing: var(--lspac);
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
      height: 600px;
      width: 720px;
      margin: var(--ver); 
         margin-left: 68px;
     
     
   
     
    
			
		
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
       
       width: 56%;
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

/*Drop Down*/
.dropbtn {
  background-color: #cc99ff;
  border-radius:50px;
  width: 100%;
  color: white;
  padding: 5px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}



.dropdown-content a {
  color: black;
  padding: 1px 1px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ff99e6}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}





/*speech*/

.span2 {
  float: right;
  padding-right: 2.5%;
  
  font-size: 10;
  font-family: 'Trebuchet MS', sans-serif;
  line-height: 20%;
}




</style>



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
       <a class="tooltip"> <span class="tooltiptext">Font</span>
  <div class="dropdown">
  <select id="fonttype" class="dropbtn">
  <option value="'my'">My</option>
  <option value="'handlee'">Handlee</option>
  </select>
</div>
  
         
<a class="tooltip"> <span class="tooltiptext">Word Spacing</span>
   <input class="console4" type="float" id="spc" value="0px">
 <a class="tooltip"> <span class="tooltiptext">Letter Spacing</span>
   <input class="console5" type="float" id="lspc" value="0px">
    
   
   
	
</div>

  <img onclick="runSpeechRecognition()"  src="http://projtex.herokuapp.com/mic.png" class="console6" />
   &nbsp; <span class="span2" id="action"></span>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  <script>function doCapture(){
      html2canvas(document.getElementById("paper")).then(function(canvas){console.log(canvas.toDataURL("image/jpeg",0.9));
        
      });
      
    }
  </script>
  <button onclick="doCapture();">Capture</button>
	
	
	
<section id="paper"> 	
<div class="paper">
      <div class="paper-content">
          
      <div class="editor space"  contenteditable="true" id="sampleeditor">
	</div>
      
    </div>
</div>
</section>	
	
	
	
    <div id="acc" class="sample-toolbar" ></div>
<footer>
  ir
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

let fonttp = 
    document.getElementById('fonttype')
fonttp.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--fontfp',e.target.value)
})


let spce = 
    document.getElementById('spc')
spce.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--spac',e.target.value)
})

let lspce = 
    document.getElementById('lspc')
lspce.addEventListener('change',(e)=>{
  console.log(e.target.value)
  document.documentElement.style.setProperty('--lspac',e.target.value)
})



/* Text to speech */
		    function runSpeechRecognition() {
		        // get output div reference
		        var sampleeditor = document.getElementById("sampleeditor");
            //get accuracy below
          var acc = document.getElementById("acc")
		        // get action element reference
		        var action = document.getElementById("action");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    action.innerHTML = "<small>listening...</small>";
                };
                
                recognition.onspeechend = function() {
                    action.innerHTML = "<small>stopped listening.</small>";
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    sampleeditor.innerHTML =  transcript 
                   acc.innerHTML = "<br/> <b>Speech Accuracy:</b> " + confidence*100+"%";
                    sampleeditor.classList.remove("hide");
                };
              
                 // start recognition
                 recognition.start();
	        }



</script>


</html>
