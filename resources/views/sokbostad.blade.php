propertysearch

<form>
    @csrf
    <label for="area">
        <h2>Välj ett område</h2>
    </label>
    <input type="text" id="area" placeholder="område">

    <h2>Typ av boende</h2>
    <label for="rum">Rum</label>
    <input type="checkbox" id="rum" value="rum">

    <label for="hus">Hus</label>
    <input type="checkbox" id="hus" value="hus">

    <h2>Antal rum (visas bara om "hus" har valts)</h2>
    <select id="minAntalRum" name="minAntalRum">
        <option value="min">Min</option>
        <option value="1000">1</option>
        <option value="2000">2</option>
        <option value="3000">3</option>
        <option value="4000">4</option>
        <option value="5000">5</option>
        <option value="6000">6</option>
        <option value="7000">7</option>
        <option value="8000">8</option>
    </select>

    <select id="maxAntalRum" name="maxAntalRum">
        <option value="max">Min</option>
        <option value="1000">1</option>
        <option value="2000">2</option>
        <option value="3000">3</option>
        <option value="4000">4</option>
        <option value="5000">5</option>
        <option value="6000">6</option>
        <option value="7000">7</option>
        <option value="8000">8</option>
    </select>

    <h2>Hyra</h2>
    <select id="minHyra" name="minHyra">
        <option value="min">Min</option>
        <option value="1000">1000</option>
        <option value="2000">2000</option>
        <option value="3000">3000</option>
        <option value="4000">4000</option>
        <option value="5000">5000</option>
        <option value="6000">6000</option>
        <option value="7000">7000</option>
        <option value="8000">8000</option>
        <option value="9000">1000</option>
        <option value="10000">10000</option>
    </select>

    <select id="maxHyra" name="maxHyra">
        <option value="min">Max</option>
        <option value="1000">1000</option>
        <option value="2000">2000</option>
        <option value="3000">3000</option>
        <option value="4000">4000</option>
        <option value="5000">5000</option>
        <option value="6000">6000</option>
        <option value="7000">7000</option>
        <option value="8000">8000</option>
        <option value="9000">1000</option>
        <option value="10000">10000</option>
    </select>

    <h2>Yta</h2>
    <select id="minYta" name="minYta">
        <option value="min">Min</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
        <option value="60">60</option>
        <option value="70">70</option>
        <option value="80">80</option>
        <option value="90">90</option>
        <option value="100">100</option>
        <option value="110">110</option>
    </select>

    <select id="maxYta" name="maxYta">
        <option value="min">Max</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
        <option value="60">60</option>
        <option value="70">70</option>
        <option value="80">80</option>
        <option value="90">90</option>
        <option value="100">100</option>
        <option value="110">110</option>
    </select>

    <h2>Egenskaper</h2>

    <label for="balkong">Balkong</label>
    <input type="checkbox" id="balkong" value="balkong">

    <label for="garage">Garage</label>
    <input type="checkbox" id="garage" value="garage">

    <label for="diskmaskin">Diskmaskin</label>
    <input type="checkbox" id="diskmaskin" value="diskmaskin">

    <label for="husdjur">Tillåter husdjur</label>
    <input type="checkbox" id="husdjur" value="husdjur">

    <button type="submit">Sök</button>

</form>
