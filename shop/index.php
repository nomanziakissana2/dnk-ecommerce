<?php
require_once 'include/header.php';
$pageTitle = "Home";
require_once 'backend/script.php';
$products = getAllProducts();
?>
<style>
    .video-contain{
    position: relative;
    width: 100%;
    height:100%;
}
.text-container-banner{
    position: absolute;
    left:10%;
    top:50%;
    max-width:50%;
    transform:translateY(-50%);
}
.banner-heading{
line-height:100%;
}
.banner-button{
    color:#fff;
    font-size:20px;
    border: 1px solid #fff;
    padding: 10px;
    margin-top:20px;
    display:inline-block;
}
.services img{
    max-width:50px;
}
.cards-tittle{
    margin-top:10px;
    font-weight:600;
}
.elementor-image{
    padding: 35px;
}
.featured-products h1{
    text-align:center;
    margin-top:30px;
    text-transform:uppercase;
}
@media(max-width:600px){
    .banner-heading{
        font-size:20px;
        
    }
    .banner-button{
        font-size:14px;
        padding: 5px;
    }
}
    </style>

    <div class="video-contain">
        <img class="elementor-video" src="assets/images/home-new-bg-free-img.jpg" controlslist="nodownload"></video>
    <div class="text-container-banner">
        <h1 class="banner-heading1">
        Raining Offers For Hot Summer!
</h1>
<a class="banner-button" href="products/category/category.php">Shop Now</a>
    </div>
    </div>

    <div class="cards-wrapper">

        <div class="services">
            <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/globe-free-img.png" alt="" srcset="">
             <h3 class="cards-tittle">Worldwide Shipping</h3>
        </div>
        <div class="services">
        <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/quality-free-img.png" alt="" srcset="">      
        <h3 class="cards-tittle">Best Quality</h3>
        </div>
        <div class="services">
        <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/tag-free-img.png" alt="" srcset="">     
        <h3 class="cards-tittle">Best Offers</h3>
        </div>
        <div class="services">
        <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/lock-free-img.png" alt="" srcset="">     
        <h3 class="cards-tittle">Secure Payments</h3>
        </div>
    </div>

    <div class="elementor-container">
        <div class="text-wrapper">
        <div class="elementor-heading-tittle">
            <h2>BLUE DENIM SHORTS</h2>
        </div>
        
        <div class="elementor-para">
                <p class="line-height">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>			
        </div>

        <div class="elementor-button">
            <a href="/product/healthcare-affirmation-cards/">
            <a class="elementor-button-text">Buy Now</a>
            </span>
            </a>
        </div>
    </div>
        <div class="elementor-image">
            <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/women-fashion-free-img.jpg" class="attachment-medium_large size-medium_large wp-image-2488" alt="">
        </div>
    </div>
    <div class="featured-products">
        <h1>Featured Products</h1>
    <div class='category_wrapper'>
    <div class="product_grid" id="product_grid">

        <?php foreach ($products as $row): ?>
            
            <div class="product_card">
         <div class='product_card_image_wrapper'>
            <a href="#">
         <img class='product_card_image' src="assets/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
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
    </div>
    <!-- <div class="elementor-video">
        <video class="elementor-video" src="https://mynursinglaboratory.com/wp-content/uploads/2024/08/Medical-affirmation-cards.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
    </div> -->

    <div class="elementor-container-second">
      <div class="elementor-card">
        <img width="500" height="600" src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-w-jeans2-600x600.jpg">
      </div>
       
      <div class="elementor-style">
      <div class="side-heading">
        <h2>BASIC GRAY JEANS</h2>
     </div>
      
      <div class="elementor-steps">
        <ul class="ul-steps">
            <li class="li">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><br>
            <li class="li">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><br>
            <li class="li">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><br>
            <li class="li">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><br>

        </ul>
        </div>

      <div class="second-button">
        <a class="elementor-button elementor-button-link elementor-size-sm" href="/product/healthcare-affirmation-cards/">
            View Details
        </a>
      </div>

    </div>
</div>

    <div class="elementor-container-third">
        
        <div class="display-left-heading">
        <div class="image-heading">
            <h2 class="elementor-heading-title elementor-size-default">WHO WE ARE</h2>
        </div>

        <div class="image-para">
            <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
        </div>

        <div class="image-button">
            <a href="/about-us-new/">
               <span class="elementor-button-text">Read More</span>
            </a>
        </div>
        </div>
        <div class="image-manager">
            <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/slide-image-free-img.jpg" width="300" height="300" >
        </div>
        
    </div>

   
    <?php
require_once 'include/footer.php';

?>