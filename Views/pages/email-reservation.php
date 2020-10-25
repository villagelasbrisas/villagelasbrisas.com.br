<?php

$emailReservationPage = "
    <html>
        <head>
            <style>
                html, body { width: 100%; height: 100%;}
                html, body, div, span, h1, h2, h3, h4, h5, h6, p,
                a, img, s, strong, sub, sup, b, u, i, center,ol, ul, li,
                form, label, legend, table, tbody, tfoot, thead, tr, th, td,
                article, aside, footer, header, menu, nav, section
                {margin: 0;padding: 0;border: 0;font-size: 100%;font: inherit;vertical-align: baseline;}
                footer, header, nav, section {display: block;}
                body {line-height: 1;}
                ol, ul {list-style: none;}
                table {border-collapse: collapse;border-spacing: 0;}

                main {
                    width: 100%;
                    height: 100%;
                    margin: auto;
                    color: #121212;
                    font-weight: bolder;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                header {
                    width: 100%;
                    margin: 25px auto;
                }

                header img {
                    margin: 0 auto;
                }

                h1 {
                    font-size: 18pt;
                    margin-top: 30px;
                    text-align: center;
                    text-transform: uppercase;
                }

                h2 {
                    font-size: 16pt;
                    text-align: center;
                    color: #10AC84;
                    margin-bottom: 15px;
                }

                ul {
                    margin: 20px auto;
                }

                ul li {
                    margin: 15px;
                    color: #10AC84;
                    font-size: 15pt;
                    text-align: left:
                }

                ul li span {
                    color: #121212;
                }

                p {
                    width: 90%;
                    margin: 0 auto;
                    font-size: 14pt;
                    max-width: 250px;
                    line-height: 1.3;
                    text-align: justify;
                }
            </style>
        </head>
        <body>
            <main>
                <header>
                    <img src=\"http://villagelasbrisas.com.br/Views/pages/img/logo.png\" alt=\"Logo Las Brisas\" align=\"center\">
                    <h1>Reserva Las Brisas</h1>
                </header>

                <section>
                    <h2>$name</h2>

                    <div align=\"center\" style=\"text-align: center;\">
                        <ul>
                            <li><span>Adultos..:</span> $adults</li>
                            <li><span>Crianças:</span> $kids</li>
                            <li><span>Entrada..:</span> $checkin</li>
                            <li><span>Saída......:</span> $checkout</li>
                        </ul>
                    </div>

                    <p>$message</p>
                </section>
            </main>
        </body>
    </html>
";

return $emailReservationPage;

?>
