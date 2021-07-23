<!-- Log Name Field -->
<div class="form-group">
    {!! Form::label('log_name', __('log_name').':') !!}
    <p>{{ $activityLog->log_name }}</p>
</div>


<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('description').':') !!}
    <p>{{ $activityLog->description }}</p>
</div>


<!-- Subject ID Field -->
<div class="form-group">
    {!! Form::label('subject_id', __('subject_id').':') !!}
    <p>{{ $activityLog->subject_id }}</p>
</div>


<!-- Subject Type Field -->
<div class="form-group">
    {!! Form::label('subject_type', __('subject_type').':') !!}
    <p>{{ $activityLog->subject_type }}</p>
</div>


<!-- Causer ID Field -->
<div class="form-group">
    {!! Form::label('causer_id', __('causer_id').':') !!}
    <p>{{ $activityLog->causer_id }}</p>
</div>


<!-- Causer Type Field -->
<div class="form-group">
    {!! Form::label('causer_type', __('causer_type').':') !!}
    <p>{{ $activityLog->causer_type }}</p>
</div>


<!-- Properties Field -->
<div class="form-group">
    {!! Form::label('properties', __('properties').':') !!}
    <p>{{ $activityLog->properties }}</p>
</div>


