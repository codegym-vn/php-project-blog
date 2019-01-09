<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->id = 1;
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android' ;
        $post->decs = ' ứng dụng nghe nhạc';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. Chúng ta sẽ dựa vào các bước mô tả trong tài liệu hướng dẫn này để từng bước xây dựng ứng dụng. Mục tiêu là chúng ta có thể tạo ra được sản phẩm đầu tay, sau đó các bạn có thể tự xây dựng các ứng dụng khác với quy mô tương tự. ';
        $post->id_user = 1;
        $post->save();

        $post = new \App\Post();
        $post->id = 2;
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android' ;
        $post->decs = ' ứng dụng nghe nhạc';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. Chúng ta sẽ dựa vào các bước mô tả trong tài liệu hướng dẫn này để từng bước xây dựng ứng dụng. Mục tiêu là chúng ta có thể tạo ra được sản phẩm đầu tay, sau đó các bạn có thể tự xây dựng các ứng dụng khác với quy mô tương tự. ';
        $post->id_user = 2;
        $post->save();

        $post = new \App\Post();
        $post->id = 3;
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android' ;
        $post->decs = ' ứng dụng nghe nhạc';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựng một ứng dụng nghe nhạc dành cho Android. Chúng ta sẽ dựa vào các bước mô tả trong tài liệu hướng dẫn này để từng bước xây dựng ứng dụng. Mục tiêu là chúng ta có thể tạo ra được sản phẩm đầu tay, sau đó các bạn có thể tự xây dựng các ứng dụng khác với quy mô tương tự. ';
        $post->id_user = 3;
        $post->save();
    }
}
