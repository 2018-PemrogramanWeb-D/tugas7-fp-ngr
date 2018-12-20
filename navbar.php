<?php 
	$search_fun = $_SERVER['DOCUMENT_ROOT'];
   $search_fun .= "/tugas7-fp-ngr/search_fun.php";
   include_once($search_fun);

echo '
<a class="navbar-brand mr-0 mr-md-0" href="/tugas7-fp-ngr/"><img src="../../tugas7-fp-ngr/content/logo_small.svg" style="width:40px;height:40px;" class="d-inline-block align-top"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link " href="../../tugas7-fp-ngr/sport" >
                        Sports
                    </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="../../tugas7-fp-ngr/platformer" >
                        Platformer
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../tugas7-fp-ngr/rpg" >
                        RPG
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../tugas7-fp-ngr/simulation" >
                        Simulation
                    </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../tugas7-fp-ngr/rhythm" >
                        Rhythm
                    </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link"  href="../../tugas7-fp-ngr/fighting" >
                        Fighting
                    </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../tugas7-fp-ngr/strategy" >
                        Strategy
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../tugas7-fp-ngr/shooting" >
                        Shooting
                    </a>

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="../../tugas7-fp-ngr/search.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-success my-2 my-sm-0" type="submit" name="submit-search">Search</button>
            </form>
        </div>
	'
?>
