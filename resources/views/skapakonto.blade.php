skapa konto
<form method="POST" action="/skapakonto">
    @csrf
    <div class="form-group">
        <label for="name">Username</label>
        <input name="name" id="name" type="name" class="form-control" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" id="email" type="email" class="form-control" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" id="password" type="password" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Create account</button>
</form>
