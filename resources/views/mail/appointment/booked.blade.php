<x-mail::message>

Thank you for booking with {{ $specialist->user->name }}. 

Your reservation details are as follows:
Service: {{ $data['appointment_type'] }}
Date & Time: {{ $data['appointment_date'] }}

If you have any questions or need to make changes, please contact us.
We look forward to seeing you!

Best regards,

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
