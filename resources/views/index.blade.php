<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Awesome Gallery</title>
  </head>
  <body onload="getData()">
    <div class="container">
        <h2 class="my-3">Awesome Gallery</h2>
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Upload Image
                </button>
            </div>
            <div class="col-md-8">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
            </div>
        </div>
        <hr class="my-4">
        <div class="row" id="contentRow">

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header bg-dark text-white">
            <h5 class="modal-title" id="uploadImage">Upload Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modalClose">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="imageUploadArea" id="dropZone">
                <p id="dropText">Drag and drop or click to select</p>
                <h3 class="d-none" id="validationMsg"></h3>
                <div class="fill d-none" id="fill">
                    <img src="" class="rounded mx-auto d-block dragImage" alt="image !" id="dropImage">
                </div>
                <input type="file" class="dropZoneFileSelect" id="uploadImage"/>
            </div>

            <div class="progressBar mt-3">
                <div class="bar-fill" id="progressBarFill">  
                    <div class="bar-fill-text">0%</div>
                </div>
            </div>

            <div class="d-flex mt-3">
                <p class="imgTitle mt-2">Image Title: </p>
                <input type="text" class="form-control ml-2" placeholder="Enter image title" id="imageTitle">
            </div>
            <small id="titleHelp" class="form-text d-none">Plase enter image title</small>

            <div class="d-flex justify-content-center mt-3">
                <button type="button" class="btn btn-primary w-25 disabled" id="uploadBtn">Upload</button>
            </div>

            <div class="uploadFinishMsg mt-3 d-none">
                <h6 class="mt-3">Upload Success !</h6>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modalCloseBottom">Cancel</button>
        </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>