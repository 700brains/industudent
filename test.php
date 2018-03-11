<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'php/login.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>
  </head>
  <body>
    <form>
      <input name="email" value="00:00:00.00"><br>
      <input name="password" value="0000-00-00"><br>
      <input name="submit" type="submit" value="Submit">
    </form>
  </body>
</html>