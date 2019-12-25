<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Employment;

class EmploymentSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Employment $employment, UploadedFile $file = null)
    {
        if ($file === null || $file->isValid() === false) {
            $file = UploadedFile::fake();
        }
        $this->employment = $employment;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.employmentsubmitted')
                    ->text('emails.employmentsubmitted_plain')
                    // https://laravel.com/docs/6.x/mail#attachments
                    ->attach(
                        $this->file->getRealPath(),
                        [
                            'as' => $this->file->getClientOriginalName(),
                            'mime' => $this->file->getMimeType()
                        ]
                    );
    }
}
