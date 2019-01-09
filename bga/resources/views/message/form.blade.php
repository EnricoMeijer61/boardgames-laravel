<div class="container-fluid">
    <div class="collumn">
        <div class="col-">
            <div class="form-group">
                <strong>Title :</strong>
                {!! Form::text('title', null, ['placeholder' =>'title', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>

    <div class="col-">
        <div class="form-group">
            <strong>Beschrijving kort(max 200 teksen) :</strong>
            {!! Form::textarea('short_description', null, ['placeholder' =>'Beschrijving voor op de homepage', 'class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="col-">
        <div class="form-group">
            <strong>Description :</strong>
            {!! Form::textarea('description', null, ['placeholder' =>'Beschrijving', 'class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="col-">
        <div class="form-group">
            <strong>Plaatje link:</strong>
            {!! Form::text('image', null, ['placeholder' =>'image link', 'class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="col-">
        <a class="btn btn-xs btn-succes" href="{{ route('admin') }}">Back</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
</div>
