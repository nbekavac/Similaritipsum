<?php
   
?>


<!DOCTYPE html>
    <html>
        <head>
            <title>Similaritipsum</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="naslov" content="Početna stranica">
            <meta name="datum promjene" content="06.07.2022">
            <meta name="autor" content="Nikola Bekavac">
            <link href="css/main.css" rel="stylesheet" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        </head>

        <body>
            <h1>Similaritipsum</h1>
            <!--<label> How many generated text do you want? <label>
            <input type="number" id="textNumber" name="textNumber" min="1" max="5" >
            <br>-->
            <button id="getText">Get generated text</button> <br>
            <script>
                $(document).ready(function() 
                    {
                        let split1= [];
	                    $("#getText").click(function()  
	                    {
                            //var number=document.getElementById("textNumber").value;
                            /*for(var i=0;i<=number;i++)
                            {*/                           
		                    $.getJSON('https://baconipsum.com/api/?callback=?', { 'paras': '3'}, 
			                function(baconGoodness)
		                        {
			                    if (baconGoodness && baconGoodness.length > 0)
			                        {                        
				                        $("#getTextOutput").html('');
                                        //$("#test").html('');
				                        for (var i = 0; i < baconGoodness.length; i++)
					                        $("#getTextOutput").append('<p>' + baconGoodness[i] + '</p>');
				                            $("#getTextOutput").show();
                                        for (var i=0; i<baconGoodness.length; i++){
                                        //split1.push(baconGoodness[i].split(" "));
                                            var split=baconGoodness[i].split(" ");
                                            for(j=0;j<split.length;j++)
                                                {
                                                    split1.push(split[j]);
                                                }
                                        
                                        }
                                    
			                        }
                                    alert(split1);
                                    let text="";
                                    split1.forEach(compareStrings);
                                    document.getElementById("demo").innerHTML = text;
                                    function compareStrings(item, index){
                                        //text += index + ": " + item + "<br>"; 
                                        for(let i=index;i<split1.length; i++){
                                            if(item===split1[i+1]){
                                                text += "Riječ koja se ponavlja jedan ili više puta je " + item + "<br>";
                                            }                                         
                                        }
                                    }
                                                                 
                                });                                                                       
	                    });                       
                    });
            </script>

            <p id="getTextOutput"></p>

            <p id="test"></p>

            <p id="demo"></p>

        </body>
     </html>       
            
