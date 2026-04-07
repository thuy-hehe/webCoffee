<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webCoffeController extends Controller
{
    public function index(){
        return view('index', ['activePage' => 'index']);
    }
    public function about(){
        return view('about' , ['activePage' => 'about']);
    }
    public function menu(){
        $drink = [
            'Cà Phê' => [
                ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55.000 đ',
                'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',
                'image' => 'image/coffeeLatte.jpg'],
    
                ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45.000 đ',
                'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác
                quan.', 'image' => 'image/americano.jpg'],
    
                ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000 đ',
                'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ
                trụ.', 'image' => 'image/coldbrew.jpg'],
    
                ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' =>
                '58.000 đ', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt
                sữa trắng.', 'image' => 'image/machiato.jpg']
            ],

            'Trà' => [
                ['id' => 5, 'name' => 'Trà Thiên Hà Sen Vàng', 'price' => '52.000 đ',
                'description' => 'Trà sen thơm ngát, mang vị thanh khiết và dịu nhẹ như ánh sáng thiên hà.',
                'image' => 'image/trasenvang.jpg'],

                ['id' => 6, 'name' => 'Trà Xanh Sao Băng', 'price' => '48.000 đ',
                'description' => 'Trà xanh nguyên chất, vị chát nhẹ hòa cùng hương thơm tươi mát, như làn gió từ sao băng.',
                'image' => 'image/traxanh.jpg'],

                ['id' => 7, 'name' => 'Trà Đào Mặt Trăng', 'price' => '55.000 đ',
                'description' => 'Trà đào thơm ngọt, mang vị trái cây tự nhiên và cảm giác dịu dàng như ánh trăng.',
                'image' => 'image/tradao.jpg'],

                ['id' => 8, 'name' => 'Trà Sữa Ngân Hà', 'price' => '59.000 đ',
                'description' => 'Trà sữa béo ngậy, hòa quyện cùng hương trà đậm đà, như dải ngân hà trong ly.',
                'image' => 'image/trasua.jpg']

            ],

            'Bánh' => [
                ['id' => 9, 'name' => 'Thiên Thạch Cheesecake', 'price' => '65.000 đ',
                'description' => 'Bánh cheesecake mềm mịn, vị béo ngậy như mảnh thiên thạch ngọt ngào rơi giữa vũ trụ.',
                'image' => 'image/cheesecake.jpg'],

                ['id' => 10, 'name' => 'Mặt Trăng Tiramisu', 'price' => '70.000 đ',
                'description' => 'Lớp kem mascarpone hoà cùng cacao đắng nhẹ, mang đến hương vị ngọt ngào như ánh trăng đêm.',
                'image' => 'image/tiramisu.jpg'],

                ['id' => 11, 'name' => 'Sao Băng Brownie', 'price' => '60.000 đ',
                'description' => 'Brownie socola đậm vị, phủ vụn hạt giòn tan như vệt sao băng lướt qua bầu trời.',
                'image' => 'image/brownie.jpg'],

                ['id' => 12, 'name' => 'Dải Ngân Hà Mousse', 'price' => '68 000 đ',
                'description' => 'Bánh mousse mịn màng với lớp gương phủ lấp lánh như dải ngân hà rực rỡ.',
                'image' => 'image/mousse.jpg']

            ],

            // 'Đáng thử' => [
            //     ['id' => 13, 'name' => 'Thiên Thạch Cheesecake', 'price' => '65.000 đ',
            //     'description' => 'Bánh cheesecake mềm mịn, vị béo ngậy như mảnh thiên thạch ngọt ngào rơi giữa vũ trụ.',
            //     'image' => 'image/cheesecake.jpg'],

            //     ['id' => 14, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000 đ',
            //     'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ
            //     trụ.', 'image' => 'image/coldbrew.jpg'],

            //     ['id' => 15, 'name' => 'Trà Đào Mặt Trăng', 'price' => '55.000 đ',
            //     'description' => 'Trà đào thơm ngọt, mang vị trái cây tự nhiên và cảm giác dịu dàng như ánh trăng.',
            //     'image' => 'image/tradao.jpg'],


            //     ['id' => 16, 'name' => 'Dải Ngân Hà Mousse', 'price' => '68 000 đ',
            //     'description' => 'Bánh mousse mịn màng với lớp gương phủ lấp lánh như dải ngân hà rực rỡ.',
            //     'image' => 'image/mousse.jpg']

            // ],,


        ];
        return view('menu', ['drinks' => $drink], ['activePage' => 'menu']);
    }

    public function beanstory(){
        $bean = [
            ['id' => 1, 'name' => 'Hạt Sao Chổi (Ethiopia)', 'origin' =>'Yirgacheffe, Ethiopia', 'notes' => 'Hương hoa nhài, vị chua thanh
            của quả mọng.', 'image' => 'image/ethiopia.jpg'],
            ['id' => 2, 'name' => 'Hạt Thiên Thạch (Colombia)', 'origin' =>'Huila, Colombia', 'notes' => 'Vị ngọt caramel, sô cô la và một chút
            hương cam.', 'image' => 'image/colombia.jpg'],
        ];
        return view('beanstory', ['beanstory' => $bean], ['activePage' => 'beanstory']);
    }
    public function contact(){
        return view('contact', ['activePage' => 'contact']);
    }

    public function productDetail($id){
        $drink = [
            'Cà Phê' => [
                ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => '55.000 đ',
                'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.',
                'image' => 'image/coffeeLatte.jpg'],
    
                ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => '45.000 đ',
                'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác
                quan.', 'image' => 'image/americano.jpg'],
    
                ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000 đ',
                'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ
                trụ.', 'image' => 'image/coldbrew.jpg'],
    
                ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' =>
                '58.000 đ', 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt
                sữa trắng.', 'image' => 'image/machiato.jpg']
            ],

            'Trà' => [
                ['id' => 5, 'name' => 'Trà Thiên Hà Sen Vàng', 'price' => '52.000 đ',
                'description' => 'Trà sen thơm ngát, mang vị thanh khiết và dịu nhẹ như ánh sáng thiên hà.',
                'image' => 'image/trasenvang.jpg'],

                ['id' => 6, 'name' => 'Trà Xanh Sao Băng', 'price' => '48.000 đ',
                'description' => 'Trà xanh nguyên chất, vị chát nhẹ hòa cùng hương thơm tươi mát, như làn gió từ sao băng.',
                'image' => 'image/traxanh.jpg'],

                ['id' => 7, 'name' => 'Trà Đào Mặt Trăng', 'price' => '55.000 đ',
                'description' => 'Trà đào thơm ngọt, mang vị trái cây tự nhiên và cảm giác dịu dàng như ánh trăng.',
                'image' => 'image/tradao.jpg'],

                ['id' => 8, 'name' => 'Trà Sữa Ngân Hà', 'price' => '59.000 đ',
                'description' => 'Trà sữa béo ngậy, hòa quyện cùng hương trà đậm đà, như dải ngân hà trong ly.',
                'image' => 'image/trasua.jpg']

            ],

            'Bánh' => [
                ['id' => 9, 'name' => 'Thiên Thạch Cheesecake', 'price' => '65.000 đ',
                'description' => 'Bánh cheesecake mềm mịn, vị béo ngậy như mảnh thiên thạch ngọt ngào rơi giữa vũ trụ.',
                'image' => 'image/cheesecake.jpg'],

                ['id' => 10, 'name' => 'Mặt Trăng Tiramisu', 'price' => '70.000 đ',
                'description' => 'Lớp kem mascarpone hoà cùng cacao đắng nhẹ, mang đến hương vị ngọt ngào như ánh trăng đêm.',
                'image' => 'image/tiramisu.jpg'],

                ['id' => 11, 'name' => 'Sao Băng Brownie', 'price' => '60.000 đ',
                'description' => 'Brownie socola đậm vị, phủ vụn hạt giòn tan như vệt sao băng lướt qua bầu trời.',
                'image' => 'image/brownie.jpg'],

                ['id' => 12, 'name' => 'Dải Ngân Hà Mousse', 'price' => '68 000 đ',
                'description' => 'Bánh mousse mịn màng với lớp gương phủ lấp lánh như dải ngân hà rực rỡ.',
                'image' => 'image/mousse.jpg']

            ],
            // 'Đáng thử' => [
            //     ['id' => 13, 'name' => 'Thiên Thạch Cheesecake', 'price' => '65.000 đ',
            //     'description' => 'Bánh cheesecake mềm mịn, vị béo ngậy như mảnh thiên thạch ngọt ngào rơi giữa vũ trụ.',
            //     'image' => 'image/cheesecake.jpg'],

            //     ['id' => 14, 'name' => 'Vũ Trụ Cold Brew', 'price' => '60.000 đ',
            //     'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ
            //     trụ.', 'image' => 'image/coldbrew.jpg'],

            //     ['id' => 15, 'name' => 'Trà Đào Mặt Trăng', 'price' => '55.000 đ',
            //     'description' => 'Trà đào thơm ngọt, mang vị trái cây tự nhiên và cảm giác dịu dàng như ánh trăng.',
            //     'image' => 'image/tradao.jpg'],


            //     ['id' => 16, 'name' => 'Dải Ngân Hà Mousse', 'price' => '68 000 đ',
            //     'description' => 'Bánh mousse mịn màng với lớp gương phủ lấp lánh như dải ngân hà rực rỡ.',
            //     'image' => 'image/mousse.jpg']

            // ],

        ];

        // gộp các sản phẩm thành 1 mảng
        $drinkNew = [];
        foreach($drink as $dr){
            $drinkNew = array_merge($drinkNew, $dr);
        }

        // tìm sản phẩm trùng với id
        $item = null;
        foreach($drinkNew as $drs){
            if($drs['id'] == $id){
                $item = $drs;
                break;
            }

        }

        return view('productDetail', ['item' => $item], ['activePage' => 'productDetail'] );


    }
    
}

