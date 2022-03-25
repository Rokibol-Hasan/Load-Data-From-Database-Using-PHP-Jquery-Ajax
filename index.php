<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Jquery Ajax</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <td id="table-load">
          <input class="my-5 btn btn-primary" type="button" value="Load Data" id="load-button">
        </td>
        <h3 id="table-data"> Click Here To See Your Table Of Data </h3>

      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#load-button").on("click", function(e) {
        $.ajax({
          url: "load-ajax.php",
          type: "POST",
          success: function(data) {
            $("#table-data").html(data);
          }

        });
      });
    });
  </script>


  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>