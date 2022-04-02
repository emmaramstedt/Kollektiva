@include('header')


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
@include('footer')
