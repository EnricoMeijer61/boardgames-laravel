<div class="container-fluid">
    <div class="collumn">
        <div class="col-">
            <div class="form-group">
                <strong>Tafel :</strong>
                {!! Form::number('table', null, ['placeholder' =>'Tafel nummer', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col-">
            <div class="form-group">
                <strong>Rondes gespeeld :</strong>
                {!! Form::number('round', null, ['placeholder' =>'Aantal rondes', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col-">
            <div class="form-group">
                <strong>Speeltijd(in minuten) :</strong>
                {!! Form::number('playtime', null, ['placeholder' =>'Speeltijd', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>speler 1 :</strong>
                {!! Form::text('user01', null, ['placeholder' =>'Speler 1', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <strong>speler 1 punten :</strong>
                {!! Form::number('points01', null, ['placeholder' =>'Speler 1', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>speler 2 :</strong>
                {!! Form::text('user02', null, ['placeholder' =>'Speler 2', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <strong>speler 2 punten :</strong>
                {!! Form::number('points02', null, ['placeholder' =>'Speler 2', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>speler 3 :</strong>
                {!! Form::text('user03', null, ['placeholder' =>'Speler 3', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <strong>speler 3 punten :</strong>
                {!! Form::number('points03', null, ['placeholder' =>'Speler 3', 'class' => 'form-control'] ) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>speler 4 :</strong>
                {!! Form::text('user04', null, ['placeholder' =>'Speler 4', 'class' => 'form-control'] ) !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <strong>speler 4 punten :</strong>
                {!! Form::number('points04', null, ['placeholder' =>'Speler 4', 'class' => 'form-control'] ) !!}
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
            <a class="btn btn-xs btn-succes" href="{{ route('gamedetails.index') }}">Back</a>
            <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
        </div>
    </div>
    <br>
</div>