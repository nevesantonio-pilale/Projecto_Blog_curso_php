<?php
    include_once("templates/header.php");

    if (isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if ($post['id'] == $postId) {

                $currentPost =  $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
            <p id="post-description"> <?= $currentPost['description'] ?> </p>

            <div id="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, explicabo. Nostrum, ea repudiandae. Pariatur, cumque nisi eos cupiditate totam repellat recusandae tempore libero architecto facere ad consequuntur, cum in magni.
                Quisquam facere maxime ratione et totam nemo sed hic, consequatur at eveniet ipsum? Molestias, commodi porro? Repudiandae harum commodi est! Commodi, rerum tempora? Ducimus commodi vel enim harum rem obcaecati.
                Veniam quisquam quas officiis assumenda vitae magni inventore dolores sequi repellat deserunt saepe iusto praesentium, et ab accusantium totam in voluptatem molestiae deleniti doloremque dolorem! Eum quas officiis mollitia magnam?
                Aliquid molestiae recusandae beatae quos pariatur sequi provident adipisci nobis, et minima reiciendis hic libero quaerat, animi, deserunt ad! Illum totam molestias aperiam repudiandae autem quo voluptatum numquam accusantium doloribus.
                Laborum, dolorem! Cupiditate voluptatem ducimus accusamus reprehenderit recusandae facilis aut porro accusantium facere, quia tenetur perspiciatis iusto non, tempore corrupti reiciendis sunt voluptatibus blanditiis placeat enim omnis? Vel, odit reprehenderit!
            </p>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, explicabo. Nostrum, ea repudiandae. Pariatur, cumque nisi eos cupiditate totam repellat recusandae tempore libero architecto facere ad consequuntur, cum in magni.
                Quisquam facere maxime ratione et totam nemo sed hic, consequatur at eveniet ipsum? Molestias, commodi porro? Repudiandae harum commodi est! Commodi, rerum tempora? Ducimus commodi vel enim harum rem obcaecati.
                Veniam quisquam quas officiis assumenda vitae magni inventore dolores sequi repellat deserunt saepe iusto praesentium, et ab accusantium totam in voluptatem molestiae deleniti doloremque dolorem! Eum quas officiis mollitia magnam?
                Aliquid molestiae recusandae beatae quos pariatur sequi provident adipisci nobis, et minima reiciendis hic libero quaerat, animi, deserunt ad! Illum totam molestias aperiam repudiandae autem quo voluptatum numquam accusantium doloribus.
                Laborum, dolorem! Cupiditate voluptatem ducimus accusamus reprehenderit recusandae facilis aut porro accusantium facere, quia tenetur perspiciatis iusto non, tempore corrupti reiciendis sunt voluptatibus blanditiis placeat enim omnis? Vel, odit reprehenderit!
            </p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>

            <ul id="tag-list">
                <?php foreach ($currentPost['tags'] as $tag): ?>

                    <li><a href="#"><?= $tag ?> </a></li>
                    
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title"> Categorias </h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category): ?>
                    <li><a href="#"><?= $category ?> </a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php
    include_once("templates/footer.php");
?>