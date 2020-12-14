@component('mail::message')
    # Account activation / verification...

    Hello, {{ $user->full_name }}!

    Your Appointment is successful.

    Appointment Details

    @component('mail::table')
        | {{$pres->appointment->hospital->hospital_name}}         |       {{ $pres->appointment->department->department_name }}
        | ------------------------------------------|:-------------:
        | Patient Name      | {{ $user->full_name }}
        {!! $pres->medicine_description !!}
        | Report            | {{ $pres->report }}
        | Note            | {{ $pres->note }}
        | Date            | {{ $pres->appointment_date }}
        | Time            | {{ \Carbon\Carbon::parse($pres->appointment_time)->format('H:i:s') }}
    @endcomponent


    {{--@php $url = url('verify-email|') . $pres->doctor->email_verification_token; @endphp--}}

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
