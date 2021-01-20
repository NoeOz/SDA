<?php
 session_destroy();
 $_SESSION["numUsu"]="";
 echo '<script>
 
 let timerInterval
Swal.fire({
  title: "CERRAR SESIÓN",
  html: "<strong></strong> seconds.",
  timer: 2000,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      Swal.getContent().querySelector("strong")
        .textContent = Swal.getTimerLeft()
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.timer
  ) {
    console.log("I was closed by the timer")
  }
})

window.location="index.php?accion=catalogo";

</script>';

?>