  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="js/jquery.grid-a-licious.js"></script>
  <script src="js/jquery.flexverticalcenter.js"></script>
  <script type="text/javascript"> //Grid-a-licious trigger
    $(document).ready(function () {
      $(".work-wrapper").gridalicious({
      		gutter: 20,
          width: 325,
          animate: true,
          animationOptions: {
                  speed: 200,
                  duration: 300
          },
      });
    });
	</script>
  <script>
    $(document).ready(function() {
      $('#center').flexVerticalCenter();
    });
  </script>
</body>
</html>