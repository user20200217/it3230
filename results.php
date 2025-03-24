<html lang="en">
    <link rel="stylesheet" href="main.css">
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>=========Dream Big Auto=========</h1>
            </div>
            <div id="nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="browse.html">Browse</a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div id="main_grid3">
<?php
    if (isset($_POST['year']) && isset($_POST['make']) && isset($_POST['model'])) {
        print("<h2>You searched: ".$_POST['year']." ".$_POST['make']." ".$_POST['model']."</h2>");
        if ($_POST['year']==2010 && strtolower($_POST['make'])=='chevy' && strtolower($_POST['model'])=='hhr') {
            print("<style>\n");
            print("#main_grid3 {\n");
            print("grid-template-areas: \"h2 h2 h2 h2\"");
            print("\"item1       item2       item3       item4\";");
            print("}\n");
            print("</style>\n");
            print("<div id=\"item1\"><div></div><a href=\"details.html\">2010 Chevy HHR<br>$1500</a></div>\n");
            print("<div id=\"item2\"><div></div><a href=\"details.html\">2010 Chevy HHR<br>$1500</a></div>\n");
            print("<div id=\"item3\"><div></div><a href=\"details.html\">2010 Chevy HHR<br>$1500</a></div>\n");
            print("<div id=\"item4\"><div></div><a href=\"details.html\">2010 Chevy HHR<br>$1500</a></div>\n");
        }
    }
?>
            </div>
            <div id="footer">
                <p class="small italic">Copyright &copy; 2020 Dream Big Auto<br><a href="mailto:Kai@Chi.com">Kai@Chi.com</a></p>
            </div>
        </div>
    </body>
</html>