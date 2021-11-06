<h1>Selamat Datang {{ auth()->user()->name }}</h1>

<form action="/logout" method="post">
   @csrf
<button class="btn btn-danger">Logout</button>
</form>