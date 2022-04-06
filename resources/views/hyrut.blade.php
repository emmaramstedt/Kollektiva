@include('header')
<h2>Hyr ut din bostad!</h2>
<div class="formWrapper">

    <div class="formStart">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
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
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99051 0.333008C4.93051 0.333008 0.833008 4.43967 0.833008 9.49967C0.833008 14.5597 4.93051 18.6663 9.99051 18.6663C15.0597 18.6663 19.1663 14.5597 19.1663 9.49967C19.1663 4.43967 15.0597 0.333008 9.99051 0.333008ZM16.343 5.83301H13.6388C13.3519 4.69768 12.9271 3.60175 12.3738 2.56967C14.0459 3.14534 15.4549 4.30375 16.343 5.83301ZM9.99967 2.20301C10.7605 3.30301 11.3563 4.52217 11.7505 5.83301H8.24884C8.64301 4.52217 9.23884 3.30301 9.99967 2.20301ZM2.90467 11.333C2.75801 10.7463 2.66634 10.1322 2.66634 9.49967C2.66634 8.86717 2.75801 8.25301 2.90467 7.66634H6.00301C5.92967 8.27134 5.87467 8.87634 5.87467 9.49967C5.87467 10.123 5.92967 10.728 6.00301 11.333H2.90467ZM3.65634 13.1663H6.36051C6.65384 14.3122 7.07551 15.4122 7.62551 16.4297C5.95164 15.8572 4.54169 14.6979 3.65634 13.1663ZM6.36051 5.83301H3.65634C4.54169 4.30142 5.95164 3.1422 7.62551 2.56967C7.07223 3.60175 6.6474 4.69768 6.36051 5.83301ZM9.99967 16.7963C9.23884 15.6963 8.64301 14.4772 8.24884 13.1663H11.7505C11.3563 14.4772 10.7605 15.6963 9.99967 16.7963ZM12.1447 11.333H7.85467C7.77217 10.728 7.70801 10.123 7.70801 9.49967C7.70801 8.87634 7.77217 8.26217 7.85467 7.66634H12.1447C12.2272 8.26217 12.2913 8.87634 12.2913 9.49967C12.2913 10.123 12.2272 10.728 12.1447 11.333ZM12.3738 16.4297C12.9238 15.4122 13.3455 14.3122 13.6388 13.1663H16.343C15.4549 14.6956 14.0459 15.854 12.3738 16.4297ZM13.9963 11.333C14.0697 10.728 14.1247 10.123 14.1247 9.49967C14.1247 8.87634 14.0697 8.27134 13.9963 7.66634H17.0947C17.2413 8.25301 17.333 8.86717 17.333 9.49967C17.333 10.1322 17.2413 10.7463 17.0947 11.333H13.9963Z" fill="#FCA82B" />
                </svg> Svenska</button>
            <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepOne">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
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
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>steg 2 av 9</p>
        <h3>Hur stor är bostaden?</h3>
        <p>Storlek</p>
        <label for="size"></label>
        <input placeholder="Ange" type="number" name="size" id="size" min="5" max="1000">
        <form action="">
            <p>Antal rum</p>
            <label for="roomNumber"></label>
            <select id="roomNumber" name="roomNumber">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <p>hur många bor här?</p>
            <label for="peopleNumber"></label>
            <select id="peopleNumber" name="peopleNumber">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select><br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepThree">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>steg 3 av 9</p>
        <h3>vilken adress har bostaden?</h3>
        <p>Vi behöver din fullständiga adress för att kunna visa ditt hem på en karta. Endast gatunamnet syns i annonsen.</p>
        <form action="">
            <label for="adress">Gatuadress</label>
            <br>
            <input name="adress" id="adress" type="text" placeholder="Ange">
            <br>
            <label for="number">Gatunummer</label>
            <br>
            <input name="number" id="number" type="number" placeholder="Ange">
            <br>
            <label for="postNumber">Postnummer</label>
            <br>
            <input name="postNumber" id="postNumber" type="number" placeholder="Ange">
            <br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepFour">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>steg 4 av 9</p>
        <h3>Vilka bekvämligheter finns i bostaden?</h3>
        <form action="">
            <p>Kök</p>
            <input type="checkbox" name="kylskåp" id="kylskåp">
            <label for="kylskåp">Kylskåp</label>
            <br>
            <input type="checkbox" name="fridge" id="fridge">
            <label for="fridge">Frys</label>
            <br>
            <input type="checkbox" name="oven" id="oven">
            <label for="oven">Ugn</label>
            <br>
            <input type="checkbox" name="Spis" id="Spis">
            <label for="Spis">Spis</label>
            <br>
            <input type="checkbox" name="dishwasher" id="dishwasher">
            <label for="dishwasher">Diskmaskin</label>
            <br>
            <input type="checkbox" name="microwave" id="microwave">
            <label for="microwave">Microvågsugn</label>
            <p>Badrum</p>
            <input type="checkbox" name="shower" id="shower">
            <label for="shower">Egen dusch</label>
            <br>
            <input type="checkbox" name="toilet" id="toilet">
            <label for="toilet">Egen toalett</label>
            <br>
            <input type="checkbox" name="bathtub" id="bathtub">
            <label for="bathtub">Eget badkar</label>
            <br>
            <p>Tvätt</p>
            <input type="checkbox" name="washmachin" id="washmachin">
            <label for="washmachin">Tvättmaskin</label>
            <br>
            <input type="checkbox" name="dryer" id="dryer">
            <label for="dryer">Torktumlare</label>
            <br>
            <input type="checkbox" name="laundry" id="laundry">
            <label for="laundry">Gemensam tvättstuga</label>
            <br>
            <p>Populär</p>
            <input type="checkbox" name="balcony" id="balcony">
            <label for="balcony">Balkong/uteplats</label>
            <br>
            <input type="checkbox" name="sauna" id="sauna">
            <label for="sauna">Bastu</label>
            <br>
            <input type="checkbox" name="bubblePool" id="bubblePool">
            <label for="bubblePool">Bubbelpool</label>
            <br>
            <input type="checkbox" name="fireplace" id="fireplace">
            <label for="fireplace">Kamin</label>
            <br>
            <input type="checkbox" name="pool" id="pool">
            <label for="pool">Pool</label>
            <br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepFive">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>steg 5 av 9</p>
        <h3>Mer om bostaden och dess skick</h3>
        <p>sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
        <form action="">
            <label for="year">Bostadens byggnadsår</label>
            <br>
            <input placeholder="Ange" name="year" id="year" type="number">
            <br>
            <input name="year" id="year" type="radio">
            <label for="year">Vet ej</label>
            <br>
            <label for="bathroom">Badrum - år sedan renovering</label>
            <br>
            <input placeholder="Ange" name="bathroom" id="bathroom" type="number">
            <br>
            <input name="bathroom" id="bathroom" type="radio">
            <label for="bathroom">Vet ej</label>
            <br>
            <label for="kitchen">Kök - år sedan renovering</label>
            <br>
            <input placeholder="Ange" name="kitchen" id="kitchen" type="number">
            <br>
            <input name="kitchen" id="kitchen" type="radio">
            <label for="kitchen">Vet ej</label>
            <br>
            <label for="energy">Energiklass (A++, A+, A, B, C, D, E)</label>
            <br>
            <input placeholder="Ange" name="energy" id="energy" type="text">
            <br>
            <input name="energy" id="energy" type="radio">
            <label for="energy">Vet ej</label>
            <br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepSix">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>Steg 6 av 9</p>
        <h3>När vill du hyra ut bostaden?</h3>
        <form action="">
            <label for="moveIn">Inflyttningsdatum</label>
            <br>
            <input type="date" id="moveIn" name="moveIn">
            <br>
            <input id="moveInTwo" name="moveInTwo" type="radio">
            <label for="moveInTwo">Snarast</label>
            <br>
            <label for="moveOut">Utflyttningsdatum</label>
            <br>
            <input type="date" id="moveOut" name="moveOut">
            <br>
            <input id="moveOutTwo" name="moveOutTwo" type="radio">
            <label for="moveOutTwo">Snarast</label>
            <br>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepSeven">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>Steg 7 av 9</p>
        <h3>Beskriv din bostad</h3>
        <p>Sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
        <form action="">
            <label for="description"></label>
            <input name="description" id="description" type="textarea" placeholder="Beskrivning">
            <br>
            <p>De flesta annonser har en beskrivning mellan 300 och 400 tecken.</p>
            <p>Saker hyresgäster ofta undrar över:</p>
            <ul>
                <li>Planlösning</li>
                <li>Vad som ingår i hyran</li>
                <li>Kommunikation</li>
                <li>Varför du hyr ut din bostad</li>
            </ul>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepEight">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>Steg 8 av 9</p>
        <h3>Vilken hyra hade du tänkt dig?</h3>
        <p>Enligt vår statistik på tusentals uthyrda bostäder skulle du kunna sätta hyran till: 8220 kr*.</p>
        <label for="rent">Hyra</label>
        <input placeholder="Ange" name="rent" id="rent" type="number">
        <p>Hyresgästens månadskostnad är hyran + 10 % serviceavgift. Den hyran du anger är vad du får utbetalt varje månad. En serviceavgift på 5 % tillkommer till dig som hyresvärd.</p>
        <form action="">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>

    <div class="stepNine">
        <button class="closeForm">
            <p>Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
        <p>Steg 9 av 9</p>
        <h3>Lägg till bilder</h3>
        <p>Ta några bilder med din kamera eller din telefon. Bra bilder gör skillnad! Du kan alltid ta bort eller lägga till.</p>
        <form action="">
            <div class="uploadImages">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>
                <button class="nextButton">Ladda upp bilder</button>
                <br>
            </div>
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </form>
    </div>
</div>
@include('footer')