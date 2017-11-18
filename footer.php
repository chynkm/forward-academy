    <footer class="footer">
        <div class="container">
            <p class="text-muted">&copy; <?php echo date('Y'); ?> Forward Academy</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap-3/js/bootstrap.min.js"></script>
    <?php if(basename($_SERVER['REQUEST_URI']) == 'facilities.php'): ?>
    <script src="vendor/lightbox/js/lightbox.js"></script>
    <script type="text/javascript">
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'disableScrolling': true,
      'maxWidth': 9999,
      'maxHeight': 9999,
      'showImageNumberLabel': false
    })
    </script>
    <?php endif; ?>
    </body>
</html>
