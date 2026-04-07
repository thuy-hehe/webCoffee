<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class WebCoffePagesTest extends TestCase
{
    #[DataProvider('publicPageProvider')]
    public function test_public_pages_are_accessible_and_render_expected_content(
        string $url,
        string $view,
        array $contentChecks
    ): void {
        $response = $this->get($url);

        $response->assertOk();
        $response->assertViewIs($view);
        $response->assertSee('<main', false);

        foreach ($contentChecks as $content) {
            $response->assertSee($content, false);
        }
    }

    public static function publicPageProvider(): array
    {
        return [
            'home page' => [
                '/',
                'index',
                [
                    'class="slider"',
                    "class='welcome'",
                    'class="productview"',
                ],
            ],
            'about page' => [
                '/about',
                'about',
                [
                    'class="about"',
                    'class="about-info"',
                    'class="about-conten1-name"',
                ],
            ],
            'menu page' => [
                '/menu',
                'menu',
                [
                    'class="productview"',
                    'class="category-name"',
                    '/item/1',
                ],
            ],
            'bean story page' => [
                '/beanstory',
                'beanstory',
                [
                    'class="bean-story"',
                    'class="bean-story-name"',
                    'image/ethiopia.jpg',
                ],
            ],
            'contact page' => [
                '/contact',
                'contact',
                [
                    'class="contact"',
                    'class="contact-form"',
                    'Tanphuyen78@gmail.com',
                ],
            ],
        ];
    }

    public function test_product_detail_page_is_accessible_and_shows_main_content(): void
    {
        $response = $this->get('/item/1');

        $response->assertOk();
        $response->assertViewIs('productDetail');
        $response->assertSee('<main', false);
        $response->assertSee('class="productDetail"', false);
        $response->assertSee('class="productDetail-name"', false);
        $response->assertSee('image/coffeeLatte.jpg', false);
    }
}
