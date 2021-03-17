<?php
session_destroy();
echo '<script>
        window.location="index.php?paginas=iniciar sesion";
    </script>';