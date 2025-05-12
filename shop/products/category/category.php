<?php
require_once './../../backend/script.php';
$products = getAllProducts();

$pageTitle = "Collection";
$css = './../../assets/css/index.css';
require_once './../../include/header.php';

?>
<style>
    .collection_search_container{
    max-width: 70%;
    margin: auto;
    display: flex;
    justify-content:center;
    align-items:center;
    padding: 40px 0px;
    gap:20px;
}
#searchBox{
    padding: 15px;
    width: 70%;
    font-size: 15px;
    border-radius:5px;
    cursor:pointer;
    border: 1px solid #000;
}
.search_btn{
    width: 25%;
    padding: 15px;
    background-color: transparent;
    color:#000;
    outline:0px;
    border:0px;
    border-radius:5px;
    cursor:pointer;
    font-size:20px;
    font-weight:600;
    text-transform:uppercase;
    border: 1px solid #000
}
@media(max-width:768px){
    .collection_search_container{
        max-width: 90%;
        gap:10px;
    }
    .search_btn, #searchBox{
        font-size:15px;
        padding:10px;
    }
}
    </style>
    <section>
        <div class="category-banner">
            <div class="category-banner-content">
                <h1 class="banner-heading">Shop Now</h1>
            </div>
        </div>
    </section>
    <section class="catehory_search_wrapper">
        <div class="collection_search_container">
                        <input type="text" placeholder="Search products..." id="searchBox" placeholder="Search...">
                        <input type="submit" value='Search' class='search_btn'>
        </div>
    </section>
    <div class='category_wrapper'>
    <div class="product_grid" id="product_grid">

        <?php foreach ($products as $row): ?>
            
            <div class="product_card">
         <div class='product_card_image_wrapper'>
            <a href="#">
         <img class='product_card_image' src="./../../assets/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
         </a>
        </div>
        <div class='product_card_content'>
                <a href="#"><h2 class="product_card_title"><?php echo htmlspecialchars($row['title']); ?></h2></a>
                <p class="rating_star">

    <?php 
    $rating = htmlspecialchars($row['reviews']); 
    if ($rating == 1) {
        include './../../assets/icons/star.svg';
    }elseif( $rating == 2){
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
    }elseif( $rating == 3){
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
    }elseif( $rating == 4){
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
    } elseif( $rating == 5){
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
        include './../../assets/icons/star.svg';
    }elseif ( $rating == 0){
        include './../../assets/icons/star_norating.svg';
        include './../../assets/icons/star_norating.svg';
        include './../../assets/icons/star_norating.svg';
        include './../../assets/icons/ststar_noratingar.svg';
        include './../../assets/icons/star_norating.svg';
    }
    ?>
    
</p>

                <p class="product_price">$<?php echo number_format($row['sale_price'], 2); ?></p>
                <form class="product_card_form">
                <a class="product_card_button">Add to cart</a>
</form>
        </div>
            </div>
            
        <?php endforeach; ?>
    </div>
        </div>
<script>
document.querySelector(".search_btn").addEventListener('click', function () {
    const query = document.getElementById('searchBox').value;

    if (query.length === 0) {
        document.getElementById('product_grid').innerHTML = '';
        return;
    }

    fetch('search.php?q=' + encodeURIComponent(query))
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not OK');
            }
            return response.json();
        })
        .then(data => {
            let html = '';
            if (Array.isArray(data) && data.length > 0) {
                data.forEach(item => {
                    let stars = '';
                    for (let i = 0; i < 5; i++) {
                        stars += `<img src="../../assets/icons/${i < item.reviews ? 'star' : 'star_norating'}.svg" alt="star" />`;
                    }

                    html += `
                    <div class="product_card">
                        <div class='product_card_image_wrapper'>
                            <a href="#">
                                <img class='product_card_image' src="../../assets/${item.image}" alt="${item.title}">
                            </a>
                        </div>
                        <div class='product_card_content'>
                            <a href="#"><h2 class="product_card_title">${item.title}</h2></a>
                            <p class="rating_star">${stars}</p>
                            <p class="product_price">$${parseFloat(item.sale_price).toFixed(2)}</p>
                            <form class="product_card_form">
                                <a class="product_card_button">Add to cart</a>
                            </form>
                        </div>
                    </div>`;
                });
            } else {
                html = '<p>No results found.</p>';
            }
            document.getElementById('product_grid').innerHTML = html;
        })
        .catch(error => {
            console.error('Fetch error:', error);
            document.getElementById('product_grid').innerHTML = '<p>Error loading results.</p>';
        });
});



</script>

<?php
require_once './../../include/footer.php';

?>
