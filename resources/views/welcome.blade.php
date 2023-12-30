<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth laravel</title>
</head>
<style>
    .container{
        padding: 100px;
        display: grid;
        grid-template-columns: 1fr 1fr;    
        column-gap: 40px;
        
    }
    .grid1{
        background-color: black;
        color: white;
    }
    /* a{
        text-decoration: none;
        width: 25px;
        height: 30px;

    } */
    .grid{
        justify-items: end/start;
        justify-content: center;
        display: flex;
        grid-template-columns: auto;    
        column-gap: 10px;
        
        
    }
    .grid2{
        padding: 40px;
        justify-content:space-between ;
        display: grid;
        grid-template-rows: auto;   
        column-gap: 10px; 
      
        
    }
    input{
        width: 500px;
        height: 40px;
        border:solid 1px black;
        border-radius: 10px 10px 10px 10px;
        /* color: white; */
        /* background-color: rgba(0, 0, 0, 0.238); */
    }
    a{
        width: 80px;
        height: 40px;
        text-decoration: none;
        /* border:solid 1px black;
        border-radius: 10px 10px 10px 10px;
        color: white;
        background-color: rgba(0, 0, 0, 0.238); */
    }
</style>
<body>
    <div class="container">
        <div class="grid1">
<img src="./location.png" alt="img">
        </div>
        <div class="grid2">
            <form action="{{ route('login') }}" method="post" >
                @csrf
                <div class="grid">
                    <input type="text" placeholder="Email" name="email">
                </div>
                <br>
                <div class="grid">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <br>
                <div class="grid">
                    <input type="submit" value="Login" >
                    <br>
                    {{-- <a href="{{ route('login') }}" >Login</a> --}}
                      {{-- <input type="submit"  value="Inscription" > --}}
            
                </div>
                <br>
                <br>
                <span>vous n'avez pas de compte <a href="{{ route('register') }}">Inscription</a></span>
            </form>
            <div>
            <br>
              
            </div>
        </div>
        
           
        
    </div>
</body>
</html>