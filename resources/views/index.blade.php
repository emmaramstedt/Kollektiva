@include('header')
<!-- Hero -->
<div class="heroContainer">
    <div class="heroWrapper margins">
        <div class="heroImage">
            <picture>
                <source media="(min-width: 1120px)" srcset="{{asset('images/hero/herodesktop.png')}}">
                <source media="(min-width: 834px)" srcset="{{asset('images/hero/herotablet.png')}}">
                <source media="(min-width: 320px)" srcset="{{asset('images/hero/hero.png')}}">
                <img src="{{asset('images/hero/herotablet.png')}}" alt="" />
            </picture>
        </div>
        <div class="heroText">
            <h1 class="greenText">Kollektiva -<br>
                tillsammans för ditt hem
            </h1>
            <p>Vi hjälper dig att hitta din nya hyresgäst eller hyresvärd.</p>
        </div>
        <div class="heroButtons">
            <div class="heroButton"><button class="orangeButton search">Sök bostad</button></div>
            <div class="heroButton"><button class="orangeButton rent">Hyr ut bostad</button></div>
        </div>
    </div>
</div>
<!-- End Hero -->
<!-- ctaCards -->
<div class="ctaCardsWrapper margins">

    <div class="ctaCard">
        <div class="ctaCardImage">
            <picture>
                <source media="(min-width: 1440px)" srcset="{{asset('images/ctaCards/ctacardone.png')}}">
                <source media="(min-width: 834px)" srcset="{{asset('images/ctaCards/ctacardone.png')}}">
                <img src="{{asset('images/ctaCards/ctacardone.png')}}" alt="" />
            </picture>
        </div>
        <div class="ctaCardText">
            <h2>Vi hjälper dig hela vägen - från A till Ö</h2>
            <p>
                Allt ingår när du hyr ut via oss. Utöver ett säkert hyresavtal får du alltid skydd mot hyresförlust, skräddarsydd försäkring, punktliga hyresbetalningar och personlig service under hela uthyrningen.
            </p>
            <button class="orangeButton">Läs mer om Kollektiva</button>
        </div>
    </div>

    <div class="ctaCard">
        <div class="ctaCardImage">
            <picture>
                <source media="(min-width: 1440px)" srcset="{{asset('images/ctaCards/ctacardtwo.png')}}">
                <source media="(min-width: 834px)" srcset="{{asset('images/ctaCards/ctacardtwo.png')}}">
                <img src="{{asset('images/ctaCards/ctacardtwo.png')}}" alt="" />
            </picture>
        </div>
        <div class="ctaCardText">
            <h2>Hyr ett hus eller rum - vi matchar er</h2>
            <p>
                Låt oss hjälpa dig att hitta huset eller rummet efter dina önskemål, antigen om du är en barnfamilj eller en gäng studenter som önskar bo i kollektiv. Läs mer om hur vi går tillväga under <a href="">Hur fungerar Kollektiva?</a>
            <p>Vid hjälp av personlig matchning hjälper vi er att hitta varandra!</p>
            </p>
            <button class="orangeButton">Sök bostad</button>
        </div>
    </div>

</div>
<!-- End ctaCards -->
<!-- Quote -->
<div class="quoteWrapper">
    <div class="quote">
        <p class="greenText margins">”Kollektiva hjälper dig att upprätthålla ditt hus värde. Står huset tomt eller delvis tomt, kan det leda till sämre skick.”</p>
    </div>
</div>
<!-- End Quote -->
<!-- Step by step -->
<div class="stepByStepBackground">
    <div class="margins">
        <div class="stepByStepWrapper">
            <div class="stepByStepCard">
                <div class="stepByStepIcon"><img src="{{asset('icons/care.svg')}}"></div>
                <div class="stepByStep">
                    <h3>Enkelt och beskymmersfritt</h3>
                    <p>Enkelt, tryggt och digitalt. Vi hjälper dig hitta din nya hyresgäst eller hyresvärd som stämmer överens med dina önskemål. </p>
                </div>
            </div>

            <div class="stepByStepCard">
                <div class="stepByStepIcon"><img src="{{asset('icons/people.svg')}}"></div>
                <div class="stepByStep">
                    <h3>Personlig matchning</h3>
                    <p>För att båda parter ska känna sig trygga, erbjuder vi personlig matchning. Det ska vara trivsamt att dela. </p>
                </div>
            </div>

            <div class="stepByStepCard">
                <div class="stepByStepIcon"><img src="{{asset('icons/sun.svg')}}"></div>
                <div class="stepByStep">
                    <h3>Vi finns alltid här för dig</h3>
                    <p>Vi skapar de bästa förutsättningarna för att ni ska trivas och känna er trygga. Skulle något uppstå når ni oss på telefon 031-094021</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Step by step end -->
