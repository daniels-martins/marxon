<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      foreach ($this->services() as $title => $service)
         Service::create(['title' => $title, 'brief' => $service['brief'], 'icon' => $service['icon']]);
   }


   public function services()
   {
      return [
         // core development
         'professional Business website development' => ['brief' => 'professional Business website development_brief', 'icon' => 'assets/images/services/website.png'],
         'professional Personal website development' => ['brief' => 'professional Personal website development_brief', 'icon' => 'assets/images/services/website2.png'],
         'professional Web app development' => ['brief' => 'professional web app development_brief', 'icon' => 'assets/images/services/web_apps.png'],
         'professional Mobile app development' => ['brief' => 'professional mobile app development_brief', 'icon' => 'assets/images/services/mobile_app.png'],
         
         // marketing
         'digital marketing' => ['brief' => 'digital marketing_brief', 'icon' => 'assets/images/services/dig_mktn1.png'],
         'Paid Ads Management (SEM)' => ['brief' => 'Paid Ads Management_brief', 'icon' => 'assets/images/services/paid_ads.png'],
         'Search Engine Optimization (SEO)' =>  ['brief' => 'seo_brief', 'icon' => 'assets/images/services/icon3.png'],
         'Social Media Management ' => ['brief' => 'fb, IG, tiktok, twitter etc brief', 'icon' => 'assets/images/services/social_media.png'],
         
         // branding and other devs
         'brand identity design' => ['brief' => 'brand identity design_brief', 'icon' => 'assets/images/services/icon1.png'],
         'professional Affiliate System for Business Growth' => ['brief' => 'professional Affiliate System for Business Growth_brief', 'icon' => 'assets/images/services/affiliate.png'],
         'professional Content Management Systems (CMS)' => ['brief' => 'professional Content Management (CMS) eg. blog  System for Business Growth_brief', 'icon' => 'assets/images/services/cms.png'],
         'professional Investment Platform' => ['brief' => 'professional Investment Platform eg. crypto and forex  System for Business Growth_brief', 'icon' => 'assets/images/services/dig_mktn4.png'],
      ];
   }
}
