@include('header')
<h2>Hyr ut din bostad!</h2>
<div class="formWrapper">

    <div class="formStart">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <form action="">
            <h3>Skapa annons</h3>
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
            <div class="firstNextButtonWrapper">
                <button class="firstNextButton">Nästa</button>
            </div>

    </div>

    <div class="stepOne">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>steg 1 av 9</p>
        <h3>Vad vill du hyra ut?</h3>
        <p>Hel bostad eller rum?</p>
        <div class="radioWrapper">
            <input type="radio" id="room" name="living" value="room">
            <label for="room">Ett rum</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="radio" id="house" name="living" value="house">
            <label for="house">Hela bostaden</label>
        </div>
        <br>
        <p>Hyr du ut möblerat?</p>
        <div class="radioWrapper">
            <input type="radio" id="furniture" name="furnished" value="furniture">
            <label for="furniture">Möblerat</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="radio" id="noFurniture" name="furnished" value="noFurniture">
            <label for="noFurniture">Omöblerat</label>
        </div>
        <br>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepTwo">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>steg 2 av 9</p>
        <h3>Hur stor är bostaden?</h3>
        <p>Storlek</p>
        <label for="size"></label>
        <input placeholder="Ange" type="number" name="size" id="size" min="5" max="1000">
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
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepThree">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>steg 3 av 9</p>
        <h3>vilken adress har bostaden?</h3>
        <p>Vi behöver din fullständiga adress för att kunna visa ditt hem på en karta. Endast gatunamnet syns i annonsen.</p>
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
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepFour">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>steg 4 av 9</p>
        <h3>Vilka bekvämligheter finns i bostaden?</h3>
        <p>Kök</p>
        <div class="radioWrapper">
            <input type="checkbox" name="kylskåp" id="kylskåp">
            <label for="kylskåp">Kylskåp</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="fridge" id="fridge">
            <label for="fridge">Frys</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="oven" id="oven">
            <label for="oven">Ugn</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="Spis" id="Spis">
            <label for="Spis">Spis</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="dishwasher" id="dishwasher">
            <label for="dishwasher">Diskmaskin</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="microwave" id="microwave">
            <label for="microwave">Microvågsugn</label>
        </div>
        <p>Badrum</p>
        <div class="radioWrapper">
            <input type="checkbox" name="shower" id="shower">
            <label for="shower">Egen dusch</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="toilet" id="toilet">
            <label for="toilet">Egen toalett</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="bathtub" id="bathtub">
            <label for="bathtub">Eget badkar</label>
        </div>
        <br>
        <p>Tvätt</p>
        <div class="radioWrapper">
            <input type="checkbox" name="washmachin" id="washmachin">
            <label for="washmachin">Tvättmaskin</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="dryer" id="dryer">
            <label for="dryer">Torktumlare</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="laundry" id="laundry">
            <label for="laundry">Gemensam tvättstuga</label>
        </div>
        <br>
        <p>Populär</p>
        <div class="radioWrapper">
            <input type="checkbox" name="balcony" id="balcony">
            <label for="balcony">Balkong/uteplats</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="sauna" id="sauna">
            <label for="sauna">Bastu</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="bubblePool" id="bubblePool">
            <label for="bubblePool">Bubbelpool</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="fireplace" id="fireplace">
            <label for="fireplace">Kamin</label>
        </div>
        <br>
        <div class="radioWrapper">
            <input type="checkbox" name="pool" id="pool">
            <label for="pool">Pool</label>
        </div>
        <br>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepFive">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>steg 5 av 9</p>
        <h3>Mer om bostaden och dess skick</h3>
        <p>sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
        <label for="year">Bostadens byggnadsår</label>
        <br>
        <input placeholder="Ange" name="year" id="year" type="number">
        <br>
        <div class="radioWrapper">
            <input name="year" id="year" type="radio">
            <label for="year">Vet ej</label>
        </div>
        <br>
        <label for="bathroom">Badrum - år sedan renovering</label>
        <br>
        <input placeholder="Ange" name="bathroom" id="bathroom" type="number">
        <br>
        <div class="radioWrapper">
            <input name="bathroom" id="bathroom" type="radio">
            <label for="bathroom">Vet ej</label>
        </div>
        <br>
        <label for="kitchen">Kök - år sedan renovering</label>
        <br>
        <input placeholder="Ange" name="kitchen" id="kitchen" type="number">
        <br>
        <div class="radioWrapper">
            <input name="kitchen" id="kitchen" type="radio">
            <label for="kitchen">Vet ej</label>
        </div>
        <br>
        <label for="energy">Energiklass (A++, A+, A, B, C, D, E)</label>
        <br>
        <input placeholder="Ange" name="energy" id="energy" type="text">
        <br>
        <div class="radioWrapper">
            <input name="energy" id="energy" type="radio">
            <label for="energy">Vet ej</label>
        </div>
        <br>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepSix">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>Steg 6 av 9</p>
        <h3>När vill du hyra ut bostaden?</h3>
        <label for="moveIn">Inflyttningsdatum</label>
        <br>
        <input type="date" id="moveIn" name="moveIn">
        <br>
        <div class="radioWrapper">
            <input id="moveInTwo" name="moveInTwo" type="radio">
            <label for="moveInTwo">Snarast</label>
        </div>
        <br>
        <label for="moveOut">Utflyttningsdatum</label>
        <br>
        <input type="date" id="moveOut" name="moveOut">
        <br>
        <div class="radioWrapper">
            <input id="moveOutTwo" name="moveOutTwo" type="radio">
            <label for="moveOutTwo">Snarast</label>
        </div>
        <br>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepSeven">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>Steg 7 av 9</p>
        <h3>Beskriv din bostad</h3>
        <p>Sökande är ofta intresserade av renoveringar och när huset byggdes.</p>
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
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepEight">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>Steg 8 av 9</p>
        <h3>Vilken hyra hade du tänkt dig?</h3>
        <p>Enligt vår statistik på tusentals uthyrda bostäder skulle du kunna sätta hyran till: 8220 kr*.</p>
        <label for="rent">Hyra</label>
        <input placeholder="Ange" name="rent" id="rent" type="number">
        <div class="infoText">
            <p>Hyresgästens månadskostnad är hyran + 10 % serviceavgift. Den hyran du anger är vad du får utbetalt varje månad. En serviceavgift på 5 % tillkommer till dig som hyresvärd.</p>
        </div>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Nästa</button>
        </div>
        </form>
    </div>

    <div class="stepNine">
        <div class="closeFormWrapper">
            <button class="closeForm">
                <p>Stäng formulär</p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 1.75L18.25 0L10 8.25L1.75 0L0 1.75L8.25 10L0 18.25L1.75 20L10 11.75L18.25 20L20 18.25L11.75 10L20 1.75Z" fill="#FCA82B" />
                </svg>
            </button>
        </div>
        <p>Steg 9 av 9</p>
        <h3>Lägg till bilder</h3>
        <p>Ta några bilder med din kamera eller din telefon. Bra bilder gör skillnad! Du kan alltid ta bort eller lägga till.</p>
        <div class="uploadImages">
            <svg width="126" height="126" viewBox="0 0 126 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M63.7748 56.4783C63.6828 56.3606 63.5651 56.2655 63.4308 56.2C63.2965 56.1346 63.149 56.1006 62.9996 56.1006C62.8502 56.1006 62.7028 56.1346 62.5685 56.2C62.4342 56.2655 62.3165 56.3606 62.2245 56.4783L48.4432 73.914C48.3296 74.0591 48.2591 74.2332 48.2398 74.4165C48.2205 74.5997 48.2531 74.7847 48.334 74.9503C48.4148 75.1159 48.5407 75.2554 48.6971 75.3528C48.8535 75.4503 49.0341 75.5017 49.2184 75.5013H58.3116V105.328C58.3116 105.869 58.7545 106.312 59.2959 106.312H66.6788C67.2202 106.312 67.6631 105.869 67.6631 105.328V75.5136H76.7809C77.6053 75.5136 78.0606 74.5662 77.5561 73.9263L63.7748 56.4783Z" fill="#033F33" />
                <path d="M99.8402 45.1213C94.2047 30.2572 79.8451 19.6875 63.0246 19.6875C46.2041 19.6875 31.8445 30.2449 26.209 45.109C15.6639 47.8775 7.875 57.4875 7.875 68.9062C7.875 82.5029 18.8877 93.5156 32.4721 93.5156H37.4062C37.9477 93.5156 38.3906 93.0727 38.3906 92.5312V85.1484C38.3906 84.607 37.9477 84.1641 37.4062 84.1641H32.4721C28.3254 84.1641 24.4248 82.5152 21.5209 79.5252C18.6293 76.5475 17.0912 72.5361 17.2266 68.3771C17.3373 65.1287 18.4447 62.0771 20.4504 59.5055C22.5053 56.8846 25.3846 54.9773 28.5838 54.1283L33.2473 52.9102L34.9576 48.4066C36.0158 45.6012 37.4924 42.9803 39.3504 40.6055C41.1847 38.2517 43.3575 36.1825 45.798 34.4654C50.8553 30.9094 56.8107 29.0268 63.0246 29.0268C69.2385 29.0268 75.1939 30.9094 80.2512 34.4654C82.6998 36.1881 84.8654 38.2553 86.6988 40.6055C88.5568 42.9803 90.0334 45.6135 91.0916 48.4066L92.7896 52.8979L97.4408 54.1283C104.11 55.9248 108.773 61.991 108.773 68.9062C108.773 72.9791 107.186 76.8182 104.307 79.6975C102.895 81.1178 101.215 82.2439 99.3648 83.0106C97.5146 83.7772 95.5307 84.1693 93.5279 84.1641H88.5938C88.0523 84.1641 87.6094 84.607 87.6094 85.1484V92.5312C87.6094 93.0727 88.0523 93.5156 88.5938 93.5156H93.5279C107.112 93.5156 118.125 82.5029 118.125 68.9062C118.125 57.4998 110.361 47.9021 99.8402 45.1213Z" fill="#033F33" />
            </svg>
            <!-- Dunno if this solution works? either way: forbidden javascript, I know. -->
            <button class="imageButton" onclick="document.getElementById('getFile').click()">Ladda upp bilder</button>
            <input type='file' id="getFile" style="display:none">
        </div>
        <div class="buttonWrapper">
            <button class="backButton">
                < Tillbaka</button>
                    <button class="nextButton">Skicka in?</button>
        </div>
        </form>
    </div>
</div>
@include('footer')