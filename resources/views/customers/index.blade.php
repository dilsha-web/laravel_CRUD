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

<h5 style="background-color: #f1f1f1;padding: 10px">Customers</h5>
@if (Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>

@endif
<button type="submit" class="btn btn-primary" style="margin: 20px; "> <a href="{{url('customers/create')}}" class="text-white" >Add Customer</a></button>
<br><br>
    <table class="table table-bordered" style="margin: 20px; width: 80%; text-align: center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Actions</th>
      
    </tr>

  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
     <td>{{$customer->id}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->mobile}}</td>
    <td><button type="submit" class="btn btn-primary"><a href="{{url('customers/edit/'.$customer->id)}}" class="text-white">Edit</a></button>|<button type="submit" class="btn btn-danger"><a href="{{url('customers/'.$customer->id)}}" class="text-white">Delete</a></button></td>
    </tr>
    @endforeach
  
  </tbody>
</table>



</body>
</html>