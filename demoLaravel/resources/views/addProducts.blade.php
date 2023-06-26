<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Products</h2>
                    </div>
                    <form action="{{ '/create' }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="color" name="color" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group ">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value= "Submit">
                        <a href="index.php" class= "btn btn-default">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
