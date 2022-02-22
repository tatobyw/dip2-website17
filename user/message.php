<?php
if (isset($_SESSION['message'])) {
    echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hi!</strong>';
    echo $_SESSION['message'];
    echo '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}
