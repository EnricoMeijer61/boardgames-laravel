<div class="container-fluid">
    <div class="collumn">
        <div class="col-">
            <div class="form-group">
                <strong>Title :</strong>
                {!! Form::text('naam', null, ['placeholder' =>'naam spel', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="col-">
        <a class="btn btn-xs btn-succes" href="{{ route('home') }}">Back</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
</div>
