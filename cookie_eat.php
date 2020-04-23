<?php  
if (isset($_COOKIE['username']) && isset($_COOKIE['firstname']) && isset($_COOKIE['lastname'])) {
    echo '<h1>Set Cookies</h1>';
    echo '<ul>';
    echo '<li>Username: ' . $_COOKIE['username'] . '</li>';
    echo '<li>First Name: '. $_COOKIE['firstname'] . '</li>';
    echo '<li>Last Name: '. $_COOKIE['lastname'] . '</li>';

    // not sure if this is a good idea to put the code for the array cookies in here...?
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $key => $val) {
            echo '<li>' . ucfirst($key) . ' is ' . $val . '</li>';
        }
    } 

    echo '</ul>';
} else {
    echo '<h1>No cookies were set!</h1>';
}

?>
