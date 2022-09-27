if (document.querySelector('.databaseItem-image-section')) {
    let databaseItemImage = document.querySelector('.databaseItem-image');
    let databaseItems = document.querySelectorAll('.databaseItem-images-wrapper');


    //geting the path of the first thumbnail image in array of images under the main image of a lot to incert it as main image path. 
    let firstImage = document.querySelector('.databaseItem-images');
    let path = firstImage.getAttribute('src');
    let pathStart = path.slice(0, 23);
    let newPath = path.split('/');
    let newPath_4 = newPath[4];
    let newPath_5 = newPath[5];
    let pathEnd = '/' + newPath_4 + '/' + newPath_5;

    path = pathStart + 'main_images' + pathEnd;
    databaseItemImage.setAttribute('src', path);


    //getting picked thumbnail image path to set src attribute for main image of the lot.
    databaseItems.forEach((element) => {
        element.addEventListener('click', event => {

            item = event.target;

            let path = item.getAttribute('src');
            let pathStart = path.slice(0, 23);
            let newPath = path.split('/');
            let newPath_4 = newPath[4];
            let newPath_5 = newPath[5];
            let pathEnd = '/' + newPath_4 + '/' + newPath_5;

            path = pathStart + 'main_images' + pathEnd;
            databaseItemImage.setAttribute('src', path);
        })
    });
};