<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact Form #2</title>
</head>

<body>


    <div class="content">



        <div class="container" style="border-radius: 20px; border: 1px solid #eaeaea; margin-top: 20px; padding: 20px;margin-bottom: 20px; ">

            <div class="alert alert-success" role="alert" id="myAlert">

                Your message was sent, thank you!
            </div>

            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h2 style="color: #616060;">Contact Us</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quaerat autem corrupti asperiores accusantium et fuga! Facere excepturi, quo eos, nobis doloremque dolor labore expedita illum iusto, aut repellat fuga!</p>

                    <ul class="list-unstyled pl-md-5 mb-5">
                        <li class="d-flex text-black mb-2">
                            JL. Tanjung Raya, Gg.Pandan
                            <br> Desa Manunggal, Medan Helvetia
                        </li>
                        <li class="d-flex text-black mb-2"> 0896-0443-0140</li>
                        <li class="d-flex text-black">admin@noaciptaadiwangsa.com</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <form class="mb-5" method="post" id="contactForm" name="contactForm">
                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message" class="col-form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" onclick="myFunction()" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>

        <script>
            var myAlert = document.getElementById('myAlert');
            myAlert.style.display = 'none';

            function myFunction() {
                myAlert.style.display = 'block'
            }
        </script>

</body>

</html>