<div class="container-fluid">
    <div class="collumn">
        <div class="col-">
            <div class="form-group">
                <strong>naam :</strong>
                {!! Form::text('name', null, ['placeholder' =>'Naam game', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col-">
            <div class="form-group">
                <strong>Aantal spelers(max 4) :</strong>
                {!! Form::number('nop', null, ['placeholder' =>'Minimaal aantal spelere', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col-">
            <div class="form-group">
                <strong>Maximale Speeltijd :</strong>
                {!! Form::number('duration', null, ['placeholder' =>'Speeltijd', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="collumn">    
        <div class="col-">
            <div class="form-group">
                <strong>Beschrijving :</strong>
                {!! Form::textarea('description', null, ['placeholder' =>'Beschrijving', 'class' => 'form-control','style' =>'height:150px'] ) !!}
            </div>
        </div>
        <div class="col-">
            <a class="btn btn-xs btn-succes" href="{{ route('home') }}">Back</a>
            <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
        </div>
    </div>
    <br>
</div>
