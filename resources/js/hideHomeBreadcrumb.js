let breadcrumbItems = document.querySelectorAll('.breadcrumb-item');
let breadcrumb = document.querySelector('.breadcrumb');
if (breadcrumbItems.length == 1) {
    breadcrumbItems[0].style.opacity = 0.8;
    breadcrumbItems[0].style.backgroundColor = '#97979766';
    breadcrumb.style.opacity = 0.01;
} else {
    breadcrumbItems[0].style.opacity = 1;
    breadcrumbItems[0].style.backgroundColor = '';
    breadcrumb.style.opacity = 11;
}