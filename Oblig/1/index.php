<!DOCTYPE html>
<html>
    <head>
        <title>Oblig 1</title>
        <!-- Aparently normal would not work 🤔 -->
        <!-- <link rel="stylesheet" href="./style.css"> -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="../../style.css?<?=filemtime("../../style.css")?>"/>
        <link rel="stylesheet" href="./style.css?<?=filemtime("./style.css")?>"/>
        <style>
            #container {
                width: fit-content;
                padding: 4vh;
            }
            
            ul {
                padding: 0.5vh 0vh 1vh 2vh;
            }
            
            ol {
                list-style-type: decimal;
                list-style-position: inside;
            }
            
            ol img {
                padding: 0vh 0vh 1vh 2vh;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="title" class="flexAlignCenter">Thomas's Websted</div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
            <div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../">Obliger</a></div>
            <div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../">Hjem</a></div>
        </div>
        
        <div id="content">
            <div id="container">
                <ol>
                    <li><a href="../../">Startside for mine web-prosjekter</a></li>
                    <br>

                    <li>Deloppgaver</li>
                    <ol class="qAndA" style="list-style-type: lower-latin;">
                        <li><b>Hva er en kommentar og hvordan kan vi legge det inn i et dokument? Vis med kodeeksempler</b></li>
                        <ul>Kommentarer er rett og slet tekst som ikke blir vist eller brukt av end-user, men av de som har tillgang til source koden.<br>En kommentar i html/php har en start prefix "!<--" og en slutt prefix "-->" hvor alt innenfor prefixene er kommentaren.</ul>
                        <img src="./img/kommentar.jpg" alt="Kode eksempel">

                        <li><b>Hvordan kan vi legge inn uthevet tekst, tekst i kursiv eller overstrøket tekst?</b></li>
                        <ul>Vi kan legge in uthevet, kursiv og overstrøken tekst ved bruk av html tags. <br><b>b</b> tagen er for <b>uthevet</b>, <br><b>i</b> tagen er for <i>kursiv</i> og <br><b>s</b> tagen er for <s>overstrøken</s></ul>
                        <img src="./img/tekstTyper.jpg" alt="Kode eksempel">

                        <li><b>Hvordan kan man legge inn link for å sende epost?</b></li>
                        <ul>Du kan legge in link til epos ved å bruke a tagen og linke til <a href="mailto:thommhole@gmail.com">"mailto:[e-post adress]"</a></ul>
                        <img src="./img/mail_link.png" alt="">

                        <li><b>Skriv kode for å legge inn et bilde med en link</b></li>
                        <ul><a href="https://bit.ly/2WwNvTO"><img style="padding: 0;" src="./img/image_with_link.png" alt="Bilder med link"></a></ul>

                        <li><b>Lag en uordnet html-liste</b></li>
                        <ul>
                            <li>En</li>
                            <li>Uordnet</li>
                            <li>Liste</li>
                            <li>Med</li>
                            <li>Mange</li>
                            <li>Ting</li>
                            <li>😄</li>
                        </ul>

                        <li><b>Lag en tabell over alle elever i klassen som skal ha kolonnene: elevnummer, navn, alder</b></li>
                        <ul>
                            <table border="1" width="30%" style="text-align: center; border-collapse: collapse;">
                                <thead>
                                    <tr>
                                        <th>Elev Nr.</th>
                                        <th>Navn</th>
                                        <th>Alder</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sander</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Linus</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sebastian</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Thomas</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="https://soundcloud.com/user-843295696">Marius.J</a></td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tobias</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Erling</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Luan</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Jovan</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Szymon</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Oscar</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Steinar</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Fredrik</td>
                                        <td>18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </ol>
                    
                    <li>Eksternt Style Sheet</li>
                    <img src="./img/external_css.png" alt="Ekstern CSS fil">
                    
                    <li>Internt Style Sheet</li>
                    <ul>Style tagen overskriver den eksterne stylen.</ul>
                    <img src="./img/internal_css.png" alt="Intern style tag">
                    
                    <li>Inline Style</li>
                    <ul>Inline stylen overskriver den interne og eksterne style tagen.</ul>
                    <img src="./img/inline_css.png" alt="Intern style tag">
                    
                    <li><a href="../style.css">Samlet CSS fil for alle oppgaver/obliger i fremtiden inkl. oblig 1.</a></li>
                </ol>
            </div>
        </div>

        <div id="footer">
            &#169;2021 Thomas Meller Hole
        </div>
    </body>
</html>