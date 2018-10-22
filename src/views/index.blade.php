<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouTube Downloader</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="margin-top:3%">
        <ul class="nav justify-content-center" style="background-color:black">
            <li class="nav-item">
                <a class="nav-link active" href="{{URL::to('/index')}}">YouTube Video Downloader</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('get-links')}}" method="post">
                    <input type="text" name="url" id="url" class="form-control" placeholder="Enter YouTube URL">
                    <button type="submit" id="submit" class="btn btn-block">Get Links</button>
                </form>
            </div>
        </div>
    </div>
    @if(!empty($data))
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    {!!$data!!}
                </div>
            </div>
        </div>
    @endif
    <footer class="footer">
        <div class="container-fluid" style="margin-top:5%">
            <div class="text-center text-light" style="background-color: black">
                Copyright &copy; 2018. Created By KeTan KuMbhar
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                if($('#url').val() == ''){
                    alert('Please enter URL');
                    return false;
                }
            });
        });
    </script>
</body>
</html>