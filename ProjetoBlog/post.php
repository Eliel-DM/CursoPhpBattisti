<?php
include_once(__DIR__ . '/data/posts.php');
include_once(__DIR__ . '/data/categories.php');
include_once(__DIR__ . '/helpers/url.php');
include_once(__DIR__ . '/templates/header.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost = null;


    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main class="post-container">
    <div class="content-container">
        <h1 class="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p1 class="post-description">
            <?= $currentPost['description'] ?>
        </p1>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="  <?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam iure ut quibusdam. Saepe, consequuntur delectus nam voluptatibus odit eum laborum, maxime repellat impedit dolorem aperiam ab, optio consequatur labore praesentium!
            Delectus non impedit, praesentium quae est sunt labore sapiente sit et iste repellendus ut dolores ipsa enim, laborum quibusdam at similique. Odit vero perspiciatis inventore provident enim vel reiciendis pariatur?
            Omnis rem ipsa necessitatibus asperiores consectetur quam officia sed nisi illo soluta delectus, cum ipsam voluptas ab maxime facilis eius nemo reprehenderit! Officiis dolore fuga dignissimos necessitatibus quidem itaque pariatur?
            Pariatur, labore, exercitationem sunt sint fuga magni quia beatae aut dolor harum eligendi, vel voluptatem natus quaerat. Fuga natus provident quidem atque consequatur, vel, ad ab earum aliquid itaque impedit!
            Suscipit, blanditiis porro. Similique rerum ipsum amet sint corrupti quo eligendi doloremque aut? Excepturi obcaecati cumque ipsum omnis quas, ab minima sit doloribus architecto eveniet molestias pariatur animi veniam neque?
        </p>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam iure ut quibusdam. Saepe, consequuntur delectus nam voluptatibus odit eum laborum, maxime repellat impedit dolorem aperiam ab, optio consequatur labore praesentium!
            Delectus non impedit, praesentium quae est sunt labore sapiente sit et iste repellendus ut dolores ipsa enim, laborum quibusdam at similique. Odit vero perspiciatis inventore provident enim vel reiciendis pariatur?
            Omnis rem ipsa necessitatibus asperiores consectetur quam officia sed nisi illo soluta delectus, cum ipsam voluptas ab maxime facilis eius nemo reprehenderit! Officiis dolore fuga dignissimos necessitatibus quidem itaque pariatur?
            Pariatur, labore, exercitationem sunt sint fuga magni quia beatae aut dolor harum eligendi, vel voluptatem natus quaerat. Fuga natus provident quidem atque consequatur, vel, ad ab earum aliquid itaque impedit!
            Suscipit, blanditiis porro. Similique rerum ipsum amet sint corrupti quo eligendi doloremque aut? Excepturi obcaecati cumque ipsum omnis quas, ab minima sit doloribus architecto eveniet molestias pariatur animi veniam neque?
        </p>
        <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam iure ut quibusdam. Saepe, consequuntur delectus nam voluptatibus odit eum laborum, maxime repellat impedit dolorem aperiam ab, optio consequatur labore praesentium!
            Delectus non impedit, praesentium quae est sunt labore sapiente sit et iste repellendus ut dolores ipsa enim, laborum quibusdam at similique. Odit vero perspiciatis inventore provident enim vel reiciendis pariatur?
            Omnis rem ipsa necessitatibus asperiores consectetur quam officia sed nisi illo soluta delectus, cum ipsam voluptas ab maxime facilis eius nemo reprehenderit! Officiis dolore fuga dignissimos necessitatibus quidem itaque pariatur?
            Pariatur, labore, exercitationem sunt sint fuga magni quia beatae aut dolor harum eligendi, vel voluptatem natus quaerat. Fuga natus provident quidem atque consequatur, vel, ad ab earum aliquid itaque impedit!
            Suscipit, blanditiis porro. Similique rerum ipsum amet sint corrupti quo eligendi doloremque aut? Excepturi obcaecati cumque ipsum omnis quas, ab minima sit doloribus architecto eveniet molestias pariatur animi veniam neque?
        </p>
    </div>
</main>
<aside id="nav-conteiner">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach ($currentPost['tags'] as $tag): ?>
            <li>
                <a href="#"><?= $tag ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li>
                <a href="#"><?= $category ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php
include_once(__DIR__ . '/templates/footer.php');
?>