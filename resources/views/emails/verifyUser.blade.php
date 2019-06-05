<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <title>Welcome to Onlicoin!</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                width: 100%;
                font-family: Montserrat;
                font-weight: normal;
            }

            ._mail-OChead {
                padding: 10px 3%;
                background-color: #0F75BC;
                width: 100%;
            }

            ._mail-OClogo img {
                width: 10% !important;
                margin-top: 8px;
            }
                
            ._mail-OCVerify {
                padding: 10px 3%;
                width: 100%;
            }
            
            ._mail-OCVerify h2 {
                font-size: 40px;  
                margin: 10px 0 15px;
            }
            
            ._mail-OCcode {
                letter-spacing: 10px;   
            }
            
            ._mail-OCdescWrap {
                margin-top: 4%;   
            }
            
            ._mail-OCdesc {
                font-size: 14px;
                margin: 2px 0;
            }
            
            ._mail-OCdescWrap > p:first-child {
                margin-bottom: 2% !important;   
            }
            
            ._mail-OCdescClose {
                margin-top: 3.5% !important;   
            }
    
            footer {
                padding: 10px 3%;
                
            }
            
            footer ._mail-OCcopyText {
                color: #a5a5a5;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <header class="_mail-OChead">
            <div class="_mail-OClogo">
                <img src="https://i.imgur.com/jgUGvO6.png" alt="Onlicoin Logo" />
            </div>
        </header>
        <main class="main">
            <div class="_mail-OCVerify">
                <h2>Your Verification Code</h2>
                <h2 class="_mail-OCcode">{{ $user->token }}</h2>
                <div class="_mail-OCdescWrap">
                    <p class="_mail-OCdesc">Hello {{$user->first_name }}! Greetings!</p>
                    <p class="_mail-OCdesc">You have been signed up on <b>Onlicoin</b>.</p>
                    <p class="_mail-OCdesc">Please enter the code above on the Onlicoin website to verify your registration.</p>
                </div>
                <div class="_mail-OCdescClose">
                    <p class="_mail-OCdesc">Regards,</p>
                    <p class="_mail-OCdesc">Onlicoin Team,</p>
                </div>
            </div>
        </main>
        <footer>
            <div class="_mail-OCcopy">
                <p class="_mail-OCcopyText">© 2019 Onlicoin. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>