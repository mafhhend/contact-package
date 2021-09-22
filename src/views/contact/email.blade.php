@component('mail::message')
    # Introduction
    There is new Query From Mahdi 😍
    {{ $message }}
    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
