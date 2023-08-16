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
      foreach ($this->services() as $title => $brief) Service::create(['title' => $title, 'brief' => $brief]);
   }


   public function services()
   {
      return [
         'brand identity design' => 'brand identity design_brief',

         // marketing
         'Social Media Management ' => 'fb, IG, tiktok, twitter etc brief',
         'SEO' => 'seo_brief',
         'digital marketing' => 'digital marketing_brief',
         'Paid Ads Management (SEM)' => 'Paid Ads Management_brief',

         // development
         'professional Web app development' => "eg. professional web app development_brief",
         'professional Mobile app development' => "eg. professional mobile app development_brief",
         'professional Personal website development' => "eg. lawyers, chartered accountants, etc. professional personal website development_brief",
         'professional Business website development' => "professional businesss website development_brief",
         'professional Affiliate System for Business Growth' => "professional Affiliate System for Business Growth_brief",
         // 'Multichannel SEO optingmization' => 'Google, Bi',
         'Content Management (CMS) Systems' => 'eg. Blog',

      ];
   }
}
