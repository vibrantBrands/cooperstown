<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>
<script type="text/javascript">
    (function() {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'https://cdn.commoninja.com/sdk/latest/commonninja.js';
      document.getElementsByTagName('head')[0].appendChild(script);
    })();
  </script>
<script src="<?php echo $view->getThemePath()?>/_js/lity.min.js"></script>
<script src="<?php echo $view->getThemePath()?>/_js/aos.js"></script>
<script src="<?php echo $view->getThemePath()?>/_js/main.js"></script>
<?php View::element('footer_required'); ?>

</body>
</html>
