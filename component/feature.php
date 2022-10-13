<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <link rel="stylesheet" href="./view.css" />



    <title>Document</title>
</head>

<body>
    <?php include './navbar.html';?>
    <?php include './feature_section.php';?><br />
    <?php include './places_section.php';?><br />
    <?php include './footer.php';?>
    <script>
    AOS.init({
        duration: 1200,
    })
    </script>
</body>

</html>