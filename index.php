<html>
	<head>
<script language='JavaScript' type='text/JavaScript'>
first3=24;var fifteenth=0, sixteenth=0, seventeenth=0, eighteenth=0, nineteenth=1, twentieth=0, first2, second2;second3=first3+6; third3=first3+second3; fourth3=first3+second3+third3; fifth3=fourth3/third3*first3; sixth3=third3*first3/12*second3; seventh3=first3+second3/fifth3-16*fourth3; eighth3=sixth3*(first3-5)/third3+fourth3; ninth3=eighth3/seventh3+first3*third3-fourth3;tenth3=(ninth3+first3/third3*fourth3+second3*fifth3)/sixth3+eighth3-ninth3-1;eleventh3=Math.floor(tenth3)   ;twelfth3=eleventh3-60;
function third2(value){ document.form1.fourth2.value = value; fifteenth = twelfth3, sixteenth    = twelfth3, seventeenth  = twelfth3, eighteenth = twelfth3; nineteenth  = 1; twentieth  = twelfth3;}
function fifth2(sixth2){ first2 = 1; 
if(seventeenth || nineteenth) {   seventeenth = twelfth3;   nineteenth = twelfth3;   second2 = sixth2; } {   
if (second2.indexOf(".")!=-1) {      first2=twelfth3;   } }}
function fifteenth3(sixteenth3,seventeenth3){second2 = document.form1.fourth2.value;
if(seventeenth3=='.') {  fifth2('0');  
if(first2==1) {     second2 += seventeenth3;    document.form1.fourth2.value = second2;    twentieth = twelfth3;  }}
if(sixteenth3>=twelfth3 && sixteenth3<=9)  {  fifth2('');  
if(second2==twelfth3 && first2==1) second2='';  second2 += sixteenth3;  document.form1.fourth2.value = second2;  twentieth = 1;}
if(seventeenth3=='-' || seventeenth3=='+' || seventeenth3=='/' || seventeenth3=='*') { 
if(seventeenth) sixteenth = seventeenth3; 
else {   
if(!eighteenth) {     sixteenth = seventeenth3;     fifteenth = second2;     eighteenth=1;   }   
else {     fifteenth = eval(fifteenth + sixteenth + second2);     sixteenth = seventeenth3;     document.form1.fourth2.value = fifteenth;   }   twentieth=twelfth3;   seventeenth = 1; }}
if(seventeenth3=='1/x' ) { fifteenth = eval(1 / second2) ; third2(fifteenth); }
if(seventeenth3=='sqrt') { fifteenth = Math.sqrt(second2); third2(fifteenth); }
if(seventeenth3=='exp' ) { fifteenth = Math.exp(second2) ; third2(fifteenth); }
if(seventeenth3=='+/-')  document.form1.fourth2.value = eval(-second2);
if(seventeenth3=='=' && twentieth && sixteenth!='0') third2(eval(fifteenth + sixteenth + second2));
if (seventeenth3=='C') third2(twelfth3);
if(document.form1.fourth2.value[0] == '.')  document.form1.fourth2.value = '0' + document.form1.fourth2.value;}
</script>


	<title>E-banking</title>
	<style>
    .container{
	width: 360px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}

p{
	font-family: sans-serif;
	font-weight: bold;
	font-size:  20px;
}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	background-color: #428BCA;
	text-align: center;
	color: white;
	font-family: verdana;
	text-decoration: none;
}
button:hover {
  background: #CF4647;
}

body{
	background-color: PaleTurquoise    ;
}
    </style>
	</head>
	<body>

	<div class="container">
		<?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO E-BANKING</B> </marquee></p>";
		?>
		<button type="button" onclick="location.href='login.php'">LOGIN</button><br/>
		
		<button type="button" onclick="location.href='register.php'">REGISTER</button>
		
	<html>
<head>
  <link rel="stylesheet" type="text/css" href="clock_style.css">
  <script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
</head>

<body>
   <h1></h1>
   <p id="date"></p>
   <p id="time"></p>  

 

</body>
</html>
	</div>
	</body>

</html>
<html>
    <body>
      
    </body>
</html>
