<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Khoerul Mutaqin KM",
        "email" => "khoerulmutaqin225@gmail.com",
        "image" => "heru.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Khoerul Mutaqin",
            "body" => "Ex mollit aliqua in mollit proident proident commodo deserunt sunt duis. Nisi fugiat in anim elit do tempor culpa ipsum do et non cillum quis officia. Velit do incididunt irure pariatur velit laboris proident labore deserunt consequat reprehenderit occaecat aute.
            Aliqua duis id nulla laboris aliquip velit dolore fugiat veniam aliquip mollit labore mollit. Tempor id aliqua dolor eu aliquip eu culpa excepteur dolor mollit culpa elit aliquip eu. Eu dolore aliquip labore fugiat occaecat ullamco aute cillum et sit. Qui sit minim id exercitation deserunt laborum est tempor.
            Magna do excepteur in qui. Officia excepteur sit eiusmod est ea dolor laborum ea Lorem. Cillum quis officia sit consectetur fugiat proident id non consequat aliquip cillum. Aliquip ipsum velit duis deserunt.
            Magna eu consequat non non eiusmod magna amet aute do minim ea reprehenderit pariatur ex. Laboris reprehenderit eu est culpa non labore sint. Dolor sit nulla consectetur nulla do et velit pariatur sit non non occaecat mollit.
            Elit ut excepteur consequat tempor labore velit anim id ullamco Lorem pariatur cillum non. Ad eiusmod laborum nisi amet. Aliqua ipsum laborum mollit eiusmod cillum Lorem et sint quis pariatur. Magna non est nulla nulla Lorem deserunt reprehenderit ea esse tempor eiusmod mollit consectetur velit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Silvia Raudha",
            "body" => "EAdipisiciNostrud cupidatat quis ea consequat sint labore sit fugiat incididunt sit. Lorem incididunt officia dolor id enim deserunt. Eu laborum duis ut ad sunt. Consectetur quis minim in laboris cillum. Pariatur cillum id commodo aliqua. Ea magna eu cupidatat quis anim sint qui elit exercitation culpa consectetur voluptate. Lorem dolore incididunt veniam mollit ea officia excepteur eu incididunt.ng minim exercitation esse id eu minim velit pariatur irure magna labore ullamco do. Fugiat eu elit eu qui nulla nisi cillum enim eiusmod. Ad qui deserunt cupidatat exercitation in magna velit occaecat. Occaecat nisi voluptate occaecat adipisicing et dolor et commodo non incididunt non nisi officia quis. Velit laborum velit consequat est ex reprehenderit deserunt irure. Est sunt nisi amet sint id consectetur et minim elit aliquip pariatur. Nostrud velit reprehenderit dolor magna non reprehenderit aliqua nostrud nostrud eiusmod.Aliqua aliqua deserunt incididunt ad.a occaecat dolor amet mollit tempor est minim duis incididunt voluptate. Consectetur sint in mollit laboris elit nulla consectetur. Amet proident quis ex non et sint labore aute reprehenderit ad culpa laboris voluptate. In sit enim aliquip enim aute nulla anim esse proident commodo do ea. Non labore in magna irure ad culpa proident aliqua eiusmod sunt officia consequat consequat culpa. Nulla consectetur esse proident esse amet voluptate anim irure. Tempor officia minim enim veniam reprehenderit eu nisi duis.Lorenulla Lorem deserunt reprehenderit ea esse tempor eiusmod mollit consectetur velit."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});


// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Khoerul Mutaqin",
            "body" => "Ex mollit aliqua in mollit proident proident commodo deserunt sunt duis. Nisi fugiat in anim elit do tempor culpa ipsum do et non cillum quis officia. Velit do incididunt irure pariatur velit laboris proident labore deserunt consequat reprehenderit occaecat aute.
            Aliqua duis id nulla laboris aliquip velit dolore fugiat veniam aliquip mollit labore mollit. Tempor id aliqua dolor eu aliquip eu culpa excepteur dolor mollit culpa elit aliquip eu. Eu dolore aliquip labore fugiat occaecat ullamco aute cillum et sit. Qui sit minim id exercitation deserunt laborum est tempor.
            Magna do excepteur in qui. Officia excepteur sit eiusmod est ea dolor laborum ea Lorem. Cillum quis officia sit consectetur fugiat proident id non consequat aliquip cillum. Aliquip ipsum velit duis deserunt.
            Magna eu consequat non non eiusmod magna amet aute do minim ea reprehenderit pariatur ex. Laboris reprehenderit eu est culpa non labore sint. Dolor sit nulla consectetur nulla do et velit pariatur sit non non occaecat mollit.
            Elit ut excepteur consequat tempor labore velit anim id ullamco Lorem pariatur cillum non. Ad eiusmod laborum nisi amet. Aliqua ipsum laborum mollit eiusmod cillum Lorem et sint quis pariatur. Magna non est nulla nulla Lorem deserunt reprehenderit ea esse tempor eiusmod mollit consectetur velit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Silvia Raudha",
            "body" => "EAdipisiciNostrud cupidatat quis ea consequat sint labore sit fugiat incididunt sit. Lorem incididunt officia dolor id enim deserunt. Eu laborum duis ut ad sunt. Consectetur quis minim in laboris cillum. Pariatur cillum id commodo aliqua. Ea magna eu cupidatat quis anim sint qui elit exercitation culpa consectetur voluptate. Lorem dolore incididunt veniam mollit ea officia excepteur eu incididunt.ng minim exercitation esse id eu minim velit pariatur irure magna labore ullamco do. Fugiat eu elit eu qui nulla nisi cillum enim eiusmod. Ad qui deserunt cupidatat exercitation in magna velit occaecat. Occaecat nisi voluptate occaecat adipisicing et dolor et commodo non incididunt non nisi officia quis. Velit laborum velit consequat est ex reprehenderit deserunt irure. Est sunt nisi amet sint id consectetur et minim elit aliquip pariatur. Nostrud velit reprehenderit dolor magna non reprehenderit aliqua nostrud nostrud eiusmod.Aliqua aliqua deserunt incididunt ad.a occaecat dolor amet mollit tempor est minim duis incididunt voluptate. Consectetur sint in mollit laboris elit nulla consectetur. Amet proident quis ex non et sint labore aute reprehenderit ad culpa laboris voluptate. In sit enim aliquip enim aute nulla anim esse proident commodo do ea. Non labore in magna irure ad culpa proident aliqua eiusmod sunt officia consequat consequat culpa. Nulla consectetur esse proident esse amet voluptate anim irure. Tempor officia minim enim veniam reprehenderit eu nisi duis.Lorenulla Lorem deserunt reprehenderit ea esse tempor eiusmod mollit consectetur velit."
        ]
    ];
    $new_post= [];

    foreach($blog_post as $post){

        if($post["slug"] == $slug){
            $new_post =$post;
        }
    }

    return view('post',[
        "title" => "Single-post",
        "post" => $new_post
    ]);

});
