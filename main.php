<?php   
    include 'qrcode.php';

    if(isset($_POST['qr'])){
        $text = $_POST['qr'];
        $name = md5(time()).".png";
        
        $file = "files/{$name}";
        $options = array(
            'w' => 500,
            'h' => 500
        );
        $generator = new QRCode($text, $options);
        $image = $generator->render_image();
        imagepng($image, $file);
        imagedestroy($image); //limpa a variável $image para evitar estouro de memória.

        echo "<p>";
        echo "Qrcode gerado com sucesso!<br>";
        echo "<a href='{$file}' target='_blank'> Clique aqui para vizualizar</a>";
        echo "</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QRCode</title>
</head>
<style>
    form{
        text-align: center;
        padding: 20%;
    }
    input{
        font-size: 20px;
        border-radius: 10px;
        border-color: blue;
        text-align: center;
    }
    button{
        font-size: 12px;
        border-radius: 6px;
    }
</style>
<body>
        <form method="POST">
                <input type="text" name="qr" placeholder="Insira a URL"> <br> <br>
                <button type="submit">Gerar!</button>
        </form>
</body>
</html>