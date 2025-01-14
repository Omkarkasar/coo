<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .formdata{
            display: flex;
            flex-direction:column;
            align-items: center;
            justify-content: center;
            
        }
    </style>
</head>

<body>
    <form method="post" action="{{route('update',['id'=>$data->id])}}">
        @csrf
      <div class="formdata">
      <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" value="{{$data->email}}" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">{{$data->password}}</label>
                <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">{{$data->city}}</label>
                <input name="city" type="text" class="form-control" id="inputCity">
            </div>
        </div>
        <div class="form-group">
       
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </form>
    <script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>