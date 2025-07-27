<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserConsultationMail;
use App\Mail\AdminConsultationNotification;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Str;

class ConsultController extends Controller
{
    public function consultRequest(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'package' => 'required|string',  // ensure this is sent from the form
            'price' => 'required|string',    // ensure this is sent from the form
        ]);

        // Load and parse the contact.md file
        $path = resource_path('content/pages/contact.md');
        $contactMd = YamlFrontMatter::parseFile($path);
        $contactData = $contactMd->matter();

        // Extract the first phone number and sanitize it
        $rawPhone = $contactData['phone_numbers'][0] ?? '';
        $cleanPhone = preg_replace('/\D+/', '', $rawPhone); // removes all non-numeric characters
        if (Str::startsWith($cleanPhone, '0')) {
            $cleanPhone = '234' . substr($cleanPhone, 1); // convert local format to intl
        }

        $whatsappUrl = 'https://wa.me/' . $cleanPhone . '?text=' . urlencode('Hello, I just made payment for the consultation package.');

        // Prepare the data
        $data = [
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'package' => $validated['package'],
            'price'   => $validated['price'],
            'whatsapp_url' => $whatsappUrl,
        ];


        // Send email to the user
        Mail::to($data['email'])->send(new UserConsultationMail($data));

        // Send email to the admin
        Mail::to(env('CONTACT_RECEIVER_EMAIL'))->send(new AdminConsultationNotification($data));
//        Mail::to('consult@thejupiterlegal.com')->send(new AdminConsultationNotification($data));

        return back()->with('success', 'Your consultation request has been received. Please check your email for payment details.');
    }
}
