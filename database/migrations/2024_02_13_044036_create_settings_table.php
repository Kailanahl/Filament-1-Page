<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Mendalo, Jambi, Indonesia',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://www.youtube.com/@beetechnic5910',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.youtube.com/@beetechnic5910',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://www.youtube.com/@beetechnic5910',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_github',
            'label'=>'Github',
            'value'=>'https://www.youtube.com/@beetechnic5910',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website sederhana, dengan admin filament',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
