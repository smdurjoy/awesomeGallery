<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Awesome Gallery</title>
  </head>
  <body>
    <div class="container">
        <h2 class="my-3">Awesome Gallery</h2>
        <div class="row">
            <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Upload Image
            </button>
            </div>
            <div class="col-md-8">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block image" alt="image !">
                <p>Image Title</p>
                <a href="#" class="removeImg"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block image" alt="image !">
                <p>Image Title</p>
                <a href="#" class="removeImg"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block image" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block image" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block image" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
            <div class="col-md-2 text-center">
                <img src="https://source.unsplash.com/random/150x150" class="rounded mx-auto d-block" alt="image !">
                <p>Image Title</p>
                <a href="#"><i class="fas fa-trash-alt"></i> Remove</a>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark text-white">
            <h5 class="modal-title" id="exampleModalCenterTitle">Upload Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="imageUploadArea">
                Drag and drop or click to select
            </div>
            <div class="progressBar mt-3">
                <div class="bar-fill">
                    <div class="bar-fill-text"></div>
                </div>
            </div>
            <div class="d-flex mt-3 align-items-center">
                <p class="imgTitle mt-3">Image Title: </p>
                <input type="text" class="form-control ml-2" placeholder="Enter image title">
            </div>

            <div class="uploadFinishMsg mt-3 d-none">
                <h5>Processed File</h5>
                <div class="uploadedFiles">
                    <img src="https://source.unsplash.com/random/150x150" class="img-thumbnail" alt="image !">
                    <span>Success</span>
                    <h6 class="mt-3">Image Title </h6>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Upload</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>