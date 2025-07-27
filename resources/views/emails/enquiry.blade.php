<x-mail::message>
    # 📩 New Enquiry Received

    Hello **{{ config('app.name') }} Team**,

    You've received a new enquiry through your website. Below are the details submitted:

    ---

    ## 👤 Sender Information

    - **Name:** {{ $data['name'] }}
    - **Company:** {{ $data['company'] ?: 'N/A' }}
    - **Phone:** {{ $data['phone'] }}
    - **Email:** {{ $data['email'] }}

    ---

    ## 📝 Message

    {{ $data['message'] }}

    ---

    Please follow up with the sender using the contact details above.

    Thanks,
    **{{ config('app.name') }} Website Notification**
</x-mail::message>
