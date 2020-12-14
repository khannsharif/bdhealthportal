@component('mail::message')
    # Account activation / verification...

    Hello, {{ $user->full_name }}!

    Your Appointment is successful.

    Appointment Details

    @component('mail::table')
        | {{$app->hospital->hospital_name}}         |       {{ $app->department->department_name }}
        | ------------------------------------------|:-------------:
        | Serial number     | {{ $app->serial_no }}
        | Patient Name      | {{ $user->full_name }}
        | Mobile            | {{ $user->contact_number }}
        | Date            | {{ $app->appointment_date }}
        | Time            | {{ \Carbon\Carbon::parse($app->appointment_time)->format('H:i:s') }}
    @endcomponent


    {{--@php $url = url('verify-email|') . $app->doctor->email_verification_token; @endphp--}}

    {{--@component('mail::button', ['url' => $url, 'color' => 'success'])
        Verify
    @endcomponent--}}

    If you are watching this by mistake please ignore this email.

    @component('mail::panel')
        <p>If you are having trouble with the verify button above you may click the link below.</p>
        {{-- $url --}}
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