<!-- Testimonies -->
<div class="margins">
    <div class="testimoniesWrapper">

        <div class="testimonyCard">
            <div class="testimonyImage">
                <picture>
                    <source media="(min-width: 1440px)" srcset="{{asset('images/testimonies/testimonyonedesktop.png')}}">
                    <source media="(min-width: 834px)" srcset="{{asset('images/testimonies/testimonyone.png')}}">
                    <img src="{{asset('images/testimonies/testimonyone.png')}}" alt="" />
                </picture>
            </div>
            <div class="testimony"></div>
            <h3>Agda Nilsson, 69 år</h3>
            <p>”Jag ångrar inte ett sekund på att jag tog steget och hyrde ut mitt hus. Nu bor jag i en enkel 2:a anpassat för just mig. Och en trevlig familj på 4 får bo i mitt stora hus.”</p>
        </div>

        <div class="testimonyCard">
            <div class="testimonyImage">
                <picture>
                    <source media="(min-width: 1440px)" srcset="{{asset('images/testimonies/testimonytwodesktop.png')}}">
                    <source media="(min-width: 834px)" srcset="{{asset('images/testimonies/testimonytwo.png')}}">
                    <img src="{{asset('images/testimonies/testimonytwo.png')}}" alt="" />
                </picture>
            </div>
            <div class="testimony"></div>
            <h3>Lotta och Nils, 71 och 75 år</h3>
            <p>”Aldrig har vi varit så lyckliga som när vi bestämde oss för att hyra ut vårt stora hus. Det gav oss vår frihet tillbaka.”</p>
        </div>

        <div class="testimonyCard testimonyDesktop">
            <div class="testimonyImage">
                <picture>
                    <img src="{{asset('images/testimonies/testimonythreedesktop.png')}}" srcset="{{asset('images/testimonies/testimonythreedesktop.png')}} '1440w')}}">
                </picture>
            </div>
            <div class="testimony"></div>
            <h3>Calle, 62 år</h3>
            <p>”Jag kan fokusera mer på mitt yrke - konstnärdrömmen, nu när jag har en inneboende. Matchningen är suverän!”</p>
        </div>
    </div>
</div>
<!-- End of Testimonies -->
<!-- Hjälpcenter -->
<div class="helpcenterBackground">
    <div class="margins">
        <div class="helpcenterWrapper">

            <div class="helpcenter">
                <h3>Hjälpcenter</h3>
                <p>Vi är här för att hjälpa dig! Har du några funderingar på hur du skall gå till väga, läs igenom vårt hjälpcenter eller kontakta oss:</p>
                <p>
                    <span>Telefon: +44 20 387 556</span>
                    <span>Mail: kollektiva@gmail.com</span>
                    <button class="orangeButton">Hjälpcenter/Vanliga frågor</button>
                </p>
            </div>
            <div class="helpcenterImage">
                <picture>
                    <source media="(min-width: 1440px)" srcset="{{asset('images/helpcenter/helpcenterdesktop.png')}}">
                    <source media="(min-width: 834px)" srcset="{{asset('images/helpcenter/helpcentertablet.png')}}">
                    <img src="{{asset('images/helpcenter/helpcentertablet.png')}}" alt="A photo of a hand from the right holding a plack paper heart. A hand from the left stretching to recieve the heart from the other hand." />
                </picture>
            </div>
        </div>
    </div>
</div>
<!--End of Hjälpcenter -->
@include('footer')
