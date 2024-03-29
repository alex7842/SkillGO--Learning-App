<?php
// Start the session

echo "<script>
   
    const name = localStorage.getItem('username');
   
    window.location.href = 'config.php?username=' + encodeURIComponent(name);
</script>";
}
?>
