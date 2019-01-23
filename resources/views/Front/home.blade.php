<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>demo</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            .dropbtn {
                background-color: #3498DB;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #2980B9;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 5px 15px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {background-color: #ddd;}

            .show {display: block;}
        </style>
    </head>
    <body>
    <div class="container" id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Chat Application</a>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="{{route('userLogout')}}" class="btn btn-info">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Online(Friends)</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>

        </div>
        <div class="col-4">
            <ul>
                <li class="list-group-item active">chat room</li>
                <example></example>
                <input type="text" placeholder="Type message....." class="form-control" v-model='message' @keyup.enter='send'>
            </ul>
        </div>


    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    </body>
</html>