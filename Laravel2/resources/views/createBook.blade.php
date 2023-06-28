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
                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label>AuthorID</label>
                            <input type="text" name="authorid" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group ">
                            <label>ISBN</label>
                            <input type="text" name="isbn" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group ">
                            <label>Pub_Year</label>
                            <input type="text" name="pub_year" class="form-control" value = ""  required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group ">
                            <label>Available</label>
                            <input type="text" name="available" class="form-control" value = ""  required>
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
