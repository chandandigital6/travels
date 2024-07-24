<?php

namespace App\Console\Commands;

use App\Models\AppointmentImage;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class RemoveJunkImagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remove-junk-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will run every hour at XX:00 to remove appointment images which are uploaded 24 hours to avoid junk data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Command Started');
        $images = AppointmentImage::where('created_at', '<', Carbon::now()->subDay())->get();
        foreach ($images as $image) {
            Storage::delete('public/' . $image->image);
            AppointmentImage::where('id', $image->id)->delete();
        }
        $this->info('Command Completed');
    }
}
