<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newcar = new \App\Models\Car([
            'imagePath' => 'https://www.elleman.vn/wp-content/uploads/2018/01/24/xe-moto-moi-elle-man-4.jpg',
            'name' => 'moto-a',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();

        $newcar = new \App\Models\Car([
            'imagePath' => 'http://xemaysaigon.vn/uploads/images/vi/sanpham/500x400-4-3_(1).png',
            'name' => 'moto-b',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();

        $newcar = new \App\Models\Car([
            'imagePath' => 'https://vnwriter.net/wp-content/uploads/2018/01/ducati-panigale-959.png',
            'name' => 'moto-c',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();

        $newcar = new \App\Models\Car([
            'imagePath' => 'https://images.kienthuc.net.vn/zoomh/500/uploaded/nguyenanhtuan/2019_01_20/top/top-xe-moto-dien-doc-va-dep-nhat-cua-nam-2018-Hinh-6.jpg',
            'name' => 'moto-d',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();

        $newcar = new \App\Models\Car([
            'imagePath' => 'https://znews-photo.zadn.vn/w860/Uploaded/neg_estpyge/2018_09_07/118719_2018_CB1000R.jpg',
            'name' => 'moto-e',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();

        $newcar = new \App\Models\Car([
            'imagePath' => 'https://pro-biker.vn/image/cache/cate-givi/thumnail-xe/dream%20cao/baga-givi-mv-rack-dream-cao-1-800x800.jpg',
            'name' => 'dream',
            'description' => 'hihi',
            'price' => 10
        ]);
        $newcar->save();
    }
}
