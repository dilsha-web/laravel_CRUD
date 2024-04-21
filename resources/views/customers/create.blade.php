<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
<h5 style="background-color: #f1f1f1;padding: 10px">Add a new Customer</h5>
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        
        @endif
        <form action="{{url('customers/create')}}" method="post" style="width: 60%; margin:25px;">
        @csrf
        <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <br>
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email"  class="form-control" value="{{old('email')}}">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <br>
            
            <label for="mobile">Mobile</label>
            <input type="mobi" name="mobile" id="mobile"  class="form-control" value="{{old('mobile')}}">
            @error('mobile')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <br>

            

            <button class="btn btn-primary" color="white">Submit</button>
            <button class="btn btn-danger" ><a href="{{url('/customers')}}" class="text-white">Back</a></button>
        </form>
            
       
   
</body>
</html>