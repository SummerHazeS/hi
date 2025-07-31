

<!DOCTYPE html> 
<html lang = "bg"> 
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="игра, таен, желание, коледа, зима, подаръци, Secret Santa, Wish, рецепти, готвене">
	<meta name="description" content="Secret Santa website, Готварски рецепти">
	<link rel="stylesheet" href="index1.css">
	<!--<script type="text/javascript" src="SearchProduts.js"></script>
	<script type="text/javascript" src="CBFinal.js"></script>
	<script type="text/javascript" src="bysearch.js"></script>
	<link rel="stylesheet" href="moduli22.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<script>
	function GoTo_first_variant () {
		window.location	= "Summer_Haze_Notes/SecretSantaSite/index.php";
	}
	
	function GoTo_second_variant () {
		window.location	= "Summer_Haze_Notes/HomeCookingBook/HomeCookinfgBook.html";
	}
	
	function GoTo_third_variant () {
		window.location	= "Summer_Haze_Notes/Anketi/Anketi.php";
	}
	
	function GoTo_fourth_variant () {
		window.location	= "Summer_Haze_Notes/Anketi/Anketi.php";
	}
	
	function SendMe_Message () {
		document.getElementById("SendMe").innerHTML = "Send";
		document.getElementById("ForSendMe").style.display = "block";
		var z = document.getElementById("ForSendMe").value;
		if(z != "" && document.getElementById("SendMe").click() == true){
			document.getElementById("Sending").style.display = "block";
			document.getElementById("SendMe").addEventListener("click",HideTextarea);
			document.getElementById("SendMe").removeEventListener("click",SendMe_Message);
			document.getElementById("ForSendMe").value = "";
		} else if(z == ""){
			document.getElementById("Sending").style.display = "none";
			document.getElementById("SendMe").addEventListener("click",HideTextarea);
			document.getElementById("SendMe").removeEventListener("click",SendMe_Message);
		}	
	}
	
	function HideTextarea () {
		document.getElementById("ForSendMe").style.display = "none";
		document.getElementById("SendMe").innerHTML = "Send me a message";
		document.getElementById("SendMe").addEventListener("click",SendMe_Message);
		document.getElementById("SendMe").removeEventListener("click",HideTextarea);
	}
	
	function AnswAnketas () {
		document.getElementById("AnswAnketa2").style.backgroundColor = "#9ab4fe";
		document.getElementById("AnswAnketa2").style.borderColor = "#9ab4fe";
		document.getElementById("AnswAnketa2").addEventListener("keypress", function(event) {
		if (event.key === "Enter") {
			document.getElementById("AnswAnketa2").style.color = "#012998";
			if(document.getElementById("AnswAnketa2").value == ""){
				document.getElementById("Ahah").innerHTML = "Ще има ли сняг тази година?";
			} else {
				document.getElementById("Ahah").innerHTML = "Интересно мислене";	
			}
		}
		});
	}
	</script>
	<title>Starting Page</title>
</head>
<body>
<div>
<h3>Hello World!</h3>
<!--<textarea id="ForSendMe" name="ForSendMe" rows="5" cols="25"></textarea>-->
<h3>Ако искате да ви направя сайт или подобна система изберете 1<br>
Ако искате вие да ми направите сайт и да ви платя за това, за да ме рекрамирате изберете 2 <br>
Ако искате да ме вземете на работа за да се чувствам добре до пенсионна възраст и после, изберете 3 <br>
Ако искате вие да си останете на работа или аз да ви взема на работа и да ви плащам за това изберете 4</h3>
<button type="button" id = "SecretSantaWebsite" name = "SecretSantaWebsite" onclick = "GoTo_first_variant ()">1</button><br><br>
<button type="button" id = "HomeCookingBook" name = "HomeCookingBook" onclick = "GoTo_second_variant ()">2</button><br>
<button type="button" id = "Anketi" name = "Anketi" onclick = "GoTo_third_variant ()">Въпроси</button><br>
<button type="button" id = "Anketi" name = "Anketi" onclick = "GoTo_fourth_variant ()">Въпроси</button><br>
</div>

<footer>
<p id = "Sending">Message is sent!</p>
<textarea id="ForSendMe" name="ForSendMe" rows="4" cols="25"></textarea><br>
<button type="submit" id = "SendMe" name = "SendMe" value = "Send me a message" onclick = "SendMe_Message ()">Send me a message
	<!--<a href="mailto:makedonskaliliya@icloud.com">Send me a message</a>-->
</button><br>
</footer>


</body>
</html>
