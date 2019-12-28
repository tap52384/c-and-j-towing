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

    public $employment;
    public $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Employment $employment, UploadedFile $file = null)
    {
        // Creates a fake resume file for testing purposes
        // 3rd parameter is a mime type for a MS Word file
        if ($file === null || $file->isValid() === false) {
            // https://laravel.com/api/6.x/Illuminate/Http/UploadedFile.html#method_fake
            // https://laravel.com/api/6.x/Illuminate/Http/Testing/FileFactory.html#method_create
            // https://laravel.com/docs/6.x/mocking#storage-fake
            $file = UploadedFile::fake()
                ->create('resume.docx', 0, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
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
        $subject = 'Employment Application Submitted';
        if (strcasecmp(env('APP_ENV'), 'production') !== 0) {
            $subject = '[test] ' . $subject;
        }
        return $this->view('emails.employmentsubmitted')
                    ->text('emails.employmentsubmitted_plain')
                    ->subject($subject)
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
