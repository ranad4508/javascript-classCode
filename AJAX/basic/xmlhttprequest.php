<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="demo">
        <h1>Creating XML HTTP REQUEST</h1>
        <button type="button" value="Click me" onclick="loadDoc()">CLick me</button>
    </div>
    <script>
        function loadDoc(){
            //we initialize the xmlhttprequestonject, which is responsible for making ajax
            //calls
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState ==4 && this.status == 200){
                    document.getElementById('demo').innerHTML = this.responseText;
                }
            };
            xhttp.open('GET', 'ajaxInfo.txt', true);
            xhttp.send();
        }
    </script>
</body>
</html>