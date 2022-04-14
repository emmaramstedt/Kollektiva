@include('header')

<div class="formWrapper">
    <div class="closeFormWrapper">
        <button class="closeForm margins">
            <p class="margins">Stäng formulär</p>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
            </svg>
        </button>
    </div>
    <form>
        <div class="formStart tab">
            <h3 class="margins">Skapa annons</h3>
            <ul>
                <li>Punktliga hyresbetalningar </li>
                <li> Skydd mot förlorad hyra</li>
                <li>försäkring upp till 1 miljon</li>
                <li>100 % digitalt hyresavtal med bankID</li>
                <li>Dedikerat supportteam under hela uthyrningen</li>
            </ul>
            <button class="margins backButton">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99051 0.333008C4.93051 0.333008 0.833008 4.43967 0.833008 9.49967C0.833008 14.5597 4.93051 18.6663 9.99051 18.6663C15.0597 18.6663 19.1663 14.5597 19.1663 9.49967C19.1663 4.43967 15.0597 0.333008 9.99051 0.333008ZM16.343 5.83301H13.6388C13.3519 4.69768 12.9271 3.60175 12.3738 2.56967C14.0459 3.14534 15.4549 4.30375 16.343 5.83301ZM9.99967 2.20301C10.7605 3.30301 11.3563 4.52217 11.7505 5.83301H8.24884C8.64301 4.52217 9.23884 3.30301 9.99967 2.20301ZM2.90467 11.333C2.75801 10.7463 2.66634 10.1322 2.66634 9.49967C2.66634 8.86717 2.75801 8.25301 2.90467 7.66634H6.00301C5.92967 8.27134 5.87467 8.87634 5.87467 9.49967C5.87467 10.123 5.92967 10.728 6.00301 11.333H2.90467ZM3.65634 13.1663H6.36051C6.65384 14.3122 7.07551 15.4122 7.62551 16.4297C5.95164 15.8572 4.54169 14.6979 3.65634 13.1663ZM6.36051 5.83301H3.65634C4.54169 4.30142 5.95164 3.1422 7.62551 2.56967C7.07223 3.60175 6.6474 4.69768 6.36051 5.83301ZM9.99967 16.7963C9.23884 15.6963 8.64301 14.4772 8.24884 13.1663H11.7505C11.3563 14.4772 10.7605 15.6963 9.99967 16.7963ZM12.1447 11.333H7.85467C7.77217 10.728 7.70801 10.123 7.70801 9.49967C7.70801 8.87634 7.77217 8.26217 7.85467 7.66634H12.1447C12.2272 8.26217 12.2913 8.87634 12.2913 9.49967C12.2913 10.123 12.2272 10.728 12.1447 11.333ZM12.3738 16.4297C12.9238 15.4122 13.3455 14.3122 13.6388 13.1663H16.343C15.4549 14.6956 14.0459 15.854 12.3738 16.4297ZM13.9963 11.333C14.0697 10.728 14.1247 10.123 14.1247 9.49967C14.1247 8.87634 14.0697 8.27134 13.9963 7.66634H17.0947C17.2413 8.25301 17.333 8.86717 17.333 9.49967C17.333 10.1322 17.2413 10.7463 17.0947 11.333H13.9963Z" fill="#FCA82B" />
                </svg> Svenska</button>
        </div>

        <div class="stepOne tab">
            <p class="margins">steg 1 av 13</p>
            <h3 class="margins">Vad vill du hyra ut?</h3>
            <p class="margins">Hel bostad eller rum?</p>
            <div class="radioWrapper">
                <input class="checky" type="radio" id="room" name="living" value="room">
                <label for="room">Ett rum</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="radio" id="house" name="living" value="house">
                <label for="house">Hela bostaden</label>
            </div>
            <br>
            <p class="margins">Hyr du ut möblerat?</p>
            <div class="radioWrapper">
                <input class="checky" type="radio" id="furniture" name="furnished" value="furniture">
                <label for="furniture">Möblerat</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="radio" id="noFurniture" name="furnished" value="noFurniture">
                <label for="noFurniture">Omöblerat</label>
            </div>
            <br>
        </div>

        <div class="stepTwo tab">
            <p class="margins">steg 2 av 13</p>
            <h3 class="margins">Hur stor är bostaden?</h3>
            <label class="margins" for="size">Storlek</label>
            <input placeholder="Ange" type="number" name="size" id="size" min="5" max="1000">
            <label class="margins" for="roomNumber">Antal rum</label>
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
            <label class="margins" for="peopleNumber">hur många bor här?</label>
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
        </div>

        <div class="stepThree tab">
            <p class="margins">steg 3 av 13</p>
            <h3 class="margins">vilken adress har bostaden?</h3>
            <p class="margins">Vi behöver din fullständiga adress för att kunna visa ditt hem på en karta. Endast gatunamnet syns i annonsen.</p>
            <label class="margins" for="adress">Gatuadress</label>
            <input name="adress" id="adress" type="text" placeholder="Ange">
            <br>
            <label class="margins" for="number">Gatunummer</label>
            <input name="number" id="number" type="number" placeholder="Ange">
            <br>
            <label class="margins" for="postNumber">Postnummer</label>
            <input name="postNumber" id="postNumber" type="number" placeholder="Ange">
            <br>
        </div>

        <div class="stepFour tab">
            <p class="margins">steg 4 av 13</p>
            <h3 class="margins">Vilka bekvämligheter finns i bostaden?</h3>
            <p class="margins">Kök</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="kylskåp" id="kylskåp">
                <label for="kylskåp">Kylskåp</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="fridge" id="fridge">
                <label for="fridge">Frys</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="oven" id="oven">
                <label for="oven">Ugn</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="Spis" id="Spis">
                <label for="Spis">Spis</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="dishwasher" id="dishwasher">
                <label for="dishwasher">Diskmaskin</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="microwave" id="microwave">
                <label for="microwave">Microvågsugn</label>
            </div>
            <p class="margins">Badrum</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="shower" id="shower">
                <label for="shower">Egen dusch</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="toilet" id="toilet">
                <label for="toilet">Egen toalett</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="bathtub" id="bathtub">
                <label for="bathtub">Eget badkar</label>
            </div>
            <br>
            <p class="margins">Tvätt</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="washmachin" id="washmachin">
                <label for="washmachin">Tvättmaskin</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="dryer" id="dryer">
                <label for="dryer">Torktumlare</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" class="checky" type="checkbox" name="laundry" id="laundry">
                <label for="laundry">Gemensam tvättstuga</label>
            </div>
            <br>
            <p class="margins">Populär</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="all" id="all">
                <label for="all">Alla</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="single" id="single">
                <label for="single">Ensamstående</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="married" id="married">
                <label for="married">Gift/Sambo</label>
            </div>
            <br>
        </div>

        <div class="stepFive tab">
            <p class="margins" class="margins">steg 5 av 13</p>
            <h3 class="margins">Mer om bostaden och dess skick</h3>
            <p class="margins">sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
            <label class="margins" for="year">Bostadens byggnadsår</label>
            <input placeholder="Ange" name="year" id="year" type="number">
            <br>
            <div class="radioWrapper">
                <input class="checky" name="year" id="year" type="radio">
                <label for="year">Vet ej</label>
            </div>
            <br>
            <label class="margins" for="bathroom">Badrum - år sedan renovering</label>
            <input placeholder="Ange" name="bathroom" id="bathroom" type="number">
            <br>
            <div class="radioWrapper">
                <input class="checky" name="bathroom" id="bathroom" type="radio">
                <label for="bathroom">Vet ej</label>
            </div>
            <br>
            <label class="margins" for="kitchen">Kök - år sedan renovering</label>
            <input placeholder="Ange" name="kitchen" id="kitchen" type="number">
            <br>
            <div class="radioWrapper">
                <input class="checky" name="kitchen" id="kitchen" type="radio">
                <label for="kitchen">Vet ej</label>
            </div>
            <br>
            <label class="margins" for="energy">Energiklass (A++, A+, A, B, C, D, E)</label>
            <input placeholder="Ange" name="energy" id="energy" type="text">
            <br>
            <div class="radioWrapper">
                <input class="checky" name="energy" id="energy" type="radio">
                <label for="energy">Vet ej</label>
            </div>
            <br>
        </div>

        <div class="stepSix tab">
            <p class="margins">Steg 6 av 13</p>
            <h3 class="margins">När vill du hyra ut bostaden?</h3>
            <label class="margins" for="moveIn">Inflyttningsdatum</label>
            <input type="date" id="moveIn" name="moveIn">
            <br>
            <div class="radioWrapper">
                <input class="checky" id="moveInTwo" name="moveInTwo" type="radio">
                <label for="moveInTwo">Snarast</label>
            </div>
            <br>
            <label class="margins" for="moveOut">Utflyttningsdatum</label>
            <input type="date" id="moveOut" name="moveOut">
            <br>
            <div class="radioWrapper">
                <input class="checky" id="moveOutTwo" name="moveOutTwo" type="radio">
                <label for="moveOutTwo">Snarast</label>
            </div>
            <br>
        </div>

        <div class="stepSeven tab">
            <p class="margins">Steg 7 av 13</p>
            <h3 class="margins">Beskriv din bostad</h3>
            <p class="margins">Sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
            <label for="description"></label>
            <textarea name="description" id="description" type="textarea" placeholder="Beskrivning" rows="8" cols="35"></textarea>
            <br>
            <p class="margins">De flesta annonser har en beskrivning mellan 300 och 400 tecken.</p>
            <p class="margins">Saker hyresgäster ofta undrar över:</p>
            <ul>
                <li>Planlösning</li>
                <li>Vad som ingår i hyran</li>
                <li>Kommunikation</li>
                <li>Varför du hyr ut din bostad</li>
            </ul>
        </div>

        <div class="stepEight tab">
            <p class="margins">Steg 8 av 13</p>
            <h3 class="margins">Vilken hyra hade du tänkt dig?</h3>
            <p class="margins">Enligt vår statistik på tusentals uthyrda bostäder skulle du kunna sätta hyran till: 8220 kr*.</p>
            <label class="margins" for="rent">Hyra</label>
            <input placeholder="Ange" name="rent" id="rent" type="number">
            <div class="infoText">
                <p class="margins">Hyresgästens månadskostnad är hyran + 10 % serviceavgift. Den hyran du anger är vad du får utbetalt varje månad. En serviceavgift på 5 % tillkommer till dig som hyresvärd.</p>
            </div>
        </div>

        <div class="stepNine tab">
            <p class="margins">Steg 9 av 13</p>
            <h3 class="margins">Lägg till bilder</h3>
            <p class="margins">Ta några bilder med din kamera eller din telefon. Bra bilder gör skillnad! Du kan alltid ta bort eller lägga till.</p>
            <div class="uploadImages">
                <svg width="126" height="126" viewBox="0 0 126 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M63.7748 56.4783C63.6828 56.3606 63.5651 56.2655 63.4308 56.2C63.2965 56.1346 63.149 56.1006 62.9996 56.1006C62.8502 56.1006 62.7028 56.1346 62.5685 56.2C62.4342 56.2655 62.3165 56.3606 62.2245 56.4783L48.4432 73.914C48.3296 74.0591 48.2591 74.2332 48.2398 74.4165C48.2205 74.5997 48.2531 74.7847 48.334 74.9503C48.4148 75.1159 48.5407 75.2554 48.6971 75.3528C48.8535 75.4503 49.0341 75.5017 49.2184 75.5013H58.3116V105.328C58.3116 105.869 58.7545 106.312 59.2959 106.312H66.6788C67.2202 106.312 67.6631 105.869 67.6631 105.328V75.5136H76.7809C77.6053 75.5136 78.0606 74.5662 77.5561 73.9263L63.7748 56.4783Z" fill="#033F33" />
                    <path d="M99.8402 45.1213C94.2047 30.2572 79.8451 19.6875 63.0246 19.6875C46.2041 19.6875 31.8445 30.2449 26.209 45.109C15.6639 47.8775 7.875 57.4875 7.875 68.9062C7.875 82.5029 18.8877 93.5156 32.4721 93.5156H37.4062C37.9477 93.5156 38.3906 93.0727 38.3906 92.5312V85.1484C38.3906 84.607 37.9477 84.1641 37.4062 84.1641H32.4721C28.3254 84.1641 24.4248 82.5152 21.5209 79.5252C18.6293 76.5475 17.0912 72.5361 17.2266 68.3771C17.3373 65.1287 18.4447 62.0771 20.4504 59.5055C22.5053 56.8846 25.3846 54.9773 28.5838 54.1283L33.2473 52.9102L34.9576 48.4066C36.0158 45.6012 37.4924 42.9803 39.3504 40.6055C41.1847 38.2517 43.3575 36.1825 45.798 34.4654C50.8553 30.9094 56.8107 29.0268 63.0246 29.0268C69.2385 29.0268 75.1939 30.9094 80.2512 34.4654C82.6998 36.1881 84.8654 38.2553 86.6988 40.6055C88.5568 42.9803 90.0334 45.6135 91.0916 48.4066L92.7896 52.8979L97.4408 54.1283C104.11 55.9248 108.773 61.991 108.773 68.9062C108.773 72.9791 107.186 76.8182 104.307 79.6975C102.895 81.1178 101.215 82.2439 99.3648 83.0106C97.5146 83.7772 95.5307 84.1693 93.5279 84.1641H88.5938C88.0523 84.1641 87.6094 84.607 87.6094 85.1484V92.5312C87.6094 93.0727 88.0523 93.5156 88.5938 93.5156H93.5279C107.112 93.5156 118.125 82.5029 118.125 68.9062C118.125 57.4998 110.361 47.9021 99.8402 45.1213Z" fill="#033F33" />
                </svg>
                <!-- Dunno if this solution works? either way: forbidden javascript, I know. -->
                <button class="imageButton" onclick="document.getElementById('getFile').click()">Ladda upp bilder</button>
                <input type='file' id="getFile" style="display:none">
            </div>
        </div>

        <div class="stepTen tab">
            <p class="margins">Steg 10 av 13</p>
            <h3 class="margins">Specificera din hyresgäst?</h3>
            <p class="margins">Matcha med din perfekta hyresgäst. "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="buttonWrapper">
                <button type="button" class="nextButton">Specificera</button>
                <button type="button" class="backButton">
                    Hoppa över
                </button>
            </div>
            <div class="background">
                <p class="margins">Om du inte har någon preferens i din hyresgäst går det lika bra att välja att hoppa över denna process.</p>
            </div>
        </div>

        <div class="stepEleven tab">
            <p class="margins">steg 11 av 13</p>
            <h3 class="margins">Specificera din hyresgäst</h3>
            <p class="margins">Hushåll</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="all" id="all">
                <label for="all">Alla</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="alone" id="alone">
                <label for="alone">Ensam</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="cosearcher" id="cosearcher">
                <label for="cosearcher">Medsökande</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="family" id="family">
                <label for="family">Barnfamilj</label>
            </div>
            <br>
            <p class="margins">Sysselsättning</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="all" id="all">
                <label for="all">Alla</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="working" id="working">
                <label for="working">Arbete</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="studying" id="studying">
                <label for="studying">Studerande</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="retired" id="retired">
                <label for="retired">Pension</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="other" id="other">
                <label for="other">Annan</label>
            </div>
            <br>
            <p class="margins">Ålder</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="18-25" id="18-25">
                <label for="18-25">18-25 år</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="26-32" id="26-32">
                <label for="26-32">26-32 år</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" class="checky" type="checkbox" name="33-45" id="33-45">
                <label for="33-45">33-45 år</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" class="checky" type="checkbox" name="46-59" id="46-59">
                <label for="46-59">46-59 år</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" class="checky" type="checkbox" name="60+" id="60+">
                <label for="60+">60+ år</label>
            </div>
            <br>
            <p class="margins">Civilstånd</p>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="all" id="all">
                <label for="all">Alla</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="alone" id="alone">
                <label for="alone">Ensamstående</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="married" id="married">
                <label for="married">Gift/Sambo</label>
            </div>
            <br>
        </div>

        <div class="stepTwelve tab">
            <p class="margins">steg 12 av 13</p>
            <h3 class="margins">Din preferens</h3>
            <p class="margins">Här är en summering om den hyresboende du har valt som preferens.</p>
            <div class="summary margins">
                <h3>Hushåll</h3>
                <p>---</p>
                <h3>Sysselsättning</h3>
                <p>---</p>
                <h3>Ålder</h3>
                <p>---</p>
                <h3>Civilstånd</h3>
                <p>---</p>
            </div>
        </div>

        <div class="stepThirteen tab">
            <p class="margins">steg 13 av 13</p>
            <h3 class="margins">Förhandsgranskning</h3>
            <div class="imageWrapperForm">
                <img class="formImage" src="{{asset('images/formExample/example.png')}}" alt="Bildspel">
                <div class="slideshowButtons">
                    <button class="slideButton">
                        "<" </button>
                            <p>Bild 1/5</p>
                            <button class="slideButton">></button>
                </div>
                <div class="summary margins">
                    <h3>Södra Kroksdal/ Skärhamn</h3>
                    <h3>Inflyttning</h3>
                    <p>Snarast möjligt</p>
                    <h3>Utflyttning</h3>
                    <p>Tillsvidare</p>
                    <h3>Storlek</h3>
                    <p>2 rum, 80 m2</p>
                    <h3>Möblerat</h3>
                    <p>Ja</p>
                    <h3>Delat boende</h3>
                    <p>Ja</p>
                </div>
                <div class="rulesAndDescription margins">
                    <h3>Beskrivning</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <h3>Regler</h3>
                    <p>Husdjur tillåtet</p>
                    <p>Rökning ej tillåtet</p>
                </div>
            </div>
        </div>

        <div class="formEnd tab">
            <div class="bgColor">
                <h3>Din annons är publicerad!</h3>
                <div class="svgWrapper">
                    <svg width="102" height="111" viewBox="0 0 102 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.7097 3.35924C45.0089 1.41531 47.9219 0.34778 50.9328 0.345706C53.9436 0.343632 56.8581 1.40715 59.16 3.34791L97.4667 35.6366C100.34 38.0562 102 41.6262 102 45.3832V100.911C102 103.541 100.955 106.063 99.0955 107.923C97.2357 109.783 94.7134 110.828 92.0833 110.828H9.91667C7.28758 110.828 4.7661 109.784 2.90653 107.925C1.04695 106.067 0.00150233 103.546 0 100.917V45.3832C0 41.6319 1.65467 38.0732 4.51633 35.6479L42.7097 3.35924V3.35924ZM72.4427 55.7363C72.8484 55.344 73.1719 54.8749 73.3944 54.3563C73.6169 53.8376 73.7339 53.2799 73.7385 52.7156C73.7432 52.1513 73.6354 51.5917 73.4214 51.0695C73.2075 50.5473 72.8917 50.0729 72.4925 49.6741C72.0932 49.2752 71.6186 48.9599 71.0962 48.7464C70.5738 48.533 70.0141 48.4257 69.4498 48.4309C68.8855 48.436 68.3278 48.5535 67.8094 48.7765C67.291 48.9995 66.8222 49.3235 66.4303 49.7296L43.9167 72.2376L35.5867 63.9076C35.1944 63.5019 34.7253 63.1783 34.2067 62.9558C33.6881 62.7333 33.1303 62.6164 32.566 62.6117C32.0017 62.6071 31.4421 62.7149 30.9199 62.9288C30.3977 63.1428 29.9233 63.4586 29.5245 63.8578C29.1256 64.257 28.8103 64.7317 28.5968 65.2541C28.3834 65.7765 28.2761 66.3362 28.2813 66.9005C28.2864 67.4648 28.404 68.0224 28.6269 68.5408C28.8499 69.0592 29.1739 69.5281 29.58 69.9199L40.9133 81.2533C41.7102 82.0491 42.7904 82.4962 43.9167 82.4962C45.0429 82.4962 46.1231 82.0491 46.92 81.2533L72.4427 55.7363V55.7363Z" fill="#033F33" />
                    </svg>
                </div>
            </div>
            <div class="margins">
                <h3>Annonshantering</h3>
                <p>Nu är din annons synlig för alla kollektivas användare. Våra handledare hanterar hela din process från matchning till avtal. Tjänsten är dessutom dynamisk och användarvänlig. </p>
            </div>
        </div>

        <div class="buttonWrapper">
            <button type="button" class="backButton" id="back" onclick="nextStep(-1)">
                Tillbaka
            </button>
            <button type="button" class="nextButton" id="next" onclick="nextStep(1)"></button>
        </div>
    </form>
