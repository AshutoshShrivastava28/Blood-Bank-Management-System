<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .container {
            text-align: center;
            background: #f5f5f5;
        }

        .header {
            padding-top: 60px;
            color: #444;
            font-size: 20px;
            margin: auto;
            line-height: 50px;

        }

        .sub-container {
            max-width: 1200px;
            margin: auto;

            padding: 10px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
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
 
            transform: scale(1.1);
    
        }

        .name {
            padding: 12px;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
        }

        .design {
            font-style: italic;
            color: #888;
        }

        .about {
            margin: 20px 0;
            font-weight: lighter;
            color: #4e4e4e;
        }

        .social-link {
            margin: 14px;
        }

        .social-link a {
            display: inline-block;
            height: 30px;
            width: 30px;
            transition: .4s;
        }

        .social-link a:hover {
            transform: scale(1.5);
        }

        .social-link a i {
            color: #444;
        }

        @media screen and (max-width: 600px) {
            .teams {
                max-width: 100%;
            }
        }
    </style>
    <?php require 'head.php'; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php require 'header.php'; ?>
    <div class="container" style="margin-bottom: 30px;">
        <div class="header">
            <h1>Our Team</h1>
        </div>
        <div class="sub-container">
            <div class="teams">
                <img src="p3.svg" height="200px" width="200px" alt="">
                <div class="name">Harsh Solanki</div>
                <div class="design">Leader & Devloper</div>
                <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe optio exercitationem
                    atque
                    iusto quia voluptatibus tempora eaque unde tempore ex dolores enim, architecto possimus nemo aut
                    blanditiis consequatur asperiores vero!</div>
                <div class="social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="teams">
                <img src="p2.svg" height="200px" width="200px" alt="">
                <div class="name">Atharva Pimputkar</div>
                <div class="design">Devloper and designer</div>
                <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe optio exercitationem
                    atque
                    iusto quia voluptatibus tempora eaque unde tempore ex dolores enim, architecto possimus nemo aut
                    blanditiis consequatur asperiores vero!</div>
                <div class="social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="teams">
                <img src="p1.svg" height="200px" width="200px" alt="">
                <div class="name">Vishal Rai</div>
                <div class="design">Devloper and designer</div>
                <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe optio exercitationem
                    atque
                    iusto quia voluptatibus tempora eaque unde tempore ex dolores enim, architecto possimus nemo aut
                    blanditiis consequatur asperiores vero!</div>
                <div class="social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>