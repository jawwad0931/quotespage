<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="nav bg-primary">
                    <h4>
                       <a class="nav-link active text-light" href="/">Quotes_Message</a>
                    </h4>
                    </nav> 
            </div>
        </div>
     </div>
     <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <a href="studentData/create" class="btn btn-outline-dark">Your Message</a>
            </div>
        </div>
     </div>
     <div class="container">
      <div class="row mt-5">
        <div class="col-8 col-sm-12">
          <table class="table mt-4">
            <thead>
              <tr>
                <th>Quote_Id</th>
                <th>Quote_Messages</th>
                <th class="">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($stdview as $detail)
              <tr>
                <td scope="row">{{$loop->index+1}}</td>
                <td>{{$detail->Message}}</td>
                <td>
                    <a href="stdData/{{$detail->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="stdData/{{$detail->id}}/delete" class="btn btn-danger btn-sm">delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>