</div>
<script>
    let currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        const x = document.getElementsByClassName("tab");
        x[n].style.display = "flex";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("back").style.display = "none";
        } else {
            document.getElementById("back").style.display = "inline";
        }
        if (n == x.length - 1) {
            document.getElementById("next").innerHTML = "Publicera";
        } else {
            document.getElementById("next").innerHTML = "Nästa";
        }
    }

    function nextStep(n) {
        // This function will figure out which tab to display
        const x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        //   if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }
</script>

<!-- ///////////////////////////////////////////////////////////////////////////-->
<!-- image one -->
<label for="imageOne">
    <div class="preview">
        <div class="imageSrc"><img style="width: 100px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png" /></div>
        <br>
        <input id="imageOne" type="file" name="imageOne" style="display: none;">
</label>
<div class="description" style="display: none"> <label for="descriptionOne">Beskrivning:</label><br>
    <textarea class="form-control" name="descriptionOne"></textarea><br>
</div>
</div>
<br>
<!-- end image one -->
<!-- image two -->
<label for="imageTwo">
    <div class="preview">
        <div class="imageSrc"><img style="width: 100px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png" /></div>
        <br>
        <input id="imageTwo" type="file" name="imageTwo" style="display: none;">
</label>
<div class="description" style="display: none"> <label for="descriptionTwo">Beskrivning:</label><br>
    <textarea class="form-control" name="descriptionTwo"></textarea><br>
</div>
</div>
<br>
<!-- end image two -->
<!-- image three -->
<label for="imageThree">
    <div class="preview">
        <div class="imageSrc"><img style="width: 100px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png" /></div>
        <br>
        <input id="imageThree" type="file" name="imageThree" style="display: none;">
</label>
<div class="description" style="display: none"> <label for="descriptionThree">Beskrivning:</label><br>
    <textarea class="form-control" name="descriptionThree"></textarea><br>
</div>
</div>
<br>
<!-- end image three -->

<div><button type="submit">Submit</button></div><br>


<script>
    const previews = document.querySelectorAll('.preview');

    previews.forEach((preview) => {
        preview.onchange = function(e) {
            preview.src = URL.createObjectURL(event.target.files[0]);
            //put the width and height style in CSS file-------------------------------------------------------------vvvv
            preview.closest('div').querySelector('.imageSrc').innerHTML = `<img src="${preview.src}" style="width: 100px; max-height: 100px;">`;
            preview.closest('div').querySelector('.description').style.display = 'block';
        };
    });
</script>

@include('footer')