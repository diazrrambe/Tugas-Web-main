<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::create([
        //     'title' => 'Telur',
        //     'title_en' => 'Egg',
        //     'slug' => 'telur',
        //     'category_id' => 2,
        //     'excerpt' => 'Makanan rendah kalori untuk diet yang pertama adalah telur. Satu butir telur ayam diketahui mengandung 72 kalori',
        //     'body' => 'Makanan rendah kalori untuk diet yang pertama adalah telur. Satu butir telur ayam diketahui mengandung 72 kalori, 6 gram protein, dan sudah dilengkapi dengan berbagai mineral dan vitamin yang penting bagi tubuh.</p>
        //     <p> Telur juga termasuk salah satu makanan berprotein tinggi yang mengenyangkan sehingga bisa mengurangi rasa lapar. Namun, jika sedang diet, sebaiknya konsumsi telur dengan cara direbus untuk menghindari kandungan lemak tak sehat dari minyak goreng.</p>'

        // ]);

        // Category::create([
        //     'name' => 'Work Out',
        //     'slug' => 'work-out',
        //     'body' => 'Workout adalah kegiatan yang melibatkan aktivitas fisik dengan tujuan meningkatkan kebugaran tubuh, kekuatan otot, dan kesehatan secara umum. Dalam konteks diet, workout atau latihan fisik dapat menjadi bagian penting dari strategi penurunan berat badan atau pembentukan tubuh.'
        // ]);

        // Category::create([
        //     'name' => 'Menu',
        //     'slug' => 'menu',
        //     'body' => 'Menu dalam konteks diet adalah substansi yang dikonsumsi untuk memenuhi kebutuhan nutrisi dan energi tubuh. Makanan menyediakan berbagai nutrisi, termasuk karbohidrat, protein, lemak, vitamin, dan mineral, yang diperlukan untuk menjalankan fungsi-fungsi biologis dan mendukung kesehatan secara keseluruhan.'
        // ]);

        // Category::create([
        //     'name' => 'Fruit and Vegetable',
        //     'slug' => 'fruit-and-vegetable',
        //     'body' => 'Buah dan sayur memainkan peran penting dalam mencapai diet sehat dan seimbang. Buah yang merupakan struktur tumbuhan yang berkembang dari ovarium bunga, menyediakan beragam nutrisi, termasuk vitamin, mineral, serat, dan antioksidan. Mereka membantu memenuhi kebutuhan tubuh akan zat-zat tersebut, mendukung kesehatan pencernaan, dan melindungi sel-sel tubuh dari kerusakan radikal bebas.'
        // ]);

        // Category::create([
        //     'name' => 'Vitamin',
        //     'slug' => 'vitamin',
        //     'body' => 'Vitamin adalah senyawa organik esensial yang dibutuhkan oleh tubuh dalam jumlah kecil untuk menjalankan berbagai fungsi biologis yang kritis. Kebanyakan vitamin tidak dapat diproduksi oleh tubuh sendiri dan harus diperoleh melalui makanan.'
        // ]);

        // User::create([
        //     'name' => 'Muhammad Sidiq',
        //     'username' => 'sidiq',
        //     'email' => 'moehammad.siddiq@gmail.com',
        //     'password' => '12345'
        // ]);


    //     Post::create([
    //         'title' => 'Wortel',
    //         'title_en' => 'Carrot',
    //         'slug' => 'wortel',
    //         'category_id' => 3,
    //         'excerpt' => 'Wortel adalah sayuran yang rendah kalori namun kaya akan nutrisi, menjadikannya pilihan yang bagus untuk dimasukkan dalam diet sehat',
    //         'body' => '<p>Wortel adalah sayuran yang rendah kalori namun kaya akan nutrisi, menjadikannya pilihan yang bagus untuk dimasukkan dalam diet sehat. Berikut adalah beberapa kandungan nutrisi dalam wortel yang membuatnya cocok untuk diet:</p>
    //         <ol>
    //             <li>Beta-karoten: Wortel kaya akan beta-karoten, yang merupakan senyawa antioksidan yang memberikan warna oranye pada wortel. Beta-karoten diubah menjadi vitamin A oleh tubuh, yang penting untuk kesehatan mata, kulit, dan sistem kekebalan tubuh. Antioksidan ini juga membantu melindungi sel-sel tubuh dari kerusakan akibat radikal bebas.
    //             </li>
    //             <li>Serat: Wortel mengandung serat, baik serat larut maupun tidak larut, yang membantu menjaga pencernaan yang sehat, memperlambat penyerapan gula darah, serta memberikan rasa kenyang lebih lama. Serat ini dapat membantu dalam pengendalian nafsu makan dan manajemen berat badan.</li>
    //             <li>Vitamin dan Mineral: Selain beta-karoten, wortel juga mengandung vitamin K, vitamin C, kalium, vitamin B6, dan zat besi. Vitamin K penting untuk pembekuan darah dan kesehatan tulang, sementara vitamin C membantu dalam sistem kekebalan tubuh dan kalium mendukung fungsi otot dan jantung.</li>
    //             <li>Rendah Kalori: Wortel rendah kalori dan memiliki indeks glikemik yang rendah. Ini membuatnya menjadi camilan yang baik untuk diet rendah kalori atau saat mencoba mengatur asupan gula darah.</li>
    //             <li>Versatile dan Mudah Disiapkan: Wortel dapat dimakan mentah sebagai camilan, ditambahkan ke dalam salad, direbus, dikukus, atau digunakan dalam berbagai resep masakan. Fleksibilitas ini memungkinkan untuk mengonsumsinya dengan berbagai cara sesuai dengan selera dan kebutuhan diet.</li>
    //             <li>Sifat Hidrasi: Wortel memiliki kandungan air yang cukup tinggi, membantu dalam menjaga tubuh terhidrasi, terutama bagi mereka yang mungkin kesulitan minum cukup air setiap hari.</li>
    //         </ol>
    //         <p>Wortel memiliki banyak manfaat nutrisi yang baik, terutama karena kandungan beta-karoten dan seratnya. Namun, seperti halnya dengan makanan lain, variasi dalam diet adalah kunci untuk memastikan asupan nutrisi yang seimbang.</p>
    //         <p>Untuk mencapai manfaat terbaik dari wortel dalam diet sehat, disarankan untuk mengonsumsinya bersama dengan berbagai jenis makanan sehat lainnya serta dalam porsi yang sesuai dengan kebutuhan individu. Juga, jika ada kekhawatiran atau pertimbangan khusus terkait dengan diet Anda, disarankan untuk berkonsultasi dengan ahli gizi atau profesional kesehatan.</p>'

    //     ]);

    //     Post::create([
    //         'title' => 'Mentimun',
    //         'title_en' => 'Cucumber',
    //         'slug' => 'mentimun',
    //         'category_id' => 3,
    //         'excerpt' => 'Mentimun adalah sayuran yang rendah kalori, tinggi air, dan mengandung beberapa nutrisi penting yang membuatnya cocok untuk dimasukkan dalam diet',
    //         'body' => '<p>Mentimun adalah sayuran yang rendah kalori, tinggi air, dan mengandung beberapa nutrisi penting yang membuatnya cocok untuk dimasukkan dalam diet sehat, terutama dalam program penurunan berat badan. Berikut adalah beberapa kandungan nutrisi dalam mentimun yang membuatnya cocok untuk diet:</p>
    //         <ol>
    //             <li>Rendah Kalori dan Tinggi Air: Mentimun rendah kalori dan mengandung sebagian besar air. Satu porsi mentimun (sekitar setengah cangkir iris) hanya mengandung beberapa kalori, menjadikannya camilan yang baik untuk diet rendah kalori. Kandungan airnya yang tinggi juga membantu menghidrasi tubuh.
    //             </li>
    //             <li>Serat: Meskipun mentimun tidak mengandung banyak serat, namun serat yang ada membantu dalam pencernaan yang sehat dan memberikan rasa kenyang untuk jangka waktu yang lebih lama. Hal ini bisa membantu mengontrol nafsu makan dan membantu dalam manajemen berat badan.</li>
    //             <li>Vitamin dan Mineral: Mentimun mengandung beberapa vitamin dan mineral seperti vitamin K, vitamin C, potassium, magnesium, dan zat besi. Vitamin K penting untuk pembekuan darah dan kesehatan tulang, sementara vitamin C membantu sistem kekebalan tubuh.</li>
    //             <li>Antioksidan: Mentimun mengandung antioksidan, seperti flavonoid dan triterpenes, yang membantu melawan kerusakan sel akibat radikal bebas dalam tubuh. Antioksidan ini dapat membantu melindungi tubuh dari penyakit dan membantu menjaga kesehatan secara keseluruhan.
    //             </li>
    //             <li>Rendah Lemak dan Kolesterol: Mentimun hampir bebas lemak dan kolesterol. Ini menjadikannya camilan sehat yang cocok untuk diet, terutama jika dikonsumsi dalam porsi yang tepat.</li>
    //             <li>Rasa Segar dan Versatile: Mentimun memiliki rasa yang segar dan dapat dimakan mentah atau ditambahkan ke dalam berbagai hidangan, seperti salad, sandwich, atau dip. Fleksibilitas ini memungkinkan untuk mengonsumsinya dalam berbagai cara sesuai dengan preferensi pribadi.</li>
    //         </ol>
    //         <p>Mentimun secara umum sangat rendah kalori dan tinggi air, yang membuatnya menjadi camilan yang baik untuk memenuhi rasa lapar tanpa menambah banyak kalori pada diet. Namun, meskipun memiliki banyak manfaat, mentimun tidak mengandung banyak nutrisi dibandingkan dengan beberapa sayuran lainnya. Oleh karena itu, disarankan untuk mengonsumsinya bersama dengan berbagai jenis sayuran dan makanan lainnya yang seimbang untuk memastikan asupan nutrisi yang cukup.</p>
    //         <p>Ingatlah bahwa untuk mencapai tujuan diet yang sehat, penting untuk menjaga pola makan yang seimbang, mengonsumsi berbagai jenis makanan, serta mempertimbangkan aspek aktivitas fisik dan gaya hidup secara keseluruhan. Jika Anda memiliki kekhawatiran atau kebutuhan khusus terkait diet, disarankan untuk berkonsultasi dengan ahli gizi atau profesional kesehatan.</p>'

    // ]);

    //     Post::create([
    //         'title' => 'Bayam',
    //         'title_en' => 'Spinach',
    //         'slug' => 'bayam',
    //         'category_id' => 3,
    //         'excerpt' => 'Bayam merupakan sayuran hijau yang rendah kalori namun kaya akan nutrisi. Keberagaman nutrisi dalam bayam menjadikannya pilihan yang baik',
    //         'body' => '<p>Bayam merupakan sayuran hijau yang rendah kalori namun kaya akan nutrisi. Keberagaman nutrisi dalam bayam menjadikannya pilihan yang baik untuk dimasukkan ke dalam diet sehat, terutama untuk mendukung program penurunan berat badan. Berikut adalah beberapa kandungan nutrisi dalam bayam yang membuatnya cocok untuk diet:</p>
    //         <ol>
    //             <li>Rendah Kalori: Bayam memiliki kandungan kalori yang rendah, membuatnya cocok untuk diet rendah kalori atau program penurunan berat badan. Satu cangkir bayam mentah hanya memiliki sekitar 7 kalori, menjadikannya pilihan yang bagus untuk dimasukkan dalam hidangan dengan asupan kalori rendah.</li>
    //             <li>Serat: Bayam mengandung serat yang tinggi. Serat membantu menjaga pencernaan yang sehat, memperlambat penyerapan glukosa, serta memberikan rasa kenyang lebih lama. Ini dapat membantu mengontrol nafsu makan dan membantu dalam pengelolaan berat badan.</li>
    //             <li>Vitamin dan Mineral: Bayam kaya akan vitamin dan mineral penting seperti vitamin K, vitamin A, vitamin C, vitamin B9 (asam folat), zat besi, kalsium, dan magnesium. Vitamin K penting untuk pembekuan darah dan kesehatan tulang, sementara vitamin A mendukung kesehatan mata dan sistem kekebalan tubuh.</li>
    //             <li>Antioksidan: Bayam mengandung berbagai antioksidan, termasuk beta-karoten, lutein, dan zeaxanthin. Antioksidan ini membantu melawan kerusakan sel akibat radikal bebas dalam tubuh, mendukung kesehatan mata, serta dapat membantu dalam pencegahan penyakit kronis.</li>
    //             <li>Senyawa Bioaktif: Bayam juga mengandung senyawa bioaktif seperti flavonoid yang memiliki sifat anti-inflamasi dan anti-kanker. Flavonoid dalam bayam telah dikaitkan dengan berbagai manfaat kesehatan.</li>
    //             <li>Fleksibilitas dalam Persiapan: Bayam mudah dimasukkan ke dalam berbagai hidangan, baik itu dimasak dalam masakan, ditambahkan ke dalam smoothie, atau digunakan sebagai bagian dari salad. Fleksibilitas ini memungkinkan untuk mengonsumsinya dengan berbagai cara, sesuai dengan preferensi pribadi dan kebutuhan diet.</li>
    //         </ol>
    //         <p>Bayam dapat menjadi komponen yang baik dalam diet sehat, terutama ketika dikombinasikan dengan variasi makanan lain yang seimbang. Penting untuk mengonsumsi berbagai jenis makanan sehat untuk memastikan asupan nutrisi yang cukup dan seimbang.</p>
    //         <p>Namun, jika Anda memiliki kondisi medis tertentu atau mempertimbangkan perubahan signifikan dalam diet Anda, konsultasikan dengan ahli gizi atau profesional kesehatan untuk saran yang lebih spesifik sesuai dengan kebutuhan Anda.
    //         </p>'

    //     ]);

    //     Post::create([
    //             'title' => 'Kentang',
    //             'title_en' => 'Potato',
    //             'slug' => 'kentang',
    //             'category_id' => 3,
    //             'excerpt' => 'Kentang adalah salah satu sumber karbohidrat yang sering dikonsumsi dan mengandung beberapa nutrisi penting yang dapat mendukung diet',
    //             'body' => '
    //             <p>Kentang adalah salah satu sumber karbohidrat yang sering dikonsumsi dan mengandung beberapa nutrisi penting yang dapat mendukung diet sehat jika dikonsumsi dengan bijak. Namun, perlu diperhatikan bahwa kentang dapat beragam jenisnya dan cara memasaknya mempengaruhi kadar nutrisi yang terdapat di dalamnya.

    //                 Berikut adalah beberapa kandungan nutrisi yang membuat kentang cocok untuk dimasukkan dalam diet:</p>
    //             <ol>
    //                 <li>Karbohidrat: Kentang merupakan sumber karbohidrat yang baik. Meskipun diketahui memiliki indeks glikemik yang lebih tinggi, karbohidrat dalam kentang dapat memberikan energi yang diperlukan untuk aktivitas sehari-hari. Karena kadar gula darah dapat dipengaruhi oleh konsumsi karbohidrat, penting untuk memperhatikan porsi dan memilih kentang yang lebih rendah indeks glikemiknya, seperti kentang manis atau kentang merah.</li>
    //                 <li>Serat: Kentang mengandung serat, terutama jika dimakan bersama kulitnya. Serat membantu menjaga pencernaan yang sehat, memberikan rasa kenyang lebih lama, dan membantu mengendalikan kadar gula darah. Ini dapat membantu dalam pengendalian nafsu makan dan manajemen berat badan.</li>
    //                 <li>Vitamin dan Mineral: Kentang mengandung berbagai vitamin dan mineral penting seperti vitamin C, vitamin B6, potasium, magnesium, dan zat besi. Vitamin C berperan dalam meningkatkan sistem kekebalan tubuh, sementara potasium mendukung fungsi jantung dan otot. Vitamin B6 penting untuk metabolisme tubuh.</li>
    //                 <li>Antioksidan: Kentang mengandung antioksidan seperti senyawa polifenol dan flavonoid yang membantu melawan radikal bebas dalam tubuh. Antioksidan ini dapat membantu melindungi sel-sel tubuh dari kerusakan dan berbagai penyakit kronis.</li>
    //                 <li>Rendah Lemak dan Kolesterol: Kentang secara alami rendah lemak dan kolesterol, membuatnya cocok untuk diet sehat, terutama jika dimasak tanpa tambahan lemak seperti mentega atau minyak yang berlebihan.
    //                 </li>
    //                 <li>Fleksibilitas dalam Memasak: Kentang bisa dimasak dalam berbagai cara, seperti direbus, dipanggang, atau diolah menjadi berbagai hidangan yang sehat. Ini memberikan fleksibilitas dalam memasukkan kentang ke dalam berbagai resep dalam diet.</li>
    //                 <li></li>
    //             </ol>
    //             <p>Meskipun kentang memiliki manfaat nutrisi yang baik, sangat penting untuk memperhatikan cara memasaknya. Penggorengan dan pengolahan dengan minyak atau lemak tambahan dapat menambah kalori dan lemak yang tidak diinginkan. Porsi juga penting; mengonsumsi kentang dalam jumlah yang terlalu besar bisa membuat asupan kalori menjadi berlebihan.
    //             </p>
    //             <p>Untuk mendapatkan manfaat terbaik dari kentang dalam diet sehat, sebaiknya dikonsumsi dalam kombinasi dengan makanan lain yang seimbang dan dengan porsi yang sesuai dengan kebutuhan individu serta gaya hidup yang aktif. Konsultasikan dengan ahli gizi atau profesional kesehatan untuk rekomendasi yang sesuai dengan kebutuhan spesifik Anda.</p>'

    //         ]);

    //         Post::create([
    //             'title' => 'Yogurt',
    //             'title_en' => 'Yogurt',
    //             'slug' => 'yogurt',
    //             'category_id' => 2,
    //             'excerpt' => 'Yogurt sering kali dianggap cocok untuk diet karena mengandung sejumlah nutrisi yang bermanfaat bagi tubuh dan memiliki sifat yang mendukung penurunan berat badan',
    //             'body' => '<p>  Yogurt sering kali dianggap cocok untuk diet karena mengandung sejumlah nutrisi yang bermanfaat bagi tubuh dan memiliki sifat yang mendukung penurunan berat badan. Berikut adalah rincian kandungan nutrisi dalam yogurt yang membuatnya cocok untuk diet:</p>
    //             <ol>
    //                 <li>Probiotik: Yogurt mengandung bakteri baik atau probiotik seperti Lactobacillus bulgaricus dan Streptococcus thermophilus. Probiotik ini penting untuk kesehatan pencernaan karena membantu menjaga keseimbangan mikroba dalam usus, yang dapat memperbaiki pencernaan dan sistem kekebalan tubuh.</li>
    //                 <li>Protein: Yogurt merupakan sumber protein yang baik. Protein membantu dalam membangun otot, menjaga perasaan kenyang lebih lama, dan membantu mengontrol nafsu makan, sehingga dapat mendukung upaya penurunan berat badan.</li>
    //                 <li>Kalsium: Kandungan kalsium dalam yogurt juga penting untuk kesehatan tulang dan gigi yang kuat. Kalsium membantu menjaga kerapatan tulang dan mengurangi risiko osteoporosis.</li>
    //                 <li>Vitamin B: Yogurt mengandung beberapa vitamin B seperti riboflavin (B2), B12, dan B5 yang berperan dalam metabolisme energi dan fungsi sistem saraf.</li>
    //                 <li>Rendah Lemak: Ada varian yogurt rendah lemak atau tanpa lemak yang dapat membantu dalam mengontrol asupan kalori dan lemak, menjadikannya pilihan yang baik dalam program diet rendah lemak.</li>
    //                 <li>Rendah Kandungan Gula (opsional): Beberapa yogurt tanpa pemanis buatan atau gula tambahan bisa menjadi pilihan yang lebih sehat dalam diet. Anda dapat memilih yogurt plain atau yogurt rendah gula untuk mengurangi asupan gula tambahan.</li>
    //                 <li>Sumber Energi: Yogurt dapat memberikan energi yang cukup dalam porsi yang relatif kecil. Ini bisa membantu menjaga energi selama program diet.</li>
    //             </ol>
    //             <p>Ketika memilih yogurt untuk diet, pastikan untuk membaca label nutrisi dengan cermat untuk menghindari varian yang mengandung tambahan gula, pemanis buatan, atau bahan tambahan lain yang tidak diinginkan. Yogurt plain atau Greek yogurt biasanya merupakan pilihan yang lebih sehat karena memiliki kandungan gula alami yang lebih rendah.</p>
    //             <p>Selain itu, yogurt dapat diolah menjadi hidangan yang lebih sehat dengan menambahkan potongan buah segar, biji-bijian, atau kacang-kacangan. Ini bisa menambahkan rasa, tekstur, serta nutrisi tambahan tanpa menambahkan terlalu banyak kalori atau gula. Sesuaikan konsumsi yogurt dengan kebutuhan kalori harian dan tujuan diet Anda.</p>'

    //         ]);


    //         Post::create([
    //             'title' => 'Brokoli',
    //             'title_en' => 'Broccoli',
    //             'slug' => 'brokoli',
    //             'category_id' => 3,
    //             'excerpt' => 'Brokoli adalah salah satu sayuran yang sangat sehat dan cocok untuk dimasukkan ke dalam diet sehat. Kandungan nutrisi brokoli yang melimpah',
    //             'body' => '<p>Brokoli adalah salah satu sayuran yang sangat sehat dan cocok untuk dimasukkan ke dalam diet sehat. Kandungan nutrisi brokoli yang melimpah menjadikannya pilihan yang baik untuk mendukung kesehatan dan program diet, di antaranya:</p>
    //             <ol>
    //                 <li>Serat: Brokoli kaya akan serat, yang membantu menjaga pencernaan tetap sehat, mengatur kadar gula darah, serta memberikan rasa kenyang lebih lama. Hal ini dapat membantu dalam pengelolaan berat badan karena mengurangi keinginan untuk makan berlebihan.
    //                 </li>
    //                 <li>Vitamin dan Mineral: Brokoli mengandung berbagai jenis vitamin dan mineral yang penting, seperti vitamin C, vitamin K, vitamin A, vitamin B9 (asam folat), kalsium, dan kalium. Vitamin C membantu sistem kekebalan tubuh dan pertumbuhan sel-sel tubuh, sementara vitamin K mendukung pembekuan darah dan kesehatan tulang.</li>
    //                 <li>Antioksidan: Kandungan antioksidan, seperti sulforaphane, quercetin, dan beta-karoten dalam brokoli, membantu melawan kerusakan sel akibat radikal bebas dalam tubuh. Antioksidan ini dapat membantu melindungi tubuh dari penyakit kronis dan membantu menjaga kesehatan jantung.</li>
    //                 <li>Rendah Kalori: Brokoli memiliki kandungan kalori yang rendah, tetapi tinggi akan nutrisi. Ini membuatnya menjadi pilihan yang bagus untuk diet rendah kalori atau saat ingin menjaga asupan kalori dalam kontrol.</li>
    //                 <li>Senyawa Bioaktif: Brokoli mengandung senyawa bioaktif yang disebut glucosinolates, yang diubah menjadi senyawa yang melawan kanker ketika dimetabolisme oleh tubuh. Penelitian menunjukkan bahwa konsumsi brokoli secara teratur dapat membantu dalam pencegahan kanker tertentu.</li>
    //                 <li>Mudah Dimasak dan Dikonsumsi: Brokoli mudah dimasak dalam berbagai cara. Ini bisa direbus, dikukus, ditumis, atau bahkan dimakan mentah sebagai bagian dari salad. Kemudahan dalam persiapan ini memudahkan untuk memasukkannya ke dalam berbagai resep dalam diet sehari-hari.</li>
    //             </ol>
    //             <p>Meskipun brokoli memiliki banyak manfaat, tetapi seperti halnya dengan makanan lainnya, variasi dalam diet sangat penting. Penting untuk memasukkan berbagai jenis makanan sehat ke dalam diet Anda untuk memastikan asupan nutrisi yang seimbang.</p>
    //             <p>Penting untuk dicatat bahwa faktor lain seperti aktivitas fisik, asupan cairan, serta komposisi total diet juga merupakan bagian penting dari kesuksesan diet yang sehat dan seimbang. Konsultasikanlah dengan profesional kesehatan atau ahli gizi untuk mendapatkan saran yang lebih spesifik sesuai dengan kebutuhan individual Anda.</p>'

    //         ]);

    //         Post::create([
    //             'title' => 'Oatmeal',
    //             'title_en' => 'Oatmeal',
    //             'slug' => 'oatmeal',
    //             'category_id' => 2,
    //             'excerpt' => 'Oatmeal adalah salah satu makanan yang sering direkomendasikan untuk diet karena kaya akan nutrisi penting dan memiliki berbagai manfaat bagi kesehatan.',
    //             'body' => '<p>Oatmeal adalah salah satu makanan yang sering direkomendasikan untuk diet karena kaya akan nutrisi penting dan memiliki berbagai manfaat bagi kesehatan. Berikut adalah rincian kandungan oatmeal yang membuatnya cocok untuk diet:</p>
    //             <ol>
    //                 <li>Serat: Oatmeal mengandung serat larut yang disebut beta-glukan. Serat larut ini membantu mengurangi penyerapan kolesterol jahat (LDL) dalam tubuh dan membantu menjaga kesehatan jantung. Selain itu, serat larut dapat memberikan rasa kenyang lebih lama, membantu Anda merasa kenyang lebih cepat dan mengurangi keinginan makan berlebihan.</li>
    //                 <li>Karbohidrat Kompleks: Oatmeal adalah sumber karbohidrat kompleks yang memberikan energi secara bertahap karena dicerna lebih lambat dalam tubuh. Hal ini membantu menjaga kadar gula darah tetap stabil, menghindari lonjakan gula darah yang dapat memicu rasa lapar secara tiba-tiba.</li>
    //                 <li>Protein: Meskipun oatmeal bukan sumber protein utama, mengandung sedikit protein yang dapat membantu dalam proses regenerasi sel tubuh dan mempertahankan massa otot.</li>
    //                 <li>Vitamin dan Mineral: Oatmeal mengandung sejumlah kecil vitamin dan mineral penting seperti vitamin B kompleks (seperti tiamin, riboflavin, dan niacin), serta mineral seperti zat besi, magnesium, fosfor, dan selenium yang dibutuhkan tubuh untuk berfungsi dengan baik.</li>
    //                 <li>Rendah Lemak Jenuh: Oatmeal secara alami rendah lemak jenuh, yang baik untuk kesehatan jantung dan dapat membantu dalam mengontrol berat badan.</li>
    //                 <li>Sifat Pengendali Nafsu Makan: Karena kandungan seratnya yang tinggi, oatmeal dapat membantu dalam mengontrol nafsu makan, sehingga cocok digunakan sebagai bagian dari diet untuk menurunkan berat badan.</li>
    //                 <li>Penting untuk dicatat bahwa pentingnya bagaimana oatmeal disajikan dan ditambahkan bahan lainnya dalam proses memasak juga mempengaruhi manfaatnya dalam diet. Disarankan untuk memilih oatmeal polos tanpa tambahan gula atau pengawet, dan lebih baik lagi memilih oatmeal tipe steel-cut atau rolled oats yang lebih minim diproses.</li>
    //             </ol>
    //             <p>Kombinasikan oatmeal dengan potongan buah segar, kacang-kacangan, atau sedikit madu sebagai pemanis alami untuk mempertahankan manfaat kesehatannya tanpa menambah terlalu banyak kalori atau gula tambahan. Sesuaikan juga porsi oatmeal dengan kebutuhan kalori harian Anda untuk mencapai tujuan diet yang diinginkan.</p>'

    //         ]);

    //         Post::create([
    //             'title' => 'Teh Hijau',
    //             'title_en' => 'Green Tea',
    //             'slug' => 'teh-hijau',
    //             'category_id' => 2,
    //             'excerpt' => 'Teh hijau adalah minuman yang sering direkomendasikan untuk diet karena memiliki sejumlah kandungan nutrisi',
    //             'body' => '<p>Teh hijau adalah minuman yang sering direkomendasikan untuk diet karena memiliki sejumlah kandungan nutrisi dan senyawa aktif yang dapat memberikan manfaat bagi kesehatan dan membantu dalam proses penurunan berat badan. Berikut adalah rincian kandungan teh hijau yang membuatnya cocok untuk diet:</p>
    //             <ol>
    //                 <li>Antioksidan: Teh hijau mengandung antioksidan kuat, terutama katekin seperti epigallocatechin gallate (EGCG). Antioksidan ini membantu melawan radikal bebas dalam tubuh yang dapat merusak sel dan mempengaruhi kesehatan secara keseluruhan.</li>
    //                 <li>Metabolisme dan Pembakaran Lemak: Senyawa katekin dalam teh hijau, terutama EGCG, diketahui dapat meningkatkan tingkat metabolisme tubuh dan meningkatkan pembakaran lemak. Ini dapat membantu dalam proses penurunan berat badan.</li>
    //                 <li>Kafein: Meskipun kandungan kafein dalam teh hijau tidak sebanyak kandungan kafein dalam kopi, tetapi tetap dapat memberikan dorongan energi ringan dan meningkatkan tingkat metabolisme. Kafein juga dapat membantu meningkatkan fokus dan konsentrasi selama aktivitas fisik.</li>
    //                 <li>L-Theanine: Teh hijau mengandung l-theanine, senyawa yang dapat memberikan efek menenangkan pada tubuh tanpa menyebabkan rasa kantuk. Ini dapat membantu mengurangi stres dan kecemasan yang terkait dengan diet.</li>
    //                 <li>Rendah Kalori: Teh hijau secara alami rendah kalori dan bebas lemak, sehingga cocok untuk dikonsumsi sebagai minuman rendah kalori selama diet.</li>
    //                 <li>Penekanan Nafsu Makan: Beberapa penelitian menunjukkan bahwa konsumsi teh hijau dapat membantu dalam mengurangi nafsu makan dan membuat Anda merasa lebih kenyang, yang bisa membantu mengontrol porsi makan dan mengurangi asupan kalori.</li>
    //                 <li>Kesehatan Jantung: Senyawa dalam teh hijau dikaitkan dengan manfaat kesehatan jantung, seperti menurunkan risiko penyakit jantung dan menurunkan kadar kolesterol.</li>
    //             </ol>

    //             <p>Penting untuk dicatat bahwa meskipun teh hijau memiliki banyak manfaat bagi kesehatan, itu bukanlah solusi ajaib untuk penurunan berat badan. Penting untuk menjaga pola makan yang seimbang dan gaya hidup sehat secara keseluruhan untuk mencapai dan mempertahankan berat badan yang sehat.</p>
    //             <p>Konsumsi teh hijau yang optimal adalah sekitar 2-3 cangkir per hari, tanpa menambahkan gula atau pemanis tambahan. Selalu konsultasikan dengan profesional kesehatan jika Anda memiliki kondisi kesehatan tertentu atau sedang mengonsumsi obat-obatan tertentu, karena konsumsi teh hijau dalam jumlah tertentu juga dapat mempengaruhi respons tubuh terhadap obat-obatan.</p>'

    //         ]);

    //         Post::create([
    //             'title' => 'Susu',
    //             'title_en' => 'Milk',
    //             'slug' => 'susu',
    //             'category_id' => 2,
    //             'excerpt' => 'Susu adalah sumber nutrisi yang kaya akan berbagai zat penting yang membuatnya dapat dimasukkan ke dalam diet. Namun, perlu diperhatikan bahwa sifat susu sebagai bagian dari diet',
    //             'body' => '<p>Susu adalah sumber nutrisi yang kaya akan berbagai zat penting yang membuatnya dapat dimasukkan ke dalam diet. Namun, perlu diperhatikan bahwa sifat susu sebagai bagian dari diet dapat bervariasi tergantung pada jenis susu yang dikonsumsi (susu utuh, rendah lemak, tanpa lemak, susu nabati, dll.) dan kebutuhan individu. Berikut adalah rincian kandungan nutrisi yang membuat susu cocok untuk diet:</p>
    //             <ol>
    //                 <li>Protein: Susu merupakan sumber protein yang baik, terutama whey dan kasein. Protein dibutuhkan untuk membangun dan memperbaiki jaringan tubuh, termasuk otot. Protein juga dapat membantu menjaga perasaan kenyang lebih lama, sehingga membantu dalam pengontrolan nafsu makan.</li>
    //                 <li>Kalsium: Susu mengandung kalsium yang sangat penting untuk kesehatan tulang dan gigi yang kuat. Kalsium juga berperan dalam fungsi otot dan saraf yang sehat.
    //                 </li>
    //                 <li>Vitamin D: Susu sering difortifikasi dengan vitamin D, yang membantu tubuh dalam penyerapan kalsium. Vitamin D juga penting untuk kesehatan tulang dan sistem kekebalan tubuh.</li>
    //                 <li>Vitamin B: Susu mengandung sejumlah vitamin B, seperti riboflavin (B2), B12, dan niacin (B3), yang berperan dalam metabolisme energi dan fungsi sistem saraf.</li>
    //                 <li>Kalori dan Lemak: Jenis susu rendah lemak atau susu tanpa lemak (skim) cenderung memiliki kandungan kalori dan lemak yang lebih rendah daripada susu utuh. Ini bisa membantu dalam mengontrol asupan kalori dan lemak harian saat berdiet.</li>
    //                 <li>Laktosa: Susu mengandung laktosa, yaitu gula alami dalam susu. Bagi beberapa orang yang intoleran terhadap laktosa, konsumsi susu dapat menyebabkan gangguan pencernaan. Namun, ada juga opsi susu nabati yang tidak mengandung laktosa seperti susu almond, susu kedelai, atau susu kelapa.</li>
    //             </ol>
    //             <p>Penting untuk diperhatikan bahwa meskipun susu memiliki banyak manfaat, beberapa orang mungkin memiliki intoleransi terhadap laktosa atau alergi susu sapi. Mereka mungkin perlu mencari alternatif susu nabati atau suplemen kalsium lainnya yang sesuai dengan kebutuhan mereka.</p>
    //             <p>Dalam diet, penting untuk memilih susu yang sesuai dengan kebutuhan nutrisi Anda dan memperhatikan porsi yang dikonsumsi. Susu tanpa gula tambahan atau pemanis buatan cenderung lebih baik dalam diet. Jika Anda memiliki pertimbangan khusus terkait kesehatan atau diet, konsultasikan dengan ahli gizi atau dokter untuk rekomendasi yang lebih spesifik.</p>'

    //         ]);


//     Post::create([
//         'title' => 'Vitamin D',
//         'title_en' => 'Vitamin D',
//         'slug' => 'vitamin-d',
//         'category_id' => '4',
//         'excerpt' => 'Vitamin D dikenal sebagai "vitamin sinar matahari" karena tubuh kita dapat membuatnya sendiri saat kulit terpapar sinar matahari.',
//         'body' => '<p>Vitamin D dikenal sebagai "vitamin sinar matahari" karena tubuh kita dapat membuatnya sendiri saat kulit terpapar sinar matahari. Vitamin ini penting untuk menyerap kalsium dan fosfor yang mendukung kesehatan tulang dan gigi. Kekurangan vitamin D dapat menyebabkan risiko osteoporosis, gangguan sistem kekebalan tubuh, dan masalah kesehatan tulang. Sumber terbaik vitamin D adalah sinar matahari langsung, terutama pada pagi hari. Selain itu, dapat ditemukan dalam makanan seperti ikan berlemak (sarden, salmon), telur, dan produk susu yang diperkaya.</p>'
//     ]);

// Post::create([
//         'title' => 'Vitamin B Kompleks',
//         'title_en' => 'Vitamin B Complex',
//         'slug' => 'vitamin-b-kompleks',
//         'category_id' => '4',
//         'excerpt' => 'Vitamin B kompleks terdiri dari beberapa vitamin, termasuk B1 (thiamin), B2 (riboflavin), B3 (niacin), B5 (asam pantotenat), B6 (piridoksin), B7 (biotin), B9 (asam folat), dan B12 (kobalamin).',
//         'body' => '<p>Vitamin B kompleks terdiri dari beberapa vitamin, termasuk B1 (thiamin), B2 (riboflavin), B3 (niacin), B5 (asam pantotenat), B6 (piridoksin), B7 (biotin), B9 (asam folat), dan B12 (kobalamin).</p>
//             <p>Berikut adalah 8 jenis pada vitamin B kompleks:</p>
//             <ol>
//                 <li>
//                     <h3>Vitamin B1 (Tiamin)</h3>
//                     <p>Vitamin B1 adalah vitamin penting untuk metabolisme karbohidrat dalam tubuh dan berperan dalam fungsi saraf yang sehat. Kekurangan vitamin B1 dapat menyebabkan berbagai masalah kesehatan, termasuk berbagai masalah pada sistem saraf dan otot. Sumber vitamin B1 termasuk biji-bijian utuh, kacang-kacangan, daging, dan produk susu.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B2 (Riboflavin)</h3>
//                     <p>Vitamin B2 berperan penting dalam metabolisme energi dalam tubuh dan membantu menjaga kesehatan kulit, mata, dan sistem saraf. Kekurangan vitamin B2 dapat menyebabkan masalah pada kulit, bibir pecah-pecah, serta sensitivitas mata. Sumbernya meliputi produk susu, daging, sayuran hijau, dan biji-bijian.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B3 (Niasin)</h3>
//                     <p>Niacin, juga dikenal sebagai Vitamin B3, adalah nutrisi penting yang mendukung beberapa fungsi tubuh utama. Vitamin ini membantu dalam metabolisme energi dengan mengubah karbohidrat, lemak, dan protein menjadi sumber energi. Selain itu, niacin berperan dalam menjaga kesehatan kulit dengan mengurangi peradangan dan mendukung perbaikan jaringan kulit. Fungsi saraf yang optimal juga didukung oleh niacin. Sumber niacin dapat ditemukan dalam makanan seperti daging, kacang-kacangan, biji-bijian, sayuran hijau, susu, dan telur. Meskipun tersedia dalam suplemen, konsumsi niacin dalam dosis tinggi sebaiknya disesuaikan dengan anjuran dokter karena dapat menyebabkan efek samping. Kekurangan niacin dapat mengakibatkan kondisi seperti pellagra dengan gejala kulit kering, masalah pencernaan, dan gangguan sistem saraf. Oleh karena itu, penting untuk menjaga asupan makanan yang kaya niacin guna mendukung kesehatan dan keseimbangan nutrisi tubuh.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B5 (Asam Pantotenat)</h3>
//                     <p>Vitamin B5 adalah bagian penting dari koenzim yang diperlukan untuk metabolisme karbohidrat, protein, dan lemak. Ini juga berperan dalam produksi hormon steroid dan melindungi kulit serta membantu proses penyembuhan luka. Sumber B5 meliputi hati, sayuran hijau, kacang-kacangan, dan produk susu.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B6 (Piridoksin)</h3>
//                     <p>Vitamin B6 berperan dalam fungsi otak dan sistem saraf, serta dalam pembentukan sel darah merah. Sumbernya termasuk daging, ikan, kacang-kacangan, buah-buahan, dan sayuran.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B7 (Biotin)</h3>
//                     <p>Vitamin B7 diperlukan untuk metabolisme karbohidrat, lemak, dan protein dalam tubuh. Ini juga penting untuk kesehatan rambut, kulit, dan kuku. Biotin ditemukan dalam telur, kacang-kacangan, hati, dan sayuran berdaun hijau.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B9 (Asam Folat)</h3>
//                     <p>Vitamin B9 penting untuk pertumbuhan jaringan dan pembentukan sel darah merah. Ini sangat penting selama kehamilan untuk mencegah cacat tabung saraf pada janin. Sumbernya termasuk sayuran berdaun hijau, kacang-kacangan, jeruk, biji-bijian, dan produk biji-bijian yang diperkaya.</p>
//                 </li>
//                 <li>
//                     <h3>Vitamin B12 (Kobalamin)</h3>
//                     <p>Vitamin B12 diperlukan untuk pembentukan sel darah merah, fungsi saraf yang sehat, dan metabolisme energi. Ini umumnya ditemukan dalam produk hewani seperti daging, ikan, produk susu, dan telur.</p>
//                 </li>
//             </ol>'
//     ]);

//     Post::create([
//         'title' => 'Vitamin C',
//         'title_en' => 'Vitamin C',
//         'slug' => 'vitamin-c',
//         'category_id' => '4',
//         'excerpt' => 'Vitamin C adalah antioksidan yang membantu memperkuat sistem kekebalan tubuh, memperbaiki jaringan, dan membantu dalam penyerapan zat besi.',
//         'body' => '<p>Vitamin C adalah antioksidan yang membantu memperkuat sistem kekebalan tubuh, memperbaiki jaringan, dan membantu dalam penyerapan zat besi. Vitamin C sangat penting untuk pembentukan kolagen, yang penting bagi kulit, tulang, dan pembuluh darah. Sumber utama vitamin C adalah buah-buahan seperti jeruk, stroberi, paprika, tomat, dan sayuran hijau.</p>'
//     ]);

//     Post::create([
//         'title' => 'Vitamin A',
//         'title_en' => 'Vitamin A',
//         'slug' => 'vitamin-a',
//         'category_id' => '4',
//         'excerpt' => 'Vitamin A memiliki beberapa bentuk, termasuk beta-karoten yang diubah menjadi vitamin A oleh tubuh.',
//         'body' => '<p>Vitamin A memiliki beberapa bentuk, termasuk beta-karoten yang diubah menjadi vitamin A oleh tubuh. Vitamin ini penting untuk kesehatan mata, pertumbuhan sel, sistem kekebalan tubuh, dan fungsi reproduksi. Beta-karoten dapat ditemukan dalam wortel, ubi jalar, bayam, dan hati hewan. Vitamin A juga penting untuk menjaga kulit, rambut, dan fungsi organ internal.</p>'
//     ]);

    // Post::create([
    //     'title' => 'Vitamin E',
    //     'title_en' => 'Vitamin E',
    //     'slug' => 'vitamin-e',
    //     'category_id' => '4',
    //     'excerpt' => 'Vitamin E adalah antioksidan yang membantu melindungi sel dari kerusakan yang disebabkan oleh radikal bebas.',
    //     'body' => '<p>Vitamin E adalah antioksidan yang membantu melindungi sel dari kerusakan yang disebabkan oleh radikal bebas. Ini juga mendukung kesehatan kulit, mata, dan sistem kekebalan tubuh. Sumber vitamin E termasuk kacang-kacangan, biji-bijian, minyak nabati seperti minyak biji gandum, minyak zaitun, dan produk gandum utuh.</p>'
    // ]);

    // Post::create([
    //     'title' => 'Vitamin K',
    //     'title_en' => 'Vitamin K',
    //     'slug' => 'vitamin-k',
    //     'category_id' => '4',
    //     'excerpt' => 'Vitamin K memiliki peran utama dalam pembekuan darah dan juga diperlukan untuk kesehatan tulang.',
    //     'body' => '<p>Vitamin K memiliki peran utama dalam pembekuan darah dan juga diperlukan untuk kesehatan tulang. Ini membantu tubuh dalam pembentukan protein yang diperlukan untuk pembekuan darah yang sehat. Sumber vitamin K meliputi sayuran hijau (seperti bayam, brokoli), minyak sayuran, telur, dan produk susu.</p>'
    // ]);

    Post::create([
        'title' => 'Kardio',
        'title_en' => 'Cardio',
        'slug' => 'kardio',
        'category_id' => 1,
        'excerpt' => 'Latihan kardiovaskular atau kardio, yang melibatkan aktivitas fisik yang meningkatkan denyut jantung Anda, dapat memberikan sejumlah',
        'body' => '<p>Latihan kardiovaskular atau kardio, yang melibatkan aktivitas fisik yang meningkatkan denyut jantung Anda, dapat memberikan sejumlah manfaat yang signifikan bagi program penurunan berat badan atau diet Anda. Berikut adalah beberapa manfaat utama dari latihan kardio untuk diet:</p>
        <ol>
        <li>Peningkatan Metabolisme: Melakukan latihan kardio dapat meningkatkan metabolisme tubuh Anda. Ini berarti bahwa tubuh Anda akan membakar lebih banyak kalori bahkan setelah Anda selesai berolahraga, membantu Anda dalam mencapai defisit kalori yang diperlukan untuk menurunkan berat badan.</li>
        <li>Pembakaran Kalori yang Lebih Tinggi: Aktivitas kardio seperti berlari, bersepeda, atau berenang dapat membakar sejumlah besar kalori dalam satu sesi latihan, membantu menciptakan defisit kalori yang diperlukan untuk menurunkan berat badan.</li>
        <li>Penurunan Lemak Tubuh: Kardio efektif dalam membantu menurunkan lemak tubuh, terutama lemak visceral (lemak di sekitar organ dalam) yang berhubungan dengan risiko penyakit jantung dan diabetes.</li>
        <li>Meningkatkan Kesehatan Jantung: Latihan kardio secara teratur dapat meningkatkan kesehatan jantung Anda dengan memperkuat jantung dan pembuluh darah, menurunkan tekanan darah, dan meningkatkan kadar kolesterol baik (HDL) sambil menurunkan kadar kolesterol jahat (LDL).</li>
        <li>Mengurangi Stres dan Meningkatkan Kesejahteraan Mental: Kardio dapat membantu mengurangi tingkat stres dan meningkatkan suasana hati melalui pelepasan endorfin, yang dapat membantu Anda tetap termotivasi dalam perjalanan penurunan berat badan.
        </li>
        <li>Meningkatkan Kinerja Fungsional: Latihan kardio dapat meningkatkan daya tahan dan kekuatan Anda secara keseluruhan, membuat aktivitas sehari-hari terasa lebih mudah dilakukan.</li>
        <li>Meningkatkan Kualitas Tidur: Berolahraga secara teratur, termasuk latihan kardio, telah terbukti dapat membantu meningkatkan kualitas tidur Anda. Tidur yang cukup dan berkualitas dapat mendukung usaha penurunan berat badan.</li>
        </ol>
        <p>Namun, penting untuk diingat bahwa meskipun latihan kardio memiliki manfaat yang besar untuk penurunan berat badan, kombinasinya dengan pola makan yang sehat dan seimbang juga sangat penting. Tanpa mengatur pola makan, hasil dari latihan kardio mungkin tidak seefektif yang diharapkan dalam proses penurunan berat badan.</p>
        <p>Konsistensi dan variasi dalam latihan kardio juga penting agar tubuh tidak terbiasa dan tetap responsif terhadap latihan yang dilakukan. Konsultasikan dengan profesional kesehatan atau pelatih pribadi untuk mendapatkan rencana latihan yang sesuai dengan kebutuhan dan kondisi fisik Anda.</p>

        <p>Terdapat berbagai jenis latihan kardiovaskular yang dapat Anda lakukan untuk membantu dalam penurunan berat badan dan meningkatkan kesehatan jantung. Berikut beberapa contoh latihan kardio yang bisa Anda coba:</p>

        <ol>
            <li>Berlari: Berlari di luar ruangan atau di treadmill adalah salah satu latihan kardio yang efektif. Anda dapat mulai dengan kecepatan yang sesuai dan meningkatkannya seiring waktu. Contohnya, lakukan sesi berlari selama 20-30 menit dengan kecepatan yang konsisten.
                Bersepeda: Bersepeda baik di jalan raya, jalur sepeda, atau di sepeda statis di gym adalah latihan kardio yang bagus. Cobalah untuk bersepeda dengan kecepatan moderat selama 30-45 menit.</li>
            <li>Renang: Renang adalah latihan kardio total tubuh yang bagus. Berenang selama 20-30 menit bisa memberikan manfaat kesehatan dan membantu dalam penurunan berat badan.</li>
            <li>Aerobik: Kelas aerobik, Zumba, atau latihan kardio dalam ruangan lainnya adalah cara yang menyenangkan untuk melakukan kardio. Ikuti sesi aerobik selama 45-60 menit untuk membakar kalori dan meningkatkan denyut jantung.</li>
            <li>Skipping atau Lompat Tali: Aktivitas ini mudah dilakukan di rumah dan cukup efektif. Lakukan lompat tali atau skipping selama 10-15 menit untuk meningkatkan denyut jantung dan membakar kalori.</li>
            <li>Elips atau Crosstrainer: Menggunakan mesin elips atau crosstrainer di gym adalah pilihan kardio yang rendah dampak tetapi efektif. Lakukan sesi 20-30 menit dengan intensitas yang sesuai.</li>
            <li>Jalan Cepat: Jalan cepat adalah latihan kardio sederhana namun efektif. Jalanlah dengan kecepatan yang cepat selama 30-45 menit atau lebih.</li>
            <li>HIIT dengan Kardio: Gabungkan latihan kardio dengan metode High-Intensity Interval Training (HIIT). Misalnya, lari sprint interval, interval bersepeda, atau circuit kardio yang melibatkan latihan dengan intensitas tinggi diikuti oleh periode pemulihan yang lebih ringan.
                Pastikan untuk memilih latihan kardio yang sesuai dengan preferensi dan kondisi fisik Anda. Penting juga untuk secara bertahap meningkatkan intensitas atau durasi latihan seiring waktu untuk mencapai hasil yang lebih baik. Kombinasikan latihan kardio dengan pola makan sehat dan seimbang untuk hasil penurunan berat badan yang optimal.
                </li>
        </ol>'

    ]);


    Post::create([
            'title' => 'HIIT',
            'title_en' => 'Training',
            'slug' => 'hiit',
            'category_id' => 1,
            'excerpt' => 'High-Intensity Interval Training (HIIT) adalah metode latihan yang melibatkan periode waktu singkat intensitas tinggi diikuti oleh istirahat atau periode pemulihan yang lebih ringan',
            'body' => '<p>High-Intensity Interval Training (HIIT) adalah metode latihan yang melibatkan periode waktu singkat intensitas tinggi diikuti oleh istirahat atau periode pemulihan yang lebih ringan. Metode latihan ini telah terbukti memiliki sejumlah manfaat yang signifikan untuk diet dan penurunan berat badan. Berikut adalah beberapa manfaat utama HIIT untuk program diet:</p>
            <ol>
                <li>Pembakaran Kalori yang Tinggi dalam Waktu Singkat: HIIT melibatkan latihan dengan intensitas tinggi selama periode singkat, yang dapat membakar jumlah kalori yang lebih tinggi dalam waktu yang lebih singkat dibandingkan dengan latihan kardio tradisional.</li>
                <li>Meningkatkan Metabolisme: HIIT telah terbukti dapat meningkatkan tingkat metabolisme tubuh, bahkan setelah Anda selesai berlatih. Efek ini dikenal sebagai "afterburn effect" atau efek pembakaran lemak setelah latihan, yang berkontribusi pada penurunan berat badan.</li>
                <li>Peningkatan Pembakaran Lemak: Latihan HIIT dapat membantu meningkatkan oksidasi lemak, yang berarti tubuh Anda akan lebih efisien dalam membakar lemak sebagai sumber energi selama dan setelah latihan.</li>
                <li>Mempertahankan Massa Otot: Dalam beberapa kasus, HIIT dapat membantu mempertahankan atau bahkan meningkatkan massa otot Anda sambil membakar lemak. Hal ini penting karena massa otot membantu meningkatkan metabolisme basal Anda.</li>
                <li>Meningkatkan Kinerja Kardiovaskular: Latihan HIIT juga membantu meningkatkan kesehatan jantung dan sistem kardiovaskular Anda, mirip dengan latihan kardio lainnya. Ini termasuk peningkatan kapasitas aerobik dan penurunan tekanan darah.</li>
                <li>Efisiensi Waktu: Salah satu keunggulan HIIT adalah efisiensinya dalam waktu. Dengan hanya beberapa sesi per minggu, HIIT dapat memberikan manfaat yang signifikan dalam penurunan berat badan dan peningkatan kebugaran.</li>
                <li>Meningkatkan Toleransi Terhadap Glukosa: Latihan HIIT telah terbukti membantu meningkatkan toleransi terhadap glukosa dalam tubuh, yang dapat membantu dalam pengelolaan kadar gula darah dan pencegahan diabetes tipe 2.</li>
            </ol>
            <p>Penting untuk diingat bahwa HIIT adalah jenis latihan yang intensif dan tidak selalu cocok untuk setiap orang. Orang dengan kondisi kesehatan tertentu atau yang baru memulai program kebugaran sebaiknya berkonsultasi dengan profesional kesehatan sebelum memulai rutinitas latihan HIIT.</p>
            <p>Pola makan yang sehat dan seimbang tetap merupakan bagian penting dari program penurunan berat badan, dan kombinasi antara latihan HIIT dan pola makan yang tepat dapat memberikan hasil yang lebih efektif. Konsistensi, variasi, dan pengaturan intensitas yang sesuai dengan kemampuan individu juga kunci dalam mendapatkan manfaat maksimal dari HIIT untuk diet dan penurunan berat badan.
            </p>

            <p>Berikut adalah contoh latihan High-Intensity Interval Training (HIIT) yang bisa Anda coba. Latihan ini melibatkan periode waktu singkat dengan intensitas tinggi yang diikuti oleh periode pemulihan yang lebih ringan atau istirahat. Anda dapat memilih latihan kardio seperti lari, sepeda statis, skipping, burpees, lompat tali, atau gerakan lain yang dapat Anda lakukan dengan intensitas tinggi.</p>

            <p><strong>Catatan: Sebelum memulai latihan HIIT atau program latihan apa pun, penting untuk melakukan pemanasan terlebih dahulu untuk mengurangi risiko cedera. Juga, pastikan untuk berkonsultasi dengan profesional kesehatan jika Anda memiliki masalah kesehatan atau kekhawatiran sebelum memulai program latihan baru.</strong> Contoh Latihan HIIT:</p>

            <ol>
                <li>
                    Lari Sprint Interval:
                    <ul>
                        <li>Pemanasan: Berjalan atau jogging ringan selama 5-10 menit.</li>
                        <li>Interval Sprint: Lari secepat mungkin selama 30 detik.</li>
                        <li>Pemulihan: Berjalan atau berjalan santai selama 60-90 detik.</li>
                        <li>Ulangi: Lakukan interval sprint dan pemulihan ini selama 10-15 menit.</li>
                        <li>Pendinginan: Berjalan atau jogging santai selama 5-10 menit.</li>
                    </ul>
                </li>
                <li>
                    Tabata Bodyweight Circuit:
                    <ul>
                        <li>Pemanasan: Peregangan dan pemanasan tubuh selama 5-10 menit.</li>
                        <li>
                            Tabata Circuit: Setiap gerakan dilakukan selama 20 detik dengan 10 detik istirahat, ulangi 8 putaran untuk satu gerakan, kemudian pindah ke gerakan berikutnya.
            Contoh gerakan:
                            <ol>
                                <li>Squat Jump</li>
                                <li>Push-Up</li>
                                <li>Mountain Climbers</li>
                                <li>Sit-Up atau Russian Twist</li>
                            </ol>
                        </li>
                        <li>
                            Pendinginan: Peregangan tubuh selama 5-10 menit.
                        </li>
                    </ul>
                </li>

                <li>
                    Sepeda Statis HIIT:
                    <ul>
                        <li>Pemanasan: Bersepeda statis dengan kecepatan rendah selama 5-10 menit.</li>
                        <li>Interval HIIT: Bersepeda dengan intensitas tinggi selama 40 detik (peningkatan kecepatan atau resistensi).</li>
                        <li>Pemulihan: Bersepeda dengan kecepatan rendah selama 20 detik.</li>
                        <li>Ulangi: Lakukan interval HIIT dan pemulihan ini selama 10-15 menit.</li>
                        <li>Pendinginan: Bersepeda dengan kecepatan rendah selama 5-10 menit.</li>
                    </ul>
                </li>
            </ol>

            <p>Anda bisa menyesuaikan contoh-contoh di atas dengan gerakan atau aktivitas lain yang Anda sukai atau yang sesuai dengan kondisi fisik Anda. Penting untuk menjaga intensitas tinggi selama periode interval dan mengikuti periode pemulihan dengan baik untuk mendapatkan manfaat maksimal dari latihan HIIT. Selain itu, jangan lupa untuk memberikan waktu istirahat yang cukup antara sesi latihan untuk pemulihan tubuh Anda.
            </p>'

        ]);




    }
}
