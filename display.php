
    <!DOCTYPE html>
    <html lang="en">
    <head>
      
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    
    <body>
        
        <div class = "container">
            <div class = "col-lg-12">
            <h1><u>Display Table Data</u> :- </h1>
            <table class = "table table-striped table-hover table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name </th>
                    <th>Password</th>
                </tr>

                <?php
    include 'conn.php';
    
    $q = "select * from employee";

    $query = mysqli_query($conn, $q);

    while($res = mysqli_fetch_array($query)){
        ?>


                <tr>
                    <td><?php echo $res['Id'] ?></td>
                    <td><?php echo $res['Name'] ?> </td>
                    <td><?php echo $res['Password'] ?></td>
                </tr>

                <?php
    }

    ?>
            </table>
        </div>
        </div>

    </body>
    </html>