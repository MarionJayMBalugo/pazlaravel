<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css"  href="{{ asset('/css/che.css') }}">
        <!-- Styles -->
       
    </head>
    <h1>LIST OF DATA</h1>
    <a href="{{route('gotoCreate')}}">add information</a>
    <body>
    <table border=1 style="border-color:violet"   table align="center" >
    <tr>
    <th>first_name</th>
    <th>middle_name</th>
    <th>last_name</th>  
    <th>age</th>
    <th>address</th>
    <th>email</th>
   <th>edit</th>
   <th>delete</th>
   
    </tr>
    
    @foreach($human as $hum)
        <tr>
            <td>{{$hum['first_name']}}</td>
            <td>{{$hum['middle_name']}}</td>
            <td>{{$hum['last_name']}}</td>
            <td>{{$hum['age']}}</td>
            <td>{{$hum['address']}}</td>
            <td>{{$hum['email']}}</td>
           
          <td><a href="delete/{{$hum['id']}}"><button name="delete" >delete</button></td>  
          <td><a href="edit/{{$hum['id']}}"><button name="edit" >edit</button></td>  
        </tr>
    @endforeach
    </table>
     </body>
</html>
