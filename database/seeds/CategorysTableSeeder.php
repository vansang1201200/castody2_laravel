<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categorys')->delete();

        \DB::table('categorys')->insert(array (
            0 =>
            array (
                'id' => 8,
                'name' => 'TINH DẦU NGUYÊN CHẤT TỪ HOA',
                'describe' => '<h2>Tinh dầu nguy&ecirc;n chất được chiết xuất từ hoa mang lại hương thơm ngọt ng&agrave;o, l&atilde;ng mạn, gi&uacute;p thư gi&atilde;n, giảm stress,ngủ ngon, c&oacute; thể d&ugrave;ng trong mỹ phẩm l&agrave;m đẹp</h2>',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 12:56:51',
                'updated_at' => '2020-04-26 13:00:01',
            ),
            1 =>
            array (
                'id' => 10,
                'name' => 'TINH DẦU NGUYÊN CHẤT TỪ THÂN CÂY, LÁ CÂY',
                'describe' => '<h2>Tinh dầu nguy&ecirc;n chất được chiết xuất từ th&acirc;n c&acirc;y, l&aacute; c&acirc;y thường c&oacute; hương thơm tươi m&aacute;t, dễ chịu, c&oacute; t&aacute;c dụng thanh lọc kh&ocirc;ng kh&iacute;, giải cảm, đuổi muỗi</h2>',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 12:59:22',
                'updated_at' => '2020-04-26 12:59:22',
            ),
            2 =>
            array (
                'id' => 11,
                'name' => 'TINH DẦU HỖN HỢP ESSENTIAL OIL BLEND',
                'describe' => '<h2>Tinh Dầu Hỗn Hợp c&oacute; th&agrave;nh phần l&agrave; hỗn hợp c&aacute;c loại tinh dầu nguy&ecirc;n chất, t&ugrave;y theo từng c&ocirc;ng thức sẽ tạo n&ecirc;n loại dầu hỗn hợp với c&ocirc;ng dụng kh&aacute;c nhau.</h2>',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 13:01:45',
                'updated_at' => '2020-04-26 13:01:45',
            ),
            3 =>
            array (
                'id' => 12,
                'name' => 'TINH DẦU NGUYÊN CHẤT TỪ GỖ',
                'describe' => '<h2>Tinh dầu nguy&ecirc;n chất được chiết xuất từ gỗ thường c&oacute; hương thơm nam t&iacute;nh v&agrave; khả năng khử tr&ugrave;ng tuyệt vời. Tinh dầu đ&agrave;n hương, gỗ hồng, gỗ b&aacute;ch t&ugrave;ng..</h2>',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 13:02:30',
                'updated_at' => '2020-04-26 13:02:30',
            ),
            4 =>
            array (
                'id' => 13,
                'name' => 'TINH DẦU NGUYÊN CHẤT TỪ VỎ, QUẢ, HẠT',
                'describe' => '<h2>Tinh dầu nguy&ecirc;n chất được chiết xuất từ vỏ, quả, hạt thường c&oacute; hương tr&aacute;i c&acirc;y nhẹ nh&agrave;ng, dễ chịu, gi&uacute;p tinh thần thư th&aacute;i, tỉnh t&aacute;o, giảm stress.</h2>',
                'deleted_at' => NULL,
                'created_at' => '2020-04-26 13:03:18',
                'updated_at' => '2020-04-26 13:03:18',
            ),
        ));


    }
}
