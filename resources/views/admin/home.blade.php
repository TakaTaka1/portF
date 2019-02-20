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
                <button type="submit" class="form-control col-md-12 btn-primary" id="analyzeBtn">Analyze</button>
            </form>
            </br>
            </br>
            </br>
            <form name="formList">
                <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col"><input type="checkbox" id="all" name="all" id="cloth_cover_01" value="test_co1" style="margin-right:10px;" onclick="allCheck();" />ALL</th>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><input type="checkbox" id="checkBox" name="cloth_cover[01]" id="cloth_cover_01" value="test_co1" /></th>
                      <td>1</td>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row"><input type="checkbox" id="checkBox" name="cloth_cover[02]" id="cloth_cover_02" value="test_co2" /></th>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row"><input type="checkbox" id="checkBox" name="cloth_cover[02]" id="cloth_cover_03" value="test_co3" /></th>                    
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
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

    }
    function allCheck () {
        // document.form名.要素名.checked;
        var check = document.formList.all.checked;
        var elements = document.querySelectorAll("#checkBox");
        for (var i=0; i<elements.length; i++){
            elements[i].checked = check;
        }
    }
</script>
@endsection
