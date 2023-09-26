<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'leaflet-head.php';
    ?>
    <meta
      name="description"
      content="Embark on a thrilling adventure to the
    Åland Islands, a Swedish-speaking territory under Finnish jurisdiction.
    Starting from Turku, navigate the Archipelago Sea's skerries, exploring from
    south to north and indulging in bushcraft camping. Experience the
    Djupviksgrottan cave, Jomala Church, and breathtaking landscapes as you
    hitchhike and hike across the islands."
    />
    <meta
      name="keywords"
      content="Åland Islands,
      Finnish Jurisdiction,
      Swedish-speaking,
      Turku, Finland,
      Vaasa,
      Archipelago Sea,
      Skerries,
      Mariehamn,
      Lake Långsjön,
      Djupviksgrottan Cave,
      Jomala Church,
      Hiking,
      Hitchhiking,
      Bushcraft Camp,
      Scandinavian Culture,
      Prästo Island,
      Vårdö"
    />
    <title>Åland 🇦🇽 | Slavic Media</title>
  </head>

  <body id="aland" class="blog-item">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
    <article id="article-container"></article>

<script>
  fetch('http://adamsochorec.local/blog/aland')
    .then(response => response.text())
    .then(html => {
      // Create a temporary DOM element to parse the HTML
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');

      // Extract the specific element by its ID
      const specificElement = doc.getElementById('blog-item');

      if (specificElement) {
        // Append the specific element to your container
        document.getElementById('article-container').appendChild(specificElement);
      } else {
        console.error('Element not found in the fetched content.');
      }
    })
    .catch(error => console.error(error));
</script>



    
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
    <script type="text/javascript" src="/assets/aland.js"></script>
  </body>
</html>
