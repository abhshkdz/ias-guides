<html>
  <head>
    
    <title>IAS Guides</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <script type="text/javascript" src="assets/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery.datatables.min.js"></script>
    
    <script type="text/javascript">
      $(function() {
        $.getJSON('data/list.json', function(data){
          var html = '';
          for (i in data) {
            html += '<tr><td>' + data[i].id + '</td><td>' + data[i].institute + '</td><td>' + data[i].specialization + '</td><td>' + data[i].interest + '</td><td>' + data[i].professor + '</td></tr>';
          }
          $('tbody').html(html);
          $('table').dataTable({"bPaginate":false, "bFilter":true, "bInfo":false, "aaSorting":[[0,'asc']]});
        });
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
          
          </tbody>
        </table>
      
    </div>

  </body>
</html>
