<?php

function exibirAviso($sessionKey, $message, $type = 'is-info') {
    if (isset($_SESSION[$sessionKey])) {
        echo "<div class='notification $type'><p>$message</p></div>";
        unset($_SESSION[$sessionKey]);
    }
}

?>