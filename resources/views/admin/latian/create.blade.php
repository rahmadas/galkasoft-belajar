<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<br><br><br><br><br>
  <div class="container">

   
    <form method="post" action="{{ route('latian.store') }}">
      @csrf
      <label for="Name">Name</label>
      <input class="@error('name') is-invalid @enderror" type="text" name="name" id="name"><br><br>
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="Name">Email</label>
      <input type="email" name="email" id="email"><br><br>
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      <label for="date">Birthday :</label>
      <!-- <input type="datetime-local" id="birthdaytime" name="birthdaytime"> -->
      <input type="date" id="date" name="date" data-date="" data-date-format="dd/mm/yyyy"><br><br>
      @error('date')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror


      <label for="Referral" >Referral</label>
    <select name="referral" id="referral">
      @foreach ($users as $user)
      <option value="{{$user->name}}">{{$user->name}}</option>
      @endforeach
    </select>
    @error('referral')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

      <br><br>
      <input type="submit" name="submit">
    </form>

  </div>














  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>