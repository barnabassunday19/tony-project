<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>LogIn and SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="flex&responsiveness.css">
</head>

<body>
    <div class="whole">
    <header>
        <div class="header">
            <p> 
    
                <a href="harddrive.html">Hard&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   </a>
        
               <a href="https://www.w3schools.com">Keyboard&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
        
                <a href="https://www.w3schools.com">Memory&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </a>
        
                <a href="chargingproblems.html">Charging&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </a> 
        
                <a href="monitorproblems.html">Monitor&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </a> 
        
            </p>
        </div>
    </header>
    <footer class="footer">

    </footer>
    <div class="container">
         <div class="box">
            <img src="banana.jpg"><br>
             <p>Aspirant 1</p>
            <button onclick="increasea1()">+Vote</button> 
<button onclick="decreasea1()">-Vote</button> 

<div id='meter'>
    <div id='progress1'></div> <br>
<input type="text" id="tb1"> 
</div>
    
     
    
    </div>
  
    <div class="box">
            <img src="banana.jpg"><br>
            <p>Aspirant 2</p>
            <button onclick="increasea2()">+Vote</button> 
<button onclick="decreasea2()">-Vote</button> 

<div id='meter'><div id='progress2'></div> <br>
<input type="text" id="tb2"> 
</div>
     
     
    
    </div>
   
    </div>
    <script>
           
           var value = 0, 
tb1 = document.getElementById("tb1"),
progress1 = document.getElementById("progress1"); 
function increasea1(){ 
  value = value + 1;
  if(value>=100) value = 100;
  tb1.value = value;     
  progress1.style.width = value + "%";
} 
function decreasea1(){ 
  value = value - 1;
  if(value<=0) value = 0;
  tb1.value = value; 
  progress1.style.width = value + "%";
} 

var value = 0, 
tb2 = document.getElementById("tb2"),
progress2 = document.getElementById("progress2"); 
function increasea2(){ 
  value = value + 1;
  if(value>=100) value = 100;
  tb2.value = value;     
  progress2.style.width = value + "%";
} 
function decreasea2(){ 
  value = value - 1;
  if(value<=0) value = 0;
  tb2.value = value; 
  progress2.style.width = value + "%";
} 


     
    
        </script>
</body>