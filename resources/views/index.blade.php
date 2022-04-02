@include('header')
<!-- Step by step -->
<div class="stepByStepWrapper">
    <div class="stepByStepCard">
        <div class="stepByStepIcon"><img src="{{url('icons/care.svg')}}"></div>
        <div class="stepByStep">
            <h4>Enkelt och beskymmersfritt</h4>
            <p>Enkelt, tryggt och digitalt. Vi hjälper dig hitta din nya hyresgäst eller hyresvärd som stämmer överens med dina önskemål. </p>
        </div>
    </div>

    <div class="stepByStepCard">
        <div class="stepByStepIcon"><img src="{{url('icons/people.svg')}}"></div>
        <div class="stepByStep">
            <h4>Personlig matchning</h4>
            <p>För att båda parter ska känna sig trygga, erbjuder vi personlig matchning. Det ska vara trivsamt att dela. </p>
        </div>
    </div>

    <div class="stepByStepCard">
        <div class="stepByStepIcon"><img src="{{url('icons/sun.svg')}}"></div>
        <div class="stepByStep">
            <h4>Vi finns alltid tillgängliga för dig</h4>
            <p>Vi skapar de bästa förutsättningarna för att ni ska trivas och känna er trygga. Skulle något uppstå når ni oss på telefon 031-094021</p>
        </div>
    </div>
</div>
<!-- Step by step end -->
<!-- Testimonies -->
<div class="testimoniesWrapper">
    <div class="testimonyCard">
        <div class="testimonyImage"> <img src="{{url('images/testimonies/testimonyone.png')}}" alt="A photo of Agda" /></div>
        <div class="testimony"></div>
        <h4>Agda Nilsson, 69 år</h4>
        <p>”Jag ångrar inte ett sekund på att jag tog steget och hyrde ut mitt hus. Nu bor jag i en enkel 2:a anpassat för just mig. Och en trevlig familj på 4 får bo i mitt stora hus.”</p>
    </div>


    <div class="testimonyCard">
        <div class="testimonyImage"> <img src="{{url('images/testimonies/testimonytwo.png')}}" alt="A photo of Agda" /></div>
        <div class="testimony"></div>
        <h4>Lotta och Nils, 71 och 75 år</h4>
        <p>”Aldrig har vi varit så lyckliga som när vi bestämde oss för att hyra ut vårt stora hus. Det gav oss vår frihet tillbaka.”</p>
    </div>
</div>

<!-- End of Testimonies -->
<!-- Hjälpcenter -->
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
            <source media="(min-width: 834px)" srcset="{{url('images/helpcenter/helpcentertablet.png')}}">
            <source media="(min-width: 1440px)" srcset="{{url('images/helpcenter/helpcenterdesktop.png')}}">
            <img src="{{url('images/helpcenter/helpcentertablet.png')}}" alt="A photo of a hand from the right holding a plack paper heart. A hand from the left stretching to recieve the heart from the other hand." />
        </picture>
    </div>
</div>
<!--End of Hjälpcenter -->
@include('footer')
