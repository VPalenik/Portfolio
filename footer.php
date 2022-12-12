    </main>

        <div id="boxF">
            
            <form method="post" name="contactform" action="<?php echo site_url().'/wp-content/themes/poetista/assets/contact-form-handler.php';?>">
             
                <h3>Kontaktní formulář</h3>
                    
                    <input class="contactForm id" type="text" name="jmeno" id="jmeno" size="30" placeholder="Jméno">

                    <input class="contactForm id" type="text" name="prijmeni" id="prijmeni" size="30" placeholder="Příjmení">
                   
                    <input class="contactForm id" type="text" name="email" id="email" size="30" value="@" placeholder="E-mail">

                    <input class="contactForm id" type="text" name="telefon" id="telefon" size="30" value="+420" placeholder="Telefon">
                    
                    <fieldset class="contactForm">
                        <textarea class="contactFormMessage" type="content" name="content" placeholder="Zde napište Váš vzkaz, dotaz, či poptávku."></textarea>
                    <div class="buttons">
                            <input class="button" type="submit" value="Odeslat">
                            <input class="button" type="reset" value="Reset">
                    </div>
                    </fieldset>   
                        
                    
            </form>
        
            <div id="boxG">    
                <p>
                    Management & booking:<br/>
                    <br/>
                    <br/>
                    +420/777 252 441<br/>
                    <a href="mailto:chci@poetista.cz" method="post">chci@poetista.cz</a>
                
                
                    <a href="https://www.instagram.com/poetista.cz/" rel="noopener noreferrer" target="_blank">
                        <img src="https://poetista.cz/wp-content/uploads/2021/10/InstagramLogo100x100.png" alt="Instagram" width="100" height="100" class="Instagram" />
                    </a>
                </p>
            </div>
        </div>
        
        <div id="boxE">

            <h2>Klienti:</h2>
            <!--1. radek klientu -->
            <a class="klient" href="https://www.axa.cz" rel="noopener noreferrer" target="_blank">
            <img src="https://poetista.cz/wp-content/uploads/2021/10/klientaxa.jpg" alt="" width="155" height="85" class="" />
            </a>
            <a class="klient" href="https://www.billa.cz" rel="noopener noreferrer" target="_blank">
            <img src="https://poetista.cz/wp-content/uploads/2021/10/klientbilla.jpg" alt="" width="170" height="85" class="" />
            </a>
            <a class="klient" href="https://www.conceptline.cz" rel="noopener noreferrer" target="_blank">
            <img src="https://poetista.cz/wp-content/uploads/2021/10/klientconceptline.jpg" alt="" width="290" height="85" class="" />
            </a>
            <a class="klient" href="https://www.databox.cz" rel="noopener noreferrer" target="_blank">
            <img src="https://poetista.cz/wp-content/uploads/2021/10/klientdatabox.jpg" alt="" width="210" height="85" class="" />
            </a>
            <a class="klient" href="https://www.facebook.com/KovanyPetr/" rel="noopener noreferrer" target="_blank">
            <img src="https://poetista.cz/wp-content/uploads/2021/10/klientkovany.jpg" alt="" width="130" height="85" class="" />
            </a>
            <br/>
            <!--2. radek klientu -->
            <a class="klient" href="https://www.eventarena.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klienteventarena.jpg" alt="" width="230" height="85" class="" />
            </a>
            <a class="klient" href="https://www.fashionstarsnight.com" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientfashionstars.jpg" alt="" width="230" height="85" class="" />
            </a>
            <a class="klient" href="https://www.proskoly.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientproskoly.jpg" alt="" width="235" height="85" class="" />
            </a>
            <a class="klient" href="https://www.sephora.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientsephora.jpg" alt="" width="260" height="85" class="" />
            </a>
            <br/>
            <!--3. radek klientu -->
            <a class="klient" href="https://www.stars.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientstarsevents.jpg" alt="" width="275" height="85" class="" />
            </a>
            <a class="klient" href="https://www.silkygang.cz/" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientsg.jpg" alt="" width="160" height="85" class="" />
            </a>
            <a class="klient" href="https://vidda.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientvidda.jpg" alt="" width="260" height="85" class="" />
            </a>
            <a class="klient" href="https://www.zivefirmy.cz/" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientzivefirmy.jpg" alt="" width="260" height="85" class="" />
            </a>
            </br>
            <!--4. radek klientu -->
            <a class="klient" href="https://jimezdrave.cz" rel="noopener noreferrer" target="_blank">
                <img src="https://poetista.cz/wp-content/uploads/2021/10/klientjimezdrave.svg" alt="" width="260" height="85" class="" />
            </a>

            <p>...a desítky kamarádů, jejich kamarádů, maminek, babiček, tetiček...</p>
        
        </div>
    
    </div><!--end tag of content div-->    


    <footer>

        <div id="footer-content">

            Copyright &copy; 2014 poetista.cz. Created by Vladislav Palenik

        </div>

    </footer>

</body>

<?php
    wp_footer();
?>

