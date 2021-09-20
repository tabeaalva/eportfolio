
    <style>
    body {
        min-height: 100vh;
        display:grid;
        grid-template-rows: auto 140px;
    }
    .menu {
        text-align:left;
        background-color: lightblue;
        display:flex;
        flex-direction: row;
        justify-content: space-between;
        width: 290px;
        height: 140px;
    }
    .list {
        color: black;
        list-style: none;
        
    }
    .list a {
        font-size: 20px;
        color: black; 
        text-decoration: none;
    }
    .sublist {
        display: none;
        color: black;
        background-color: lightblue;
        position: absolute;
        list-style: none;
    }
    .dropdown:hover > .sublist {
        display: block;
        
    }

</style>

<footer class ="menu">
    <nav>
<ul class="list">
    <li><a href="../index.php"> Das ePortfolio</a></li>
    <li class="dropdown"><a href="/journal/index.php"> Die Lerndokumentation</a><ul class="sublist">
            <li><a href="/journal/2021-08-20.php"> Kompetenzen</a></li>
            <li><a href="/journal/2021-08-27.php"> Iperka</a></li>
            <li><a href="/journal/2021-09-03.php"> Problemlösungskonzepte</a></li>
        </ul>    
    </li>
        
</ul>
</nav>
</footer>

