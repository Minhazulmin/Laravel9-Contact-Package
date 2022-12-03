<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
     <div class="row">
      <div class="col-12  mt-5">
        <div class="card shadow-sm">
          <div class="card-header">
            <span>Contact us</span>
          </div>
           <div class="card-body">
            <form action="{{route('contact')}}" method="post">
              @csrf
             <div class="mb-3">
                <label for="exampleForm" class="form-label">Name</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-outline-info btn-sm">Send</button>
              </div>
              </form>
           </div>
        </div>
      </div>
    </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
