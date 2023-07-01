<!DOCTYPE html>
<html>
<head>
    <title>AJAX Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#btnSubmit').click(function(){
                var name = $('#name').val();
                var email = $('#email').val();
                
                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: {name: name, email: email},
                    success: function(response){
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2>AJAX Example</h2>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <button type="button" id="btnSubmit">Submit</button>
    </form>
    <div id="result"></div>
</body>
</html>
