<!doctype html>
<html>
        <style type="text/css">
                #form{font: bold 30px/30px Georgia, serif;}
                button{background: rgba(255,255,0,0.99);width250px;height:180px$
                #container{margin:0px;auto;width:80%;min-width:40%;}
        </style>
        <body>
                <div id = "container">
                        <form id = "form" action="test.php" method="post">
                                <center>
                                <button name="on">ON</button>
                                <button name="off">OFF</button>
                                <button name="blink">BLINK</button>
                        </form>
                </div>
        </body>
</html>

<?php
	if(isset($_POST['on']))
	{
		exec("sudo killall python");
		exec("sudo python /var/www/html/iris/pyscripts/testledON.py 2>&1",$output);
	}
	else if(isset($_POST['off']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/testledOFF.py");
        }
	else if(isset($_POST['blink']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/testledBLINK.py");
        }
?>



