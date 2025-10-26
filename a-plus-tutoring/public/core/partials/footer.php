    <!-- IMPORTED 3RD-PARTY MODULES -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="<?php echo SERVER_PATH . '/core/assets/libraries/jQuery.js'; ?>"></script>
    <!-- IMPORTED JS MODULES -->
    <?php echo Source\Handlers\Helpers\Classes\Template::importViewModule($viewData['path']); ?>
    <?php echo Source\Handlers\Helpers\Classes\Template::importPartials($viewData['path'], 'js'); ?>
</body>

</html>
