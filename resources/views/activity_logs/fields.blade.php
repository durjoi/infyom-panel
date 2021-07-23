<!-- Log Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log_name', __('models/activityLogs.fields.log_name').':') !!}
    {!! Form::text('log_name', null, ['class' => 'form-control']) !!}
</div>


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/activityLogs.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Subject ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_id', __('models/activityLogs.fields.subject_id').':') !!}
    {!! Form::select('subject_id', \App\Models\subject::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Subject Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_type', __('models/activityLogs.fields.subject_type').':') !!}
    {!! Form::text('subject_type', null, ['class' => 'form-control']) !!}
</div>


<!-- Causer ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('causer_id', __('models/activityLogs.fields.causer_id').':') !!}
    {!! Form::select('causer_id', \App\Models\causer::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Causer Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('causer_type', __('models/activityLogs.fields.causer_type').':') !!}
    {!! Form::text('causer_type', null, ['class' => 'form-control']) !!}
</div>


<!-- Properties Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('properties', __('models/activityLogs.fields.properties').':') !!}
    {!! Form::textarea('properties', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('activityLogs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
