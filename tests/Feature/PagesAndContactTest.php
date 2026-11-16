<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmitted;
use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesAndContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Provide all public page routes with expected titles, content snippets, and asset paths.
     *
     * @return array<string, array{uri: string, title: string, snippets: list<string>, assets: list<string>}>
     */
    public static function pageRoutesProvider(): array
    {
        return [
            'home' => [
                'uri' => '/',
                'title' => '<title>KRISHNA PACKS</title>',
                'snippets' => [
                    'Welcome to KRISHNA PACKS',
                    'CERTIFICATIONS',
                    'Start Composting &amp; Recycling Now',
                ],
                'assets' => [
                    'css/custom.css',
                    'js/custom.js',
                    'images/s12.jpg',
                    'images/pdf/TNPCB-AIR.pdf',
                    'images/epr.pdf',
                ],
            ],
            'about' => [
                'uri' => '/about',
                'title' => '<title>About Us - KRISHNA PACKS</title>',
                'snippets' => [
                    'is providing the best',
                    'wholesalers and suppliers of 100% compostable/biodegradable products',
                ],
                'assets' => [
                    'images/plantinbabyhand.jpg',
                    'images/newaboutdown.jpg',
                ],
            ],
            'composting' => [
                'uri' => '/composting',
                'title' => '<title>Composting - KRISHNA PACKS</title>',
                'snippets' => [
                    'Composting is an easy and effective way to enrich your soil',
                    'Advantages of Biodegradable / Compostable Bioplastic Products',
                ],
                'assets' => [
                    'images/agallery7.jpg',
                ],
            ],
            'products index' => [
                'uri' => '/products',
                'title' => '<title>Products - KRISHNA PACKS</title>',
                'snippets' => [
                    'UpNext Events',
                ],
                'assets' => [
                    'images/pl1.jpg',
                    'images/pl4.jpg',
                    'images/pl5.jpg',
                ],
            ],
            'products film' => [
                'uri' => '/products/film-extrusion',
                'title' => '<title>Film Extrusion - KRISHNA PACKS</title>',
                'snippets' => [
                    '<h2>Film Extrusion</h2>',
                    'Certified Compostable Blown Film',
                ],
                'assets' => [
                    'images/film.png',
                ],
            ],
            'products injection' => [
                'uri' => '/products/injection-molding',
                'title' => '<title>Injection Molding - KRISHNA PACKS</title>',
                'snippets' => [
                    '<h2>Injection Molding</h2>',
                    'Krishna Packs KP-2020IM',
                ],
                'assets' => [
                    'images/injection.png',
                ],
            ],
            'products extrusion' => [
                'uri' => '/products/extrusion-coating',
                'title' => '<title>Extrusion Coating - KRISHNA PACKS</title>',
                'snippets' => [
                    '<h2>Extrusion Coating</h2>',
                    'Krishna Packs KP-2025CT',
                ],
                'assets' => [
                    'images/extrusion.png',
                ],
            ],
            'products waste' => [
                'uri' => '/products/zero-waste-solutions',
                'title' => '<title>Zero-Waste Solutions - KRISHNA PACKS</title>',
                'snippets' => [
                    'Zero-Waste',
                    'Our Commitment to Sustainability',
                ],
                'assets' => [
                    'images/garbage1.jpg',
                    'images/back.jpg',
                ],
            ],
            'products garments' => [
                'uri' => '/products/garments',
                'title' => '<title>Garment Packaging Solutions - KRISHNA PACKS</title>',
                'snippets' => [
                    'Total Packaging Solutions',
                    'Our Commitment to Sustainability',
                ],
                'assets' => [
                    'images/s12.jpg',
                ],
            ],
            'contact' => [
                'uri' => '/contact',
                'title' => '<title>Contact Us - KRISHNA PACKS</title>',
                'snippets' => [
                    'Feel Free to Contact us',
                    'Reach Us',
                    'krishnatex14@gmail.com',
                ],
                'assets' => [
                    'images/01 krishna packs logo-01.png',
                    'images/01 krishna packs logo-03.png',
                ],
            ],
        ];
    }

    /**
     * Provide all legacy Core PHP routes and their permanent redirect targets.
     *
     * @return array<string, array{legacyUri: string, targetUri: string}>
     */
    public static function legacyRedirectsProvider(): array
    {
        return [
            'index.php' => ['legacyUri' => '/index.php', 'targetUri' => '/'],
            'home.php' => ['legacyUri' => '/home.php', 'targetUri' => '/'],
            'profile.php' => ['legacyUri' => '/profile.php', 'targetUri' => '/about'],
            'about.php' => ['legacyUri' => '/about.php', 'targetUri' => '/about'],
            'composting.php' => ['legacyUri' => '/composting.php', 'targetUri' => '/composting'],
            'products.php' => ['legacyUri' => '/products.php', 'targetUri' => '/products'],
            'film.php' => ['legacyUri' => '/film.php', 'targetUri' => '/products/film-extrusion'],
            'injection.php' => ['legacyUri' => '/injection.php', 'targetUri' => '/products/injection-molding'],
            'extrusion.php' => ['legacyUri' => '/extrusion.php', 'targetUri' => '/products/extrusion-coating'],
            'waste.php' => ['legacyUri' => '/waste.php', 'targetUri' => '/products/zero-waste-solutions'],
            'garments.php' => ['legacyUri' => '/garments.php', 'targetUri' => '/products/garments'],
            'contact.php' => ['legacyUri' => '/contact.php', 'targetUri' => '/contact'],
        ];
    }

    /**
     * Provide invalid contact payloads and the validation error keys they should trigger.
     *
     * @return array<string, array{payload: array<string, mixed>, errorKeys: list<string>}>
     */
    public static function invalidContactSubmissionsProvider(): array
    {
        return [
            'all fields missing' => [
                'payload' => [],
                'errorKeys' => ['name', 'email', 'phone', 'message'],
            ],
            'missing name' => [
                'payload' => [
                    'name' => '',
                    'email' => 'arun@example.com',
                    'phone' => '9876543210',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['name'],
            ],
            'invalid email' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'not-an-email',
                    'phone' => '9876543210',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['email'],
            ],
            'phone starting below 6' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'arun@example.com',
                    'phone' => '5876543210',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['phone'],
            ],
            'phone shorter than 10 digits' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'arun@example.com',
                    'phone' => '987654321',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['phone'],
            ],
            'phone longer than 10 digits' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'arun@example.com',
                    'phone' => '98765432101',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['phone'],
            ],
            'phone with non-digits' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'arun@example.com',
                    'phone' => '98765abcde',
                    'message' => 'Bulk order inquiry',
                ],
                'errorKeys' => ['phone'],
            ],
            'missing message' => [
                'payload' => [
                    'name' => 'Arun Kumar',
                    'email' => 'arun@example.com',
                    'phone' => '9876543210',
                    'message' => '',
                ],
                'errorKeys' => ['message'],
            ],
        ];
    }

    /**
     * Verify every migrated page returns 200, renders expected content and asset URLs, and contains no bare relative links.
     *
     * @param  list<string>  $snippets
     * @param  list<string>  $assets
     */
    #[DataProvider('pageRoutesProvider')]
    public function test_page_routes_return_ok_with_valid_assets_and_content(
        string $uri,
        string $title,
        array $snippets,
        array $assets,
    ): void {
        $response = $this->get($uri);

        $response->assertStatus(200);
        $response->assertSee($title, false);

        foreach ($snippets as $snippet) {
            $response->assertSee($snippet, false);
        }

        foreach ($assets as $assetPath) {
            $response->assertSee(asset($assetPath), false);
        }

        $response->assertSee(asset('css/custom.css'), false);
        $response->assertSee(asset('js/custom.js'), false);

        $html = $response->getContent();
        $this->assertIsString($html);
        $this->assertSame(1, substr_count($html, '<header '), "Expected single <header> on {$uri}");
        $this->assertSame(1, substr_count($html, '<footer '), "Expected single <footer> on {$uri}");

        $response->assertDontSee('src="images/', false);
        $response->assertDontSee('href="css/', false);
        $response->assertDontSee('src="js/', false);
        $response->assertDontSee('url(images/', false);
        $this->assertDoesNotMatchRegularExpression('/\.(php)(["\'?#]|$)/i', $html);
    }

    /**
     * Verify all legacy Core PHP URLs permanently redirect (301) to their clean Laravel routes.
     */
    #[DataProvider('legacyRedirectsProvider')]
    public function test_legacy_php_routes_redirect_permanently(string $legacyUri, string $targetUri): void
    {
        $response = $this->get($legacyUri);

        $response->assertStatus(301);
        $response->assertRedirect(url($targetUri));
    }

    /**
     * Verify the contact page renders the POST form targeting route('contact.submit') with a CSRF token.
     */
    public function test_contact_page_renders_form_with_csrf_and_submit_route(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('action="'.route('contact.submit').'"', false);
        $response->assertSee('name="_token"', false);
    }

    /**
     * Verify invalid contact submissions fail validation without storing a record or sending email.
     *
     * @param  array<string, mixed>  $payload
     * @param  list<string>  $errorKeys
     */
    #[DataProvider('invalidContactSubmissionsProvider')]
    public function test_contact_submission_rejects_invalid_input(array $payload, array $errorKeys): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))
            ->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHasErrors($errorKeys);

        $this->assertDatabaseCount('contact_messages', 0);
        Mail::assertNothingSent();
    }

    /**
     * Verify validation errors and old input values are displayed when redirected back to the contact page.
     */
    public function test_contact_page_displays_validation_errors_and_old_input(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))
            ->followingRedirects()
            ->post(route('contact.submit'), [
                'name' => 'Priya',
                'email' => 'priya@example.com',
                'phone' => '12345',
                'message' => 'Need compostable bags',
            ]);

        $response->assertStatus(200);
        $response->assertSee('alert-danger', false);
        $response->assertSee('value="Priya"', false);
        $response->assertSee('value="priya@example.com"', false);
        $response->assertSee('Need compostable bags', false);
    }

    /**
     * Verify a valid contact submission persists to contact_messages, sends email, and flashes success.
     */
    public function test_valid_contact_submission_persists_record_sends_email_and_flashes_success(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Karthik Subramanian',
            'email' => 'karthik@example.com',
            'phone' => '9876543210',
            'message' => "Interested in Film Extrusion resins.\nPlease share pricing.",
        ];

        $response = $this->from(route('contact'))
            ->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success', 'Thank you for contacting us! We will get back to you soon.');

        $this->assertDatabaseHas('contact_messages', $payload);
        $this->assertSame(1, ContactMessage::count());

        Mail::assertSent(ContactFormSubmitted::class, function (ContactFormSubmitted $mail) use ($payload): bool {
            return $mail->hasTo('krishnatex14@gmail.com')
                && $mail->hasReplyTo($payload['email'], $payload['name'])
                && $mail->hasSubject('New Contact Form Submission - Krishna Packs')
                && $mail->contactMessage->name === $payload['name']
                && $mail->contactMessage->phone === $payload['phone'];
        });
    }

    /**
     * Verify the ContactFormSubmitted mailable renders all inquiry details in HTML.
     */
    public function test_contact_mailable_renders_inquiry_details(): void
    {
        $contactMessage = ContactMessage::create([
            'name' => 'Meena Raj',
            'email' => 'meena@example.com',
            'phone' => '8765432109',
            'message' => 'Requesting sample bags.',
        ]);

        $mailable = new ContactFormSubmitted($contactMessage);

        $mailable->assertHasSubject('New Contact Form Submission - Krishna Packs');
        $mailable->assertHasReplyTo('meena@example.com', 'Meena Raj');
        $mailable->assertSeeInHtml('Meena Raj');
        $mailable->assertSeeInHtml('meena@example.com');
        $mailable->assertSeeInHtml('8765432109');
        $mailable->assertSeeInHtml('Requesting sample bags.');
    }

    /**
     * Verify the flashed success banner renders on the contact page after a valid submission.
     */
    public function test_contact_page_displays_success_flash_after_valid_submission(): void
    {
        Mail::fake();

        $response = $this->from(route('contact'))
            ->followingRedirects()
            ->post(route('contact.submit'), [
                'name' => 'Deepak Nair',
                'email' => 'deepak@example.com',
                'phone' => '7890123456',
                'message' => 'Please contact me regarding zero-waste solutions.',
            ]);

        $response->assertStatus(200);
        $response->assertSee('alert-success', false);
        $response->assertSee('Thank you for contacting us! We will get back to you soon.');
    }
}
