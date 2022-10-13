<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="./view.css" />
    <title>Document</title>
</head>

<body>
    <?php include './navbar.html';?>

    <section data-aos="zoom-in" id="contact">
        <div class="container">
            <div class="well well-sm">
                <h3 class="appointment-book">Book Your Appointmnet Now</h3>
            </div>

            <div class="row">
                <div class="col-md-7"><br />
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230"
                        width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-5">
                    <form action="#" onclick="return false;" autocomplete="off">
                        <h3 class="appointment-title">Book Now</h3>
                        <div class="apoointment-input"> <input type="text" name="name" class="input"
                                placeholder="Name" />
                        </div>
                        <div class="apoointment-input"> <input type="email" name="email" class="input"
                                placeholder="Email" /> </div>
                        <div class="apoointment-input"> <input type="tel" name="phone" class="input"
                                placeholder="Phone" /> </div>
                        <div class="apoointment-input textarea"> <textarea name="message" class="input"
                                placeholder="Message"></textarea> </div>
                        <input type="submit" value="Submit" class="appointment-btn" />
                    </form>
                </div>

            </div>
        </div>
    </section>
    <br /><br /><br /><br /><br /><br />
    <?php include './footer.php';?>
</body>
<script>
AOS.init({
    duration: 1000,
})
</script>

</html>