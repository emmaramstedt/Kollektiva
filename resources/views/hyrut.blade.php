@include('header')
<h2>Hyr ut din bostad!</h2>
<div class="formWrapper">

    <div class="formStart">
        <h3>Skapa annons</h3>
        <form action="">
            <ul>
                <li>Punktliga hyresbetalningar </li>
                <li> Skydd mot förlorad hyra</li>
                <li>försäkring upp till 1 miljon</li>
                <li>100 % digitalt hyresavtal med bankID</li>
                <li>Dedikerat supportteam under hela uthyrningen</li>
            </ul>
            <button class="backButton">
                (svg här) Svenska</button>
            <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepOne">
        <p>steg 1 av 9</p>
        <h3>Vad vill du hyra ut?</h3>
        <form action="">
            <p>Hel bostad eller rum?</p>
            <input type="radio" id="room" name="room" value="room">
            <label for="room">Ett rum</label><br>
            <input type="radio" id="house" name="house" value="house">
            <label for="house">Hela bostaden</label><br>
            <p>Hyr du ut möblerat?</p>
            <input type="radio" id="furniture" name="furniture" value="furniture">
            <label for="furniture">Möblerat</label><br>
            <input type="radio" id="noFurniture" name="noFurniture" value="noFurniture">
            <label for="noFurniture">Omöblerat</label><br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepTwo">
        <p>steg 2 av 9</p>
        <h3>Hur stor är bostaden?</h3>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepThree">
        <p>steg 3 av 9</p>
        <h3>vilken adress har bostaden?</h3>
        <p>Vi behöver din fullständiga adress för att kunna visa ditt hem på en karta. Endast gatunamnet syns i annonsen.</p>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepFour">
        <p>steg 4 av 9</p>
        <h3>Vilka bekvämligheter finns i bostaden?</h3>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepFive">
        <p>steg 5 av 9</p>
        <h3>Mer om bostaden och dess skick</h3>
        <p>sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
        <button class="backButton">
            < Tillbaka</button>
                <button class="nextButton">Nästa</button>
                </form>
    </div>

    <div class="stepSix">
        <p>Steg 6 av 9</p>
        <h3>När vill du hyra ut bostaden?</h3>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepSeven">
        <p>Steg 7 av 9</p>
        <h3>Beskriv din bostad</h3>
        <p>Sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepEight">
        <p>Steg 8 av 9</p>
        <h3>Vilken hyra hade du tänkt dig?</h3>
        <p>Enligt vår statistik på tusentals uthyrda bostäder skulle du kunna sätta hyran till: 8220 kr*.</p>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepNine">
        <p>Steg 9 av 9</p>
        <h3>Lägg till bilder</h3>
        <p>Ta några bilder med din kamera eller din telefon. Bra bilder gör skillnad! Du kan alltid ta bort eller lägga till.</p>
        <form action="">
            <button class="nextButton">Ladda upp bilder</button>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>
</div>
@include('footer')