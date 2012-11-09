<?php
  include ('config.php');
  $pdo = new PDO('mysql:host=localhost;dbname='.$DB_NAME, $DB_USER, $DB_PASS);
  $query = $pdo -> query ("SELECT * FROM guides");
  $guides = $query -> fetchAll (PDO::FETCH_ASSOC);
?>
<html>
  <head>
    
    <title>IAS Guides</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery.datatables.min.js"></script>
    
    <script type="text/javascript">
      $(function() {
        // Stuff to do as soon as the DOM is ready;
        $('table').dataTable({"bPaginate":false, "bFilter":true, "bInfo":false, "aaSorting":[[0,'asc']]});
      });
    </script>

    <style type="text/css">
      .dataTables_filter {
        margin: 20px 0;
      }
      .dataTables_filter label {
        font-size: 20px;
      }
      .dataTables_filter input {
        font-size: 20px;
        height: 30px;
        width: 300px;
        padding: 5px;
      }
    </style>

  </head>
  <body>

    <div class="container">
      
      <header class="jumbotron subhead" id="overview">
        <div class="row">
          <div class="span6">
            <h1>Indian Academy of Sciences</h1>
            <p class="lead">Complete list of guides.</p><p> Click on column headers to sort.</p>
          </div>
        </div>
      </header>

        <table class='table table-bordered table-striped'>
          <thead>
            <tr>
              <th>ID</th>
              <th>Institute</th>
              <th>Specialization</th>
              <th>Interest</th>
              <th>Professor</th>
            </tr> 
          </thead>
          <tbody>
          <?
            foreach ($guides as $index => $guide) {
              echo "<tr><td>".$guide['id']."</td><td>".$guide['institute']."</td><td>".$guide['specialization']."</td><td>".$guide['interest']."</td><td>".$guide['professor']."</td>";
            }
          ?>
          </tbody>
        </table>
      
    </div>

  </body>
</html>
