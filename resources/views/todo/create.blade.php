@extends('layout.app')

@section('body')



<div class="col-lg-10 col-lg-offset-10 text-center">
    <br>
    <a href="/todo" class="btn btn-info">Back</a>
    <center><h1>Create New Item</h1></center>
    <form action="/todo" method="post">   
        
    {{csrf_field()}}
    <fieldset>   
        <div class="form-group">
            <div class="col-lg-10">
            <label for="exampleTextarea" class="float-lg-left">List Item:</label>
            <textarea class="form-control" name="body" rows="5"></textarea>
                
        <br>        
            <button type="submit" class="btn btn-success float-lg-left">Submit</button>
        </div>
    </div>
    </fieldset>         
    </form>
</div>


@endsection