    	<div class="form-group" >
            {!! Form::label("title", "Title:") !!}
            {!! Form::text("title", null, ["class" => "form-control"]) !!}
        </div>
            <div class="form-group" >
            {!! Form::label("description", "Description:") !!}
            {!! Form::textarea("description", null, ["class" => "form-control"]) !!}
        </div>
            

    	<div class="form-actions">
            <button type="submit" name="submit" class="btn btn-primary">{!! $submitText !!}</button>
    	</div>