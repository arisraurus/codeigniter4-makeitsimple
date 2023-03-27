<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Noto+Sans+JP:wght@400;700;900&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto+Slab:wght@200;400;600&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Noto Sans JP', sans-serif;
        }

        p {
            font-family: 'Roboto Mono',
                monospace;
        }

        div {
            font-family: 'Roboto Slab',
                serif;
        }
    </style>
</head>

<body>

    <div class="p-5 mb-4 bg-light rounded-3">
        <h1>Sticky Top Navbar</h1>
        <p class="lead">The static-top navbar scrolls with the page until it reaches the top, then stays there.</p>
    </div>
    <?php
    $hasil = kembalikan_nilai();

    echo $hasil['nilai1'];
    echo '<hr>';
    echo $hasil['nilai2'];
    function kembalikan_nilai()
    {
        $data = [
            'nilai1' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio illum reprehenderit illo sapiente. Nam quaerat eius perspiciatis, tempora suscipit nesciunt, atque praesentium nostrum sit neque ratione dolores impedit quos nihil!',
            'nilai2' => 'Ini adalah nilai kedua'
        ];
        return $data;
    }

    ?>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam exercitationem nobis, iure doloremque veniam dicta, eaque quia corrupti eveniet, ut voluptates! Quod maiores, totam, commodi doloremque eaque eveniet dicta aspernatur sint labore cumque consectetur! Quidem magni aperiam nesciunt. Libero suscipit laborum animi necessitatibus iusto officiis. Magnam harum dolor itaque doloremque nesciunt nulla consequatur obcaecati iusto repudiandae eum pariatur ullam consectetur sed expedita delectus, eveniet voluptatem sint voluptatum molestiae assumenda consequuntur dolorem quas quibusdam. Porro debitis autem id alias reiciendis quisquam laboriosam quidem quaerat mollitia praesentium quo labore amet eum illum, similique hic dolorum dignissimos. Assumenda, sed soluta incidunt quam sunt consequuntur reiciendis repudiandae modi obcaecati autem praesentium! Minima repudiandae in mollitia aliquam rerum dignissimos autem repellendus, nulla repellat ut obcaecati quis harum iure odit voluptatibus quae architecto aspernatur voluptatum totam, accusamus deleniti enim delectus. Suscipit aliquid nesciunt non possimus ea voluptas veritatis accusamus. Voluptate nesciunt beatae repellat vero eveniet soluta, accusantium inventore ex excepturi non. Iure quisquam omnis quo ea magnam neque veritatis nesciunt facilis ad architecto, quidem explicabo similique repellat corporis perspiciatis fugit, harum placeat dicta temporibus natus nisi repellendus repudiandae. Culpa minus et magni eaque omnis aliquid rerum debitis fugit. Quas sapiente explicabo, doloribus reiciendis quo non tempora natus aperiam voluptates laborum facere a, molestiae sunt maiores! Ratione aut eaque ipsa debitis similique magnam quia perferendis ea voluptates laudantium, sunt numquam ducimus veniam, ex placeat. Maiores veritatis velit voluptatibus rerum assumenda veniam obcaecati, dignissimos quasi tempora saepe repellat sequi, quo ex, fugiat iure amet quisquam deserunt voluptate iusto perspiciatis nam sit. Beatae deserunt temporibus id omnis facere iusto quibusdam quas placeat harum excepturi, enim molestiae! Voluptas obcaecati illo ipsam facere aliquam odit, tempora, deleniti consequuntur, fuga voluptatem corporis amet consequatur ex voluptatibus illum cupiditate quidem vero nemo molestias rem esse nobis nam perspiciatis. Excepturi, eos, ex aspernatur doloribus rem nesciunt quia consequuntur ipsam nam aut optio reprehenderit incidunt odit tenetur. Sunt, dignissimos fugit accusamus numquam corporis ratione quae enim architecto distinctio sapiente voluptas facere. Libero, vero excepturi ab beatae suscipit ullam! Sed similique doloribus delectus molestias quisquam earum voluptas sint esse, deleniti voluptate ducimus. Nemo itaque sint voluptates deserunt possimus. Incidunt architecto excepturi nostrum earum magnam quis optio vel et, labore obcaecati eius esse. Accusantium cupiditate velit ipsa nemo commodi odit. Voluptatibus, illum voluptate. Provident odio quas natus rerum velit recusandae nemo blanditiis doloribus quibusdam dignissimos expedita eos quis similique eaque ipsum quasi, consectetur quam voluptate iusto enim deserunt? Nam optio dignissimos exercitationem error, dolores illum architecto ex praesentium quae quaerat iure corporis? Possimus, dolorem? Cupiditate, enim qui, placeat beatae laborum recusandae nobis numquam quae, quod unde reiciendis ex aperiam dignissimos cum exercitationem ad. Magni ipsam maxime iusto incidunt autem, dicta, labore suscipit nihil ea repudiandae explicabo accusantium eaque itaque nobis harum sunt a nam quaerat sapiente, provident officiis illo delectus quod consequuntur. Aut nemo fugit harum labore nesciunt architecto aliquid molestiae, iusto exercitationem, odio voluptatum rem id repellendus a? Culpa perferendis dolorem architecto. Rerum ullam laboriosam ad necessitatibus molestias sequi nihil atque non similique, dolor nobis illum dolore eos odio assumenda fugiat facere minus fuga corporis voluptate numquam aliquam repellat quasi. Dolores, voluptates. Officia et neque distinctio odio nihil soluta quam, minus quibusdam sed iusto rerum eligendi assumenda dolorum corporis est animi explicabo odit veritatis esse. Quod et laboriosam dolorem est fuga facere doloremque mollitia, unde, cumque molestiae corrupti dicta, maxime ullam dolorum eveniet saepe! Vitae qui nobis facilis quibusdam non ipsum officia placeat tenetur laborum laboriosam omnis libero nostrum cupiditate aliquid laudantium accusamus unde rem obcaecati ipsa, eligendi soluta eaque neque magni. Vel expedita provident pariatur odio quo exercitationem aliquam, cum, deserunt a blanditiis dolore dolor iste perferendis, illo incidunt quibusdam dolores? Quibusdam porro harum aspernatur ducimus possimus eius consequatur quo optio quidem, illo corporis maiores voluptatibus nesciunt praesentium officia soluta qui inventore ipsam fugiat laborum vero at rerum asperiores accusantium. Et nam perferendis consequatur voluptatum enim, iste optio distinctio atque molestias impedit. Molestias debitis quod, soluta alias error illum quisquam quibusdam consectetur praesentium laborum placeat et at distinctio unde in porro ducimus modi! Labore blanditiis asperiores hic esse et. Illum molestias, aspernatur explicabo aliquid facere incidunt quas ipsa quos voluptatem. Modi voluptate sed, possimus a quos delectus cum ducimus molestias ut, dolor optio eligendi tenetur, aliquid quisquam officiis fugit rerum ad? Sit saepe expedita vitae fugiat unde ratione laborum quam. Facere velit quam dolorem aspernatur asperiores perferendis qui pariatur, totam fugit ipsa culpa! Neque repudiandae exercitationem porro maxime laudantium minima fugiat est ducimus a rem aliquam impedit architecto in cupiditate nemo vitae error id quas ipsam amet, libero voluptas quibusdam deleniti voluptates! Magnam, iste quod hic illo officiis, fuga natus assumenda tempora ex similique fugit deleniti aperiam quia ab exercitationem in vitae praesentium minima vero quibusdam corrupti? Dolor est neque eos corporis dolorem nulla accusamus, a fugit repellat, voluptatem blanditiis ad minima reiciendis molestias porro temporibus. Magni adipisci quia accusamus, veniam nesciunt, aliquid, earum velit saepe porro cum architecto! Ea maiores cupiditate velit cumque accusantium neque est enim ex veniam, saepe earum porro quo corrupti iste recusandae soluta libero quae facilis! Veritatis ipsum incidunt numquam quam error ratione labore similique? Excepturi eos odit, quod cumque reiciendis ab, unde quos dolore, architecto doloribus dolorem! Earum blanditiis error vel, ipsum vero reiciendis, similique aliquid, impedit numquam ex porro dolorem. Adipisci culpa consequuntur dolor minima modi ea quis delectus, temporibus fugit sunt fugiat repudiandae. Similique magnam fugit dolores voluptas ullam atque et. Praesentium quod quia rerum consequuntur ipsum aspernatur dolorem quae, iure dicta reiciendis optio? Autem enim officiis voluptatem fugit porro optio necessitatibus quos, nesciunt commodi eveniet officia, similique culpa excepturi veritatis libero rerum ea deleniti iste nihil. Dolore nulla quod sint culpa repudiandae iusto numquam perspiciatis ab, voluptatibus eveniet similique, repellendus cumque magnam, totam quas consequatur distinctio enim ipsam? Et, maiores quibusdam eveniet quisquam, sapiente, quod rerum cum quam tempora cumque repudiandae blanditiis a tempore accusamus doloremque nobis aliquam provident! Nesciunt impedit veniam facilis, maxime laborum quisquam odio, aut assumenda dolorem autem velit eveniet qui dicta iusto recusandae! Nostrum, exercitationem. Ratione necessitatibus, velit dolore illo natus reprehenderit.</p>
</body>

</html>