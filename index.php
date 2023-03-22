<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title>BloodBank Home Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<style>
    body {
        background-color: #AA4A44;
    }

    #loading {
        position: fixed;
        Width: 100%;
        height: 100vh;
        background: #fff url(https://i.pinimg.com/originals/c8/a1/76/c8a1765ffc8243f3a7b176c0ca84c3c1.gif) no-repeat center;
        z-index: 9999;
    }


        .teams {
            margin: 10px;
            padding: 22px;
            max-width: 30%;
            cursor: pointer;
            transition: 0.4s;
            box-sizing: border-box;
        }

        .teams:hover {
            background: #ddd;
            border-radius: 12px;
        }
        .card1:hover{
            transform: scale(1.2);
        }



</style>
<?php require 'head.php'; ?>

<body onload="myfunc()" style="background-color: #e7d2b9;">

    <?php require 'header.php'; ?>

    <div id="loading"></div>
    <script>
        var pre = document.getElementById("loading");

        function myfunc() {
            pre.style.display = 'none';
        }
    </script>
    <div class="con ml-5 mr-5" style="margin-top: 20px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/slider-1.jpeg" alt="First slide" width="1000px" height="500px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/slider-2.jpeg" alt="Second slide" width="1000px"
                        height="500px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/slider-3.jpeg" alt="Third slide" width="1000px" height="500px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container cont">

        <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/bg.png" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 200px; ">
                            <div class="card-header text-center">A+</div>
                            <div class="card-body">
                                If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+
                                and O-
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 200px;">
                            <div class="card-header text-center">A-</div>
                            <div class="card-body">
                                If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A-
                                and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 200px;">
                            <div class="card-header text-center">B+</div>
                            <div class="card-body">
                                You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">B-</div>
                            <div class="card-body">
                                If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B-
                                and O-.You can give blood to B+ and AB+.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">AB+</div>
                            <div class="card-body">
                                People with AB+ blood can receive red blood cells from any blood type. This means that
                                demand for AB+ can donate with AB only.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">AB-</div>
                            <div class="card-body">
                                AB- patients can receive red blood cells from all negative blood types.
                                AB- can give red blood cells to both AB- and AB+ blood types.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">O+</div>
                            <div class="card-body">
                                Blood O+ can donate to A+, B+, AB+ and O+ Blood
                                Group O can donate red blood cells to anybody. It's the universal donor.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">O-</div>
                            <div class="card-body">
                                O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                                People with O negative blood can only receive red cell donations from O-

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card1"
                            style="background-color: #bf473b; color: white; border-radius: 20px; height: 210px;">
                            <div class="card-header text-center">Admin contact</div>
                            <div class="card-body">
                                <i class="fa fa-envelope"> </i> <a> bloodbank@gmail.com</a><br><br>
                                <i class="fa fa-mobile"> </i> <a> +91 9876543210</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card" style="background-color: #bf473b; color:white">
                    <div class="card-header">Health tips</div>
                    <div class="card-body">
                        <dt>Eat a healthy diet</dt>
                        <dd>Eat a combination of different foods, including fruit, vegetables, legumes, nuts and whole
                            grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You
                            can improve your intake of fruits and vegetables by always including veggies in your meal;
                            eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables; and
                            eating them in season. By eating healthy, you will reduce your risk of malnutrition and
                            noncommunicable diseases (NCDs) such as diabetes, heart disease, stroke and cancer.</dd>
                        <dt> Consume less salt and sugar</dt>
                        <dd>On the other hand, consuming excessive amounts of sugars increases the risk of tooth decay
                            and unhealthy weight gain. In both adults and children, the intake of free sugars should be
                            reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12
                            teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for
                            additional health benefits. You can reduce your sugar intake by limiting the consumption of
                            sugary snacks, candies and sugar-sweetened beverages.</dd>
                        <dt>Be active</dt>
                        <dd>Physical activity is defined as any bodily movement produced by skeletal muscles that
                            requires energy expenditure. This includes exercise and activities undertaken while working,
                            playing, carrying out household chores, travelling, and engaging in recreational pursuits.
                            The amount of physical activity you need depends on your age group but adults aged 18-64
                            years should do at least 150 minutes of moderate-intensity physical activity throughout the
                            week. Increase moderate-intensity physical activity to 300 minutes per week for additional
                            health benefits.</dd>
                        <dt>Don’t smoke</dt>
                        <dd>Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills
                            not only the direct smokers but even non-smokers through second-hand exposure. Currently,
                            there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are
                            interested or plan to quit.
                            If you are currently a smoker, it’s not too late to quit. Once you do, you will experience
                            immediate and long-term health benefits. If you are not a smoker, that’s great! Do not start
                            smoking and fight for your right to breathe tobacco-smoke-free air.</dd>
                        <dt>Drink only safe water</dt>
                        <dt>Get tested</dt>
                        <dt>Follow traffic laws</dt>
                        <dt>Talk to someone you trust if you're feeling down</dt>
                        <dt>Clean your hands properly</dt>
                        <dt>Have regular check-ups</dt>
                        Visit here to get more health tips.
                        <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020"
                            target="_blank" style="color: yellowgreen;"> World Health Organisation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>

</html>