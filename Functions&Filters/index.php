<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
      /* body{
        display: grid;
      } */
      </style>
  </head>
  <body>
  <div style="display: grid; grid-template-columns: 50px 1fr; gap: 0.5rem">
    
    <h1> Recommended Books </h1>
</div>
    <?php
    $books = [
      [
      'name' => 'Do Androids Dream of electric Sheep',
      'author' => 'Philip K. Dick',
      'releaseYear' => 1968,
      'purchaseUrl' => 'https://www.youtube.com/watch?v=fw5ObX8P6as&t=14791s'
      ],
      [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => 2021,
      'purchaseUrl' => 'https://www.youtube.com/watch?v=fw5ObX8P6as&t=14791s'
      ],
      [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => 2011,
      'purchaseUrl' => 'https://www.youtube.com/watch?v=fw5ObX8P6as&t=14791s'
      ]
    ];

     function filterByAuthor() {
      return 'gibberish';
     }

    ?> 
    <ul>
      <?php foreach($books as $book) : ?>
        <?php if ($book['author'] === 'Andy Weir') : ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
      <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)-By <?= $book['author']?>
      </a>
      </li>
      <?php endif; ?>
      <?php endforeach; ?>
       </ul>

       <p>
        <?= filterByAuthor() ?>
  </body>
</html>
