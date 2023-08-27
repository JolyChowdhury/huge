// Slick Slider for header-top text area
$('.ht-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  prevArrow: '.ht-prev-arrow',
  nextArrow: '.ht-next-arrow',
});
// header-top text slider area end

// Language Dropdown Functionality
$('#language-btn').on('click', function (e){
  // Toggle language dropdown on button click
  $('.language-dropdown').toggle();
  e.stopPropagation();
});

$('.language-dropdown').click(function (e){
  e.stopPropagation();
});

$(document).click(function(){
  // Hide language dropdown when clicking outside
  $('.language-dropdown').hide();
});

$('.lang-item').click(function (e){
  // Update selected language when a language option is clicked
  let currentElem = $(this);
  let itemVal = currentElem.text();
  $('#selectedLang').text(itemVal);
});
// Language dropdown area end

$(document).on('click', function(e) {
  if (!$(e.target).closest('.shop-nav').length) {
    $('.shop-dropdown').removeClass('active');
  }
});
$('.shop-nav').on('click', function (e){
  $('.shop-dropdown').toggleClass('active');
});
$('.shop-dropdown').on('click', function(e) {
  e.stopPropagation();
});

$(document).on('click', function(e) {
  if (!$(e.target).closest('.vendor-nav').length) {
    $('.vendor-dropdown').removeClass('active');
  }
});
$('.vendor-nav').on('click', function (e){
  $('.vendor-dropdown').toggleClass('active');
});
$('.vendor-dropdown').on('click', function(e) {
  e.stopPropagation();
});

// navbar megamenu area end 

// Slick Slider for the banner area
$('.banner-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 3000,
  prevArrow: '.banner-left-arrow',
  nextArrow: '.banner-right-arrow',
});
// banner slider area end

// Shop Collection Image Change area
$('.pink').on('click', function (){
  // Change image source and update product details text when pink is clicked
  $('.scl-card-img').attr('src', './assets/images/product/product1.webp');
  $(this).css('border-color', 'blue');
  $('.maroon').css('border-color', '#fff');
  $('.gray').css('border-color', '#fff');
  $('.scli-pp').text('DA 26,300.00 - DA 31,500.00 ');
});

$('.maroon').on('click', function (){
  // Change image source and update product details text when maroon is clicked
  $('.scl-card-img').attr('src', './assets/images/product/product2.webp');
  $(this).css('border-color', 'blue');
  $('.pink').css('border-color', '#fff');
  $('.gray').css('border-color', '#fff');
  $('.scli-pp').text('DA 31,500.00');
});

$('.gray').on('click', function (){
  // Change image source and update product details text when gray is clicked
  $('.scl-card-img').attr('src', './assets/images/product/product3.webp');
  $(this).css('border-color', 'blue');
  $('.maroon').css('border-color', '#fff');
  $('.pink').css('border-color', '#fff');
  $('.scli-pp').text('DA 26,300.00');
});
// shop collection image change area end

// Slick Slider for the product wrapper area
$('.product-wrapper').slick({
  slidesToShow: 5.5,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 3000,
  arrows: false,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
  ]
});
// product wrapper slider area end

// Highlight All Product
$('#all-product').on('click', function() {
  // Show all product and hide other categories
  $(this).addClass('active');
  $('#Electronics').removeClass('active');
  $('#Home-decor').removeClass('active');
  $('.highlight-all-product').css('display', 'block');
  $('.highlight-eletronic-product').css('display', 'none');
  $('.highlight-home-decor').css('display', 'none');
});

$('#Electronics').on('click', function() {
  // Show electronics product and hide other categories
  $(this).addClass('active');
  $('#all-product').removeClass('active');
  $('#Home-decor').removeClass('active');
  $('.highlight-all-product').css('display', 'none');
  $('.highlight-eletronic-product').css('display', 'block');
  $('.highlight-home-decor').css('display', 'none');
});

$('#Home-decor').on('click', function() {
  // Show home decor product and hide other categories
  $(this).addClass('active');
  $('#Electronics').removeClass('active');
  $('#all-product').removeClass('active');
  $('.highlight-all-product').css('display', 'none');
  $('.highlight-eletronic-product').css('display', 'none');
  $('.highlight-home-decor').css('display', 'block');
});
// weekly highlight area end

