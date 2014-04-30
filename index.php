<!DOCTYPE html> <!-- html5 format-->
<!--

-->

    <head>
        <link rel="stylesheet" type="text/css" href="application/skins/css/style.css">
    <?php require 'application/main.php'; ?>

    </head>
    <body>
        
<div id="Widget"> 
               
<div id="dbLogin">
          
        <form action="test/testForm/form.php" method="post">

            <li id="submit1">           
                <a href="test/testForm/form.php">
                <input type="submit" value="Submit">
                </a>
            </li>
            <li>
                <textarea type="text" name="cjInput" rows="10" cols="50">
               Paste your input code here!
                </textarea>
            </li>
    
        </ul>
        </form>
 <?php/*the src url will be a output based on the Form/application results*/ ?> 
<iframe src="iframe.php">
</frame>

</div><!-- close dbLogin div-->

</div> <!-- close close Widget div-->

    </body>
