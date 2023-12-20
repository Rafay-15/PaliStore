<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/analytics.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Murder-Free Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="adminAnalytics.html">Analytics </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="analyticsManage.html">Update Products </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Add Product<span class="sr-only">(current)</span></a>
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
        <div class="mTitle">
            <h3>
                Add Product
            </h3>
        </div>
        <div class="mCard">
            <div style="margin: 1%;">
                <input type="text" class="txtinput" placeholder="Enter Product ID">
            <button>Search</button>
            </div>
            
            <div id="detailContainer">
                <div class="textarea-container">
                    <textarea name="prodDetail" id="txtDetails" cols="60" rows="15"></textarea>
                    <div class="textarea-hint">
                        Add Product Details in JSON format
                        e.g:    <br>
                        {
                            "productId": "123456", <br>
                            "productName": "Smartphone",
                        }
                    </div>
                </div>
                  <label for="fileInput">Add Product Images</label>
                  <input type="file" name="" id="" accept="image/*">
                  
                  <br>
                <button id="btn">Add Product</button>
            </div>
        </div>
      </div>
    
</body>
</html>