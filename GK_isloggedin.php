<?php

//this page has function to check if any user has logged in
//rn it only checks if any user has logged in but we can also use this page to add functions to check which user has logged in
function isloggedin(){
    if(isset($_SESSION["email"]))
        if(isset($_SESSION))
            if($_SESSION["loggedin"]==true)
                return true;
    return false;
}