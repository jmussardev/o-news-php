<?php
//menue Nav
// tableau contenant les liens et titre de la navigation
$MenuNav = [
    // Clé = le titre, l'ancre
    // Valeur = le lien
    'Plan du site' => 'plan_du_site.php',
    'Mentions légales' => 'mentions_legales.php',
    'Contact' => 'contact.php'
];

$navBis = [
    // Sous tableau avec titre et lien => $currentLinkInfos dans la template
    [
        'title' => 'Plan du site',
        'url' => 'plan_du_site.php'
    ],
    // Sous tableau avec titre et lien
    [
        'title' => 'Mentions légales',
        'url' => 'mentions_legales.php'
    ],
    // Sous tableau avec titre et lien
    [
        'title' => 'Contact',
        'url' => 'contact.php'
    ]
];




//Pour améliorer notre site, on va cebntraliser les données sur tous les articles ici
$postLists = [
    // Numéro d'articles => tableau des données de l'article
    1 => [
        'titre' => 'Lorem ipsum dolor sit amet',
        'auteur' => 'John Marchill',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'news',
        'catégorieClass' => 'green',
        'dateHtml' => 'le 5 septembre 2019',
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-john.png',
        'alt'=>'icon-john',
        'link'=>'article1.php',
    ],
   2 => [
        'titre' => 'Le pair programming pour les n00bs',
        'auteur' => 'Paul Darson',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'team',
        'catégorieClass' => 'red',
        'dateHtml' => 'le 2 Août 2019', 
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-dar.png',
        'alt'=>'icon-dar',
        'link'=>'article2.php',
   ],
   3 => [
        'titre' => 'Pourquoi j\'aime PHP',
        'auteur' => 'Bruce Ékoute',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'work',
        'catégorieClass' => 'blue',
        'dateHtml' => 'le 7 Août 2019',
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-ohz.png',
        'alt' => 'icon-ohz',
        'link'=>'article3.php',
   ],
   4 => [
        'titre' => 'La situation de scribe',
        'auteur' => 'Otis',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'news',
        'catégorieClass' => 'green',
        'dateHtml' => 'le 5 Septembre 2019',
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-tr.png',
        'alt'=>'icon-otis',
        'link'=>'article4.php',
    ],
    5 => [
        'titre' => 'Le pair programming pour les n00bs',
        'auteur' => 'Paul Darson',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'team',
        'catégorieClass' => 'red',
        'dateHtml' => 'le 2 Août 2019', 
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-dar.png',
        'alt'=>'icon-dar',
        'link'=>'article2.php',
    ],
    6 => [
        'titre' => 'Pourquoi j\'aime PHP',
        'auteur' => 'Bruce Ékoute',
        'texte'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum pariatur sequi cum repellendus. Nulla, eius animi dignissimos velit earum voluptatibus maxime sequi impedit? Laborum saepe tempora dolore voluptate quas, reprehenderit deleniti unde quae fuga suscipit nostrum veritatis et autem, fugiat facilis ad nesciunt, alias delectus. Blanditiis velit aliquam delectus. Dolorem, beatae in neque rerum itaque quidem tempora vitae maxime laboriosam voluptatem sit sed laborum eaque laudantium odio ut, ratione ad adipisci quos explicabo magni consectetur. Magni impedit maiores deserunt quidem blanditiis quam enim, possimus iste rem quis necessitatibus nemo explicabo maxime consectetur cumque dolore aut provident! Ratione voluptatem, obcaecati accusamus inventore tenetur debitis adipisci, temporibus deserunt rem repudiandae laudantium corporis sint! Similique iusto distinctio provident minima consequatur quo ad quae nihil, praesentium possimus veniam quas fugit reprehenderit. Hic enim ipsam error sint, quis similique. Debitis placeat obcaecati deleniti enim nihil velit exercitationem, porro facilis sit animi nesciunt consequuntur possimus molestias ad qui saepe nobis dolores iste dolorem ex. Beatae eveniet maxime magni soluta quisquam, vero temporibus nisi et nulla asperiores debitis quia. Rem ratione saepe vitae distinctio voluptates soluta error cumque amet? Beatae optio quae expedita quisquam eligendi incidunt odit vero ad illum autem possimus maiores nam neque delectus, accusantium tenetur exercitationem enim at corrupti consequatur, cumque reiciendis placeat. Placeat quaerat aliquam quidem nemo facere inventore nesciunt ea deserunt quia libero, odit perspiciatis rerum corporis voluptates minus vitae, magnam nulla.</br></br> Expedita in eligendi laudantium magni beatae doloribus, eaque culpa iure dolorem, esse totam molestias quibusdam repellat adipisci quae corporis exercitationem voluptates sint fugit? Nihil maxime qui minus est eum! Provident adipisci distinctio deleniti ducimus consequatur quasi possimus nisi illo error explicabo aliquam dicta harum reprehenderit, omnis quidem et, laudantium magni? Repudiandae quam eos repellendus quisquam voluptates saepe porro voluptatibus ullam doloribus obcaecati quidem laboriosam corrupti veritatis at accusamus distinctio sunt nisi laudantium voluptatum molestias, libero pariatur fugiat autem! Assumenda deserunt voluptas quod accusamus sed dignissimos eveniet aliquid, eum voluptatibus non nobis consequuntur id ullam quis corrupti blanditiis natus voluptatum illum consequatur voluptate. Tempora, animi. Neque quod illum laboriosam et suscipit quaerat fuga, ab minus, molestias id eaque aspernatur mollitia optio voluptates porro possimus dicta? Fugiat alias consequatur excepturi, provident dignissimos tenetur! Laboriosam quia officiis dolore asperiores incidunt, vitae laborum quas quisquam optio neque omnis ex nam iste dolorem dolores et nisi, sed quod rerum? Nostrum dolor ullam, qui unde aperiam placeat enim neque? Eius praesentium animi maxime magnam sit quasi.',
        'catégorie' => 'work',
        'catégorieClass' => 'blue',
        'dateHtml' => 'le 7 Août 2019',
        'date' => date('l jS \of F Y '),
        'image_auteur' => '../images/icon-ohz.png',
        'alt' => 'icon-ohz',
        'link'=>'article3.php',
    ],
];
