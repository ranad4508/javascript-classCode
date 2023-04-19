<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter file Name:
        <input type="text" name="name"> <br>
        Choose your file extension:
        <select name="extension" id="">
            <option value="0">Select one option</option>
            <option value=".pdf">.pdf</option>
            <option value=".docs">.docs</option>
            <option value=".txt">.txt</option>
        </select><br>
        Enter your content:
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Save" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $option = $_POST['extension'];
        $data = $_POST['content'];
        switch($option){
            case '0':
                echo "Please select one option";
                break;
            case '.pdf':
                $file = $name.$option;
                $handle = fopen($file, 'w');
                fwrite($handle, $data);
                echo "File created successfully";
                break;
            case '.docs':
                $file = $name.$option;
                $handle = fopen($file, 'w');
                fwrite($handle, $data);
                echo "File created successfully";
                break;
            case '.txt':
                $file = $name.$option;
                $handle = fopen($file, 'w');
                fwrite($handle, $data);
                echo "File created successfully";
                break;
            default:
            echo "Failed to create file";
            break;
        }
    }
    ?>
</body>
</html>