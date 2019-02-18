@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AdminDashboard</div>
                
                <div class="card-body">
                    You are logged in!
                </div>
            </div>
            </br>
            </br>
            <form method="post" action="{{ route('admin.analyze') }}">
                @csrf
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url">
                </div>
                <button type="submit" class="form-control col-md-8 offset-2 btn-primary" id="analyzeBtn">Analyze</button>
            </form>
        </div>        
    </div>
</div>
<script>
    window.onload = pageLoaded;
    function pageLoaded(event){
        var elem = document.getElementById('analyzeBtn');
        elem.onclick = addProduct;
    }
    function addProduct(){
        var url = document.getElementById('url').value;
        // var pattern = new RegExp('^/http(s)?:\/\/([\w-]+\.)+[\w-]+(\/[\w-.\/?%&=]*)?/'); // fragment locator

        //   if(!pattern.test(url)) {
        //     return false;
        //   } else {
        //     alert('invalid one');
        //     return true;
        //   }        
        // if value is not type of url
        // appear error message

    }
</script>
@endsection
