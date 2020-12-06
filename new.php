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
    font-family: 'Roboto', sans-serif;
}

.paper {
    position: relative;
    width: 90%;
    max-width: 770px;
    min-width: 770px;
    height: 1000px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    
   
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    width: 65px;

    background-size: 30px 30px;
    border-right: 2px solid #D44147;
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
    top: 30px; right: 0; bottom: 30px; left: 62px;
 
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;                               
    border: 0;
    outline: 0;
    background: transparent;
    color: #16035c;
    font-family: 'my';
    font-size: 32px;
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
   Vashishth @ Vashx
</footer>
