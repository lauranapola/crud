<?php
if(isset($_SESION['MESSAGE'])):
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Aviso:</strong> <?= $_SESSION['message']; ?>
            <button type="button"  class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
</div>
?>