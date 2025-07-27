<x-mail::message>
    # 📄 New Consultation Request

    Hello **{{ config('app.name') }} Team**,

    You've received a new consultation request from the website.

    ---

    ## 👤 Client Details

    - **Name:** {{ $data['name'] }}
    - **Email:** {{ $data['email'] }}
    - **Package:** {{ $data['package'] }}
    - **Price:** NGN{{ $data['price'] }}

    ---

    Please follow up with the client using the contact details above.

    Thanks,
    **{{ config('app.name') }} Website Notification**

    <x-mail::button :url="'mailto:' . $data['email']">
        Reply to Client
    </x-mail::button>


</x-mail::message>
