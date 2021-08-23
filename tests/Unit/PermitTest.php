<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PermitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCreatePermit()
    {
        Storage::fake('permit_file');

        $file = UploadedFile::fake()->image('surat-ijin.jpg');

        $response = $this->post('/permit', [
            'permit_start_date' => '2022-01-01',
            'permit_start_date' => '2022-01-01',
            'description'       => 'cuti melahirkan',
            'avatar'            => $file,
        ]);

        Storage::disk('permit_file')->assertExists($file->hashName());
    }
    public function testGetPermits()
    {
        $this->get("permit");
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            '*' => [
                'id',
                'permit_start_date',
                'permit_start_date',
                'description',
                'attachment',
            ]
        ]);
    }
    public function testGetPermitById()
    {
        $this->get("permit/2000");
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'id',
            'permit_start_date',
            'permit_start_date',
            'description',
            'attachment',
        ]);
    }
}