// Slick Slider for the collection left area
$('.collection-left-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 3000,
  prevArrow: '.collect-left-arrow',
  nextArrow: '.collect-right-arrow',
});
// collection-left slider area end

// Feature Product Area
$('.sp-left-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.spl-slider-nav',
});
$('.spl-slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 4,
  asNavFor: '.sp-left-slider',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
  infinite: false, 
});
// feature product slider area end

let splNavItem = $('.spl-nav-item-img');
splNavItem.on('click', function(){
  // Highlight clicked navigation item
  splNavItem.removeClass('active');
  $(this).addClass('active');
});

let count = $('#Quantity').text();

$('#increment').on('click', function(){
  // Increment product quantity and update display
  count++;
  $('#Quantity').text(count);
});

$('#decrement').on('click', function(){
  // Decrement product quantity and update display
  count--;
  $('#Quantity').text(count);
  // if(count = 1 ){
  //   this.stopPropagation();
  // }
});

$('.size-btn').on('click', function(){
  // Change active size button and update product size display
  $('.size-btn').removeClass('active');
  $(this).addClass('active');

  let currElement = $(this);
  let elemetValue = currElement.text();
  $('.product-size').text(elemetValue);
});
// feature product interaction area end

$(function(){
  // Initialize countdown timer
  $('#countdown').countdown({
    year: 2024,
    month: 10,
    day: 1,
    hour: 20,
    minute: 50,
    second: 40,
  });
});
// countdown area end

$('.testimonial-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 3000,
  prevArrow: '.test-left-arrow',
  nextArrow: '.test-right-arrow',
});
// testimonial slider area end

$('.recent-item-inner').slick({
  slidesToScroll: 1,
  slidesToShow: 5.5,
  autoplay: false,
  autoplaySpeed: 3000,
  prevArrow: '.recent-left-arrow',
  nextArrow: '.recent-right-arrow',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
  ]
});
// recent-view slider area end

// ========================= Index page area end ==============================

$('.color-btn').on('click', function (){
  // Toggle fashion color options
  $('.fashion-color').slideToggle();
  $(this).toggleClass('active');
});

const sizeCheckbox = document.querySelectorAll('.fs-list-item input[type="checkbox"]');
sizeCheckbox.forEach(checkbox => {
  checkbox.addEventListener('click', () => {
    // Uncheck other sizeCheckbox when one is clicked
    sizeCheckbox.forEach(otherCheckbox => {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});
// size checkbox

const brandCheckbox = document.querySelectorAll('.fbl-item input[type="checkbox"]');
brandCheckbox.forEach(checkbox => {
  checkbox.addEventListener('click', () => {
    // Uncheck other brandCheckbox when one is clicked
    brandCheckbox.forEach(otherCheckbox => {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});
// brand checkbox

// checkbox checked ara end

$('.feature-size-btn').on('click', function () {
  $('.feature-size-list').slideToggle();
  $(this).toggleClass('active');
});

$('.feat-item-prize-title').on('click', function () {
  $('.feat-price-area').slideToggle();
  $(this).toggleClass('active');
});

$('.feat-brand-title').on('click', function () {
  $('.feat-brand-list').slideToggle();
  $(this).toggleClass('active');
});

// feature product size area end

// ---------------------fashion page area end -----------------------

$('.faqs-item-title').on('click', function(){
  // Toggle the visibility of the faqs-item-body when the title is clicked
  $(this).next('.faqs-item-body').slideToggle();
  // Set the display property of the faqs-item-body to 'block'
  $(this).next('.faqs-item-body').css('display', 'block');
  // Add the 'show' class to the clicked title
  $(this).toggleClass('show');
});

// ---------------------faqs page area end -----------------------


$('.article-slider-inner').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 3000,
  prevArrow: '.test-left-arrow',
  nextArrow: '.test-right-arrow',
});

// ======================= article page area end===========

// responsive searchbar area

$('.silderbar-logo').on('click', function () {
  $('.sidebar').toggleClass('active');
});

$('.sidebar-cross').on('click', function () {
  $('.sidebar').removeClass('active');
});

$('.res-search-icon').on('click', function () {
  $('.res-searchbar').toggleClass('active');
});


$('.res-shop-item').on('click', function () {
  $('.shop-res-dropdown').toggleClass('active');
});

$('.res-vendor-item').on('click', function () {
  $('.vendor-res-dropdown').toggleClass('active');
});