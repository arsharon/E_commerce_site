<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body>
    
    <section style="padding-top:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Contact Us
                    </div>
                    <div class="card-body">

                        @if(Session('MessageSent'))
                        <div class="alert alert-success" role="alert">
                        {{Session('MessageSent')}}
                        </div>
                        @endif

                        <form action="contact" method="POST" enctype="multipart/from-data">
                            @csrf
                            <div class="form-group" style="margin:15px">
                                <label for="firstName">First Name:</label>
                                <input type="text" name="fName" class="form-control" required>
                            </div>

                            <div class="form-group" style="margin:15px">
                                <label for="lastName">Last Name:</label>
                                <input type="text" name="lName" class="form-control" required>
                            </div>

                            <div class="form-group" style="margin:15px">
                                <label for="email">Email:</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>

                            <div class="form-group" style="margin:15px">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="form-group" style="margin:15px">
                                <label for="msg">Message:</label>
                                <textarea name="msg" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float:right" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>