<x-mail::message>
    # Hello {{ $data['name'] }},

    Thanks for choosing a consultation package.

    **Consultation Type:** {{ $data['package'] }}
    **Price:** NGN{{ $data['price'] }}

    ---

    Please make payment to the account below to proceed:

    **Bank:** Example Bank
    **Account Name:** Jupiter Legal
    **Account Number:** 1234567890

    ---

    Once payment is made, reply to this email or reach us on WhatsApp to confirm.

    <x-mail::button :url="$data['whatsapp_url']" color="success">
        Confirm via WhatsApp
    </x-mail::button>



    Thanks,
    ** {{ config('app.name') }} Team **
</x-mail::message>
