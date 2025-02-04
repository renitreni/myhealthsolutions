<div class="form-row">
    @if ($inquiryCount)
        <h2>{{ __('Thank you for making an Appointment! We will be contacting you') }}</h2>
    @else
        <div class="form-group col-md-6">
            <input type="name" wire:model='name' class="form-control" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <input type="text" wire:model='email' class="form-control" id="inputPassword4" placeholder="Email address">
        </div>
        <div class="form-group col-md-6">
            <select class="form-control" id="Select" wire:model='service'>
                <option value="1" selected>{{ __('Select service') }}</option>
                @foreach ($appointments as $key => $item)
                    <option value="{{ $key }}">{{ __($key) }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group time_icon col-md-6">
            <select class="form-control" id="Select2" wire:model='time'>
                <option value="" selected>{{ __('Time') }}</option>
                <option value="1">{{ __('8 AM TO 10AM') }}</option>
                <option value="1">{{ __('10 AM TO 12PM') }}</option>
                <option value="1">{{ __('12PM TO 2PM') }}</option>
                <option value="1">{{ __('2PM TO 4PM') }}</option>
                <option value="1">{{ __('4PM TO 6PM') }}</option>
                <option value="1">{{ __('6PM TO 8PM') }}</option>
                <option value="1">{{ __('4PM TO 10PM') }}</option>
                <option value="1">{{ __('10PM TO 12PM') }}</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <textarea class="form-control" id="Textarea" rows="4" placeholder="Your Note " wire:model='note'></textarea>
        </div>
        <div class="regerv_btn">
            <button type="button" class="btn_2" wire:click='makeAppointment'>{{ __('Make an Appointment') }}</button>
        </div>
    @endif
</div>
