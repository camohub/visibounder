
@props(['field', 'error_bag' => 'default'])

@php
\Illuminate\Support\Facades\Log::info('aaaaaaaaaaaaaaaaaaaa');
\Illuminate\Support\Facades\Log::info($errors->{$error_bag}->all());
\Illuminate\Support\Facades\Log::info($error_bag);
\Illuminate\Support\Facades\Log::info($field);
\Illuminate\Support\Facades\Log::info($errors->{$error_bag}->first($field));
@endphp

@if ($errors->{$error_bag}->has($field))
    <div class="text-danger">{{ $errors->{$error_bag}->first($field) }}</div>
@endif
