<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function create()
    {
        $pages = new Pages; // yeni bir değişken ile modeli çağır

        $pages -> title = 'laravel';
        $pages ->subtitle = 'laravel eğitimi'; // migration alanındaki verilere uygun değerleri gir
        $pages ->content = 'laravel ders';

        $pages -> save(); // kaydet

        return 'veri kaydedildi';
    }


    public function createNew()         // veri kaydetmek için farklı yöntem
    { 
        Pages::create([
            'title' => 'laravel',                           
            'subtitle' => 'deneme',
            'content' => 'deneme kod',
        ]);

        return 'bilgiler kaydedildi';
    }

    // verileri sayfaya yazdırmak için yöntem

    public function read()  // read adında fonksiyon oluştur
    {
        $pages = Pages::query()->get();    // pages adında değişken oluşturup sorguya alıyorum
        return view ('read', compact('pages')); // view içerisinde pages değişkenimi gönderiyorum
    }

    public function edit($id)
    {
        $page = Pages::query()->find($id);
        $title = $page ->title;
        $subtitle = $page ->subtitle;
        $content = $page ->content;
        return view('edit' , compact('title', 'subtitle','content'));
    }


    // update fonksiyonu

    public function update($id)
    {
        $page = Pages::query()->find($id);  // idye göre değerleri bulup ona yeni değer ataması yapıp kayıt işlemini yaptım.
    
        $page->title = 'yeni başlık';
        $page->subtitle = 'yeni altbaşlık';
        $page->content = 'yeni konu';
    
        $page->save();
        
        return 'güncellendi';
    }


    // veri silme işlemi
    public function delete($id)
    {
        $page = Pages::query() ->find($id);

        $page -> delete();

        return 'veri silindi';
    }
    
}
