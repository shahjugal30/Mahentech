<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style type="text/css" media="screen">
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: helvetica;
            }

            body {
                background-color: inherit;
            }

            .main {
                width: autox;
                margin: 50px auto;
                border-radius: 10px;
                border: 5px solid black;
                box-shadow: 1px 2px 10px #555;
            }

            .info {
                width: auto;
                background-color: black;
                padding: 7px;
                text-shadow: 1px 1px 1px #222;
                color: #fff;
                font-size: 20px;
            }

            .form-box {
                padding: 20px;
                background-color: #eee;
            }

            label {
                color: black;
                font-size: 18px;
            }

            .inp,
            .msg-box {
                width: 100%;
                padding: 10px;
                margin-bottom: 5px;
                font-weight: bold;
                color: #dc143c;

            }



            .inp:focus,
            .msg-box:focus {
                outline: none;
                border: 3px solid black;
            }

            .sub-btn {
                width: auto;
                padding: 10px;
                border-radius: 5px;
                margin-top: 5px;
                border: none;
                background: linear-gradient(#494143, #0e0d0d);
                cursor: pointer;
                color: #fff;
                font-size: 20px;
                text-shadow: 1px 1px 1px rgb(170, 168, 168);
            }

            .sub-btn:hover {
                background: linear-gradient(#494848, #0f0e0f);
                opacity: 0.8;
                transition: all ease-out 0.2s;
            }

            .sub-btn:focus {
                outline: none;
            }

            <blade media|(max-width%3auto720px)%20%7B%0D>.main {
                width: auto
            }
            }

            #contactus {
                text-decoration: none;
                background-color: inherit;
                margin-bottom: 12px;
            }

        </style>
    </head>

    <body>
        <div class="main">
            <div class="info">Contact Us</div>
            <form action="mail_handler.php" method="post" name="form" class="form-box">
                <label for="name">Name</label><br>
                <input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
                <label for="email">Email ID</label><br>
                <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
                <label for="phone">Phone</label><br>
                <input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>

                <br>
                <input type="submit" name="submit" value="Send" class="sub-btn">
            </form>
        </div>
    </body>

</html>
