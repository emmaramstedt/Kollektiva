@include('header')
<h2 class="margins">Hyr ut din bostad!</h2>
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
            <p class="margins">steg 1 av 9</p>
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
            <p class="margins">steg 2 av 9</p>
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
            <p class="margins">steg 3 av 9</p>
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
            <p class="margins">steg 4 av 9</p>
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
                <input class="checky" type="checkbox" name="balcony" id="balcony">
                <label for="balcony">Balkong/uteplats</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="sauna" id="sauna">
                <label for="sauna">Bastu</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="bubblePool" id="bubblePool">
                <label for="bubblePool">Bubbelpool</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="fireplace" id="fireplace">
                <label for="fireplace">Kamin</label>
            </div>
            <br>
            <div class="radioWrapper">
                <input class="checky" type="checkbox" name="pool" id="pool">
                <label for="pool">Pool</label>
            </div>
            <br>
        </div>

        <div class="stepFive tab">
            <p class="margins" class="margins">steg 5 av 9</p>
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
            <p class="margins">Steg 6 av 9</p>
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
            <p class="margins">Steg 7 av 9</p>
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
            <p class="margins">Steg 8 av 9</p>
            <h3 class="margins">Vilken hyra hade du tänkt dig?</h3>
            <p class="margins">Enligt vår statistik på tusentals uthyrda bostäder skulle du kunna sätta hyran till: 8220 kr*.</p>
            <label class="margins" for="rent">Hyra</label>
            <input placeholder="Ange" name="rent" id="rent" type="number">
            <div class="infoText">
                <p class="margins">Hyresgästens månadskostnad är hyran + 10 % serviceavgift. Den hyran du anger är vad du får utbetalt varje månad. En serviceavgift på 5 % tillkommer till dig som hyresvärd.</p>
            </div>
        </div>

        <div class="stepNine tab">
            <p class="margins">Steg 9 av 9</p>
            <h3 class="margins">Lägg till bilder</h3>
            <p class="margins">Ta några bilder med din kamera eller din telefon. Bra bilder gör skillnad! Du kan alltid ta bort eller lägga till.</p>
            <div class="uploadPhotosWrapper">
                <!-- image One -->
                <div>
                    <label for="imageOne">
                        <div class="preview">
                            <div class="imageSrc">
                                <picture>
                                    <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                                    <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                                </picture>
                            </div>
                            <br>
                            <input id="imageOne" type="file" name="imageOne" style="display: none;">
                    </label>
                </div>
            </div>
            <!-- end image one -->
            <!-- image Two -->
            <div>
                <label for="imageTwo">
                    <div class="preview">
                        <div class="imageSrc">
                            <picture>
                                <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                                <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                            </picture>
                        </div>
                        <br>
                        <input id="imageTwo" type="file" name="imageTwo" style="display: none;">
                </label>
            </div>
        </div>
        <!-- end image Two -->
        <!-- image three -->
        <div>
            <label for="imageThree">
                <div class="preview">
                    <div class="imageSrc">
                        <picture>
                            <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                            <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                        </picture>
                    </div>
                    <br>
                    <input id="imageThree" type="file" name="imageThree" style="display: none;">
            </label>
        </div>
</div>
<!-- end image three -->
<!-- image Four -->
<div>
    <label for="imageFour">
        <div class="preview">
            <div class="imageSrc">
                <picture>
                    <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                    <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                </picture>
            </div>
            <br>
            <input id="imageFour" type="file" name="imageFour" style="display: none;">
    </label>
</div>
</div>
<!-- end image four -->
<!-- image five -->
<div>
    <label for="imageFive">
        <div class="preview">
            <div class="imageSrc">
                <picture>
                    <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                    <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                </picture>
            </div>
            <br>
            <input id="imageFive" type="file" name="imageFive" style="display: none;">
    </label>
</div>
</div>
<!-- end image five -->
<!-- image Six -->
<div>
    <label for="imageSix">
        <div class="preview">
            <div class="imageSrc">
                <picture>
                    <source media="(min-width: 990px)" srcset="{{asset('images/forms/choosephotodesktop.svg')}}">
                    <img src="{{asset('images/forms/choosephoto.svg')}}" alt="" />
                </picture>
            </div>
            <br>
            <input id="imageSix" type="file" name="imageSix" style="display: none;">
    </label>
</div>
</div>
<!-- end image Six -->

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
            document.getElementById("next").innerHTML = "Skicka in";
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

@include('footer')
