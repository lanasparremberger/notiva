<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body class="h-screen w-screen flex flex-col">

    <div class="flex flex-1">

        <!-- Faixa bege na esquerda -->
        <?php include '../src/views/nav.php'; ?>

        <!-- Área azul clara -->
        <div class="flex-1 h-full bg-[#d4e3f1]">
            <?php include '../src/views/header.php'; ?>
        </div>

    </div>

    <!-- Footer (fica sempre embaixo) -->
    <?php include '../src/views/footer.php'; ?>

</body>


</html>