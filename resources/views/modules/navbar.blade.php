
<nav class="navbar navbar-expand-sm navbar-dark bg-dark position-relative">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mynav navbar-collapse dir" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <div class="b-right text-center">
                    <a class="nav-link " href="#">صفحه اصلی <span class="sr-only">(current)</span></a>
                </div>
            </li>
            <li class="nav-item">
                <div class="b-right text-center">
                    <a class="nav-link " href="#">مقالات</a>
                </div>
            </li>
            <li class="nav-item">
                <div class="b-right text-center">
                    <a class="nav-link border-colored" href="#"> کتابخانه</a>
                </div>
            </li>
            <li>
                <div class="nav-item toggler">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        آموزشی ها
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
            </li>
          </ul>
        </div>
      </nav>



@push('css')
 .dir{
     direction:rtl !important;
 }
 .toggler{
    color:red;
    flex-grow: 1;
    text-align:center;
    border-left:1px solid tomato;
    border-right:1px solid tomato;
    font-size:1.3rem;

}
*{
    color:white;
}
.b-right a, .b-left a {
    font-size:1.3rem;
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

.b-right{
    border-right:1px solid tomato;
}
.b-left{
    border-left:1px solid tomato;
}


@endpush
