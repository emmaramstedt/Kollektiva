hyrut
@include('header')
<h2>Hyr ut din bostad!</h2>

<form action="/laddauppbostad" method="post">
    @csrf
    <label for="square_metres">square_metres</label>
    <input name="square_metres" id="square_metres" type="square_metres" placeholder="square_metres">

    <label for="number_inhabitants">number_inhabitants</label>
    <input name="number_inhabitants" id="number_inhabitants" type="number_inhabitants" placeholder="number_inhabitants">

    <label for="street">street</label>
    <input name="street" id="street" type="street" placeholder="street">

    <label for="street_number">Gatunummer</label>
    <input name="street_number" id="street_number" type="street_number" placeholder="street_number">

    <label for="post_code">post_code</label>
    <input name="post_code" id="post_code" type="post_code" placeholder="post_code">

    <label for="city">city</label>
    <input name="city" id="city" type="city" placeholder="city">

    <label for="move_in_date">move-in_date</label>
    <input name="move_in_date" id="move_in_date" type="move_in_date" placeholder="move_in_date">

    <label for="move_out_date">move-out_date</label>
    <input name="move_out_date" id="move_out_date" type="move_out_date" placeholder="move_out_date">

    <label for="description">description</label>
    <input name="description" id="description" type="description" placeholder="description">

    <label for="rent">rent</label>
    <input name="rent" id="rent" type="rent" placeholder="rent">
    <button action="submit">submit</button>
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

@include('footer')
