<?php

use Illuminate\Database\Seeder;

class articulos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('articulos')->insert([
   'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
   'body' => 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto'
    ]);


    DB::table('articulos')->insert([
   'title' => 'qui est esse',
  'body' => 'est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla'
 ]);
    DB::table('articulos')->insert([
   'title' => 'ea molestias quasi exercitationem repellat qui ipsa sit aut',
   'body' => 'et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut'
 ]);

    DB::table('articulos')->insert([
   'title' => 'eum et est occaecati',
   'body' => 'ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit'
 ]);

  DB::table('articulos')->insert([
   'title' => 'nesciunt quas odio',
  'body' => 'repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque'
 ]);

    DB::table('articulos')->insert([
   'title' => 'dolorem eum magni eos aperiam quia',
   'body' => 'ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae'
 ]);
    DB::table('articulos')->insert([
   'title' => 'magnam facilis autem',
   'body' => 'dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas'
 ]);
    DB::table('articulos')->insert([
  'title' => 'dolorem dolore est ipsam',
   'body' => 'dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae'
 ]);

    }
}
