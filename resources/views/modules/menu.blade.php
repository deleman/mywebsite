<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mega manue</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        
        .toggler{
            color:red;
            background-color:blue;
            flex-grow: 1;
            padding-top:10px;
            padding-bottom:10px;
            font-size:1.3rem;
            color:white;
            text-align:center;
            border-left:1px solid tomato;
            border-right:1px solid tomato;
        }
        *{
            color:white;
        }

        .toggle{
            border:1px solid cyan;
            background-color:orange;
            color:cyan;
            position: absolute;
            display: none;
            margin-left:auto;
            margin-right:auto;
            z-index: inherit;
            left:0;
            right:0;
            /*top:3%;*/
            list-style: none;
            -webkit-columns: 100px 3; /* Chrome, Safari, Opera */
            -moz-columns: 100px 3; /* Firefox */
            columns: 100px 3;
        }

        .toggler:hover .toggle{
            display: block;
        }

        .wrapper{

            display:flex;
            overflow:auto;

        }
        body{
            width:100%;
            margin:0px;
            padding:0px;
            overflow: hidden;
        }
       
    </style>
</head>
<body>
    <div class="wrapper">

        <div class="toggler">
            <a href="#">one</a>
            <ul class="toggle">
              <li>one</li>     
              <li>two</li>     
              <li>three</li>     
              <li>four</li>     
            </ul>    
        </div>  
        
        <div class="toggler">
            <a href="#">one</a>
            <ul class="toggle">
                <li>one</li>     
                <li>two</li>     
                <li>three</li>     
                <li>four</li>     

                <li>one</li>     
                <li>two</li>     
                <li>three</li>     
                <li>four</li>  

            </ul> 
        </div> 
            
        <div class="toggler">
            <a href="#">one</a>
            <ul class="toggle">
                <li>one</li>     
                <li>two</li>     
                <li>three</li>     
                <li>four</li>     

                <li>one</li>     
                <li>two</li>     
                <li>three</li>     
                <li>four</li>  
                <li>one</li>     
                <li>two</li>     
                <li>three</li>     
                <li>four</li>  

                </div>   
            </ul>   
        </div> 

        <hr >

        <div class="toggler">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
            </a>
            <div class=" px-4 dir toggle" aria-labelledby="navbarDropdownMenuLink">
                <p><a href="#">three one</a></p>
                <p><a href="#">three two</a></p>
                <p><a href="#">three tee</a></p>
            
                <p><a href="#">three one</a></p>
                <p><a href="#">three two</a></p>
                <p><a href="#">three tee</a></p>

                <p><a href="#">three one</a></p>
                <p><a href="#">three two</a></p>
                <p><a href="#">three tee</a></p>
            </div>  
        </div> 

    </div>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>