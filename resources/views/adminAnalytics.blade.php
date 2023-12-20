<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Chart Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/analytics.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="JS/analytics.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Murder-Free Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Analytics <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticsManage.html">Update Products </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticsAdd.html">Add Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="analyticDelete.html">Delete Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../main.html">Visit Site</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="mainContainer">
        <div class="card flexContainer ">
          <div id="chart-container"></div>
        </div>
        <div class="rowflexContainer">
          <div class="card flexContainer halfContainer">
            <div id="piechart_3d" ></div>
          </div>
          <div class="card flexContainer halfContainer">
            <div id="curve_chart"></div>
          </div>
        </div>
        
      </div>

      
    
</body>
</html>
