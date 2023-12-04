<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div id="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
      </div>
      <p id="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At aliquid soluta ratione a, eos dolor placeat repellendus neque incidunt architecto earum inventore iusto tempore rem quia necessitatibus magnam nisi. Molestias?
      Aperiam magnam perferendis distinctio libero eum nesciunt ex, voluptatibus aliquam esse nulla inventore quam fugit neque suscipit. Sed facilis deleniti molestias esse, sit cumque eum accusamus autem, dolore repellendus nobis.
      Vero libero asperiores fugiat rerum corrupti saepe debitis dolor quas praesentium, odio dignissimos atque suscipit eligendi ut cumque fugit provident rem, tempore accusantium esse quibusdam! Numquam provident illum dolorum qui?
      Dolores vitae dolore atque corrupti tempora consequuntur, odit rerum vel, aperiam architecto blanditiis ratione nesciunt neque porro quod praesentium labore qui, placeat similique facere ullam incidunt eos dolor. Doloremque, adipisci.
      Incidunt tempore qui vitae odio voluptas laudantium mollitia nostrum, saepe quidem illum deleniti similique, veritatis, voluptate sapiente dolor dolorum velit non. Exercitationem illo aut nulla! Ipsum facere dolorum voluptatum voluptatem.</p>
      <p id="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At aliquid soluta ratione a, eos dolor placeat repellendus neque incidunt architecto earum inventore iusto tempore rem quia necessitatibus magnam nisi. Molestias?
      Aperiam magnam perferendis distinctio libero eum nesciunt ex, voluptatibus aliquam esse nulla inventore quam fugit neque suscipit. Sed facilis deleniti molestias esse, sit cumque eum accusamus autem, dolore repellendus nobis.
      Vero libero asperiores fugiat rerum corrupti saepe debitis dolor quas praesentium, odio dignissimos atque suscipit eligendi ut cumque fugit provident rem, tempore accusantium esse quibusdam! Numquam provident illum dolorum qui?
      Dolores vitae dolore atque corrupti tempora consequuntur, odit rerum vel, aperiam architecto blanditiis ratione nesciunt neque porro quod praesentium labore qui, placeat similique facere ullam incidunt eos dolor. Doloremque, adipisci.
      Incidunt tempore qui vitae odio voluptas laudantium mollitia nostrum, saepe quidem illum deleniti similique, veritatis, voluptate sapiente dolor dolorum velit non. Exercitationem illo aut nulla! Ipsum facere dolorum voluptatum voluptatem.</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost["tags"] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>

<?php
  include_once("templates/footer.php");
?>
</body>
</html>