<!DOCTYPE html>
<html>
<head>
    <title>Capture webcam image</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
  
<div class="container">
  
   
    <form method="POST" action="{{url('member/TakeSelfie')}}"enctype="multipart/form-data">{{csrf_field()}}
        <div class="row">
            <div class="col-md-5">
                <div id="my_camera"></div>
                <br/>
                <input type=button class="btn btn-success" value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-2">
               
            </div>
            <div class="col-md-5">
                <div id="results">Your captured image will appear here...</div>
            </div>

            <div class="col-md-12"></div>
            <div class="col-md-12"></div>
          
             <div class="col-md-12">
                <textarea class="form-control" name="comment" placeholder="Write Your Comment Here"></textarea>
            </div>

            <div class="col-md-12 text-center">
                <br/>
                <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-primary">
                        </div>
            </div>
        </div>
    </form>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 390,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>
</html>