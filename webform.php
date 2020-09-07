<?php
    $message_sent = false;
if(isset($_POST["email"]) && $_POST["email"] != "") {
   
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $to = "Sebastianvillumsen@gmail.com";
        $body ="";
        
        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        
        //mail($to,$body);

        $message_sent = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="side3.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Overlund-Design</title>
    <meta property="og:title" content="Overlund-Design">
    <meta property="og:description" content="Danske hjemmeside designs, til gode priser.">
    <meta property="og:site_name" content="Overlund-Design">
    <meta property="og:type" content="website">

</head>

<body>
    <nav>
        <div class="logo">
            <h4>Overlund-Design</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.html" class="cool-link">Forside</a></li>
            <li><a href="portefølje.html" class="cool-link">Portefølje</a></li>
            <li class="active"><a href="webform.php" class="active">Priser</a></li>
            <li><a href="webform.php#fancy-form" class="cool-link">Kontakt os</a></li>
        </ul>
        <div class="hej">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="app.js"></script>

    <section class="services">
        <div class="heading-hvid">
            <h2>Vores priser</h2>
        </div>
        <div class="content">
            <div class="servicesBx">
                <h2 class="servicesBxtop">Basisk hjemmeside</h2>
                <br>
                <h3>1000-2000 dkk</h3>
                <br>
                <p>Denne hjemmeside består udelukkende af statiske elementer. Dette betyder altså at der ingen former for advancerede eller interaktive funktioner.</p>
                <br>
                <p>Her vil vi også inkludere en basisk SEO. Som stadig vil sørge for, at du kan blive fundet af dine kunder</p>
                <br>
                <p>Vi kommer også til at tilbyde support 24/7 igennem email, telefon eller discord. Der bliver dog tager nogle forbehold til support om natten og fra 8-15 i hverdage</p>
                <a href="#fancy-form" class="btn">Kontakt os</a>
            </div>
            <div class="servicesBx">
                <h2 class="servicesBxtop">Advanceret SEO</h2>
                <br>
                <p>SEO, også kaldet Search Engine Optimization, hjælper din kunde med at finde din hjemmeside nemmere og hurtigere. Helt konkret gør det sådan, at når din kunde søger efter din virksomhed, vil den poppe op som det første google resultat.</p>
            </div>
            <div class="servicesBx">
                <h2 class="servicesBxtop">Custom hjemmeside</h2>
                <br>
                <p>Vi tilbyder selvfølgelig også Web Development, som går hånd i hånd med Web Design. Vi er begge to meget erfarne med kodning og programmering af hjemmesider, da vi er specialiseret i HTML, CSS og Javascript. For at oversætte dette til en normal person, som ikke koder, betyder dette, at vi kan lave gode hjemmesider.</p>
            </div>
        </div>
    </section>
    <section id="fancy-form">
        <div class="container">
            <div class="form-sections">
                <!-- Form left -->
                <div class="Form-left">
                    <h1>Kontakt os</h1>
                    <div class="line"></div>
                    <!--border-bottom line-->
                    <p>Kontakt os hvis du er interesseret i en hjemmeside eller andre detaljer</p><br>

                    <!--first Heading -->
                    <h4>Email</h4>
                    <span>Sebastianvillumsen@gmail.com eller ...</span>
                    <hr><br><br>

                    <!--second Heading -->
                    <h4>Telefon</h4>
                    <span>29288139 eller ...</span>
                    <hr><br><br>

                    <!--third Heading -->
                    <h4>Discord</h4>
                    <span>Seba211a#8716 eller </span>
                    <hr> <br>

                </div>

                <!-- form right -->
                <div class="Form-right">
                    <h1>Contact Us</h1>
                    <div class="line"></div>
                    <!-- form -->
                    <form method="POST" action="webform.php" class="form">
                        <h5>NAVN</h5>
                        <input type="text" name="name" class="inputs" placeholder="name"><br><br>
                        <h5>EMAIL</h5>
                        <input type="email" name="email" class="inputs" placeholder="email"><br><br>
                        <h5>DIN BESKED</h5>
                        <textarea name="message" class="inputs" placeholder="Comment" cols="50" rows="7"></textarea><br>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer">
            <div class="footer-bottom">
                <p>&copy Copyright 2020 | sebogmaw.dk, alle rettigheder forbeholdes</p>
                <p>TLF: 52 50 40 88</p>
            </div>
        </div>
    </footer>
</body></html>