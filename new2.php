<html>
<title>Vashx</title>
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
  

body {
    margin: 40px 0 0;
    background: #91D1D3;
  
      /*Variables*/
  
    --fontfp: 'my';
    --ver: 37px;
    --ink: #16035c;
    --fontsz: 28px;
    
    
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
    top: 5.3%;
  

    background-size: 30px 30px;
    border-top: 2.5px solid #DB7093;
    box-sizing: border-box;
  
}

  

.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 0px;
 
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}

.paper-content textarea {
  position: absolute;
  top: var(--ver); /*Vertical Position*/
  right: 0; bottom: 30px; left: 65px;
 
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 15px;                               
    border: 0;
    outline: 0;
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




</style>
<body>


<div class="paper">
    <div class="paper-content">
        <textarea autofocus>Hello world !&#10;Here you can write.</textarea>
    </div>
</div>
    
<footer>
   Vashishth @ VashX
</footer>