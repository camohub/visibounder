
@props(['field', 'error_bag' => 'default'])

@if ($errors->{$error_bag}->has($field))
    <div class="text-danger">{{ $errors->{$error_bag}->first($field) }}</div>
@endif
