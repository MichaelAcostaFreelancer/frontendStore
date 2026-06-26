<footer class="footer">
  <p class="footer__texto">
    Front End Store - Todos los derechos reservados <?php echo date('Y');  ?> &copy;
  </p>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navegacion__enlace');
    const currentPath = window.location.pathname.split("/").pop(); // Obtiene solo el nombre del archivo

    links.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('navegacion__enlace--activo');  // Marca como activo
        } else {
            link.classList.remove('navegacion__enlace--activo'); // Elimina clase activa de otros enlaces
        }
    });
});
</script>

